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
                    <div class="box-header">
                      <h3 class="box-title">Manage Salary</h3>
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
                          <th>Profile</th>
                          <th>Basic Salary</th>
                          <th>Allowance</th>
                          <th>Total Amount</th>
                          <th>Method</th>
                          <th>Paid On</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $res = GetSalary();
                            while($row = $res->fetch_assoc()){
                            ?>
                              <tr>
                                  <td><?php echo $row['sl_id'] ?></td>
                                  <td><?php echo $row['name'] ?></td>
                                  <td><?php echo $row['department'] ?></td>
                                  <td><?php echo $row['email'] ?></td>
                                  <td><img src="../images/<?php echo $row['pic'] ?>" class="img-responsive img-circle" alt=""></td>
                                  <td><?php echo $row['basic_salary'] ?></td>
                                  <td><?php echo $row['allowance'] ?></td>
                                  <td><?php echo $row['basic_salary']+$row['allowance'] ?></td>
                                  <td><?php echo $row['payment_method'] ?></td>
                                  <td><?php echo $row['paid_on'] ?></td>

                                  <td><a href="salary_invoice.php?invoice_id=<?php echo $row['sl_id'];?>" class="btn btn-warning">Invoice</a></td>
                                  <td><a href="salary_manage.php?delete_id=<?php echo $row['sl_id'];?>" class="btn btn-danger">Delete</a></td>

                              </tr>
                              <?php } ?>


                        </tbody>
                        <tfoot>
                        <tr>
                        <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Department</th>
                          <th >Profile</th>
                          <th>Basic Salary</th>
                          <th >Allowance</th>
                          <th>Total Amount</th>
                          <th>Method</th>
                          <th >Paid On</th>
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