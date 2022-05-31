<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Customer
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>



    <!-- Main content -->
            <section class="content">

            <!-- implementation -->
                   <div class="box-header text-center">
                      <h3 class="box-title text-primary">Manage Customer</h3>
                    </div>
                          <form action="" >                          
                           <!-- import from and export to excel -->
                          <div class="row text-right mx-auto" style="margin-right:15px">
                            <a href="customer_add_reception.php" class="btn btn-md btn-primary mr-200">Add New Customer</a>
                            <a href="importExcel.php"  class="btn btn-md btn-info mr-200">Import From Excel</a>
                            <a href="readandexport.php" class="btn btn-md btn-warning mr-200">Export To Excel</a>
                          </div>
                    </form>

                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Manage Customer</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>C.Id</th>
                          <th>customer Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Martial Status</th>
                          <th>Occupation</th>
                          <th>Current Address</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php
                                $sql = "SELECT * from `registration`";

                                $res = $connect->query($sql);
                                while($row = $res->fetch_assoc()){
                                $c_id =  $row['c_id'];
                              ?>
                              <tr>
                                  <td><?php echo $row['c_id']; ?></td>
                                  <td><?php echo $row['f_name']." ".$row['m_name']." ".$row['l_name'];; ?></td>
                                  <td><?php echo $row['c_email']; ?></td>
                                  <td><?php echo $row['c_mobile']; ?></td>
                                  <td><?php echo $row['gender']; ?></td>
                                  <td><?php echo $row['age']; ?></td>
                                  <td><?php echo $row['martial_status']; ?></td>
                                  <td><?php echo $row['occupation']; ?></td>
                                  <td><?php echo $row['current_address']; ?></td>
                                  <td><a href="customer_view.php?view_id=<?php echo $c_id;?>" class="btn btn-info">View Detail</a></td>
                                  <td><a href="customer_edit_reception.php?edit_id=<?php echo $c_id;?>" class="btn btn-primary">Edit</a></td>
                              </tr>
                              <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>C.Id</th>
                          <th>customer Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Martial Status</th>
                          <th>Occupation</th>
                          <th>Current Address</th>
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