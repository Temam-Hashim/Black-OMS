
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
            <select name="user_role" id="user_role" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Receptionst">Receptionst</option>
                <option value="Finance">Finance</option>
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
        $user_role   = mysqli_real_escape_string($connect,$_GET['user_role']);

        // check if user exist
        $res = GetDataById('users', 'email', $email);
        $count = $res->num_rows;
        if($count==0){
          AddUser($username,$email,$password,$user_role);
        }else{
          echo "<script>alert('User already exists with this email')</script>";
        }
   
}
?>
<?php require_once 'partials/footer.php'; ?>