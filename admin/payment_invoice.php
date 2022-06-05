<?php require_once "partials/header.php";?>
<!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Payment Invoice
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Invoice</li>
    </ol>
  </section>

  <section class="content invoice" id="invoice">

    <?php
            if(isset($_GET['invoice_id'])){
              $i_id = $_GET['invoice_id'];

              // $present = $_GET['present'];
              // $present_per = $_GET['present_per'];
              $res = GetDataById('payment', 'py_id', $i_id);
              $row = $res->fetch_array();
            }
            ?>

    <div class="box-header text-center">
      <h3 class="box-title text-primary">Salary Reciept</h3>
      <small class="pull-right">Date: <?php echo date('d-m-Y'); ?></small>
    </div>

    <div class="row invoice-info">
      <div class="col-xs-4">
        From
        <hr>
        <address>
          <strong><?php echo $row['customer_name']?></strong><br>
          Email : <?php echo $row['customer_email']?><br>
          Mobile: <?php echo $row['customer_mobile']?><br>
          Address: <?php echo $row['customer_address']?><br>
        </address>

      </div>
      <!-- to -->
      <div class="col-xs-4">
        To
        <hr>
        <address>
          <strong>Black Financial Solution</strong><br>
          Addis Ababa Ethiopia<br>
          Mobile : 091111111<br>
          website: black.info.com<br>
          Email : black.ino@gmail.com<br>
        </address>
      </div>
      <!-- date -->
      <div class="col-xs-4">
        <strong>Invoice No #00<?php echo $row['py_id'];?></strong><br>
        <hr>
        <b>Paid On: </b><?php echo $row['paid_on'] ?>
      </div>
    </div>
    <hr>



    <div class="row">
      <div class="col-md-12 table table-responsive">
        <table id="" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>S.Id</th>
              <th>Paymet Reason</th>
              <th>Total Payment</th>
              <th>Paid On</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row['py_id'] ?></td>
              <td> <?php echo $row['payment_reason'] ?></td>
              <td>Birr. <?php echo $row['total_payment'] ?></td>
              <td> <?php echo $row['paid_on']; ?></td>

            </tr>
          </tbody>
        </table>
      </div>

      <!-- payment method and total display -->


      <div class="col-md-6 text-center">
        <h3>Payment Methods:</h3><br>
        <div class="bg-info text-normal text-center" style="height:200px">
          <p class="pt-5 mt-5">
            <img src="images/visa.png" alt="Visa" class="img-circle">
            <img src="images/mastercard.png" alt="Mastercard" class="img-circle">
            <img src="images/american-express.png" alt="American Express" class="img-circle">
            <img src="images/paypal2.png" alt="Paypal" class="img-circle"><br><br>
            The payment method for all individual is vary as per the customer interst.
            It can be via Bank(i.e Ethiopian Comercial Bank, Awash Bank, Dashin Bank or any other bank).
            It can also be in cash if the staff is intrested to collect his salary in cash.
            Our company will never recommend any one the way they collect their Salary.
            But Black Financial solution will generate a reciept for each salary payment wheather it
            is in cash or other payment system.

          </p>
        </div>
      </div>
      <!-- calculate -->
      <div class="col-md-1"></div>
      <div class="col-md-4">
        <h3>Overall Calculation:</h3><br>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal(birr):</th>
              <td>Birr. <?php echo $row['total_payment'] ?></td>
            <tr>
              <th>Tax (%)</th>
              <td>0%</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>Birr. <?php echo $row['total_payment'] ?></td>
            </tr>
          </table>
          <hr>
        </div>
        <div class="col-md-1"></div>
      </div>
      <hr>
      <!-- /.box-body -->
    </div>
    <hr>
  </section>


  <div class="content no-print">
    <div class="col-md-12">
      <button onclick="PrintSection()" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
      <a href="payment_invoice.php?py_id=<?php echo $row['py_id'];?>" class="btn btn-success pull-right"
        name="submit_payment"><i class="fa fa-credit-card"></i> Submit Payment</a>
      <button type="button" id="cmd" class="btn btn-primary pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Generate PDF
      </button>
    </div>
  </div>
  <hr>


  <!-- this row will not appear when printing -->


  <!-- /.content -->
</div>


<!-- generate pdf -->
<script>
$(document).ready(function() {
  var doc = new jsPDF("l", "pt", "letter");
  $('#cmd').click(function() {
    let doc = new jsPDF('p', 'pt', 'a4');
    doc.addHTML($('#invoice'), function() {
      doc.save('payment.pdf');
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
 if(isset($_GET['py_id'])){
   $py_id = $_GET['py_id'];
   $sql = "UPDATE `payment` set `payment_status`='completed' Where `py_id`='$py_id'";
   $res = $connect->query($sql);
   if($res){
    $message = "<div class='alert alert-success text-center'>Payment Submitted Successfully!!</div>";
    header("Location:Payment_manage.php?message=$message");
   }else{
    $message = "<div class='alert alert-danger text-center'>Falied to Submit Payment please try againg!!</div>";
    header("Location:Payment_manage.php?message=$message");
   }
 }
 ?>


<?php require_once 'partials/footer.php'; ?>