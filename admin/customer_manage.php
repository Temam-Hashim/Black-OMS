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


                     <?php
                      if(isset($_GET['message'])){
                          echo $_GET['message'];
                      }
                      // <!-- delete attendnace -->
                        if(isset($_GET['delete_id'])){
                        Delete('registration','c_id',$_GET['delete_id'],'customer_manage.php');
                        }
                        // send to analyst
                        if(isset($_GET['send_id'])){
                          $send_id = $_GET['send_id'];
                          $sql = "UPDATE `registration` set `analized`='yes' where `c_id`='$send_id'";
                          $res = $connect->query($sql);
                          if($res){
                              $message = "<div class='alert alert-success text-center'>This Customer been sent Successfully to Analyst. </div>";
                              header("Location:customer_manage.php?message=$message");
                          }else{
                              $message = "<div class='alert alert-danger text-center'>Failed to send this customer to Analyst. Please try again!</div>";
                              header("Location:customer_manage.php?message=$message");
                              echo mysqli_error($connect);
                          }
                        }

                      ?>
                   <div class="box-header text-center">
                      <h3 class="box-title text-primary">Manage Customer</h3>
                    </div>
                        <!-- add attendnace button -->
                        <div class="row mx-auto" style="margin-right:15px">
                          <form action="" >
                              <div class="form-group">
                                <div class="col-md-3">
                                <?php if($_SESSION['role']=='relation' || $_SESSION['role']=='admin' ){ ?>
                                  <select class="form-control" name="custom_status" onchange="this.form.submit();">
                                      <option value="">Select By Status</option>
                                      <option value="all">Veiw All</option>
                                      <option value="startup">Start Up</option>
                                      <option value="existing">Existing</option>
                                      <option value="special">Special</option>
                                  </select>
                                  <?php } ?>
                                </div>
                             
                                <div class="col-md-1"></div>
                                                    <!-- add attendnace button -->
                      <div class="row text-right mx-auto" style="margin-right:15px">
                        <a href="customer_add.php" class="btn btn-md btn-primary mr-200" name="add_dp">Add New Customer</a>
                      </div>
                             
                              
                              </div>
                          </form>
                      </div>

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
                          <th>Exprince Level</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Analized</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php
  
                                $sql = "SELECT * from `registration`";
            
                                if(isset($_GET['custom_status'])){
                                  $status = $_GET['custom_status'];
                                  $sql = "SELECT * from `registration` WHERE `exprience_level`='$status'";
                                  if($status=='all'){
                                    $sql = "SELECT * from `registration`";
                                  }
                                }

                                if(isset($_GET['status'])){
                                  $status = $_GET['status'];
                                  $sql = "SELECT * from `registration` WHERE `exprience_level`=$status";
                                }

                                $res = $connect->query($sql);
                                while($row = $res->fetch_assoc()){
                                $c_id =  $row['c_id'];
                              ?>
                              <tr>
                                  <td><?php echo $row['c_id']; ?></td>
                                  <td><?php echo $row['f_name']." ".$row['m_name']." ".$row['l_name'];; ?></td>
                                  <td><?php echo $row['c_email']; ?></td>
                                  <td><?php echo $row['c_mobile']; ?></td>
                                  <td><?php echo $row['exprience_level']; ?></td>
                                  <td><a href="customer_view.php?view_id=<?php echo $c_id;?>" class="btn btn-info">View Detail</a></td>
                                  <td><a href="customer_edit.php?edit_id=<?php echo $c_id;?>" class="btn btn-primary">Edit</a></td>
                                  <td><a href="customer_manage.php?delete_id=<?php echo $c_id;?>" class="btn btn-danger">Delete</a></td>
                                  <td>
                                    <?php if($row['analized']=='yes'){ ?>
                                      <p class="text-success">yes</p>
                                    <?php } else { ?>
                                      <a href="customer_manage.php?send_id=<?php echo $c_id;?>" class="btn btn-warning">Send to Analyst</a>
                                    <?php } ?>
                                </td>
                              </tr>
                              <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>C.Id</th>
                          <th>customer Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Exprince Level</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Analyzied</th>
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