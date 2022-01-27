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
                         Delete('staff','st_id',$_GET['delete_id'],'staff_manage.php');
                        }
                      ?>

                      <!-- add department button -->
                      <div class="row text-right mx-auto" style="margin-right:15px">
                        <a href="staff_add.php" class="btn btn-md btn-primary mr-200" name="add_dp">Add New Staff</a>
                        </div>

                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Manage Staff</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>S.Id</th>
                          <th>Name</th>
                          <th>profile</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>DOB</th>
                          <th>Martial Status</th>
                          <th>Address</th>
                          <th>Join Date</th>
                          <th>Department</th>
                          <th>Position</th>
                          <th>Qualification</th>
                          <th>Salary</th>
                          <th>Contract</th>
                          <th>Bank Name</th>
                          <th>Acount No</th>
                          <th style="color:'green',fon-style:'italic'">Status</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php
                                $RES = GetStaff();
                                while($row = $RES->fetch_assoc()){
                                $dp_id =  $row['st_id'];

                              ?>
                              <tr>
                                  <td><?php echo $row['st_id']; ?></td>
                                  <td><?php echo $row['st_name']; ?></td>
                                  <td><img src="../images/<?php echo $row['st_pic']; ?>" alt="Pic" class="img-responsive img-circle"></td>
                                  <td><?php echo $row['st_mobile']; ?></td>
                                  <td><?php echo $row['st_email']; ?></td>
                                  <td><?php echo $row['st_gender']; ?></td>
                                  <td><?php echo $row['st_dob']; ?></td>
                                  <td><?php echo $row['martial_status']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                  <td><?php echo $row['date_of_joining']; ?></td>
                                  <td><?php echo $row['dept']; ?></td>
                                  <td><?php echo $row['position']; ?></td>
                                  <td><?php echo $row['qualification']; ?></td>
                                  <td><?php echo $row['salary']; ?></td>
                                  <td><?php echo $row['contract']; ?></td>
                                  <td><?php echo $row['bank_name']; ?></td>
                                  <td><?php echo $row['acount_no']; ?></td>
                                  <td><?php echo $row['status']; ?></td>
                                  <td><a href="staff_edit.php?edit_id=<?php echo $dp_id;?>" class="btn btn-primary">Edit</a></td>
                                  <td><a href="staff_manage.php?delete_id=<?php echo $dp_id;?>" class="btn btn-danger">Delete</a></td>

                              </tr>
                              <?php } ?>

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>S.Id</th>
                          <th>Name</th>
                          <th>profile</th>
                          <th>Mobile</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>DOB</th>
                          <th>Martial Status</th>
                          <th>Address</th>
                          <th>Join Date</th>
                          <th>Department</th>
                          <th>Position</th>
                          <th>Salary</th>
                          <th>Contract</th>
                          <th>Bank Name</th>
                          <th>Acount No</th>
                          <th style="color:'green',fon-style:'italic'">Status</th>
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