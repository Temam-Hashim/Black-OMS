
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Customer View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>

    <?php
    if(isset($_GET['view_id'])){
      $id = $_GET['view_id'];
     $res = GetDataById('registration','c_id',$id);
     $row = $res->fetch_array();

    //  current address
      $c_address = explode(',',$row['current_address']);
      $p_address = explode(',',$row['permanent_address']);
      $e_conatct = explode(',',$row['emergency_contact']);
      // language
      $language = explode(',',$row['language']);
      // familly detail
      $mother_name = explode(',',$row['mother_name']);
      $mother_job = explode(',',$row['mother_occupation']);
      $father_job = explode(',',$row['father_occupation']);
      // sibbling
      $sibbling = explode(',',$row['sibbling_detail']);
      
    }
    
    ?>
   <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-4">
        <button onclick="PrintSection()" class="btn btn-primary"><i class="fa fa-print"></i> Print Customer Detail</button>
        <button type="button" id="cmd" class="btn btn-info" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Generate PDF
        </button>
      </div>
  </div><hr>

  <section class="customer" id="customer">
      <div class="row">
          <div class="box-header text-center">
                <h3 class="box-title text-info"><b>Customer Detail</b></h3><hr>
            </div>

        <div class="col-md-6">
          <div class="box-header text-center">
                <h3 class="box-title text-info"><b>Personal Information</b></h3>
            </div>
        
            <div class="box" style="margin-top:15px;">
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                      <table  class="table table-bordered table-striped">

                        <tr>
                          <th>Full Name</th>
                          <td><?php echo $row['f_name']." ".$row['m_name']." ".$row['l_name']; ?></td>
                        </tr>
                        <tr>
                          <th> Email Address</th>
                          <td><?php echo $row['c_email']; ?></td>
                        </tr>
                        <tr>
                          <th>Mobile Number</th>
                          <td><?php echo $row['c_mobile']; ?></td>
                        </tr>
                        <tr>
                          <th>Gender</th>
                          <td><?php echo $row['gender']; ?></td>
                        </tr>
                        <tr>
                          <th>Date of Birth</th>
                          <td><?php echo $row['dob']; ?></td>
                        </tr>
                        <tr>
                          <th>Age</th>
                          <td><?php echo $row['age']; ?></td>
                        </tr>
                        <tr>
                          <th>Birth Place</th>
                          <td><?php echo $row['birth_place']; ?></td>
                        </tr>
                        <tr>
                          <th>Martial Status</th>
                          <td><?php echo $row['martial_status']; ?></td>
                        </tr>
                        <tr>
                          <th>Language</th>
                          <td><?php echo $language[0].",".$language[1].",".$language[2]; ?></td>
                        </tr>
                        
                    </table>
                </div>
                </div>

            </div>
        <div class="col-md-6">
            <div class="box-header text-center">
                <h3 class="box-title text-info"><b>Basic Information</b></h3>
            </div>
          <div class="box" style="margin-top:15px;">
              <!-- /.box-header -->
              <div class="box-body table-responsive">

                    <table  class="table table-bordered table-striped">
                      <tr>
                        <th>Education Background</th>
                        <td><?php echo $row['education_background']; ?></td>
                      </tr>
                      <tr>
                        <th>Education Level</th>
                        <td><?php echo $row['education_level']; ?></td>
                      </tr>
                      <tr>
                        <th>Salary Range</th>
                        <td><?php echo $row['salary_range']; ?></td>
                      </tr>
                      <tr>
                        <th>Occupation</th>
                        <td><?php echo $row['occupation']; ?></td>
                      </tr>
                      <tr>
                        <th>Employment Type</th>
                        <td><?php echo $row['employment_type']; ?></td>
                      </tr>
                      <tr>
                        <th>Exprience Level</th>
                        <td><?php echo $row['exprience_level']; ?></td>
                      </tr>
                      <tr>
                        <th>Exprience Year/Status</th>
                        <td><?php echo $row['exprience_year']; ?></td>
                      </tr>
                      <tr>
                        <th>Nationality</th>
                        <td><?php echo $row['nationality']; ?></td>
                      </tr>
                      <tr>
                        <th>Religion</th>
                        <td><?php echo $row['religion']; ?></td>
                      </tr>
                  </table>
            </div>
          </div>

        </div>
        <div class="col-md-1"></div>
      </div>

