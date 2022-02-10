
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Department
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Department</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title text-primary">Add New Department</h3>
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
                                    <label for="title">Department Name</label>
                                    <input type="text" class="form-control" name="dp_name" placeholder="Department Name" value="<?php echo InputValue('dp_name'); ?>">
                                </div>
                              <div class=" box-footer text-right">
                                <input class="btn btn-primary" type="submit" name="add_dp" value="Add Department" >
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
     if(isset($_POST['add_dp'])) {
        // mysqli_real_escape_string($connect,
        $dp_name = mysqli_real_escape_string($connect,$_POST['dp_name']);
       
// check if department exist
        $res = GetDataById('departments', 'dpt_name', $dp_name);
        $count = $res->num_rows;

        if($count==0){
          AddDepartment($dp_name);
        }else{
          echo "<script>alert('This Department Already Exists')</script>";
        }

}

?>
  <?php require_once 'partials/footer.php'; ?>