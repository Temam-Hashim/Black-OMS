<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
<!-- index -->
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        
<!-- Users -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="user_view.php"><i class="fa fa-circle-o"></i>Manage Department</a></li>
            <li><a href="user_add.php"><i class="fa fa-circle-o"></i>Add New Department</a></li>
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
        <!-- break leav or parmanet -->

        <!-- <li>
          <a href="view_users.php">
            <i class="fa fa-th"></i> <span>Users</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">5</small>
            </span>
          </a>
        </li>

        <li>
          <a href="add_customer.php">
            <i class="fa fa-th"></i> <span>Customer registration</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">5</small>
            </span>
          </a>
        </li> -->

        <li>
          <a href="partials/logout.php">
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