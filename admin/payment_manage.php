<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Payment Getway
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Payment</li>
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
                        Delete('payment','py_id',$_GET['delete_id'],'payment_manage.php');
                        }

                      ?>

                      <!-- add department button -->
                      <div class="row text-right mx-auto" style="margin-right:15px">
                        <a href="payment_add.php" class="btn btn-md btn-primary mr-200" >Add New Payment</a>
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
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Mobile</th>
                          <th>User Address</th>
                          <th>Payment Reason</th>
                          <th>Total Amount</th>
                          <th>Paid On</th>
                          <th>Payment Status</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $res = GetPayment();
                              while($row = $res->fetch_assoc()){
                            ?>
                              <tr>
                                  <td><?php echo $row['py_id'] ?></td>
                                  <td><?php echo $row['customer_name'] ?></td>
                                  <td><?php echo $row['customer_email'] ?></td>
                                  <td><?php echo $row['customer_mobile'] ?></td>
                                  <td><?php echo $row['customer_address'] ?></td>
                                  <td><?php echo $row['payment_reason'] ?></td>
                                  <td><?php echo $row['total_payment'] ?></td>
                                  <td><?php echo $row['paid_on'] ?></td>
                                  <td><?php echo $row['payment_status'] ?></td>
                                  <td><a href="payment_invoice.php?invoice_id=<?php echo $row['py_id'];?>" class="btn btn-warning">Invoice</a></td>
                                  <td><a href="payment_edit.php?edit_id=<?php echo $row['py_id'];?>" class="btn btn-info">Edit</a></td>
                                  <td><a href="payment_manage.php?delete_id=<?php echo $row['py_id'];?>" class="btn btn-danger">Delete</a></td>
                              </tr>
                              <?php } ?>


                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.Id</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Mobile</th>
                          <th>User Address</th>
                          <th>Payment Reason</th>
                          <th>Total Amount</th>
                          <th>Paid On</th>
                          <th>Payment Status</th>
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