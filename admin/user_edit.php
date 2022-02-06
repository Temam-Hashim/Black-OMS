
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit User
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border text-center">
              <h2 class="box-title">Update User</h2>
        </div>

    <?php
        if(isset($_GET['message'])){
          echo $_GET['message'];

      }

      if(isset($_GET['edit_id'])){
        $u_id = $_GET['edit_id'];
        $re = GetDataById('users','id', $u_id);
        $row = $re->fetch_array();
      ?>

        <div class="row">
            <div class="col-xs-1"></div>
              <div class="box-body col-xs-10">
                <form action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="u_id" value="<?php echo $u_id; ?>">
                    <div class="form-group">
                        <label for="title">User Name</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>">
                    </div>

                    <div class="form-group">
                        <label for="title">User Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>">
                    </div>

                    <div class="form-group">
                        <label for="post_content">Password</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label for="post_content">User Role</label>
                        <select name="user_role" id="user_role" class="form-control" required>
                          <option value="<?php echo $row['role']; ?>"><?php echo $row['role']; ?></option>
                          <?php 
                            $res1 = GetRole();
                            while($row1=$res1->fetch_assoc()){
                              $role_name = $row1['role_name'];

                             echo "<option value='$role_name'>$role_name</option>";
                            }
                          ?>
                        </select>
                    </div>
                      <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="update_user" value="Update  User">
                    </div>
              </form>

            </div>
          <div class="col-xs-1"></div>
        </div>
      <?php } ?>
  </section>
 
</div>

<?php


if(isset($_POST['update_user'])) {

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
   $user_role   = mysqli_real_escape_string($connect,$_POST['user_role']);
    // send login detail to user via email
    $subject = "Black Financial Solution has Updated your Login Credential.";

    $body = "<h3>Dear $username,</h3>";
    $body.= "<p>Welcome to Black Financial Solution! We are super happy to have you in our Company.</p>";
    $body.= "<p>Please find your login credential of our Office Management system.<br><hr></p>";
    $body.= "<p>User Name:  <b style='color:green'>$username</b> <hr></p>";
    $body.= "<p>Email Address: <b style='color:green'>$email</b> <hr></p>";
    $body.= "<p>Password: <b style='color:green'>$password</b> <hr></p>";
    $body.= "<p>Your Role:  <b style='color:green'>$user_role</b> <hr></p>";
    $body.= "<p>You can use either your username or your email in username field to login to our platform.<hr><hr><br></p>";
    $body.= "<div style='color:blue'><b>NOTE:</b> Please never ever share this credential to any one, even if some one you trust. All the data is sensetive and can not be recovered once deleted. this detail is only for your own usage as staff member as per your responsiblity.</div><br><hr>";
    $body.= "<div style='color:red'><b>Discliminary:</b><br><small>This is system generated email, do not replay to this email, contact the admin if you have any problem.</small></div>";

   UpdateUser($u_id,$username,$email, $password_hash,$user_role);
   PHP_MAILER($email,'ourgroupemail2018@gmail.com',$subject,$body);

}
?>
<?php require_once 'partials/footer.php'; ?>