
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Payment GateWay
        <small>Payment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Payment</li>
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
          //  get data by id for update
          if(isset($_GET['edit_id'])){
            $py_id = $_GET['edit_id'];

            $res = GetDataById('payment','py_id',$py_id);
            $row = $res->fetch_array();
          }
           ?>


              <div class="row">
                  <div class="col-xs-1"></div>

                      <div class="box-body col-xs-10">
                      <div class="box-body table-responsive">
                        <form action="" method="POST">
                          <!-- get id -->
                          <input type="hidden" name="py_id" value="<?php echo $row['py_id']; ?>">
                          
                            <table id="" class="table table-bordered table-striped">
                              <!-- first row -->
                              <thead>
                              <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Mobile</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>  
                                <td><input type="text" class="form-control" name="customer_name" value = "<?php echo $row['customer_name'] ?>"></td>
                                <td><input type="email" class="form-control" name="customer_email" value = "<?php echo $row['customer_email'] ?>"></td>
                                <td><input type="text" class="form-control" name="customer_mobile" value = "<?php echo $row['customer_mobile'] ?>"></td>
                              </tr>
                              </tbody>
                              <!-- second row -->
                              <thead>
                              <tr>
                                <th>Customer Address</th>
                                <th>Payment Reason</th>
                                <th>Total Payment</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>  
                                <td><input type="text" class="form-control" name="customer_address" value="<?php echo $row['customer_address']; ?>"></td>
                                <td>   
                                    <select name="payment_reason" id="payment_reason" class="form-control" >
                                      <option value="<?php echo $row['payment_reason'] ?>"><?php echo $row['payment_reason'] ?></option>
                                      <option value="Training">Training</option>
                                      <option value="Education">Education</option>
                                      <option value="Payback">PayBack</option>
                                    </select>
                                </td>
                                <td><input type="text" class="form-control" name="total_payment" value="<?php echo $row['total_payment'] ?>"></td>
                              </tr>
                              </tbody>
                            </table>
                            <div class="text-center">
                               <input type="submit" class="btn btn-primary btn-lg" name="update_payment" value="Update Payment"></td>
                            </div>
                          </form>
                        </div>

                      </div>
                <div class="col-xs-1"></div>
            </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    

  <?php
     if(isset($_POST['update_payment'])) {
       $id = $_POST['py_id'];
        $c_name = mysqli_real_escape_string($connect,$_POST['customer_name']);
        $c_email = mysqli_real_escape_string($connect,$_POST['customer_email']);
        $c_mobile = mysqli_real_escape_string($connect,$_POST['customer_mobile']);
        $c_address = mysqli_real_escape_string($connect,$_POST['customer_address']);
        $payment_reason = mysqli_real_escape_string($connect,$_POST['payment_reason']);
        $total_payment = mysqli_real_escape_string($connect,$_POST['total_payment']);
    

        UpdatePayment($id,$c_name,$c_email,$c_mobile,$c_address,$payment_reason,$total_payment);
  
}

?>
<?php require_once 'partials/footer.php'; ?>