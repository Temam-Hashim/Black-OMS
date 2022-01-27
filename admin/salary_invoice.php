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
        <li class="active">Invoice</li>
      </ol>
    </section>

            <section class="content">

            <?php
            if(isset($_GET['invoice_id'])){
              $i_id = $_GET['invoice_id'];
              $res = GetDataById('salary', 'sl_id', $i_id);
              $row = $res->fetch_array();
            }
            ?>
            <div class="row">
            <div class="box-header">
              <h3 class="box-title">Salary Reciept</h3>
            </div>
            <!-- from -->
            <div class="col-md-6">

            </div>
            </div>
            


                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Salary  Invoice</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.Id</th>
                          <th>Basic Salary</th>
                          <th>Allowance</th>
                          <th>Total Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                         <tr>  
                           <td><?php echo $row['sl_id'] ?></td>
                           <td><?php echo $row['basic_salary'] ?></td>
                           <td><?php echo $row['allowance'] ?></td>
                           <td><?php echo $row['basic_salary']+$row['allowance'] ?></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>

                    <!-- payment method and total display -->
                    <div class="row">
                      <div class="col-md-6 text-center">
                        <h3>Payment Methods:</h3><br>
                        <div class="bg-warning text-normal text-center" style="height:120px">
                          <h4 class="pt-5 mt-5"><?php echo $row['payment_method']?></h4>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                 </div>

            </section>
    <!-- /.content -->
</div>


<?php require_once 'partials/footer.php'; ?>