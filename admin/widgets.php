<?php
// department count
  $dep_res = GetDepartment();
  $dep_count = $dep_res->num_rows;
// user count
  $user_res = GetUsers();
  $user_count = $user_res->num_rows;
  // staff count
  $staff_res = GetStaff();
  $staff_count = $staff_res->num_rows;
   // salary count
   $salary_res = GetSalary();
   $salary_count = $salary_res->num_rows;
      // attendnace count
  $attedance_res = GetSalary();
  $attedance_count = $attedance_res->num_rows;
       // operation count
  $op_res = GetCustomer();
  $op_count = $op_res->num_rows;
  // analysis
  $an_res = GetDataById('registration', 'analized', 'yes');
  $an_count = $an_res->num_rows;
        // leave request count
  $sql = "SELECT * from `leave_request`";
  $leave_res = $connect->query($sql);
  $leave_count = $leave_res->num_rows;
   //role
   $role_res = GetRole();
   $role_count = $role_res->num_rows;
    // payment
    $role_res = GetPayment();
    $payment_count = $role_res->num_rows;

?>

<div class="row">
  <?php if($_SESSION['role']=='admin'){ ?>
       <!-- exprience widget-->
       <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $user_count ?><sup style="font-size: 20px"></sup></h3>
              <p>System Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="user_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
            <!-- department widget-->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">

              <h3><?php echo $dep_count ?></h3>
              <p>Department</p>
            </div>
            <div class="icon">
              <i class="fa fa-window-maximize"></i>
            </div>
            <a href="department_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- exprience widget-->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $staff_count ?><sup style="font-size: 20px"></sup></h3>

              <p>Staff</p>
            </div>
            <div class="icon">
              <i class="fa fa-meetup"></i>
            </div>
            <a href="staff_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- .project widget -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box " style="background-color:#6e256c">
            <div class="inner">
              <h3><?php echo $salary_count ?></h3>
              <p>Salary</p>
            </div>
            <div class="icon">
               <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <a href="salary_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<!-- attendnace -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box " style="background-color:#1b93e3">
            <div class="inner">
              <h3><?php echo $attedance_count ?></h3>
              <p>Attendance</p>
            </div>
            <div class="icon">
              <i class="fa fa-bandcamp"></i>
            </div>
            <a href="attendance_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- relation -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#97bfa2">
            <div class="inner">
              <h3><?php echo $op_count ?></h3>
              <p>Relation</p>
            </div>
            <div class="icon">
              <i class="fa fa-renren"></i>
            </div>
            <a href="customer_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- analyst  -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#32a89b">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Analysis</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="customer_analysis.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

                 <!-- promotion -->
          <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#a2bbbb">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Promotion</p>
            </div>
            <div class="icon">
              <i class="fa fa-product-hunt"></i>
            </div>
            <a href="customer_for_training.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- payment -->
      <div class="col-lg-3 col-xs-6">
          <div class="small-box " style="background-color:#6eee6c">
            <div class="inner">
              <h3><?php echo $payment_count ?></h3>
              <p>Payment Gateway</p>
            </div>
            <div class="icon">
              <i class="fa fa-paypal"></i>
            </div>
            <a href="payment_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- role -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#ffa89b">
            <div class="inner">
              <h3><?php echo $role_count ?></h3>
              <p>Role</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-square"></i>
            </div>
            <a href="role_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    <?php } else if($_SESSION['role']=='reception'){ ?>

         <!-- .Customer Registration -->
         <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $op_count ?></h3>
              <p>Add New Customer</p>
            </div>
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <a href="customer_add.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    <?php } else if($_SESSION['role']=='finance'){?>
<!-- payment -->
      <div class="col-lg-3 col-xs-6">
          <div class="small-box " style="background-color:#6eee6c">
            <div class="inner">
              <h3><?php echo $payment_count ?></h3>
              <p>Payment Gateway</p>
            </div>
            <div class="icon">
              <i class="fa fa-paypal"></i>
            </div>
            <a href="payment_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      <div class="col-lg-3 col-xs-6">
          <div class="small-box " style="background-color:#6e256c">
            <div class="inner">
              <h3><?php echo $salary_count ?></h3>
              <p>Salary</p>
            </div>
            <div class="icon">
            <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <a href="salary_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


      <div class="col-lg-3 col-xs-6">
          <div class="small-box " style="background-color:#1b93e3">
            <div class="inner">
              <h3><?php echo $attedance_count ?></h3>
              <p>Attendance</p>
            </div>
            <div class="icon">
              <i class="fa fa-bandcamp"></i>
            </div>
            <a href="attendnace_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


     
    <?php } else if($_SESSION['role']=='relation'){?>
     <!-- operation relation-->
     <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#97bfa2">
            <div class="inner">
              <h3><?php echo $op_count ?></h3>
              <p>Relation</p>
            </div>
            <div class="icon">
              <i class="fa fa-renren"></i>
            </div>
            <a href="customer_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    <?php } else if($_SESSION['role']=='startup relation'){?>
     <!-- operation -->
     <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#97bfa2">
            <div class="inner">
              <h3><?php echo $op_count ?></h3>
              <p>Start Up Relation</p>
            </div>
            <div class="icon">
              <i class="fa fa-renren"></i>
            </div>
            <a href="customer_manage.php?status='startup'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  <?php } else if($_SESSION['role']=='existing relation'){?>
     <!-- operation -->
     <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#97bfa2">
            <div class="inner">
              <h3><?php echo $op_count ?></h3>
              <p>Existing Relation</p>
            </div>
            <div class="icon">
              <i class="fa fa-renren"></i>
            </div>
            <a href="customer_manage.php?status='existing'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  <?php } else if($_SESSION['role']=='special relation'){?>
     <!-- operation  -->
     <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#97bfa2">
            <div class="inner">
              <h3><?php echo $op_count ?></h3>
              <p>Special Relation</p>
            </div>
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <a href="customer_manage.php?status='special'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


     
        <?php } else if($_SESSION['role']=='analyst'){?>
           <!-- analyst  -->
           <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#32a89b">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Analyst</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="customer_analysis.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <?php } else if($_SESSION['role']=='promotion'){?>
           <!-- analyst  -->
           <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#32a89b">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Promotion</p>
            </div>
            <div class="icon">
              <i class="fa fa-product-hunt"></i>
            </div>
            <a href="customer_for_training.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

    <?php } else if($_SESSION['role']=='startup analyst'){?>
           <!-- analyst  -->
           <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#32a89b">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Start Up Analysis</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart "></i>
            </div>
            <a href="customer_analysis.php?status='startup'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

   <?php } else if($_SESSION['role']=='existing analyst'){?>
           <!-- analyst  -->
           <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#32a89b">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Existing Analysis</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart "></i>
            </div>
            <a href="customer_analysis.php?status='existing'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <?php } else if($_SESSION['role']=='special analyst'){?>
           <!-- analyst -->
           <div class="col-lg-3 col-xs-6">
          <div class="small-box" style="background-color:#32a89b">
            <div class="inner">
              <h3><?php echo $an_count ?></h3>
              <p>Special Analysis</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="customer_analysis.php?status='special'" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <?php } else if($_SESSION['role']=='attendance'){?>
           <!-- attendnace -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box " style="background-color:#1b93e3">
              <div class="inner">
                <h3><?php echo $attedance_count ?></h3>
                <p>Attendance</p>
              </div>
              <div class="icon">
                <i class="fa fa-bandcamp"></i>
              </div>
              <a href="attendnace_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

      <?php } else if($_SESSION['role']=='HRM'){?>
           <!-- attendnace -->
          <div class="col-lg-3 col-xs-6">
            <div class="small-box " style="background-color:#1b93e3">
              <div class="inner">
                <h3><?php echo $staff_count ?></h3>
                <p>Staff</p>
              </div>
              <div class="icon">
                <i class="fa fa-bandcamp"></i>
              </div>
              <a href="staff_manage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
      <?php } ?>



              <!-- /// -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <?php echo $leave_count ?></h3>
              <p>Leave Request</p>
            </div>
            <div class="icon">
              <i class="fa fa-times-rectangle"></i>
            </div>
            <a href="leave_request.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  </div>


      <!-- chart -->



