<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Leave History
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Leave History</li>
      </ol>
    </section>



    <!-- Main content -->
            <section class="content">

            <!-- implementation -->


                     <?php

                      if(isset($_GET['message'])){
                        echo $_GET['message'];
                      }
                      // approval
                      if(isset($_GET['delete_id'])){
                        $id = $_GET['delete_id'];
                        Delete('leave_request','lv_id',$id,'leave_history.php');
                    }
                  ?>

                <div class="box">
                    <div class="box-header text-center">
                      <h2 class="box-title text-primary">Leave History</h2>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Department</th>
                          <th>Position</th>
                          <th>Reason</th>
                          <th>Leave From</th>
                          <th>Leave To</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php
                                $RES = GetDataById('leave_request', 'status', 'approved');
                                while($row = $RES->fetch_assoc()){
                                $lv_id =  $row['lv_id'];
                              ?>
                              <tr>
                                  <td><?php echo $row['lv_id']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['dept']; ?></td>
                                  <td><?php echo $row['position']; ?></td>
                                  <td><?php echo $row['reason']; ?></td>
                                  <td><?php echo $row['leave_from']; ?></td>
                                  <td><?php echo $row['leave_to']; ?></td>
                                  <td><?php echo $row['description']; ?></td>
                                  <td class="text-primary"><i><?php echo $row['status']; ?></i></td>
                                  <td><a href="leave_history.php?delete_id=<?php echo $lv_id;?>" class="btn btn-danger">Delete</a></td>
                              </tr>
                              <?php } ?>

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Department</th>
                          <th>Position</th>
                          <th>Reason</th>
                          <th>Leave From</th>
                          <th>Leave To</th>
                          <th>Description</th>
                          <th>Status</th>
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