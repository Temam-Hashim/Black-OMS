
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Salary</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Add New Salary</h3>
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
                          
                            <table id="" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Staff Name</th>
                                <th>Basic Salary</th>
                                <th>Allowance</th>
                                <th>Method</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>  
                                <td><?php echo $row['st_name'] ?></td>
                                <td><input type="text" class="form-control" name="basic_salary"></td>
                                <td><input type="text" class="form-control" name="allowance"></td>
                                <td><input type="text" class="form-control" name="pay_method"></td>
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
        $st_pic = mysqli_real_escape_string($connect,$_POST['st_pic']);
        $st_dept = mysqli_real_escape_string($connect,$_POST['st_dept']);
        $basic = mysqli_real_escape_string($connect,$_POST['basic_salary']);
        $allowance = mysqli_real_escape_string($connect,$_POST['allowance']);
        $pay_method = mysqli_real_escape_string($connect,$_POST['pay_method']);
        AddSalary($st_name,$st_email,$st_dept,$st_pic,$basic,$allowance,$pay_method);
}

?>
  <?php require_once 'partials/footer.php'; ?>