<hr>

<?php 
// new customer
$rs1 = GetDataById('registration','exprience_level','startup');
$startup_count = $rs1->num_rows;

$rs2 = GetDataById('registration','exprience_level','existing');
$existing_count = $rs2->num_rows;

$rs3 = GetDataById('registration','exprience_level','special');
$special_count = $rs3->num_rows;

$sum1 = $startup_count+$existing_count+$special_count;

// analyzed


$sql4 = "SELECT * FROM `registration` WHERE `exprience_level`='startup' and `analized`='yes'";
$rs4 = $connect->query($sql4);
$an_startup_count = $rs4->num_rows;

$sql5 = "SELECT * FROM `registration` WHERE `exprience_level`='existing' and `analized`='yes'";
$rs5 = $connect->query($sql5);
$an_existing_count = $rs5->num_rows;

$sql6 = "SELECT * FROM `registration` WHERE `exprience_level`='special' and `analized`='yes'";
$rs6 = $connect->query($sql6);
$an_special_count = $rs4->num_rows;

$sum2 = $an_startup_count+$an_existing_count+$an_special_count;



// ready for training

$sql7 = "SELECT * FROM `registration` WHERE `exprience_level`='startup' and `ready_for_training`='yes'";
$rs7 = $connect->query($sql7);
$tr_startup_count = $rs7->num_rows;

$sql8 = "SELECT * FROM `registration` WHERE `exprience_level`='existing' and `ready_for_training`='yes'";
$rs8 = $connect->query($sql8);
$tr_existing_count = $rs8->num_rows;

$sql9 = "SELECT * FROM `registration` WHERE `exprience_level`='special' and `ready_for_training`='yes'";
$rs9 = $connect->query($sql9);
$tr_special_count = $rs9->num_rows;

$sum3 = $tr_startup_count+$tr_existing_count+$tr_special_count;

?>

<?php if($_SESSION['role']=='admin' || $_SESSION['role']=='analyst' || $_SESSION['role']=='relation' || $_SESSION['role']=='promotion'){ ?>
  <div class="row">
      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name', 'Start Up', 'Existing', 'Special','Total'],
          ['New Customer', '<?php echo $startup_count ?>', '<?php echo $existing_count ?>','<?php echo $special_count ?>' ,'<?php echo $sum1; ?>'],
          ['Analyzed Customer','<?php echo $an_startup_count ?>' , '<?php echo $an_existing_count ?>', '<?php echo $an_special_count ?>','<?php echo $sum2; ?>'],
          ['Ready For Training', '<?php echo $tr_startup_count ?>', '<?php echo $tr_existing_count ?>', '<?php echo $tr_special_count ?>','<?php echo $sum3; ?>'],
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Start Up, Existing, Special',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    </div>

    <?php } ?>

          <div id="columnchart_material" style="width:100;height:500px;"></div>
<!-- /google chart-->

