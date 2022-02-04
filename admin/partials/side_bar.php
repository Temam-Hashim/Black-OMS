<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../images/blank.png" class="img-responsive img-circle" alt="User Image" style="width:40px;height:40px">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

<!-- index -->

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
      <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

<?php if($_SESSION['role']=='admin'){ ?>

        
<!-- Users -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user_view.php"><i class="fa fa-circle-o"></i>Manage Users</a></li>
            <li><a href="user_add.php"><i class="fa fa-circle-o"></i>Add New User</a></li>
          </ul>
        </li>

<!-- department -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="department_manage.php"><i class="fa fa-circle-o"></i>Manage Department</a></li>
            <li><a href="department_add.php"><i class="fa fa-circle-o"></i>Add New Department</a></li>
          </ul>
        </li>

        <!-- Staff -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="staff_manage.php"><i class="fa fa-circle-o"></i>Manage Staff</a></li>
            <li><a href="staff_add.php"><i class="fa fa-circle-o"></i>Add new Staff</a></li>
          </ul>
        </li>
        <!-- Salary -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Salary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="salary_manage.php"><i class="fa fa-circle-o"></i>Manage Salary</a></li>
            <li><a href="salary_add.php"><i class="fa fa-circle-o"></i>Add New Salary</a></li>
          </ul>
        </li>
   <!-- manage attendance -->
   <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="attendance_manage.php"><i class="fa fa-circle-o"></i>Manage Attendance</a></li>
            <li><a href="attendance_add.php"><i class="fa fa-circle-o"></i>Add Attendance</a></li>
             <!--<li><a href="leave_request.php"><i class="fa fa-circle-o"></i>Request Leave</a></li> -->
          </ul>
        </li>
        <!-- leave section -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Leave</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="leave_approve.php"><i class="fa fa-circle-o"></i>Approve Leave</a></li>
            <li><a href="leave_history.php"><i class="fa fa-circle-o"></i>Leave History</a></li>
            <li><a href="leave_request.php"><i class="fa fa-circle-o"></i>Request Leave</a></li>
          </ul>
        </li>

            <!-- operation department -->
            <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Operation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_manage.php"><i class="fa fa-circle-o"></i>View All Customer</a></li>
            <li><a href="customer_manage.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
            <li><a href="customer_manage.php?status='existing'"><i class="fa fa-circle-o"></i>View Existing</a></li>
            <li><a href="customer_manage.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li>
          </ul>
        </li>
        <!-- analyst -->
                    <!-- operation department -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Analyst</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_analysis.php"><i class="fa fa-circle-o"></i>View All Customer</a></li>
            <li><a href="customer_analysis.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
            <li><a href="customer_analysis.php?status='existing'"><i class="fa fa-circle-o"></i>View Existing</a></li>
            <li><a href="customer_analysis.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li>
          </ul>
        </li>
        <!-- role -->

        <li>
          <a href="role_manage.php">
            <i class="fa fa-th"></i> <span>Manage Role</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li>
    
<?php } else if($_SESSION['role']=='reception') { ?>
        <!-- reception -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Reception</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_add.php"><i class="fa fa-circle-o"></i>Add New Customer</a></li>
          </ul>
        </li>


<?php } else if($_SESSION['role']=='relation') { ?>
        <!-- operation department -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Relation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_manage.php"><i class="fa fa-circle-o"></i>View All Customer</a></li>
            <li><a href="customer_manage.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
            <li><a href="customer_manage.php?status='existing'"><i class="fa fa-circle-o"></i>View Existing</a></li>
            <li><a href="customer_manage.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li>
          </ul>
        </li>
   <?php } else if($_SESSION['role']=='startup relation') { ?>
        <!-- operation department -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Start Up Relation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_manage.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
          </ul>
        </li>
   <?php } else if($_SESSION['role']=='existing relation') { ?>
        <!-- operation department -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Existing Relation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_manage.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
 
          </ul>
        </li>

   <?php } else if($_SESSION['role']=='special relation') { ?>
        <!-- operation department -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Special Relation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_manage.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li>
          </ul>
        </li>
        
 
  <?php } else if($_SESSION['role']=='analyst' || $_SESSION['role']=='promotion') { ?>
            <!-- analyst -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>
            <?php if($_SESSION['role']=='promotion' ){
                echo "Promotion";
                }else{
                echo "Analyst";
              } ?>
            </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_analysis.php"><i class="fa fa-circle-o"></i>View All Customer</a></li>
            <li><a href="customer_analysis.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
            <li><a href="customer_analysis.php?status='existing'"><i class="fa fa-circle-o"></i>View Existing</a></li>
            <li><a href="customer_analysis.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li>
          </ul>
        </li>
  <?php } else if($_SESSION['role']=='startup analyst') { ?>
            <!-- analyst -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Analyst</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="customer_analysis.php"><i class="fa fa-circle-o"></i>View All Customer</a></li> -->
            <li><a href="customer_analysis.php?status='startup'"><i class="fa fa-circle-o"></i>View Start Up</a></li>
            <!-- <li><a href="customer_analysis.php?status='existing'"><i class="fa fa-circle-o"></i>View Existing</a></li>
            <li><a href="customer_analysis.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li> -->
          </ul>
        </li>
   <?php } else if($_SESSION['role']=='existing analyst') { ?>
            <!-- analyst -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Analyst</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_analysis.php?status='existing'"><i class="fa fa-circle-o"></i>View Existing</a></li>
          </ul>
        </li>
        <?php } else if($_SESSION['role']=='special analyst') { ?>
            <!-- analyst -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Analyst</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customer_analysis.php?status='special'"><i class="fa fa-circle-o"></i>View Special</a></li>
          </ul>
        </li>
        

<?php } else if($_SESSION['role']=='finance') { ?>

          <!-- Salary -->

          <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Salary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="salary_manage.php"><i class="fa fa-circle-o"></i>Manage Salary</a></li>
            <li><a href="salary_add.php"><i class="fa fa-circle-o"></i>Add New Salary</a></li>
          </ul>
        </li>

  <!-- maange attendance -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="attendance_manage.php"><i class="fa fa-circle-o"></i>Manage Attendance</a></li>
            <li><a href="attendance_add.php"><i class="fa fa-circle-o"></i>Add Attendance</a></li>
             <!--<li><a href="leave_request.php"><i class="fa fa-circle-o"></i>Request Leave</a></li> -->
          </ul>
        </li>
 <?php } else if($_SESSION['role']=='attendance') { ?>
          <!-- maange attendance -->
       <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="attendance_manage.php"><i class="fa fa-circle-o"></i>Manage Attendance</a></li>
            <li><a href="attendance_add.php"><i class="fa fa-circle-o"></i>Add Attendance</a></li>
             <!--<li><a href="leave_request.php"><i class="fa fa-circle-o"></i>Request Leave</a></li> -->
          </ul>
        </li>
<?php } ?>



      <li>
          <a href="leave_request.php">
            <i class="fa fa-th"></i> <span>Leave Request</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li>

          <a href="../logout.php">
            <i class="fa fa-th"></i> <span>Logout</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">out</small>
            </span>
          </a>
        </li>

        <li>



     <!--



        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>



         <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li> -->


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>