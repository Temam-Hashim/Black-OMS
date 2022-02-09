
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>

<style>
  #card-display{
    border:2px 5px 3px 1px;
    border-radius:20px;
    margin:15px;
    padding:15px;
  }

  .img-card{
    width:100px;
    height:100px;
  }
  .Mybtn{
    margin-left:30px;
    margin-right:20px;
    margin-top:20px;
  }
</style>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>View Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <?php
     $user_email = $_SESSION['userEmail'];
     $res = GetDataById('users','email',$user_email);
     $row = $res->fetch_array();
    
    ?>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-4">
  <div class="card text-center bg-gray" id="card-display">
        <img class="card-img-top img-resposive img-circle img-card" src="../images/blank.png">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['username']; ?></h5>
          <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $row['username']; ?></li>
          <li class="list-group-item"><?php echo $row['email']; ?></li>
          <li class="list-group-item"><?php echo $row['role']; ?></li>
        </ul>
      <div class="card-body text-center">
          <a href="<script>return window.history.go(-1)</script>" class="btn btn-sm btn-primary Mybtn">Home</a>
          <a href="profile.php" class="btn btn-sm btn-info Mybtn">Profile</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">

     <div class="box" style="margin-top:15px;">
        <div class="box-header text-center">
          <h3 class="box-title text-info"><b>User Profile</b></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <form method="POST" action="">
            <input type="hidden" name="u_id" value="<?php echo $row['id'] ?>">
              <table  class="table table-bordered table-striped">
                <!-- first row -->
                <thead>
                <tr>
                  <th>User Name</th>
                  <td><input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"></td>
                </tr>
                <tr>
                   <th>User Email</th>
                  <td><input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>"></td>
                </tr>
                <tr>
                  <th>User Role</th>
                  <td><input type="text" class="form-control" name="role" value="<?php echo $row['role']; ?>"></td>
                </tr>
                <tr>
                  <th>User Password</th>
                  <td><input type="password" class="form-control" name="password" value=""></td>
                </tr>
                <tr>
                  <td colspan=2 class='text-center'><input type="submit" class="btn btn-primary btn-block btn-lg" name="update_profile" value="Update Profile"></td>
                </tr>
            </table>
                    
          </form>
      </div>
    </div>

  </div>
  <div class="col-md-1"></div>
</div>


    <!-- Main content -->
<section class="content">

  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 

if(isset($_POST['update_profile'])) {

  // mysqli_real_escape_string($connect,
  $u_id        = mysqli_real_escape_string($connect,$_POST['u_id']);
  $username    = mysqli_real_escape_string($connect,$_POST['username']);
  $email       = mysqli_real_escape_string($connect,$_POST['email']);

  $password    = mysqli_real_escape_string($connect,$_POST['password']);
  if(empty($password)){
    $password_hash = $row['password'];
  }else{
    $password_hash = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));
  }
  $user_role   = mysqli_real_escape_string($connect,$_POST['role']);
   // send login detail to user via email
   $subject = "<h2>Your Black Financial Solution Login Credential Has been Updated.</h2>";

   $body = "<h3>Dear $username,</3>";
   $body.= "<p>Welcome to Black Financial Solution! We are super happy to have in our Company.</p>";
   $body.= "<p>Please find your login credential of our Office Management system.<br><hr></p>";
   $body.= "<p>User Name: &npsp&nbsp <b class='text-primary'>$username</b> <hr></p>";
   $body.= "<p>Email Address: &npsp&nbsp <b class='text-primary'>$email</b> <hr></p>";
   $body.= "<p>Password: &npsp&nbsp <b class='text-primary'>$password</b> <hr></p>";
   $body.= "<p>Your Role: &npsp&nbsp <b class='text-primary'>$user_role</b> <hr></p>";
   $body.= "<p>You can use either your username or your email in username field to login to our platform.<hr><hr><br></p>";
   $body.= "<div class='text-info'><b>NOTE:</b> Please never ever share this credential to any one, even if he/she is some one you trust. All the data is sensetive and can not be recovered once deleted. this detail is only for your own usage as staff member as per your responsiblity.</div>";
   $body.= "<div class='text-danger'><b>Discliminary:</b><br><small>This is system generated email, do not replay to this email, contact the admin if you have any problem.</small></div>";

  UpdateUser($u_id,$username,$email, $password_hash,$user_role);
  PHP_MAILER($email,'ourgroupemail2018@gmail.com',$subject,$body);

}

  ?>
  <?php require_once 'partials/footer.php'; ?>