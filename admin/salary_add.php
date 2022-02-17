
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Salary
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Salary</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title text-primary">Add New Salary</h3>
            </div>

           <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];
           }
           ?>


              <div class="row">
                  <div class="col-xs-1"></div>

                      <div class="box-body col-xs-10">
                          <form action="">
                                <div class="form-group">
                                    <Select class="form-control" name="dept" id="dept"  onchange="this.form.submit();">
                                      <option value="">Select Department</option>
                                      <?php 
                                       $res = GetDepartment();
                                       while($row = $res->fetch_assoc()){?>
                                          <option value="<?php echo $row['dpt_name']?>"><?php echo $row['dpt_name']?></option>
                                      <?php } ?>
                                    </Select>
                                </div>
                        </form>
                        <?php
                        if(isset($_GET['dept'])){
                          $res2 = GetDataById('staff','dept',$_GET['dept']);
                        ?>
                         <form action="">
                            <div class="form-group">
                            <Select class="form-control" name="staff" id="staff" onchange="this.form.submit();">
                              <option value="">Select Staff member</option>
                              <?php 
                              while($row = $res2->fetch_assoc()){?>
                                  <option value="<?php echo $row['st_id']?>"><?php echo $row['st_name']?></option>
                              <?php } ?>
                            </Select>
                          </div>
                      </form >
                      <?php } ?>

                      <?php
                        if(isset($_GET['staff'])){
                          $res3 = GetDataById('staff','st_id',$_GET['staff']);
                          $row = $res3->fetch_array();
                      ?>
                      <div class="box-body table-responsive">
                        <form action="" method="POST">
                         <input type="hidden" name="st_name" value=<?php echo $row['st_name'];?>>
                          <input type="hidden" name="st_email" value=<?php echo $row['st_email'];?>>
                          <input type="hidden" name="st_pic" value=<?php echo $row['st_pic'];?>>
                          <input type="hidden" name="st_dept" value=<?php echo $row['dept'];?>>
                          <input type="hidden" name="st_mobile" value=<?php echo $row['st_mobile'];?>>
                          <input type="hidden" name="st_address" value=<?php echo $row['address'];?>>
                          
                            <table id="" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Staff_Name</th>
                                <th>Basic_Salary</th>
                                <th>Allowance</th>
                                <th>No_of_Days</th>
                                <th>tax</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>  
                                <td><?php echo $row['st_name']; ?></td>
                                <td><input type="text" class="form-control" name="basic_salary"></td>
                                <td><input type="text" class="form-control" name="allowance"></td>
                                <td><input type="text" class="form-control" name="total_date"></td>
                                <td>
                                    
                                  <select name="tax" id="tax" class="form-control">
                                    <option value="0">0</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                  </select>
                                </td>
                                <td><input type="submit" class="btn btn-primary" name="add_salary" value="Submit"></td>
                              </tr>
                              </tbody>
                            </table>
                          </form>
                        </div>
                    <?php } ?>

                      </div>
                <div class="col-xs-1"></div>
            </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
     if(isset($_POST['add_salary'])) {
        $st_name = mysqli_real_escape_string($connect,$_POST['st_name']);
        $st_email = mysqli_real_escape_string($connect,$_POST['st_email']);
        $st_dept = mysqli_real_escape_string($connect,$_POST['st_dept']);
        $st_pic = mysqli_real_escape_string($connect,$_POST['st_pic']);
        $basic = mysqli_real_escape_string($connect,$_POST['basic_salary']);
        $allowance = mysqli_real_escape_string($connect,$_POST['allowance']);
        $st_mobile = mysqli_real_escape_string($connect,$_POST['st_mobile']);
        $st_address = mysqli_real_escape_string($connect,$_POST['st_address']);
        $tax = mysqli_real_escape_string($connect,$_POST['tax']);
        $total_date = mysqli_real_escape_string($connect,$_POST['total_date']);
     
      
      // if($basic<=600){
      //   $tax = 0;
      // }else if($basic>600 && $basic<=1650){
      //   $tax = 10;
      // }
      // else if($basic>1650 && $basic<=3200){
      //   $tax = 15;
      // }
      // else if($basic>3200 && $basic<=5250){
      //   $tax = 20;
      // }
      // else if($basic>5250 && $basic<=7800){
      //   $tax = 25;
      // }
      // else if($basic>7800 && $basic<=10900){
      //   $tax = 30;
      // }
      // else if($basic>10900){
      //   $tax = 35;
      // }
       //  check if user already paid in this month
      $current = date("Y-m");
      $sql = "SELECT * FROM `salary` WHERE SUBSTRING(`paid_on`,1,7)='$current' and `name`='$st_name'";
      $res =  $connect->query($sql);
      $counter = $res->num_rows;

      if($counter==0){
        AddSalary($st_name,$st_email,$st_dept,$st_pic,$basic,$allowance,$tax,$st_mobile,$st_address,$total_date);
      }else{
        $message = "<div class='alert alert-info text-center'>This User has already received his salary for this month, you can not make payment for one user twice a month.</div>";
        header("Location:salary_add.php?message=$message");
      }
}

?>
<?php require_once 'partials/footer.php'; ?>
