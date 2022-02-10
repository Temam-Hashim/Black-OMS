
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       View Users
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
    // info message
        if(isset($_GET['message'])){
          echo $_GET['message'];
        }
        // delete data
          if(isset($_GET['delete_id'])){
            Delete('users','id',$_GET['delete_id'],'user_view.php');
          }
      
          
      ?>

    <!-- add user button -->
    <div class="row text-right mx-auto" style="margin-right:15px">
    <a href="user_add.php" class="btn btn-md btn-primary mr-200" name="add_salary">Add New User</a>
    </div>

    <div class="box">
            <div class="box-header with-border text-center">
              <h3 class="box-title text-primary">Manage System Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>S.No</th>
                  <th>UserName</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Created</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                  <?php 
                      $res = GetUsers();
                      while($row = $res->fetch_assoc()){
                        $u_id = $row['id'];
                    ?>
                 <tr>
                    <td><?php echo $u_id?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['role']?></td>
                    <td><?php echo $row['created']?></td>
                    <td><a class="btn btn-info" href="user_edit.php?edit_id=<?php echo $u_id?>">Edit</a></td>
                    <td><a href="user_view.php?delete_id=<?php echo $u_id;?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
              
             
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>UserName</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Created</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'partials/footer.php'; ?>