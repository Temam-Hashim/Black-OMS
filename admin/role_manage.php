<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<script>return window.history.go(-1)</script>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Role</li>
      </ol>
    </section>

    <?php
          // delete skill
          if(isset($_GET['delete_id'])){
            $delete_id = $_GET['delete_id'];
            $d_sql = "DELETE FROM `role` WHERE role_id='$delete_id'";
            $d_result = $connect->query($d_sql);
            if($d_result){
              echo "<script>
              alert('Role Deleted Successfully');
              window.location.href='role_manage.php';
            </script>";
            }else{
              echo "<div class='alert alert-danger'>Sorry Cannot Delete this Role</div>";
              header("Location:role_manage.php");
            }
          }
     
         ?>
<div class="row">
  <!-- <div class="col-md-1"></div> -->
  <div class="box">
      <div class="box-header  text-center">
        <h3 class="box-title text-primary">Manage Role</h3>
    </div>
  <div class="col-md-6">
    <div class="row text-center">
        <form action="" method="post">
            <input type="submit" class="btn btn-primary btn-lg" name="add_role" value="ADD NEW ROLE">
        </form><hr>
    </div>
 
    <div class="box-body table-responsive col-md-12">
      <table id="example1" class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Role Name</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          
               $result = GetRole();
               while($row = $result->fetch_assoc()){?>

          <tr>
            <td><?php echo $row['role_id']; ?></td>
            <td><?php echo $row['role_name']; ?></td>
            <td><a class="btn btn-info btn-sm" href="role_manage.php?edit_id=<?php echo $row['role_id'];?>">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="role_manage.php?delete_id=<?php echo $row['role_id'];?>">Delete</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>

  <?php if(isset($_POST['add_role'])){?>
  <div class="col-md-5">
    <h3 class="text-info text-center">New Role</h3>
    <form action="" method="post">
      <div class="form-group">
        <label>Role Name</label>
        <input type="text" class="form-control" name="role_name">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-md btn-primary" name="submit" value="Submit">
      </div>
    </form>

  </div>
  <?php } ?>

  <?php if(isset($_GET['edit_id'])){
    $edit_id = $_GET['edit_id'];
    $sql2 = "SELECT * from `role` where role_id='$edit_id'";
    $result2 = $connect->query($sql2);
    $row2 = $result2->fetch_array();
  ?>
  <div class="col-md-5">
    <h3 class="text-info text-center">Update Skill</h3>
    <form action="" method="post">
      <input type="hidden" name="role_id" value="<?php echo $row2['role_id'];?>">
      <div class="form-group">
        <label>Role Name</label>
        <input type="text" class="form-control" name="role_name" value="<?php echo $row2['role_name'];?>">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-md btn-primary" name="update" value="Update">
      </div>
    </form>

  </div>
  <?php } ?>
  <div class="col-md-1"></div>
</div>

<?php
// insert new skill

if(isset($_POST['submit'])){
  $role_name = $connect->real_escape_string($_POST['role_name']);

  $sql3 = "INSERT INTO `role`(`role_name`)VALUES('$role_name')";
  $result3 = $connect->query($sql3);
  if($result3){
    echo "<script>
          alert('Role Added Successfully');
          window.location.href='role_manage.php';
        </script>";
  }else{
    echo "<script>
          alert('Role Not Added. Please Try Again.');
        </script>";
        echo mysqli_error($connect);
  }
}

// Update new skill

if(isset($_POST['update'])){
  $role_id = $connect->real_escape_string($_POST['role_id']);
  $role_name = $connect->real_escape_string($_POST['role_name']);

  $sql4 = "UPDATE `role` SET `role_name`='$role_name' WHERE `role_id`='$role_id'";
  $result4 = $connect->query($sql4);
  if($result4){
    echo "<script>
          alert('Role Updated Successfully');
          window.location.href='role_manage.php';
        </script>";
  }else{
    echo "<script>
          alert('Role Not Updated. Please Try Again.');
        </script>";
        echo mysqli_error($connect);
  }
}

?>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php require_once 'partials/footer.php'; ?>