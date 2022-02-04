
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>

<style>
  #card-display{
    border:2px 5px 3px 1px;
    border-radius:20px;
    margin:15px;
    padding:15px;
  }

  .img-card{
    width:100px;
    height:100px;
  }
  .btn{
    margin-left:30px;
    margin-right:20px;
    margin-top:20px;
  }
</style>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Attendnace</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Attendance</li>
      </ol>
    </section>

    <?php
    if(isset($_GET['analysis_id'])){
      $id = $_GET['analysis_id'];
      $att_date =$_GET['att_date'];


      $sql = "SELECT * from `attendance` as att inner join `staff` as st where st.st_name='$id'";
      $res = $connect->query($sql);
      $row = $res->fetch_array(); 
    }
    ?>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-4">
  <div class="card text-center bg-gray" id="card-display">
        <img class="card-img-top img-resposive img-circle img-card" src="../images/<?php echo $row['st_pic'] ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['st_name']; ?></h5>
          <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $row['st_email']; ?></li>
          <li class="list-group-item"><?php echo $row['st_mobile']; ?></li>
          <li class="list-group-item"><?php echo $row['dept']; ?></li>
          <li class="list-group-item"><?php echo $row['position']; ?></li>
        </ul>
      <div class="card-body text-center">
          <a href="attendance_manage.php" class="btn btn-sm btn-primary">Attendnace</a>
          <a href="salary_manage.php" class="btn btn-sm btn-info">Salary</a>
      </div>


    </div>
  </div>
  
  <div class="col-md-6">

  <?php  
       // query 2 for present

       $sql2 = "SELECT * from `attendance` where `st_name`='$id' and `status`='P' and  SUBSTRING(`at_date`,1,7)='$att_date'";
       $res2 = $connect->query($sql2);
       $no_of_prsent = $res2->num_rows;
 
           // query 2 for present
 
       $sql3 = "SELECT * from `attendance` where `st_name`='$id' and `status`='A' and SUBSTRING(`at_date`,1,7)='$att_date'";
       $res3 = $connect->query($sql3);
       $no_of_absent = $res3->num_rows;

  ?>

     <div class="box">
        <div class="box-header">
          <h3 class="box-title">Attednance Analysis</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Month-Year</th>
              <th>No of Present</th>
              <th>No of Absent</th>
              <th>Present %</th>
              <th>Abasent %</th>
            </tr>
            </thead>
            <tbody>

            <tr>
              <td><?php echo $att_date; ?></td>
              <td><?php echo $no_of_prsent; ?></td>
              <td><?php echo $no_of_absent; ?></td>
              <td><?php echo ($no_of_prsent*100)/($no_of_prsent+$no_of_absent)  ?>%</td>
              <td><?php echo ($no_of_absent*100)/($no_of_prsent+$no_of_absent)  ?>%</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

  </div>
  <div class="col-md-1"></div>
</div>


    <!-- Main content -->
    <section class="content">

  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'partials/footer.php'; ?>