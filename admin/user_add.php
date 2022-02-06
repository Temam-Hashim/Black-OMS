
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add User
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_GET['message'])){
          echo $_GET['message'];
      }
      
      ?>

<div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Add New User</h3>
            </div>


    <form action="" method="GET" enctype="multipart/form-data">
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="form-group">
            <label for="title">User Name</label>
              <select name="user_id" id="user_id" class="form-control" onchange="this.form.submit();">
                <option value="">Select User</option>
                  <?php
                  $re = GetStaff();
                  while($row = $re->fetch_assoc()){
                  ?>
                <option value="<?php echo $row['st_id'];?>"><?php echo $row['st_name']; ?></option>
                <?php } ?>
             </select>
        </div>
            <?php if(isset($_GET['user_id'])){
              $re2 = GetDataById('staff','st_id',$_GET['user_id']);
              $row2 = $re2->fetch_array();
            ?>
        <div class="form-group">
            <label for="title">User Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row2['st_email'];?>">
            <input type="hidden" class="form-control" name="username" value="<?php echo $row2['st_name'];?>">
        </div>

        <?php } ?>


        <div class="form-group">
            <label for="post_content">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="post_content">User Role</label>
            <select name="user_role" id="user_role" class="form-control" required>
                <option value="Admin">Select Role</option>
                <?php 
                  $res = GetRole();
                  while($row=$res->fetch_assoc()){
                    $role_name = $row['role_name'];
                   echo "<option value='$role_name'>$role_name</option>";
                  }
                ?>
            </select>
        </div>

      <div class="form-group">
         <input class="btn btn-primary" type="submit" name="add_user" value="Add  User">
     </div>
  </div>
  </div>
  <div class="col-md-1"></div>
</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

     if(isset($_GET['add_user'])) {
        $username    = mysqli_real_escape_string($connect,$_GET['username']);
        $email       = mysqli_real_escape_string($connect,$_GET['email']);
        $password    = mysqli_real_escape_string($connect,$_GET['password']);
        $password_hash = password_hash($password,PASSWORD_BCRYPT,array('cost'=>10) );
        $user_role   = mysqli_real_escape_string($connect,$_GET['user_role']);

        // send login detail to user via email
        $subject = "Login Credential from Black Financial Solution.";

        $body = "<h3>Dear $username,</h3>";
        $body.= "<p>Welcome to Black Financial Solution! We are super happy to have you in our Company.</p>";
        $body.= "<p>Please find your login credential of our Office Management system.<br><hr></p>";
        $body.= "<p>User Name:  <b color='green'>$username</b> <hr></p>";
        $body.= "<p>Email Address: <b color='green'>$email</b> <hr></p>";
        $body.= "<p>Password: <b color='green'>$password</b> <hr></p>";
        $body.= "<p>Your Role:  <b color='green'>$user_role</b> <hr></p>";
        $body.= "<p>You can use either your username or your email in username field to login to our platform.<hr><hr><br></p>";
        $body.= "<div color='blue'><b>NOTE:</b> Please never ever share this credential to any one, even if some one you trust. All the data is sensetive and can not be recovered once deleted. this detail is only for your own usage as staff member as per your responsiblity.</div><br><hr>";
        $body.= "<div color='red'><b>Discliminary:</b><br><small>This is system generated email, do not replay to this email, contact the admin if you have any problem.</small></div>";




        // check if user exist
        $res = GetDataById('users', 'email', $email);
        $count = $res->num_rows;
        if($count==0){
          AddUser($username,$email,$password_hash,$user_role);
          // send mail
          PHP_MAILER($email,'ourgroupemail2018@gmail.com',$subject,$body);
        }else{
          echo "<script>alert('User already exists with this email')</script>";
        }
   
}
?>
<?php require_once 'partials/footer.php'; ?>