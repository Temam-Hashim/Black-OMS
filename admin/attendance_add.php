
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
   Attendance
        <small>Attendance</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Attendance</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title text-primary">Add New Attendnace</h3>
            </div>

           <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];
           }
           ?>

              <div class="row">
                
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Add to Attendnace</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Take Attendnace</a>
                        </li>
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                      <form action="" method="post">
                       <table class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="checkAll" id="checkAll" name="checkUser[]"> check all</th>
                                <th>Id</th>
                                <th>Staff Name</th>
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                            //fetch Post from ddatabase
                            $res = GetStaff();
                            while($row = mysqli_fetch_assoc($res)){
                                  $user_id = $row['st_id'];
                                  $user_name = $row['st_name'];
                                  echo "<tr>";
                                  ?>
                                <td><input type="checkbox" class="checkEachBoxes" id="checkEachBoxes" name="checkUser[]" value="<?php  echo $user_id ;?>"></td>
                                <?php
                                    echo "<td>{$user_id}</td>";
                                    echo "<td>{$user_name}</td>";
                                    echo "</tr>";
                              }

                      ?>

                        </tbody>
                    </table>
                    <!-- submit button -->
                    <input type="submit" value="Add to Attendnace" class="btn btn-primary btn-block" name="add_to_attendance">
                </form>
                </div>
                        <div role="tabpanel" class="tab-pane" id="tab">
                        <div class="box-body col-xs-10">
                      <div class="box-body table-responsive">
                        <form action="" method="POST">
                            <table id="" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th><input type="checkbox" class="checkAllUser" id="checkAllUser" name="checkUser[]"> Present</th>
                                <th>User Id</th>
                                <th>Staff Name</th>
                                <th>Attendance Date</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                                 $now  = date("Y-m-d");
                                 $res2 = GetDataById('attendance', 'at_date', $now);
                                 while($row2 = mysqli_fetch_assoc($res2)){
                                  $staff_id = $row2['st_id'];
                                  $user_name = $row2['st_name'];
                                  $date = $row2['at_date'];
                                  echo "<tr>";
                                  ?>
                                <td><input type="checkbox" class="checkEachBoxes" id="checkEachBoxes" name="checkUser[]" value="<?php  echo $staff_id ;?>"></td>
                                <?php
                                    echo "<td>{$staff_id}</td>";
                                    echo "<td>{$user_name}</td>";
                                    echo "<td>{$date}</td>";
                                    echo "</tr>";
                                }
                              ?>
                              </tbody>
                            </table>
                            <!-- submit button -->
                              <input type="submit" value="Submit" class="btn btn-primary btn-block" name="take_attendance">
                          </form>
                        </div>

                      </div>

                        </div>
                    </div>
                </div>
                
            </div>
      </div>
   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
// add to attendnace
    if(isset($_POST['add_to_attendance'])) {
        foreach($_POST['checkUser'] as $user_id){
          $res = GetDataById('staff', 'st_id', $user_id);
          while($row=$res->fetch_assoc()){
            $staff_name = $row['st_name'];
            $date = date("Y-m-d");
            $status = "A";
          }
          // check if the user is added to attendnace today
          if(!empty($staff_name)){
           AddAttendance($staff_name,$date,$status);
          }

       }
    }
    // take attendnace
    
    if(isset($_POST['take_attendance'])) {
      if(!$_POST['checkUser']){
        echo "<script>alert('Please select atleast one user');</script>";
      }else{
        foreach($_POST['checkUser'] as $user_id){
          // add user to attendance
          $res2 = GetAttendance();
          while($row = $res2->fetch_assoc()){
            $status = $row['status'];
          }
          if(!$_POST['checkUser']){
            UpdateAttendance($user_id,"A");
          }else{
            UpdateAttendance($user_id,"P");
          }
       }
    }
  }
?>
<?php require_once 'partials/footer.php'; ?>