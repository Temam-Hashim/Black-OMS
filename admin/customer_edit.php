
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Update Customer
        <small>Update Customer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if(isset($_GET['message'])){
        echo $_GET['message'];
      }
      if(isset($_GET['edit_id'])){
        $edit_id = $_GET['edit_id'];

        $res = GetDataById('registration', 'c_id', $edit_id);
        $row = $res->fetch_array();
      }
      ?>

      

        <form action="" method="post" enctype="multipart/form-data">

        <input type="hidden" name="c_id" id="c_id" value="<?php echo $row['c_id'];?>">

          <div class="form-group">
              <label for="title">Full Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo $row['c_name'] ?>" required>
          </div>


          <div class="form-group">
              <label for="post_content">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $row['c_email'] ?>" required>
          </div>

          <div class="form-group">
              <label for="post_content">Mobile No</label>
              <input type="text" class="form-control" name="mobile" value="<?php echo $row['c_mobile'] ?>" required>
          </div>

          <div class="form-group">
              <label for="post_content">Gender</label>
              <select name="gender" id="gender" class="form-control" required>
                <option value="<?php echo $row['gender'] ?>"><?php echo $row['gender'] ?></option>
                <?php
                if($row['gender']=='male'){
                  echo '<option value="female">female</option>';
                }else{
                  echo '<option value="male">male</option>';
                }
                
                ?>
              </select>
          </div>

          <div class="form-group">
              <label for="post_content">Age</label>
              <input type="text" class="form-control" name="age" value="<?php echo $row['age']; ?>" required>
          </div>

          <div class="form-group">
              <label for="post_content">Address</label>
              
              <textarea name="address" id="address" class="form-control" rows="3" ><?php echo $row ['address'] ?></textarea>
              
          </div>

            <div class="form-group">
                <label for="post_content">What is your Exprience Level?</label>
                <select name="exp_level"  class="form-control">
               <option value="<?php echo $row['exprience_level']?>"><?php echo $row['exprience_level']?></option>';
                <?php 
                if($row['exprience_level']=='startup'){
                    echo ' <option value="existing">Existing</option>';
                    echo '<option value="special">Special</option>';
                }
                else if($row['exprience_level']=='existing'){
                  echo ' <option value="startup">Start Up</option>';
                  echo '<option value="special">Special</option>';
                }else{
                  echo ' <option value="startup">Start Up</option>';
                  echo '<option value="existing">Existing</option>';
                } 
                ?>
                 
                </select>
            </div>

          <div class="hideme  form-group ">
                <label for="post_content">How many years of Exprience</label>
                <input class="form-control" type="number" name="exp_year" value="<?php echo $row['exprience_year'];?>">
          </div>

          <div class="form-group text-center">
          <input class="btn btn-primary btn-lg btn-block" type="submit" name="update_customer" value="Update Customer">
          </div>


          </form>

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php


     if(isset($_POST['update_customer'])) {

        $id = $_POST['c_id'];
        $name   = mysqli_real_escape_string($connect,$_POST['name']);
        $email    = mysqli_real_escape_string($connect,$_POST['email']);
        $mobile   = mysqli_real_escape_string($connect,$_POST['mobile']);
        $gender    = mysqli_real_escape_string($connect,$_POST['gender']);
        $age    =     mysqli_real_escape_string($connect,$_POST['age']);
        $exp_level   = mysqli_real_escape_string($connect,$_POST['exp_level']);
        $exp_year = mysqli_real_escape_string($connect,$_POST['exp_year']);
        $address = mysqli_real_escape_string($connect,$_POST['address']);

        UpdateCustomer($id,$name,$email,$mobile,$gender,$age,$exp_level, $exp_year,$address);  


}

?>

<script>
    $('select').change(function(){
    if($(this).val()==="existing" || $(this).val()==="special")
        $('.hideme').show();
        else
            $('.hideme').hide();
    }).change();

</script>

  <?php require_once 'partials/footer.php'; ?>