<!-- second row -->

      <div class="row">
        <!-- current address -->
        <div class="col-md-4">
        <div class="box-header text-center">
                <h3 class="box-title text-info"><b>Current Address</b></h3>
            </div>
          <div class="box" style="margin-top:15px;">
              <div class="box-body table-responsive">
                    <table  class="table table-bordered table-striped">
                      <tr>
                        <th>City</th>
                        <td><?php echo $c_address[0] ?></td>
                      </tr>
                      <tr>
                        <th>Sub City</th>
                        <td><?php echo $c_address[1] ?></td>
                      </tr>
                      <tr>
                        <th>Werada</th>
                        <td><?php echo $c_address[2] ?></td>
                      </tr>
                      <tr>
                        <th>Kebale</th>
                        <td><?php echo $c_address[3] ?></td>
                      </tr>
                      <tr>
                        <th>House No</th>
                        <td><?php echo $c_address[4] ?></td>
                      </tr>
                      <tr>
                        <th>Pin Code</th>
                        <td><?php echo $c_address[5] ?></td>
                      </tr>
                    </table>
              </div>
          </div>

        </div>
        <!-- permanent address -->
        <div class="col-md-4">

        <div class="box-header text-center">
                <h3 class="box-title text-info"><b>Permanent Address</b></h3>
            </div>
          <div class="box" style="margin-top:15px;">
              <div class="box-body table-responsive">
                    <table  class="table table-bordered table-striped">
                      <tr>
                        <th>City</th>
                        <td><?php echo $p_address[0] ?></td>
                      </tr>
                      <tr>
                        <th>Sub City</th>
                        <td><?php echo $p_address[1] ?></td>
                      </tr>
                      <tr>
                        <th>Werada</th>
                        <td><?php echo $p_address[2] ?></td>
                      </tr>
                      <tr>
                        <th>Kebale</th>
                        <td><?php echo $p_address[3] ?></td>
                      </tr>
                      <tr>
                        <th>House No</th>
                        <td><?php echo $p_address[4] ?></td>
                      </tr>
                      <tr>
                        <th>Pin Code</th>
                        <td><?php echo $p_address[5] ?></td>
                      </tr>
                    </table>
              </div>
          </div>

        </div>
        <!-- emergency contact -->
        <div class="col-md-4">

        <div class="box-header text-center">
                <h3 class="box-title text-info"><b>Emergency Contact</b></h3>
            </div>
          <div class="box" style="margin-top:15px;">
              <div class="box-body table-responsive">
                    <table  class="table table-bordered table-striped">
                      <tr>
                        <th>Name</th>
                        <td><?php echo $e_conatct[0] ?></td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><?php echo $e_conatct[1] ?></td>
                      </tr>
                      <tr>
                        <th>Mobile</th>
                        <td><?php echo $e_conatct[2] ?></td>
                      </tr>
                      <tr>
                        <th>City</th>
                        <td><?php echo $e_conatct[3] ?></td>
                      </tr>
                      <tr>
                        <th>Kebale</th>
                        <td><?php echo $e_conatct[6] ?></td>
                      </tr>
                      <tr>
                        <th>Werada</th>
                        <td><?php echo $e_conatct[5] ?></td>
                      </tr>
                    </table>
              </div>
          </div>

        </div>
      </div>

        <!-- Familly info  -->
        <div class="row">
          <div class="col-md-6">
            <div class="box-header text-center">
                  <h3 class="box-title text-info"><b>Family Information</b></h3>
              </div>
          
              <div class="box" style="margin-top:15px;">
                  <!-- /.box-header -->
                  <div class="box-body table-responsive">
                        <table  class="table table-bordered table-striped">

                          <tr>
                            <th>Father Name</th>
                            <td><?php echo $row['m_name']." ".$row['l_name']; ?></td>
                          </tr>
                          <tr>
                            <th> Mother Name</th>
                            <td><?php echo $mother_name[0]." ".$mother_name[1]." ".$mother_name[2]; ?></td>
                          </tr>
                          <tr>
                            <th>Father Ocuppation</th>
                            <td><?php echo $father_job[0].",".$father_job[1]; ?></td>
                          </tr>
                          <tr>
                            <th>Mother Ocuppation</th>
                            <td><?php echo $mother_job[0].",".$mother_job[1]; ?></td>
                          </tr>
                          <tr>
                            <th>Family Relation</th>
                            <td><?php echo $row['family_relation']; ?></td>
                          </tr> 
                      </table>
                  </div>
                  </div>

              </div>
          <div class="col-md-6">
              <div class="box-header text-center">
                  <h3 class="box-title text-info"><b>Sibbling Information</b></h3>
              </div>
            <div class="box" style="margin-top:15px;">
                <!-- /.box-header -->
                <div class="box-body table-responsive">

                      <table  class="table table-bordered table-striped">
                        <tr>
                          <th>No of Brother and Sister</th>
                          <td><?php echo $sibbling[1]." Brother and ".$sibbling[2]." Sister " ; ?></td>
                        </tr>
                        <tr>
                          <th>Brother Marriage Status</th>
                          <td><?php echo $sibbling[3]; ?></td>
                        </tr>
                        <tr>
                          <th>Brother Wife Occupation</th>
                          <td><?php echo $sibbling[4]; ?></td>
                        </tr>
                        <tr>
                          <th>Sister Marriage Status</th>
                          <td><?php echo $sibbling[5]; ?></td>
                        </tr>
                        <tr>
                          <th>Sister Husband Occupation</th>
                          <td><?php echo $sibbling[6]; ?></td>
                        </tr>
                    </table>
              </div>
            </div>

          </div>
          <div class="col-md-1"></div>
        </div>
</section><hr>

   <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-4">
        <button onclick="PrintSection()" class="btn btn-primary"><i class="fa fa-print"></i> Print Customer Detail</button>
        <button type="button" id="cmd" class="btn btn-info" style="margin-right: 5px;">
                        <i class="fa fa-download"></i> Generate PDF
        </button>
      </div>
    </div>

  <!-- /.content-wrapper -->

  <script type="text/javascript">     
    function PrintSection() {    
       var sectionToPrint = document.getElementById('customer');
       var popupWin = window.open('', '_blank', 'width=800,height=800');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + sectionToPrint.innerHTML + '</html>');
       popupWin.document.close();
    }

  </script>
  <!-- generate pdf -->
<script>
  $(document).ready(function() {
      var doc = new jsPDF("l", "pt", "letter");
      $('#cmd').click(function () {
        let doc = new jsPDF('p','pt','a4');
        doc.addHTML($('#customer'),function() {
            doc.save("customer.pdf");
        }); 
      });
  });
  </script>
  

  <?php require_once 'partials/footer.php'; ?>