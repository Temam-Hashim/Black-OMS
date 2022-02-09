<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Salary
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Salary</li>
      </ol>
    </section>



    <!-- Main content -->
            <section class="content">

            <!-- implementation -->


                     <?php
                      if(isset($_GET['message'])){
                          echo $_GET['message'];
                      }
                      // <!-- delete department -->
                        if(isset($_GET['delete_id'])){
                        Delete('salary','sl_id',$_GET['delete_id'],'salary_manage.php');
                        }

                      ?>

                      <!-- add department button -->
                      <div class="row text-right mx-auto" style="margin-right:15px">
                        <a href="salary_add.php" class="btn btn-md btn-primary mr-200" name="add_salary">Add New Salary</a>
                        </div>

                <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title text-primary">Manage Salary</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Department</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Profile</th>
                          <th>Basic Salary</th>
                          <th>Allowance</th>
                          <th>Total Amount</th>
                          <th>Tax</th>
                          <th>Paid On</th>
                          <th>Present(%)</th>
                          <th>Status</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $res = GetSalary();

                            while($row = $res->fetch_assoc()){

                              //  $paid_on = substr($row['paid_on'],0,7);
                              //  $staff_name = $row['name'];
                              //           // attendnace analysis for salary
                              //   $sql2 = "SELECT * from `attendance` where `st_name`='$staff_name' and `status`='P' and  SUBSTRING(`at_date`,1,7)='$paid_on'";
                              //   $res2 = $connect->query($sql2);
                              //   $no_of_prsent = $res2->num_rows;

                              //       // query 2 for present
                              //   $sql3 = "SELECT * from `attendance` where `st_name`='$staff_name' and `status`='A' and SUBSTRING(`at_date`,1,7)='$paid_on'";
                              //   $res3 = $connect->query($sql3);
                              //   $no_of_absent = $res3->num_rows;

                              //   // percentage
                              //   $total = $no_of_prsent+$no_of_absent;
                              //   if($total==0){
                              //     $present_per=0;
                              //   }else{
                              //     $present_per = ($no_of_prsent*100)/($total);
                              //   }
                                  

                                // $present_per = ($no_of_prsent*100)/($no_of_prsent+$no_of_absent);
                            ?>
                              <tr>
                                  <td><?php echo $row['sl_id'] ?></td>
                                  <td><?php echo $row['name'] ?></td>
                                  <td><?php echo $row['department'] ?></td>
                                  <td><?php echo $row['email'] ?></td>
                                  <td><?php echo $row['mobile'] ?></td>
                                  <td><img src="../images/<?php echo $row['pic'] ?>" class="img-responsive img-circle" alt=""></td>
                                  <td><?php echo $row['basic_salary'] ?></td>
                                  <td><?php echo $row['allowance'] ?></td>
                                  <td><?php echo $row['basic_salary']+$row['allowance'] ?></td>
                                  <td><?php echo $row['tax'] ?></td>
                                  <td><?php echo $row['paid_on'] ?></td>
                                  <td> <?php echo $row['total_date'] ?> Day</td>
                                  <td><?php echo $row['salary_status'] ?></td>

                                  <td><a href="salary_invoice.php?invoice_id=<?php echo $row['sl_id'];?>" class="btn btn-warning">Invoice</a></td>
                                  <td><a href="salary_edit.php?edit_id=<?php echo $row['sl_id'];?>" class="btn btn-info">Edit</a></td>
                                  <td><a href="salary_manage.php?delete_id=<?php echo $row['sl_id'];?>" class="btn btn-danger">Delete</a></td>
                              </tr>
                              <?php } ?>


                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Department</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Profile</th>
                          <th>Basic Salary</th>
                          <th>Allowance</th>
                          <th>Total Amount</th>
                          <th>Tax</th>
                          <th>Paid On</th>
                          <th>Total Day</th>
                          <th>Status</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                 </div>

            </section>
    <!-- /.content -->
</div>


<?php require_once 'partials/footer.php'; ?>