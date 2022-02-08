<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Leave Approval
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approve Leave</li>
      </ol>
    </section>



    <!-- Main content -->
            <section class="content">

            <!-- implementation -->


                     <?php
                      // approval
                      if(isset($_GET['approve_id'])){
                        $id = $_GET['approve_id'];
                        $sql = "UPDATE `leave_request` set `status`='approved' WHERE `lv_id`='$id'";
                        $res = $connect->query($sql);
                        if($res){
                          echo "<div class='alert alert-success text-center'>Leave for Request with id 00$id is approved  successfully</div>";
                          }else{
                          echo "<div class='alert alert-danger text-center'>Leave approval failed for id 00$id. Please try again!</div>";

                          // echo mysqli_error($connect);
                      }
                    }
                      ?>

                <div class="box">
                    <div class="box-header text-center">
                      <h2 class="box-title text-primary">Approve Leave request</h2>
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
                                $RES = GetDataById('leave_request', 'status', 'unapproved');
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
                                  <td class="text-danger"><i><?php echo $row['status']; ?></i></td>
                                  <td><a href="leave_approve.php?approve_id=<?php echo $lv_id;?>" class="btn btn-primary">Approve</a></td>
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