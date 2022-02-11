<?php
ob_start();
// include session section here
require_once "session.php";
require_once "db.php";
require_once "function.php";
// import mailer
require_once "phpMailer/mailer.php";
?>

<?php require_once "head.php"; ?>

<style>
  .loader_bg{
    position:fixed;
    z-index: 999999;
    background:#fff;
    width: 100%;
    height: 100%;
  }
  .loader{
    margin-top: 15%;
    margin-left:40%;
    border: 0 solid transparent;
    border-radius:50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top:calc(50vh - 75);
    left:calc(50vw - 75);
  }
  .loader:before, .loader:after{
    content:'';
    border:1rem solid #ff5733;
    border-radius:50%;
    width:inherit;
    height:inherit;
    position:absolute;
    top:0;
    left:0;
    animation: loader 2s linear infinite;
    opacity: 0;
  }
  .loader:before{
    animation-delay:.5s

  }
  @keyframes loader{
    0%{
      transform:scale(0);
      opacity: 0;
    }
    50%{
      opacity: 1;
    }
    100%{
      transform:scale(1);
      opacity: 0;
    }
  }
</style>


<body class="hold-transition skin-blue sidebar-mini">
    <!-- loader -->
<div class="row loader_bg">
      <div class="loader"></div>
 </div>


<div class="wrapper">


  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Bl</b>ack</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Black</b>ADMIN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        <!-- import notification message and task here -->

         <!-- ///import notification message and task here -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/blank.png" class="user-image img-responsive" alt="User Image" style="width:40px;height:40px">
              <span class="hidden-xs">
                <?php echo $_SESSION['username'] ?>
              </span>

              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../images/blank.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']." - ".$_SESSION['role'] ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>



  

<script>
   setTimeout(() => {
     $('.loader_bg').fadeToggle();
     
   }, 3000);
 </script>