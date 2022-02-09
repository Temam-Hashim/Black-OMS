
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Attendance
        <small>Edit Attendance</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<script>return window.history.go(-1)</script>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Attendance</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title text-primary">Edit  Attendance</h3>
            </div>

           <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];

              // get user data of sent id to edit
           }
           if(isset($_GET['edit_id'])){
             $at_id = $_GET['edit_id'];
             $res = GetDataById('attendance', 'st_id', $at_id);
             $row = $res->fetch_array();
           
           ?>


              <div class="row">
                  <div class="col-xs-1"></div>
                      <div class="box-body col-xs-10">
                      <div class="box-body table-responsive">
                        <form action="" method="POST">
                            <input type="hidden" name="at_id" value=<?php echo $row['st_id'];?>>

                            <table id="" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Staff Name</th>
                                <th>Attendance date</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>  
                                <td><?php echo $row['st_name'] ?></td>
                                <td><?php echo $row['at_date'] ?></td>
                                <td>
                                  <select name="at_status" id="at_status" class="form-control" required>
                                    <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                                    <?php
                                    if( $row['status']=='P'){
                                      echo "<option value='A'>A</option>";
                                    }else{
                                      echo "<option value='P'>P</option>";
                                    }
                                    
                                    ?>
                                  </select>
                                </td>
                                <td><input type="submit" class="btn btn-primary" name="update_attendance" value="Update"></td>
                              </tr>
                              </tbody>
                            </table>
                          </form>
                        </div>
                      </div>
                <div class="col-xs-1"></div>
            </div>
            <?php } ?>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
     if(isset($_POST['update_attendance'])) {
        $at_id = mysqli_real_escape_string($connect,$_POST['at_id']);
        $at_status = mysqli_real_escape_string($connect,$_POST['at_status']);

        UpdateAttendance($at_id,$at_status);
}

?>
  <?php require_once 'partials/footer.php'; ?>