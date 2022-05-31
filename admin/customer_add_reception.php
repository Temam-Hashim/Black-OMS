
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Customer
        <small>Customer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section><hr>

    <!-- Main content -->
    <section class="content form-container">
      <?php
      if(isset($_GET['message'])){
        echo $_GET['message'];
      }
      ?>


    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="title" class="text-center">Full Name</label>
            <div class="row">
              <!-- <div class="col-md-1"></div> -->
              <div class="col-md-4">
                <small>first name</small>
                <input type="text" class="form-control" name="fname" value="<?php echo InputValue('fname'); ?>" required>
              </div>
              <div class="col-md-4">
              <small>middle name</small>
                <input type="text" class="form-control" name="mname" value="<?php echo InputValue('mname'); ?>" required>
              </div>
              <div class="col-md-4">
              <small>last name</small>
                <input type="text" class="form-control" name="lname" value="<?php echo InputValue('lname'); ?>" required>
              </div>
            </div>
        </div>

        <div class="row">
          <!-- first column -->
                <div class="form-group col-md-6">
                   <label for="post_content">Email</label>
                   <input type="email" class="form-control" name="email" value="<?php echo InputValue('email'); ?>" >
                </div>
                <div class="form-group col-md-6">
                  <label for="post_content">Mobile No</label>
                  <input type="text" class="form-control" name="mobile" value="<?php echo InputValue('mobile'); ?>" required>
              </div>
        </div>

        <div class="row">
              <div class="form-group col-md-6">
                  <label for="post_content">Gender</label>
                  <select name="gender" id="gender" class="form-control" required>
                    <option value="">Select</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                  </select>
              </div>

              <div class="form-group col-md-6">
                  <label for="post_content">Age</label>
                  <select name="age" id="age" class="form-control" required>
                    <option value="">Select</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="35-50">35-50</option>
                    <option value="50-above">50-above</option>
                  </select>
              </div>

          </div>
              
          <div class="row">
        
          <div class="form-group col-md-6">
                    <label for="post_content">Martial Status</label>
                    <select name="ms" id="ms" class="form-control" required>
                      <option value="">Select</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                    </select>
                </div>
                <!--  employement type -->
                <div class="form-group col-md-6">
                    <label for="">Occupation</label>
                    <select name="occupation" id="occupation" class="form-control">
                      <option value="UnEmployed">UnEmployed</option>
                      <option value="Self Employee">Self Employee</option>
                      <option value="Govt Organization">Govt Organization</option>
                      <option value="Private Company">Private Company</option>
                      <option value="NGO">NGO</option>
                      <option value="Student">Student</option>
                    </select>
                  </div>

          </div>  
              



        <!-- current address -->

        <div class="form-group">
            <label for="title" class="text-center">Current Address</label>
            <div class="row">
              <!-- <div class="col-md-1"></div> -->

              <div class="col-md-4">
                <small>City</small>
                <input type="text" class="form-control" name="city" value="<?php echo InputValue('city'); ?>" required>
                <small>Kebale</small>
                <input type="text" class="form-control" name="kebale" value="<?php echo InputValue('kebale'); ?>">
              </div>

              <div class="col-md-4">
              <small>Sub City</small>
                <input type="text" class="form-control" name="subcity" value="<?php echo InputValue('subcity'); ?>">
                <small>House No</small>
                <input type="text" class="form-control" name="houseno" value="<?php echo InputValue('houseno'); ?>">
              </div>

              <div class="col-md-4">
              <small>Werada</small>
                <input type="text" class="form-control" name="werada" value="<?php echo InputValue('werada'); ?>">
                <small>PIN Code</small>
                <input type="text" class="form-control" name="pincode" value="<?php echo InputValue('pincode'); ?>">
              </div>

            </div>
        </div>

      <div class="form-group text-center">
         <input class="btn btn-primary btn-lg btn-block" type="submit" name="add_customer" value="Register Customer">
     </div><hr>


