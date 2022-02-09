
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Leave request
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<script>return window.history.go(-1)</script>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Leave request</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title text-primary">Leave Request Form</h3>
            </div>

           <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];
           }
           ?>


              <div class="row">
                  <div class="col-xs-1"></div>

                      <div class="box-body col-xs-10">
                        <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Your Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo InputValue('st_name'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="title">Department</label>
                                    <select name="dept" id="dept" class="form-control">
                                      <option value="">Select your department</option>
                                      <?php 
                                        $res = GetDepartment();
                                        while($row = $res->fetch_assoc()){
                                      ?>
                                      <option value="<?php echo $row['dpt_name'] ?>"><?php echo $row['dpt_name'] ?></option>
                                      <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Your Position</label>
                                    <input type="text" class="form-control" name="position" placeholder="Enter Your Position" value="<?php echo InputValue('position'); ?>">
                                </div>
                                                                
                                <div class="form-group">
                                    <label for="title">Your Reason</label>
                                    <input type="text" class="form-control" name="reason" placeholder="Enter Your Reason" value="<?php echo InputValue('reason'); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="title">Leave From Date</label>
                                    <input type="date" class="form-control" name="leave_from" placeholder="Enter Leaving Date" value="<?php echo InputValue('leave_from'); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="title">Leave to Date</label>
                                    <input type="date" class="form-control" name="leave_to" placeholder="Enter date of Return" value="<?php echo InputValue('leave_to'); ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <textarea name="desc" id="desc" class="form-control" rows="3" required="required"><?php echo InputValue('leave_to'); ?></textarea> 
                                </div>

                              <div class=" box-footer text-right">
                                <input class="btn btn-primary" type="submit" name="request_leave" value="Request Leave" >
                            </div>
                        </form>
                      </div>
                <div class="col-xs-1"></div>
            </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php
     if(isset($_POST['request_leave'])) {
        $name = mysqli_real_escape_string($connect,$_POST['name']);
        $dept = mysqli_real_escape_string($connect,$_POST['dept']);
        $position = mysqli_real_escape_string($connect,$_POST['position']);
        $reason = mysqli_real_escape_string($connect,$_POST['reason']);
        $leave_from = mysqli_real_escape_string($connect,$_POST['leave_from']);
        $leave_to = mysqli_real_escape_string($connect,$_POST['leave_to']);
        $description = mysqli_real_escape_string($connect,$_POST['desc']);

       
// check if department exist
 
        $sql = "SELECT * from `leave_request` where `status`='unapproved' and `name`='$name'";
        $res = $connect->query($sql);
        $count = $res->num_rows;

        if($count==0){
          AddLeaveRequest($name,$dept,$position,$reason,$leave_from,$leave_to,$description);
        }else{
          echo "<script>alert('Your Previous Leave request is not approved yet. Please contact The manager')</script>";
        }

}

?>
  <?php require_once 'partials/footer.php'; ?>