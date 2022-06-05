<style>
body{
  background-color: black;
}
  </style>
<?php require_once("partials/header.php");?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once("partials/side_bar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

  <!-- Display status message -->
<?php if(!empty($message)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $message; ?>"><?php echo $message; ?></div>
</div>
<?php } ?>

<div class="row mt-5">
    <div class="col-md-4">

    </div>
    <!-- Import link -->
    <div class="col-md-4 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Press to import Excel File</a>
        </div>
        <p ><a class="btn btn-lg" href="index.php">Back to main</a></p>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="" method="post" enctype="multipart/form-data" class="text-center">
          <div class="form-group">
            <input type="file" name="file" class="form-control" />
          </div>
            <input class=" m-5 p-5 btn btn-primary btn-lg btn-block" type="submit" name="importSubmit" value="Import Excel"> 
        </form>
    </div>

    
</div>


    </section>
    <!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($csv = fgetcsv($csvFile,10000,",")) !== FALSE){
                // Get row data
              $f_name               = $csv[1];
              $m_name               = $csv[2];
              $l_name               = $csv[3];
              $c_email              = $csv[4];
              $c_mobile             = $csv[5];
              $gender               = $csv[6];
              $dob                  = $csv[7];
              $age                  = $csv[8];
              $birth_place          = $csv[9];
              $martial_status       = $csv[8];
              $nationality          = $csv[11];
              $current_address      = $csv[12];
              $permanent_address    = $csv[13];
              $education_background = $csv[14];
              $education_level      = $csv[15];
              $occupation           = $csv[16];
              $employment_type      = $csv[17];
              $salary_range         = $csv[18];
              $exprience_level      = $csv[19];
              $exprience_year       = $csv[20];
              $emergency_contact    = $csv[21];
              $mother_name          = $csv[22];
              $father_occupation    = $csv[23];
              $mother_occupation    = $csv[24];
              $family_relation      = $csv[25];
              $sibbling_detail      = $csv[26];
              $religion             = $csv[27];
              $language             = $csv[28];
              $job_seeker_id        = $csv[29];
              $analized             = $csv[30];
              $ready_for_training   = $csv[31];
              $created              = $csv[32];
              $registered_by        = $csv[33];
              $payment              = $csv[34];
              
              $sql="INSERT INTO `registration`(`f_name`, `m_name`, `l_name`, `c_email`, `c_mobile`, 
                    `gender`, `dob`, `age`, `birth_place`, `martial_status`, `occupation`, `nationality`, 
                    `current_address`, `permanent_address`, `emergency_contact`, `education_background`, 
                    `salary_range`, `exprience_level`, `exprience_year`,`education_level`, `employment_type`,
                    `mother_name`,`mother_occupation`,`father_occupation`,`sibbling_detail`,`religion`,`language`,
                    `family_relation`,`job_seeker_id`,`analized`,`ready_for_training`,`created`,`registered_by`,`payment`)

                    VALUES ('$f_name','$m_name','$l_name','$c_email','$c_mobile','$gender','$dob','$age',
                    '$birth_place','$martial_status','$occupation','$nationality','$current_address',
                    '$permanent_address','$emergency_contact','$education_background','$salary_range',
                    '$exprience_level','$exprience_year','$education_level','$employment_type','$mother_name',
                    '$mother_occupation','$father_occupation','$sibbling_detail','$religion','$language',
                    '$family_relation','$job_seeker_id','$analized','$ready_for_training','$created',
                    '$registered_by','$payment')";
           
              $result=$connect->query($sql);
             
                if($result){
                  echo "<script>alert('Data Inserted from Excel')</script>";
                }else{
                  echo "<script>alert('Failed to Insert Data Please Try again')</script>";
                  echo mysqli_error($connect);
                  break;
                }
                // Check whether member already exists in the database with the same email
                // $prevQuery = "SELECT id FROM registration WHERE mobail = '".$csv[1]."'";
                // $prevResult = $connect->query($prevQuery);
                
                // if($prevResult->num_rows > 0){
                //     // Update member data in the database
                //     $connect->query("UPDATE members SET name = '".$name."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'");
                // }else{
                //     // Insert member data in the database
                  //  $connect->query("INSERT INTO members (name, email, phone, created, modified, status) VALUES ('".$name."', '".$email."', '".$phone."', NOW(), NOW(), '".$status."')");
                // }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }
        else{
            $message = 'cannot upload please try again';
        }
    }else{
      
    }
}
?>
  <?php require_once 'partials/footer.php'; ?>