</form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php
    // $job_seeker_id = time().getmypid();
    // echo "<script>alert($job_seeker_id)</script>";
  function Escape($value){
    global $connect;
    return mysqli_real_escape_string($connect,$value);
  }


     if(isset($_POST['add_customer'])) {

        
        $fname   = Escape($_POST['fname']);
        $mname   = Escape($_POST['mname']);
        $lname   = Escape($_POST['lname']);

        $email    = Escape($_POST['email']);
        $mobile   = Escape($_POST['mobile']);
        $gender    = Escape($_POST['gender']);
        $age    =   Escape($_POST['age']);

        $martial_status = Escape($_POST['ms']);

        // occupation
        $occupation    =   Escape($_POST['occupation']);


        //current address
        $city = Escape($_POST['city']);
        $subcity = Escape($_POST['subcity']);
        $werada = Escape($_POST['werada']);
        $kebale = Escape($_POST['kebale']);
        $houseno = Escape($_POST['houseno']);
        $pincode = Escape($_POST['pincode']);

        $current_address = $city.", ".$subcity.", ".$werada.", ".$kebale.", ".$houseno.", ".$pincode;
        $job_seeker_id = time();
        

        $res = GetDataById('registration', 'c_mobile',$mobile);
        $count = $res->num_rows;
        if($count==0){
          $sql = "INSERT INTO `registration`(`f_name`, `m_name`, `l_name`, `c_email`, `c_mobile`, 
          `gender`, `age`, `martial_status`, `occupation`, `current_address`, `job_seeker_id`)

           VALUES ('$fname','$mname','$lname','$email','$mobile','$gender','$age','$martial_status',
                  '$occupation','$current_address','$job_seeker_id')";

            $res = $connect->query($sql); 

            if($res){
              $message = "<div class='alert alert-success text-center'><b>$fname $mname $lname</b> has successfully Registered and has been forwarded Reltional Department.</div>";
              header("Location:customer_add_reception.php?message=$message");
            }else{
              $dat = mysqli_error($connect);
              echo $dat;
              $message = "<div class='alert alert-danger text-center'>Failed to register this customer. Please try again!</div> ".$dat;
               header("Location:customer_add_reception.php?message=$message");
            }

        }else{
          echo "<script>alert('User with this $mobile already exist!')</script>";
        }

        // get last inserted id of the customer for the emergency contact to be matched.


}

?>

<script>
    $('#expSelector').change(function(){
    if($(this).val()==="existing")
        $('.hidyear').show();
        else
            $('.hidyear').hide();
    }).change();

    $('.expSelector').change(function(){
    if($(this).val()==="special")
        $('.hidspecial').show();
        else
            $('.hidspecial').hide();
    }).change();

    // hide permanet address
    $('#check_address').change(function(){
    if($(this).val()==="yes")
        $('#permanetAddress').hide();
        else
          $('#permanetAddress').show();
    }).change();

    

       // display education level
       $('#educational_bg').change(function(){
    if($(this).val()==="Educated")
        $('#education_level').show();
        else
          $('#education_level').hide();
    }).change();

    // employment
    $('#occupation').change(function(){
    if($(this).val()==="Employed")
        $('#employment_type').show();
        else
          $('#employment_type').hide() && $('#salary_range').hide() && $('#self_employment_type').hide()
    }).change();

    // salry
    $('#employment_type').change(function(){
    if($(this).val()==="Self Employee")
        $('#self_employment_type').show() && $('#salary_range').hide() &&  $('#label_2').hide() &&  $('#label_1').show()
        else
          $('#salary_range').show() && $('#self_employment_type').hide() && $('#label_1').hide() &&  $('#label_2').show()
    }).change();

    // father occupation status change
    $('#father_occupation').change(function(){
    if($(this).val()!=="Self Employee")
        $('#father_self_employee_type').hide();
        else
          $('#father_self_employee_type').show();
    }).change();
 // mother occupation status change
 $('#mother_occupation').change(function(){
    if($(this).val()!=="Self Employee")
        $('#mother_self_employee_type').hide();
        else
          $('#mother_self_employee_type').show();
    }).change();

    // sibbling status change
     // mother occupation status change
 $('#have_sibbling').change(function(){
    if($(this).val()!=="yes")
        $('#brother_no').hide() && $('#sister_no').hide() && $('#brother_marriage_status').hide() && $('#sister_marriage_status').hide();
        else
        $('#brother_no').show() && $('#sister_no').show() && $('#brother_marriage_status').show() && $('#sister_marriage_status').show();
    }).change();

    // marriage status of brother and sister
    $('#brother_marriage_status').change(function(){
    if($(this).val()==="Unmarried")
        $('#brother_wife_occupation').hide();
        else
          $('#brother_wife_occupation').show();
    }).change();

    $('#sister_marriage_status').change(function(){
    if($(this).val()==="Unmarried")
        $('#sister_husband_occupation').hide();
        else
          $('#sister_husband_occupation').show();
    }).change();

   

</script>

  <?php require_once 'partials/footer.php'; ?>