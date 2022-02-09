<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Salary
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<script>return window.history.go(-1)</script>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

            <section class="content invoice" id="invoice">

            <?php
            if(isset($_GET['invoice_id'])){
              $i_id = $_GET['invoice_id'];

              // $present = $_GET['present'];
              // $present_per = $_GET['present_per'];
              $res = GetDataById('salary', 'sl_id', $i_id);
              $row = $res->fetch_array();

              $present = $row['total_date'];
            }
            ?>

                <div class="box-header text-center">
                  <h3 class="box-title text-primary">Salary Reciept</h3>
                  <small class="pull-right">Date: <?php echo date('d-m-Y'); ?></small>
                </div>

                    <div class="row invoice-info">
                      <div class="col-xs-4">
                        From<hr>
                        <address>
                            <strong>Black Financial Solution</strong><br>
                            Addis Ababa Ethiopia<br>
                            Mobile : 091111111<br>
                            website: black.info.com<br>
                            Email : black.ino@gmail.com<br>
                        </address>
                      </div>
                      <!-- to -->
                      <div class="col-xs-4">
                        To<hr>
                        <address>
                            <strong><?php echo $row['name']?></strong><br>
                            Email : <?php echo $row['email']?><br>
                            Mobile: <?php echo $row['mobile']?><br>
                            Address: <?php echo $row['address']?><br>
                        </address>
                      </div>
                      <!-- date -->
                      <div class="col-xs-4">
                        <strong>Invoice No #00<?php echo $row['sl_id'];?></strong><br><hr>
                        <b>Paid On: </b><?php echo $row['paid_on'] ?>
                      </div>
                  </div><hr>


                  
                    <div class="row">  
                      <div class="col-md-12 table table-responsive">
                        <table id="" class="table table-striped table-bordered" >
                          <thead>
                          <tr>
                            <th>S.Id</th>
                            <th>Basic Salary</th>
                            <th>Allowance</th>
                            <th>Total Day</th>
                            <th>Total Amount</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>  
                            <td><?php echo $row['sl_id'] ?></td>
                            <td>Birr. <?php echo $row['basic_salary'] ?></td>
                            <td>Birr. <?php echo $row['allowance'] ?></td>
                            <td> <?php echo $present; ?> day</td>
                            <td>Birr. <?php echo $row['basic_salary']+$row['allowance'] ?></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>

                      <!-- payment method and total display -->
               

                      <div class="col-md-6 text-center">
                        <h3>Payment Methods:</h3><br>
                        <div class="bg-info text-normal text-center" style="height:200px">
                          <p class="pt-5 mt-5">
                          <img src="../images/visa.png" alt="Visa" class="img-circle">
                          <img src="../images/mastercard.png" alt="Mastercard" class="img-circle">
                          <img src="../images/american-express.png" alt="American Express" class="img-circle">
                          <img src="../images/paypal2.png" alt="Paypal" class="img-circle"><br><br>
                            The payment method for all individual is vary as per the staff interst.
                            It can be via Bank(i.e Ethiopian Comercial Bank, Awash Bank, Dashin Bank or any other bank).
                            It can also be in cash if the staff is intrested to collect his salary in cash.
                            Our company will never recommend any one the way they collect their Salary. 
                            But Black Financial solution will generate a reciept for  each salary payment wheather it 
                            is in cash or other payment system.

                          </p>
                        </div>
                      </div>
                      <?php
                           $tax = $row['tax'];
                            $deduction = 0;
                            if($tax==0){
                              $deduction = 0;
                              }else if($tax==10){
                                $deduction = 60;
                              }
                              else if($tax==15){
                                $deduction = 142.50;
                              }
                              else if($tax==20){
                                $deduction = 302.50;
                              }
                              else if($tax==25){
                                $deduction = 565;
                              }
                              else if($tax==30){
                                $deduction = 955;
                              }
                              else if($tax==35){
                                $deduction = 1500;
                              }
                              
                              $tax1 = ($row['basic_salary']*($row['tax']/100))-$deduction;
                              $total =(($row['basic_salary']-$tax1)+$row['allowance']);
                              $total = ($total/30)*$present;
                      ?>
                      <!-- calculate -->
                      <div class="col-md-1"></div>
                        <div class="col-md-4">
                        <h3>Overall Calculation:</h3><br>

                           <div class="table-responsive">
                              <table class="table">
                                <tr>
                                  <th style="width:50%">Subtotal(birr):</th>
                                  <td>Birr. <?php echo $row['basic_salary']+$row['allowance']; ?></td>
                                </tr>
                                <tr>
                                  <th>Allowance (birr)</th>
                                  <td>Birr. <?php echo $row['allowance'] ?></td>
                                </tr>
                                <tr>
                                  <th>Tax (%)</th>
                                  <td><?php echo $row['tax'] ?>%</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td>Birr. <?php echo $total ?></td>
                                </tr>
                              </table><hr>
                            </div>
                      <div class="col-md-1"></div>
                    </div><hr>
                    <!-- /.box-body -->
                 </div><hr>
            </section>

            
            <div class="content no-print">
                  <div class="col-md-12">
                    <button onclick="PrintSection()" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                      <a href="salary_invoice.php?sl_id=<?php echo $row['sl_id'];?>" class="btn btn-success pull-right" name="submit_payment"><i class="fa fa-credit-card"></i> Submit Payment</a>
                      <button type="button" id="cmd" class="btn btn-primary pull-right" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Generate PDF
                      </button>
                 </div>
             </div><hr>

            
              <!-- this row will not appear when printing -->


    <!-- /.content -->
</div>


<!-- generate pdf -->
<script>
  $(document).ready(function() {
      var doc = new jsPDF("l", "pt", "letter");
      $('#cmd').click(function () {
        let doc = new jsPDF('p','pt','a4');
        doc.addHTML($('#invoice'),function() {
            doc.save('invoice.pdf');
        }); 
      });
  });
  </script>

    <!-- print page -->
    <script type="text/javascript">     
    function PrintSection() {    
       var sectionToPrint = document.getElementById('invoice');
       var popupWin = window.open('', '_blank', 'width=800,height=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + sectionToPrint.innerHTML + '</html>');
       popupWin.document.close();
    }
 </script>

 <!-- submit payment -->
 <?php 
 if(isset($_GET['sl_id'])){
   $sl_id = $_GET['sl_id'];
   $sql = "UPDATE `salary` set `salary_status`='completed' Where `sl_id`='$sl_id'";
   $res = $connect->query($sql);
   if($res){
    $message = "<div class='alert alert-success'>Salary Submitted Successfully!!</div>";
    header("Location:salary_manage.php?message=$message");
   }else{
    $message = "<div class='alert alert-danger'>Falied to Submit Salary please try againg!!</div>";
    header("Location:salary_manage.php?message=$message");
   }
 }
 ?>


<?php require_once 'partials/footer.php'; ?>