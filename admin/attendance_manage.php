<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Attendance
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Attendance</li>
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
                        Delete('attendance','st_id',$_GET['delete_id'],'attendance_manage.php');
                        }

                      ?>
 
                      <!-- add attendnace button -->
                      <div class="row text-right mx-auto" style="margin-right:15px">
                        <a href="attendance_add.php" class="btn btn-md btn-primary mr-200" name="add_dp">Add New Attendance</a>
                      </div>

                 <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Manage Attednance</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Date</th>
                          <th>status</th>
                          <th>Action</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php
                                $RES = GetAttendance();
                                while($ROW = $RES->fetch_assoc()){
                                $at_id =  $ROW['st_id'];
                                $att_date = substr($ROW['at_date'],0,7);
                              ?>
                              <tr>
                                  <td><?php echo $ROW['st_id']; ?></td>
                                  <td><?php echo $ROW['st_name']; ?></td>
                                  <td><?php echo $ROW['at_date']; ?></td>
                                  <td><?php echo $ROW['status']; ?></td>

                                  <td><a href="attendance_edit.php?edit_id=<?php echo $at_id;?>" class="btn btn-primary">Edit</a></td>
                                  <td><a href="attendance_manage.php?delete_id=<?php echo $at_id;?>" class="btn btn-danger">Delete</a></td>
                                  <td><a href="attendance_analysis.php?analysis_id=<?php echo $ROW['st_name'];?>&att_date=<?php echo $att_date;?>" class="btn btn-info">View Detail</a></td>

                              </tr>
                              <?php } ?>

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.Id</th>
                          <th>Staff Name</th>
                          <th>Date</th>
                          <th>status</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                 </div>

            </section>
    <!-- /.content -->
</div>


<?php require_once 'partials/footer.php'; ?>