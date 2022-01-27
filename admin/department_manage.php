<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Departments
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Department</li>
      </ol>
    </section>



    <!-- Main content -->
            <section class="content">

            <!-- implementation -->


                     <?php
                      if(isset($_GET['message'])){
                          echo $_GET['message'];
                      }
                      // <!-- delete department -->
                        if(isset($_GET['delete_id'])){
                        Delete('departments','dpt_id',$_GET['delete_id'],'department_manage.php');
                        }

                          // <!-- edit Department -->
                        if(isset($_GET['edit_id'])){
                          $edit_id = $_GET['edit_id'];
                          $result = GetDataById('departments','dpt_id',$edit_id);
                          $row = $result->fetch_array();

                        //  update department
                        if(isset($_POST['up_dept'])){
                          $dp_name = mysqli_real_escape_string($connect,$_POST['dp_name']);
                          UpdateDepartment($dp_name,$edit_id);
                        }
                      ?>
                        <form action="" class="form-inline" method="post">
                            <div class="form-group mb-2 mr-20" >
                            <label for="title"></label>
                              <input type="text" class="form-control" name='dp_name' value='<?php echo $row['dpt_name']?>'>
                              <input type="submit" class="btn btn-primary" value="Update Department" name="up_dept">
                           </div>
                        </form>
                        <?php } ?>
                      <!-- add department button -->
                      <div class="row text-right mx-auto" style="margin-right:15px">
                        <a href="department_add.php" class="btn btn-md btn-primary mr-200" name="add_dp">Add New Department</a>
                        </div>

                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Manage Department</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.Id</th>
                          <th>Department Name</th>
                          <th>Created</th>
                          <th >Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php
                                $RES = GetDepartment();
                                while($DP_ROW = $RES->fetch_assoc()){
                                $dp_id =  $DP_ROW['dpt_id'];
                              ?>
                              <tr>
                                  <td><?php echo $DP_ROW['dpt_id']; ?></td>
                                  <td><?php echo $DP_ROW['dpt_name']; ?></td>
                                  <td><?php echo $DP_ROW['created']; ?></td>

                                  <td><a href="department_manage.php?edit_id=<?php echo $dp_id;?>" class="btn btn-primary">Edit</a></td>
                                  <td><a href="department_manage.php?delete_id=<?php echo $dp_id;?>" class="btn btn-danger">Delete</a></td>

                              </tr>
                              <?php } ?>

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.Id</th>
                          <th>Department Name</th>
                          <th>Created</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                 </div>

            </section>
    <!-- /.content -->
</div>


<?php require_once 'partials/footer.php'; ?>