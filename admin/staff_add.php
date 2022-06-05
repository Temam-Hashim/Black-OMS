<?php require_once "partials/header.php";?>
<!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Department
      <small>Users</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add Department</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border text-center">
          <h3 class="box-title text-primary">Add New Staff</h3>
        </div>

        <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];
           }
           ?>


        <div class="row">
          <div class="box-body">
            <!-- <div class="col-xs-1"></div> -->
            <form action="" method="POST" enctype="multipart/form-data" id="form">
              <!-- left form -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="title"> Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo InputValue('name'); ?>">
                </div>
                <div class="form-group">
                  <label for="title"> Profile Pic</label>
                  <input type="file" class="form-control" name="profile" value="<?php echo InputValue('profile'); ?>">
                </div>
                <div class="form-group">
                  <label for="title"> Mobile</label>
                  <input type="text" class="form-control" name="mobile" value="<?php echo InputValue('mobile'); ?>">
                </div>
                <div class="form-group">
                  <label for="title"> Email</label>
                  <input type="text" class="form-control" name="email" value="<?php echo InputValue('email'); ?>">
                </div>
                <div class="form-group">
                  <label for="title">Gender</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="title"> Date of Birth</label>
                  <input type="date" class="form-control" name="dob" value="<?php echo InputValue('dob'); ?>">
                </div>

                <div class="form-group">
                  <label for="title"> Bank Name</label>
                  <input type="text" class="form-control" name="bank_name"
                    value="<?php echo InputValue('bank_name'); ?>">
                </div>

                <div class="form-group">
                  <label for="title"> Acount No</label>
                  <input type="text" class="form-control" name="acount_no"
                    value="<?php echo InputValue('acount_no'); ?>">
                </div>
                <div class="form-group">
                  <label for="title">Status</label>
                  <select name="status" id="status" class="form-control">
                    <option value="Unapproved">Unapproved</option>
                    <option value="Approved">Approved</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="title"> Qualification</label>
                  <input type="text" class="form-control" name="qualification"
                    value="<?php echo InputValue('qualificatio'); ?>">
                </div>
              </div>
              <!-- right form  -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="title">Martial Status</label>
                  <select name="martial_status" id="martial_status" class="form-control">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="title">Department</label>
                  <select name="dept" id="dept" class="form-control">
                    <option value="Single">Select</option>
                    <?php
                                            $result = GetDepartment();
                                            while($row = $result->fetch_assoc()){
                                        ?>
                    <option value="<?php echo $row['dpt_name'] ?>"><?php echo $row['dpt_name'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="title"> Position</label>
                  <input type="text" class="form-control" name="position" value="<?php echo InputValue('position'); ?>">
                </div>


                <div class="form-group">
                  <label for="title"> Salary</label>
                  <input type="text" class="form-control" name="salary" value="<?php echo InputValue('salary'); ?>">
                </div>


                <div class="form-group">
                  <label for="title"> Contract</label>
                  <select name="contract" id="contract" class="form-control">
                    <option value="Permanent">Permanent</option>
                    <option value="Temporary">Temporary</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="title"> Date of Join</label>
                  <input type="date" class="form-control" name="join_date"
                    value="<?php echo InputValue('join_date'); ?>">
                </div>

                <!-- address division -->


                <div class="form-group">
                  <label for="title"> Address</label>
                  <input type="text" class="form-control" name="city" placeholder="City"
                    value="<?php echo InputValue('city'); ?>"><br>
                  <input type="text" class="form-control" name="state" placeholder="State"
                    value="<?php echo InputValue('state'); ?>"><br>
                  <input type="text" class="form-control" name="country" placeholder="Countyr"
                    value="<?php echo InputValue('country'); ?>"><br>
                  <input type="text" class="form-control" name="pin" placeholder="Pin Code"
                    value="<?php echo InputValue('pin'); ?>"><br>
                </div>

                <!-- button  -->
                <div class=" box-footer text-right">
                  <input class="btn btn-primary btn-block btn-lg" type="submit" name="add_staff" value="Submit">
                </div>
            </form>
          </div>
        </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
     if(isset($_POST['add_staff'])) {
        // mysqli_real_escape_string($connect,
        $name = mysqli_real_escape_string($connect,$_POST['name']);

        $pic = $_FILES['profile']['name'];
        $pic_tmp = $_FILES['profile']['tmp_name'];

        move_uploaded_file($pic_tmp,"images/$pic");

        $mobile = mysqli_real_escape_string($connect,$_POST['mobile']);
        $email = mysqli_real_escape_string($connect,$_POST['email']);
        $gender = mysqli_real_escape_string($connect,$_POST['gender']);
        $dob = mysqli_real_escape_string($connect,$_POST['dob']);

        // address
        $city = mysqli_real_escape_string($connect,$_POST['city']);
        $state = mysqli_real_escape_string($connect,$_POST['state']);
        $country = mysqli_real_escape_string($connect,$_POST['country']);
        $pin = mysqli_real_escape_string($connect,$_POST['pin']);
        $address =$city.", ".$state.", ".$country.", ".$pin;

        $martial_status = mysqli_real_escape_string($connect,$_POST['martial_status']);
        $join_date = mysqli_real_escape_string($connect,$_POST['join_date']);
        $dept = mysqli_real_escape_string($connect,$_POST['dept']);
        $salary = mysqli_real_escape_string($connect,$_POST['salary']);
        $contract = mysqli_real_escape_string($connect,$_POST['contract']);
        $position = mysqli_real_escape_string($connect,$_POST['position']);
        $bank_name = mysqli_real_escape_string($connect,$_POST['bank_name']);
        $acount_no = mysqli_real_escape_string($connect,$_POST['acount_no']);
        $status = mysqli_real_escape_string($connect,$_POST['status']);
        $qualification = mysqli_real_escape_string($connect,$_POST['qualification']);


        // check if staff exist
        $res = GetDataById('staff', 'st_email', $email);
        $count = $res->num_rows;

        if($count==0){
            AddStaff($name,$pic,$mobile,$email,$gender,$dob,$address,$martial_status,$join_date,$dept,$salary,$contract,$position,$bank_name,$acount_no,$status,$qualification);
        }else{
          echo "<script>alert('This Staff Already Exists')</script>";
        }

}

?>
<?php require_once 'partials/footer.php'; ?>