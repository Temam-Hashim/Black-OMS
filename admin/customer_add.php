
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
        <li class="active">Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if(isset($_GET['message'])){
        echo $_GET['message'];
      }
      ?>


    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title">Full Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo InputValue('name'); ?>" required>
        </div>


        <div class="form-group">
            <label for="post_content">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo InputValue('email'); ?>" required>
        </div>

        <div class="form-group">
            <label for="post_content">Mobile No</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo InputValue('mobile'); ?>" required>
        </div>

        <div class="form-group">
            <label for="post_content">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
              <option value="">Select</option>
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
        </div>

        <div class="form-group">
            <label for="post_content">Age</label>
            <input type="text" class="form-control" name="age" value="<?php echo InputValue('age'); ?>" required>
        </div>

        <div class="form-group">
            <label for="post_content">Address</label>
            <textarea name="address" id="address" class="form-control" rows="3" required="required" required></textarea>
        </div>
        
          <div class="form-group">
              <label for="post_content">What is your Exprience Level?</label>
              <select name="exp_level" id="expSelector"  class="expSelector form-control">
                <option value="startup">Start Up</option>
                <option value="existing">Existing</option>
                <option value="special">Special</option>
              </select>
          </div>

        <div class="hidyear form-group ">
              <label for="post_content">How many years of Exprience</label>
              <input class="form-control" type="text" name="exp_year">
        </div>

          <div class="hidspecial form-group">
              <label for="post_content">What is your Speciality</label>
              <select name="exp_special"  class="form-control">
                <option value="Disapora">Diaspora</option>
                <option value="Deliquence(NPL)">Deliquence(NPL)</option>
              </select>
          </div>

      <div class="form-group text-center">
         <input class="btn btn-primary btn-lg btn-block" type="submit" name="add_customer" value="Register Customer">
     </div>


</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php


     if(isset($_POST['add_customer'])) {

        
        $name   = mysqli_real_escape_string($connect,$_POST['name']);
        $email    = mysqli_real_escape_string($connect,$_POST['email']);
        $mobile   = mysqli_real_escape_string($connect,$_POST['mobile']);
        $gender    = mysqli_real_escape_string($connect,$_POST['gender']);
        $age    =     mysqli_real_escape_string($connect,$_POST['age']);
        $exp_level   = mysqli_real_escape_string($connect,$_POST['exp_level']);

        
        if($exp_level == 'special'){
            $exp_year = mysqli_real_escape_string($connect,$_POST['exp_special']);
        }else{
          $exp_year = mysqli_real_escape_string($connect,$_POST['exp_year']);
        }

        //$exp_special = mysqli_real_escape_string($connect,$_POST['exp_special']);
        $address = mysqli_real_escape_string($connect,$_POST['address']);


        $res = GetDataById('registration', 'c_mobile',$mobile);
        $count = $res->num_rows;
        if($count==0){
             AddNewCustomer($name,$email,$mobile,$gender,$age,$exp_level, $exp_year,$address);  
 
        }else{
          echo "<script>alert('User with this $mobile already exist!')</script>";
        }

}

?>

<script>
    $('#expSelector').change(function(){
    if($(this).val()==="existing")
        $('.hidyear').show();
        else
            $('.hidyear').hide();
    }).change();

    $('.expSelector').change(function(){
    if($(this).val()==="special")
        $('.hidspecial').show();
        else
            $('.hidspecial').hide();
    }).change();

</script>

  <?php require_once 'partials/footer.php'; ?>