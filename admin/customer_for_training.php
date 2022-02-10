<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>

<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Customer
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>

    <!-- Main content -->
            <section class="content">

            <!-- implementation -->

                     <?php
                      if(isset($_GET['message'])){
                          echo $_GET['message'];
                      }

                      if(isset($_GET['send_id'])){
                        $send_id = $_GET['send_id'];
                        $res = GetDataById('registration','c_id',$send_id);
                        $row = $res->fetch_array();
                        $email = $row['c_email'];
                        $c_name = $row['f_name']." ".$row['m_name']." ".$row['l_name'];
                        $exp_level = $row['exprience_level'];

                          // traiing fee
                        if($exp_level=='startup'){
                          $training_fee = 500;
                        }
                        if($exp_level=='existing'){
                          $training_fee = 2000;
                        }
                        if($exp_level=='special'){
                          $training_fee = 4000;
                        }
                        

                        $subject = "Call for Training From Black Financial Solution";
  
                        $body = "<p>Dear $c_name,<br><hr> </p>";
                        $body.= "<p>After reviewing your application for $exp_level level. <br></p>";
                        $body.= "<p>We have found out your experience and data provided to our company is fully fit.<br></p>";
                        $body.= "<p>Hence we have decided to provided you training that will match your next professional journey and lead you the right way of achieving your business.<br></p>";
                        $body.= "Therefor you are requested to pay training fee of Birr. $training_fee with 10 consecutive day to start your training.<br><hr><hr>";
                        $body.=  "<p>FROM BLACK FINANCIAL SOLUTION</p><br>";
                        $body.=  "<p class='bg-danger'>Please do not replay to this email. this is system generated email, for any query please contact us using our contact detail from our offical website.<br><hr></p><br>";
                        $body.=  "<p>THANK YOU FOR CHOOSING US.</p><br>";

                        if(PHP_MAILER($email,'ourgroupemail2018@gmail.com',$subject,$body)){
                          echo "<div class='alert alert-danger text-center'>Email Successfully Sent to Selected Customer!</div>";
                        }else{
                          echo "<div class='alert alert-info text-center'>Could Not Deliver Your Email Please Try Again!</div>";;
                        }
                      }

                      // <!-- delete attendnace -->


                        // send email to customer to make payment and start training
                        if(isset($_POST['checkBoxArray'])){
                          foreach($_POST['checkBoxArray'] as $c_id){

                            $res = GetDataById('registration','c_id',$c_id);
                            while($row = $res->fetch_assoc()){
                              $c_name = $row['c_name'];
                              $exp_level = $row['exprience_level'];
                              $email = $row['c_email'];
                              // traiing fee
                              if($exp_level=='startup'){
                                $training_fee = 500;
                              }
                              if($exp_level=='existing'){
                                $training_fee = 2000;
                              }
                              if($exp_level=='special'){
                                $training_fee = 4000;
                              }
                            }

                              $bulk_option = $_POST['bulk_option'];

                              if($bulk_option=='send_email'){
  
                                  $subject = "Call for Training From Black Financial Solution";
  
                                  $body = "<p>Dear $c_name,<br><hr> </p>";
                                  $body.= "<p>After reviewing your application for $exp_level level. <br></p>";
                                  $body.= "<p>We have found out your experience and data provided to our company is fully fit.<br></p>";
                                  $body.= "<p>Hence we have decided to provided you training that will match your next professional journey and lead you the right way of achieving your business.<br></p>";
                                  $body.= "Therefor you are requested to pay training fee of Birr. $training_fee with 10 consecutive day to start your training.<br><hr><hr>";
                                  $body.=  "<p>FROM BLACK FINANCIAL SOLUTION</p><br>";
                                  $body.=  "<p class='bg-danger'>Please do not replay to this email. this is system generated email, for any query please contact us using our contact detail from our offical website.<br><hr></p><br>";
                                  $body.=  "<p>THANK YOU FOR CHOOSING US.</p><br>";

                                  PHP_MAILER($email,'ourgroupemail2018@gmail.com',$subject,$body);
                                  $sent = true;
                               }
                            
                            if($bulk_option=='roll_back'){

                              $sql = "UPDATE `registration` set `ready_for_training`='no' where `c_id`='$c_id'";
                              $res = $connect->query($sql);
                              if($res){
                                echo "<div class='alert alert-info text-center'>Customer Successfully Rolled Back to Analyst for Further Review</div>";
                                
                              }else{
                               echo "<div class='alert alert-danger text-center'>Failed to Roll Back Customer. Please Try Again!</div>";
                              
                                // echo mysqli_error($connect);
                            }

                            }

                          }
                        }

                      ?>
 
                        <!-- add attendnace button -->
                        <div class="row">
                          <form action="" >
                              <div class="form-group pull-right col-md-3">
                                  <?php if($_SESSION['role']=='analyst' || $_SESSION['role']=='admin' || $_SESSION['role']=='promotion' ){ ?>
                                    <select class="form-control" name="custom_status" onchange="this.form.submit();">
                                        <option value="">sort by</option>
                                        <option value="all">Veiw All</option>
                                        <option value="startup">Start Up</option>
                                        <option value="existing">Existing</option>
                                        <option value="special">Special</option>
                                    </select>
                                  <?php } ?>
                                </div>
                              </form>
                       
                                             
                      </div>

                <div class="box">
                    <div class="box-header text-center">
                      <h3 class="box-title text-primary">Manage Customer</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">

                    <form method="POST" action="">
                      <table id="example1" class="table table-bordered table-striped">
          
                          <div class="form-group pull-left col-md-3" id="bulkOptionContainer">
                            <select class="form-control" name="bulk_option" id="" required>
                                <option value="">Select Option</option>
                                <option value="send_email">Send Email</option>
                                <option value="roll_back">Roll Back</option>  
                            </select>
                          </div>
                          <div class="form-group" id="bulkOptionContainer">
                            <input type="submit" name="submit" class="btn btn-success" value='Apply'
                              onclick="confirm('are you sure you want to  Procced')">
                          </div>
                        
                        <thead>
                        <tr>
                        <th><input class="checkAll" id="checkAll" type="checkbox"  onClick="checkAll()"></th>
                          <th>C.Id</th>
                          <th>customer Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Exprience Level</th>
                          <th>Analyzed</th>
                          <th>Ready for Training</th>
                          <th>Action</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                               $sql = "SELECT * from `registration` where `analized`='yes' and `ready_for_training`='yes'";
                       
                                if(isset($_GET['custom_status'])){
                                  $status = $_GET['custom_status'];
                                 
                                    $sql = "SELECT * from `registration` WHERE `exprience_level`='$status' and `analized`='yes' and `ready_for_training`='yes' ";
                                    if($status=='all'){
                                      $sql = "SELECT * from `registration` where `analized`='yes' and `ready_for_training`='yes'";
                                    }
                          
                                }

                                if(isset($_GET['status'])){
                                  $status = $_GET['status'];
                                 
                                    $sql = "SELECT * from `registration` WHERE `exprience_level`=$status and `analized`='yes' and `ready_for_training`='yes'";

                                }

                                $res = $connect->query($sql);
                                while($row = $res->fetch_assoc()){
                                $c_id =  $row['c_id'];
                              ?>
                              <tr>
                                  <td><input class='checkEachBoxes' id="checkEachBoxes" type='checkbox' name='checkBoxArray[]'
                                   value='<?php echo $row['c_id'] ;?>'></td>
                                  <td><?php echo $row['c_id']; ?></td>
                                  <td><?php echo $row['f_name']." ".$row['m_name']." ".$row['l_name']; ?></td>
                                  <td><?php echo $row['c_email']; ?></td>
                                  <td><?php echo $row['c_mobile']; ?></td>
                                  <td><?php echo $row['exprience_level']; ?></td>
                                  <td><p class="text-success">Yes</p></td> 
                                  <td><p class="text-success">Yes</p></td>  
                                  <td><a href="customer_view.php?view_id=<?php echo $c_id;?>" class="btn btn-info">View Detail</a></td>
                                  <td><a href="customer_for_training.php?send_id=<?php echo $c_id;?>" class="btn btn-primary">Send Email</a></td>   
                              </tr>

                              <?php } ?>

                        </tbody>
                        <tfoot>
                        <tr>
                        <th></th>
                          <th>C.Id</th>
                          <th>customer Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>Ready for Training</th>
                          <th>Action</th>
                        </tr>
                        </tfoot>
                      </table>
                      </form>
                    </div>
                    <!-- /.box-body -->
                 </div>
             

            </section>
    <!-- /.content -->
</div>


<?php require_once 'partials/footer.php'; ?>