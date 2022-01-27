
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Customer
        <small>Customer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


    <form action="add_user.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title">Full Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>


        <div class="form-group">
            <label for="post_content">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="post_content">Mobile No</label>
            <input type="text" class="form-control" name="mobile">
        </div>

        <div class="form-group">
            <label for="post_content">Gender</label>
            <select name="gender" id="gender" class="form-control">
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
        </div>

        <div class="form-group">
              <label for="post_content">Do You Have Exprience?</label>
              <select name="type"  class="form-control">
                <option value="no">No</option>
                <option value="yes">Yes</option>
              </select>
          </div>

        <div class="hideme  form-group ">
            <label for="post_content">How many years of Exprience</label>

              <input class="form-control" type="number" name="exp_year">
        </div>



      <div class="form-group text-center">
         <input class="btn btn-primary btn-lg btn-block" type="submit" name="add_user" value="Register Customer">
     </div>


</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php


    //  if(isset($_POST['add_user'])) {

    //     // mysqli_real_escape_string($connect,
    //     $username    = $_POST['username'];
    //     $password    = $_POST['password'];
    //     $user_role   = $_POST['user_role'];



    //     // $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));

    //     $sql = "INSERT INTO `users`(`username`, `password`, `role`) VALUES($username,$password,$user_role)";

    //     $create_user_query = $connect->query($sql);

    //     if($create_user_query){
    //         echo "<script>alert('user added')</script>";
    //         header("Location:view_users.php");
    //     }else{
    //         echo "<script>alert('not added')</script>";
    //     }

// }

?>

<script>
    $('select').change(function(){
    if($(this).val()==="yes")
        $('.hideme').show();
        else
            $('.hideme').hide();
    }).change();

</script>

  <?php require_once 'partials/footer.php'; ?>