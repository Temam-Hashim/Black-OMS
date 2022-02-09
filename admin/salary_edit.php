
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Salary
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Salary</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title text-primary">Add New Salary</h3>
            </div>

           <?php
           if(isset($_GET['message'])){
              echo $_GET['message'];
           }
          //  get data by id for update
           if(isset($_GET['edit_id'])){
             $id = $_GET['edit_id'];
             $res = GetDataById('salary','sl_id',$id);
             $row = $res->fetch_array();
           }
           ?>


              <div class="row">
                  <div class="col-xs-1"></div>

                      <div class="box-body col-xs-10">
                      <div class="box-body table-responsive">
                        <form action="" method="POST">
                         <input type="hidden" name="id" value=<?php echo $row['sl_id'];?>>
                          
                            <table id="" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Staff Name</th>
                                <th>Basic Salary</th>
                                <th>Allowance</th>
                                <th>No of Day</th>
                                <th>tax</th>
                                <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>  
                                <td><?php echo $row['name']; ?></td>
                                <td><input type="text" class="form-control" name="basic_salary" value="<?php echo $row['basic_salary']?>"></td>
                                <td><input type="text" class="form-control" name="allowance" value="<?php echo $row['allowance']?>"></td>
                                <td><input type="text" class="form-control" name="total_date" value="<?php echo $row['total_date']?>"></td>
                                <td>
                                    
                                  <select name="tax" id="tax" class="form-control">
                                    <option value="<?php echo $row['tax'] ?>"><?php echo $row['tax'] ?></option>
                                    <option value="0">0</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                  </select>
                                </td>
                                <td><input type="submit" class="btn btn-primary" name="update_salary" value="Update"></td>
                              </tr>
                              </tbody>
                            </table>
                          </form>
                        </div>

                      </div>
                <div class="col-xs-1"></div>
            </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
     if(isset($_POST['update_salary'])) {
        $id = $_POST['id'];
        $basic = mysqli_real_escape_string($connect,$_POST['basic_salary']);
        $allowance = mysqli_real_escape_string($connect,$_POST['allowance']);
        $tax = mysqli_real_escape_string($connect,$_POST['tax']);
        $total_date = mysqli_real_escape_string($connect,$_POST['total_date']);
    

       UpdateSalary($id,$basic,$allowance,$tax,$total_date);
  
}

?>
<?php require_once 'partials/footer.php'; ?>