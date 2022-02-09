
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Staff
        <small>Staff</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<script>return window.history.go(-1)</script>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Staff</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

           <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Update Staff</h3>
            </div>

           <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];
           }
           ?>


            <div class="row">
              <div class="box-body">
                  <!-- <div class="col-xs-1"></div> -->
                  <?php
                  if(isset($_GET['edit_id'])){
                      $edit_id = $_GET['edit_id'];
                      $result = GetDataById('staff','st_id',$edit_id);
                      $row = $result->fetch_array();

                  ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <!-- left form -->
                            <div class="col-md-6">
                                <input type="hidden" name="st_id" value="<?php echo $row['st_id'] ?>">
                                    <div class="form-group">
                                        <label for="title"> Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $row['st_name'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-6">
                                            <label for="title"> Profile Pic</label>
                                            <input type="file" class="form-control" name="profile" >
                                        </div>
                                          <div class="col-md-2">
                                              <img class="img-responsive img-circle" src="../images/<?php echo $row['st_pic'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title"> Mobile</label>
                                        <input type="text" class="form-control" name="mobile" name="name" value="<?php echo $row['st_mobile'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="title"> Email</label>
                                        <input type="text" class="form-control" name="email" name="name" value="<?php echo $row['st_email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Gender</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title"> Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" value="<?php echo $row['st_dob'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="title"> Bank Name</label>
                                        <input type="text" class="form-control" name="bank_name" value="<?php echo $row['bank_name'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="title"> Qualification </label>
                                        <input type="text" class="form-control" name="qualification" value="<?php echo $row['qualification'] ?>">
                                    </div>
                                </div>
                            <!-- right form  -->
                                <div class="col-md-6">

                                <div class="form-group">
                                        <label for="title"> Acount No</label>
                                        <input type="text" class="form-control" name="acount_no" value="<?php echo $row['acount_no'] ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="title">Martial Status</label>
                                        <select name="martial_status" id="martial_status" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="title"> Position</label>
                                        <input type="text" class="form-control" name="position" value="<?php echo $row['position'] ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="title"> Salary</label>
                                        <input type="text" class="form-control" name="salary" value="<?php echo $row['salary'] ?>">
                                    </div>


                                    <div class="form-group">
                                        <label for="title"> Contract</label>
                                        <select name="contract" id="contract" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Temporary">Temporary</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="title"> Date of Join</label>
                                        <input type="date" class="form-control" name="join_date" value="<?php echo $row['date_of_joining'] ?>" required >
                                    </div>

                                    <div class="form-group col-md-11" >
                                        <label for="title">Status</label>
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Unapproved">Unapproved</option>
                                            <option value="Approved">Approved</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Department</label>
                                        <select name="dept" id="dept" class="form-control" required>
                                            <option value="Single">Select</option>
                                            <?php
                                                $result = GetDepartment();
                                                while($row = $result->fetch_assoc()){
                                                ?>
                                                  <option value="<?php echo $row['dpt_name'] ?>"><?php echo $row['dpt_name'] ?></option>
                                                <?php } ?>
                                            ?>   
                                        </select>
                                    </div>

                                </div>


                                    <!-- address division -->

                                <div class="col-md-11">
                                        <div class="form-group">
                                            <label for="title"> Address</label>
                                            <textarea id="editor1" name="address" rows="10" cols="10" class="form-control">
                                                <?php echo $row['address']; ?>
                                            </textarea>
                                    </div>

                                    <!-- button  -->
                                <div class=" box-footer text-center">
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" name="update_staff" value="Update" >
                                </div>
                            </div>

                        </form>
                        <?php } ?>
           </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php
     if(isset($_POST['update_staff'])) {
        // mysqli_real_escape_string($connect,
        $id = mysqli_real_escape_string($connect,$_POST['st_id']);
        $name = mysqli_real_escape_string($connect,$_POST['name']);

        $pic = $_FILES['profile']['name'];
        $pic_tmp = $_FILES['profile']['tmp_name'];

        move_uploaded_file($pic_tmp,"../images/$pic");

        // if no image selected use original one
        if(empty($pic) || $pic=="") {
          $res = GetDataById('staff', 'st_id', $id);
          $row = $res->fetch_array();
          $pic = $row['st_pic'];
        }
        

        $mobile = mysqli_real_escape_string($connect,$_POST['mobile']);
        $email = mysqli_real_escape_string($connect,$_POST['email']);
        $gender = mysqli_real_escape_string($connect,$_POST['gender']);
        $dob = mysqli_real_escape_string($connect,$_POST['dob']);
        $qualification = mysqli_real_escape_string($connect,$_POST['qualification']);

        // address

        $address = mysqli_real_escape_string($connect,$_POST['address']);

        $martial_status = mysqli_real_escape_string($connect,$_POST['martial_status']);
        $join_date = mysqli_real_escape_string($connect,$_POST['join_date']);
        $dept = mysqli_real_escape_string($connect,$_POST['dept']);
        $salary = mysqli_real_escape_string($connect,$_POST['salary']);
        $contract = mysqli_real_escape_string($connect,$_POST['contract']);
        $position = mysqli_real_escape_string($connect,$_POST['position']);
        $bank_name = mysqli_real_escape_string($connect,$_POST['bank_name']);
        $acount_no = mysqli_real_escape_string($connect,$_POST['acount_no']);
        $status = mysqli_real_escape_string($connect,$_POST['status']);

        UpdateStaff($id,$name,$pic,$mobile,$email,$gender,$dob,$address,$martial_status,$join_date,$dept,$salary,$contract,$position,$bank_name,$acount_no,$status,$qualification);

}

?>
  <?php require_once 'partials/footer.php'; ?>