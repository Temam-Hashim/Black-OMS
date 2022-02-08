
<?php require_once "partials/header.php";?>
  <!-- Left side column. contains the logo and sidebar -->
<?php require_once "partials/side_bar.php";?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Update Customer
        <small>Update Customer</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Update Customer</li>
      </ol>
    </section><hr>

    <!-- Main content -->
    <section class="content form-container">
      <?php
      if(isset($_GET['message'])){
        echo $_GET['message'];
      }
      if(isset($_GET['edit_id'])){
        $edit_id = $_GET['edit_id'];

        $res = GetDataById('registration', 'c_id', $edit_id);
        $row = $res->fetch_array();
        $c_address = explode(',',$row['current_address']);
        $p_address = explode(',',$row['permanent_address']);
        $e_contact = explode(',',$row['emergency_contact']);
      }
      ?>

      

         <form action="" method="post" enctype="multipart/form-data">

                <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>">

                <div class="form-group">
                    <label for="title" class="text-center">Full Name</label>
                    <div class="row">
                      <!-- <div class="col-md-1"></div> -->
                      <div class="col-md-4">
                        <small>first name</small>
                        <input type="text" class="form-control" name="fname" value="<?php echo $row['f_name']; ?>" required>
                      </div>
                      <div class="col-md-4">
                      <small>middle name</small>
                        <input type="text" class="form-control" name="mname" value="<?php echo $row['m_name']; ?>" required>
                      </div>
                      <div class="col-md-4">
                      <small>last name</small>
                        <input type="text" class="form-control" name="lname" value="<?php echo $row['l_name']; ?>" required>
                      </div>
                    </div>
                </div>

                <div class="row">
                  <!-- first column -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="post_content">Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $row['c_email']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="post_content">Mobile No</label>
                    <input type="text" class="form-control" name="mobile" value="<?php echo $row['c_mobile']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="post_content">Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                      <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                      <?php
                        if($row['gender']=='male'){
                          echo  "<option value='female'>female</option>";
                        }else{
                          echo " <option value='male'>male</option>";
                        }
                      ?> 
                    </select>
                </div>

                <div class="form-group">
                    <label for="post_content">Martial Status</label>
                    <select name="ms" id="ms" class="form-control" required>
                      <option value="<?php echo $row['martial_status']; ?>"><?php echo $row['martial_status']; ?></option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                    </select>
                </div>

                <!-- educational background -->
                <div class="form-group">
                  <label for="">Educational Background</label>
                  <select name="educational_bg" id="educational_bg" class="form-control">
                    <option value="<?php echo $row['education_background']; ?>"><?php echo $row['education_background']; ?></option>
                    <?php
                        if($row['education_background']=='Eductated'){
                          echo  "<option value='Uneducated'>Uneducated</option>";
                        }else{
                          echo " <option value='Educated'>Educated</option>";
                        }
                      ?> 
                  </select>
                </div>

                  <!-- occupation statsu -->
                  <div class="form-group">
                  <label for="">Occupation</label>
                  <select name="occupation" id="occupation" class="form-control">
                  <option value="<?php echo $row['occupation']; ?>"><?php echo $row['occupation']; ?></option>
                    <?php
                        if($row['occupation']=='Employed'){
                          echo  "<option value='Unemployed'>Unemployed</option>";
                        }else{
                          echo " <option value='Employed'>Employed</option>";
                        }
                      ?> 
                  </select>
                </div>



                </div>
                <!-- second column -->
                  <div class="col-md-6"> 
                    <div class="form-group">
                        <label for="post_content">Age</label>
                        <select name="age" id="age" class="form-control" required>
                          <option value="<?php echo $row['age']; ?>"><?php echo $row['age']; ?></option>
                          <option value="18-25">18-25</option>
                          <option value="26-35">26-35</option>
                          <option value="35-50">35-50</option>
                          <option value="50-above">50-above</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="post_content">Birth Date</label>
                      <input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>" required>
                  </div>
                    
                  <div class="form-group">
                    <label for="">Nationality</label>
                      <select name="nationality" id="nationality" class="form-control" required>
                            <option value="<?php echo $row['nationality']; ?>" selected><?php echo $row['nationality']; ?></option>
                              <option value="Afghanistan"> Afghanistan </option>
                              <option value="Albania"> Albania </option>
                              <option value="Algeria"> Algeria </option>
                              <option value="American Samoa"> American Samoa </option>
                              <option value="Andorra"> Andorra </option>
                              <option value="Angola"> Angola </option>
                              <option value="Anguilla"> Anguilla </option>
                              <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                              <option value="Argentina"> Argentina </option>
                              <option value="Armenia"> Armenia </option>
                              <option value="Aruba"> Aruba </option>
                              <option value="Australia"> Australia </option>
                              <option value="Austria"> Austria </option>
                              <option value="Azerbaijan"> Azerbaijan </option>
                              <option value="The Bahamas"> The Bahamas </option>
                              <option value="Bahrain"> Bahrain </option>
                              <option value="Bangladesh"> Bangladesh </option>
                              <option value="Barbados"> Barbados </option>
                              <option value="Belarus"> Belarus </option>
                              <option value="Belgium"> Belgium </option>
                              <option value="Belize"> Belize </option>
                              <option value="Benin"> Benin </option>
                              <option value="Bermuda"> Bermuda </option>
                              <option value="Bhutan"> Bhutan </option>
                              <option value="Bolivia"> Bolivia </option>
                              <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                              <option value="Botswana"> Botswana </option>
                              <option value="Brazil"> Brazil </option>
                              <option value="Brunei"> Brunei </option>
                              <option value="Bulgaria"> Bulgaria </option>
                              <option value="Burkina Faso"> Burkina Faso </option>
                              <option value="Burundi"> Burundi </option>
                              <option value="Cambodia"> Cambodia </option>
                              <option value="Cameroon"> Cameroon </option>
                              <option value="Canada"> Canada </option>
                              <option value="Cape Verde"> Cape Verde </option>
                              <option value="Cayman Islands"> Cayman Islands </option>
                              <option value="Central African Republic"> Central African Republic </option>
                              <option value="Chad"> Chad </option>
                              <option value="Chile"> Chile </option>
                              <option value="China"> China </option>
                              <option value="Christmas Island"> Christmas Island </option>
                              <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                              <option value="Colombia"> Colombia </option>
                              <option value="Comoros"> Comoros </option>
                              <option value="Congo"> Congo </option>
                              <option value="Cook Islands"> Cook Islands </option>
                              <option value="Costa Rica"> Costa Rica </option>
                              <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                              <option value="Croatia"> Croatia </option>
                              <option value="Cuba"> Cuba </option>
                              <option value="Curacao"> Curacao </option>
                              <option value="Cyprus"> Cyprus </option>
                              <option value="Czech Republic"> Czech Republic </option>
                              <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                              <option value="Denmark"> Denmark </option>
                              <option value="Djibouti"> Djibouti </option>
                              <option value="Dominica"> Dominica </option>
                              <option value="Dominican Republic"> Dominican Republic </option>
                              <option value="Ecuador"> Ecuador </option>
                              <option value="Egypt"> Egypt </option>
                              <option value="El Salvador"> El Salvador </option>
                              <option value="Equatorial Guinea"> Equatorial Guinea </option>
                              <option value="Eritrea"> Eritrea </option>
                              <option value="Estonia"> Estonia </option>
                              <option value="Ethiopia"> Ethiopia </option>
                              <option value="Falkland Islands"> Falkland Islands </option>
                              <option value="Faroe Islands"> Faroe Islands </option>
                              <option value="Fiji"> Fiji </option>
                              <option value="Finland"> Finland </option>
                              <option value="France"> France </option>
                              <option value="French Polynesia"> French Polynesia </option>
                              <option value="Gabon"> Gabon </option>
                              <option value="The Gambia"> The Gambia </option>
                              <option value="Georgia"> Georgia </option>
                              <option value="Germany"> Germany </option>
                              <option value="Ghana"> Ghana </option>
                              <option value="Gibraltar"> Gibraltar </option>
                              <option value="Greece"> Greece </option>
                              <option value="Greenland"> Greenland </option>
                              <option value="Grenada"> Grenada </option>
                              <option value="Guadeloupe"> Guadeloupe </option>
                              <option value="Guam"> Guam </option>
                              <option value="Guatemala"> Guatemala </option>
                              <option value="Guernsey"> Guernsey </option>
                              <option value="Guinea"> Guinea </option>
                              <option value="Guinea-Bissau"> Guinea-Bissau </option>
                              <option value="Guyana"> Guyana </option>
                              <option value="Haiti"> Haiti </option>
                              <option value="Honduras"> Honduras </option>
                              <option value="Hong Kong"> Hong Kong </option>
                              <option value="Hungary"> Hungary </option>
                              <option value="Iceland"> Iceland </option>
                              <option value="India"> India </option>
                              <option value="Indonesia"> Indonesia </option>
                              <option value="Iran"> Iran </option>
                              <option value="Iraq"> Iraq </option>
                              <option value="Ireland"> Ireland </option>
                              <option value="Isle of Man"> Isle of Man </option>
                              <option value="Israel"> Israel </option>
                              <option value="Italy"> Italy </option>
                              <option value="Jamaica"> Jamaica </option>
                              <option value="Japan"> Japan </option>
                              <option value="Jersey"> Jersey </option>
                              <option value="Jordan"> Jordan </option>
                              <option value="Kazakhstan"> Kazakhstan </option>
                              <option value="Kenya"> Kenya </option>
                              <option value="Kiribati"> Kiribati </option>
                              <option value="North Korea"> North Korea </option>
                              <option value="South Korea"> South Korea </option>
                              <option value="Kosovo"> Kosovo </option>
                              <option value="Kuwait"> Kuwait </option>
                              <option value="Kyrgyzstan"> Kyrgyzstan </option>
                              <option value="Laos"> Laos </option>
                              <option value="Latvia"> Latvia </option>
                              <option value="Lebanon"> Lebanon </option>
                              <option value="Lesotho"> Lesotho </option>
                              <option value="Liberia"> Liberia </option>
                              <option value="Libya"> Libya </option>
                              <option value="Liechtenstein"> Liechtenstein </option>
                              <option value="Lithuania"> Lithuania </option>
                              <option value="Luxembourg"> Luxembourg </option>
                              <option value="Macau"> Macau </option>
                              <option value="Macedonia"> Macedonia </option>
                              <option value="Madagascar"> Madagascar </option>
                              <option value="Malawi"> Malawi </option>
                              <option value="Malaysia"> Malaysia </option>
                              <option value="Maldives"> Maldives </option>
                              <option value="Mali"> Mali </option>
                              <option value="Malta"> Malta </option>
                              <option value="Marshall Islands"> Marshall Islands </option>
                              <option value="Martinique"> Martinique </option>
                              <option value="Mauritania"> Mauritania </option>
                              <option value="Mauritius"> Mauritius </option>
                              <option value="Mayotte"> Mayotte </option>
                              <option value="Mexico"> Mexico </option>
                              <option value="Micronesia"> Micronesia </option>
                              <option value="Moldova"> Moldova </option>
                              <option value="Monaco"> Monaco </option>
                              <option value="Mongolia"> Mongolia </option>
                              <option value="Montenegro"> Montenegro </option>
                              <option value="Montserrat"> Montserrat </option>
                              <option value="Morocco"> Morocco </option>
                              <option value="Mozambique"> Mozambique </option>
                              <option value="Myanmar"> Myanmar </option>
                              <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                              <option value="Namibia"> Namibia </option>
                              <option value="Nauru"> Nauru </option>
                              <option value="Nepal"> Nepal </option>
                              <option value="Netherlands"> Netherlands </option>
                              <option value="Netherlands Antilles"> Netherlands Antilles </option>
                              <option value="New Caledonia"> New Caledonia </option>
                              <option value="New Zealand"> New Zealand </option>
                              <option value="Nicaragua"> Nicaragua </option>
                              <option value="Niger"> Niger </option>
                              <option value="Nigeria"> Nigeria </option>
                              <option value="Niue"> Niue </option>
                              <option value="Norfolk Island"> Norfolk Island </option>
                              <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                              <option value="Northern Mariana"> Northern Mariana </option>
                              <option value="Norway"> Norway </option>
                              <option value="Oman"> Oman </option>
                              <option value="Pakistan"> Pakistan </option>
                              <option value="Palau"> Palau </option>
                              <option value="Palestine"> Palestine </option>
                              <option value="Panama"> Panama </option>
                              <option value="Papua New Guinea"> Papua New Guinea </option>
                              <option value="Paraguay"> Paraguay </option>
                              <option value="Peru"> Peru </option>
                              <option  value="Philippines"> Philippines </option>
                              <option value="Pitcairn Islands"> Pitcairn Islands </option>
                              <option value="Poland"> Poland </option>
                              <option value="Portugal"> Portugal </option>
                              <option value="Puerto Rico"> Puerto Rico </option>
                              <option value="Qatar"> Qatar </option>
                              <option value="Republic of the Congo"> Republic of the Congo </option>
                              <option value="Romania"> Romania </option>
                              <option value="Russia"> Russia </option>
                              <option value="Rwanda"> Rwanda </option>
                              <option value="Saint Barthelemy"> Saint Barthelemy </option>
                              <option value="Saint Helena"> Saint Helena </option>
                              <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                              <option value="Saint Lucia"> Saint Lucia </option>
                              <option value="Saint Martin"> Saint Martin </option>
                              <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                              <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                              <option value="Samoa"> Samoa </option>
                              <option value="San Marino"> San Marino </option>
                              <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                              <option value="Saudi Arabia"> Saudi Arabia </option>
                              <option value="Senegal"> Senegal </option>
                              <option value="Serbia"> Serbia </option>
                              <option value="Seychelles"> Seychelles </option>
                              <option value="Sierra Leone"> Sierra Leone </option>
                              <option value="Singapore"> Singapore </option>
                              <option value="Slovakia"> Slovakia </option>
                              <option value="Slovenia"> Slovenia </option>
                              <option value="Solomon Islands"> Solomon Islands </option>
                              <option value="Somalia"> Somalia </option>
                              <option value="Somaliland"> Somaliland </option>
                              <option value="South Africa"> South Africa </option>
                              <option value="South Ossetia"> South Ossetia </option>
                              <option value="South Sudan"> South Sudan </option>
                              <option value="Spain"> Spain </option>
                              <option value="Sri Lanka"> Sri Lanka </option>
                              <option value="Sudan"> Sudan </option>
                              <option value="Suriname"> Suriname </option>
                              <option value="Svalbard"> Svalbard </option>
                              <option value="eSwatini"> eSwatini </option>
                              <option value="Sweden"> Sweden </option>
                              <option value="Switzerland"> Switzerland </option>
                              <option value="Syria"> Syria </option>
                              <option value="Taiwan"> Taiwan </option>
                              <option value="Tajikistan"> Tajikistan </option>
                              <option value="Tanzania"> Tanzania </option>
                              <option value="Thailand"> Thailand </option>
                              <option value="Timor-Leste"> Timor-Leste </option>
                              <option value="Togo"> Togo </option>
                              <option value="Tokelau"> Tokelau </option>
                              <option value="Tonga"> Tonga </option>
                              <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                              <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                              <option value="Tristan da Cunha"> Tristan da Cunha </option>
                              <option value="Tunisia"> Tunisia </option>
                              <option value="Turkey"> Turkey </option>
                              <option value="Turkmenistan"> Turkmenistan </option>
                              <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                              <option value="Tuvalu"> Tuvalu </option>
                              <option value="Uganda"> Uganda </option>
                              <option value="Ukraine"> Ukraine </option>
                              <option value="United Arab Emirates"> United Arab Emirates </option>
                              <option value="United Kingdom"> United Kingdom </option>
                              <option value="Uruguay"> Uruguay </option>
                              <option value="Uzbekistan"> Uzbekistan </option>
                              <option value="Vanuatu"> Vanuatu </option>
                              <option value="Vatican City"> Vatican City </option>
                              <option value="Venezuela"> Venezuela </option>
                              <option value="Vietnam"> Vietnam </option>
                              <option value="British Virgin Islands"> British Virgin Islands </option>
                              <option value="United States"> United States </option>
                              <option value="US Virgin Islands"> US Virgin Islands </option>
                              <option value="Wallis and Futuna"> Wallis and Futuna </option>
                              <option value="Western Sahara"> Western Sahara </option>
                              <option value="Yemen"> Yemen </option>
                              <option value="Zambia"> Zambia </option>
                              <option value="Zimbabwe"> Zimbabwe </option>
                              <option value="other"> Other </option>
                      </select>
                  </div>


                  <div class="form-group">
                    <label for="">Birth Place</label>
                    <input type="text" class="form-control" name="birth_place" value="<?php echo $row['birth_place']; ?>">
                  </div>
                  <!-- if eucational background == tru display this column -->
                  <div class="form-group">
                    <label for="">Education Level</label>
                    <select name="education_level" id="education_level" class="form-control">
                      <option value="<?php echo $row['education_level']; ?>"><?php echo $row['education_level']; ?></option>
                      <option value="certificate(Grade 1-8)">certificate(Grade 1-8)</option>
                      <option value="certificate(Grade 9-12)">certificate(Grade 9-12)</option>
                      <option value="TVT">TVT</option>
                      <option value="Diploma">Diploma</option>
                      <option value="BA/BSc Degree">BA/BSC Degree</option>
                      <option value="MA/MSC Degree">MA/MSC Degree</option>
                      <option value="PHD Degree">PHD Degree</option>
                    </select>
                  </div>


                              <!-- if occupation == emplyed display work type and salary -->
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="">Employment Type</label>
                            <select name="employment_type" id="employment_type" class="form-control">
                              <option value="<?php echo $row['employemt_type']; ?>"><?php echo $row['employment_type']; ?></option>
                              <option value="Self Employee">Self Employee</option>
                              <option value="Govt Organization">Govt Organization</option>
                              <option value="Private Company">Private Company</option>
                              <option value="NGO">NGO</option>
                            </select>
                          </div>
                        </div>

                      <!-- salary if not self employ -->

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="">Salary Range</label>
                          <select name="salary_range" id="salary_range" class="form-control">
                            <option value="<?php echo $row['salary_range']; ?>"><?php echo $row['salary_range']; ?></option>
                            <option value="<1000">< 1000 </option>
                            <option value="1002-3000">1001-3000</option>
                            <option value="3001-5000">3001-5000</option>
                            <option value="Above 5000">Above 5000</option>
                          </select>
                          </div>
                        </div>
                        </div>


                  </div>
                </div>

                <!-- current address -->

                <div class="form-group">
                    <label for="title" class="text-center">Current Address</label>
                    <div class="row">
                      <!-- <div class="col-md-1"></div> -->

                      <div class="col-md-4">
                        <small>City</small>
                        <input type="text" class="form-control" name="city" value="<?php echo $c_address[0]; ?>" required>
                        <small>Sub City</small>
                        <input type="text" class="form-control" name="subcity" value="<?php echo $c_address[1];  ?>">

                      </div>

                      <div class="col-md-4">
                        <small>Werada</small>
                        <input type="text" class="form-control" name="werada" value="<?php echo $c_address[2];  ?>" required>
                        <small>Kebale</small>
                        <input type="text" class="form-control" name="kebale" value="<?php echo $c_address[3];  ?>" required>

                      </div>

                      <div class="col-md-4">
                      <small>House No</small>
                        <input type="text" class="form-control" name="houseno" value="<?php echo $c_address[4];  ?>" required>
                        <small>PIN Code</small>
                        <input type="text" class="form-control" name="pincode" value="<?php echo $c_address[5];  ?>" required>
                      </div>

                    </div>
                </div>


                <div class="form-group row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <label for="post_content">Is Your Current Address Same With Your Permanet Address?</label>
                    <select name="check_address" id="check_address" class="form-control" required>
                        <option value="no">no</option>
                        <option value="yes">yes</option>
                    </select>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                  
                <div class="form-group" id="permanetAddress">
                <label for="title" class="text-center">Permanent Address</label>
                    <div class="row" id="">
                      <!-- <div class="col-md-1"></div> -->

                      <div class="col-md-4">
                        <small>City</small>
                        <input type="text" class="form-control" name="city2" value="<?php echo $p_address[0];  ?>" >
                        <small>Sub City</small>
                        <input type="text" class="form-control" name="subcity2" value="<?php echo $p_address[1];  ?>">

                      </div>

                      <div class="col-md-4">
                        <small>Werada</small>
                        <input type="text" class="form-control" name="werada2" value="<?php echo $p_address[2];  ?>">                  
                        <small>Kebale</small>
                        <input type="text" class="form-control" name="kebale2" value="<?php echo $p_address[3];  ?>">
                      </div>

                      <div class="col-md-4">
                        <small>House No</small>
                        <input type="text" class="form-control" name="houseno2" value="<?php echo $p_address[4];  ?>">
                        <small>PIN Code</small>
                        <input type="text" class="form-control" name="pincode2" value="<?php echo $p_address[5];  ?>">
                      </div>

                    </div>
                </div>

                <!-- emergency contact  -->

                          
                <div class="form-group" id="permanetAddress">
                <label for="title" class="text-center">Emergency Contact</label>
                    <div class="row" id="">
                      <!-- <div class="col-md-1"></div> -->

                      <div class="col-md-4">
                        <small>Name</small>
                        <input type="text" class="form-control" name="em_name" value="<?php echo $e_contact[0];  ?>">
                        <small>Mobile</small>
                        <input type="text" class="form-control" name="mobile3" value="<?php echo $e_contact[1]; ?>">
                        <small>Email</small>
                        <input type="text" class="form-control" name="email3" value="<?php echo $e_contact[2]; ?>" >

                      </div>

                      <div class="col-md-4">
                        <small>City</small>
                        <input type="text" class="form-control" name="city3" value="<?php echo $e_contact[3]; ?>" >
                        <small>Sub City</small>
                        <input type="text" class="form-control" name="subcity3" value="<?php echo $e_contact[4]; ?>">
                        <small>Werada</small>
                        <input type="text" class="form-control" name="werada3" value="<?php echo $e_contact[5]; ?>">


                      </div>

                      <div class="col-md-4">
                        <small>Kebale</small>
                        <input type="text" class="form-control" name="kebale3" value="<?php echo $e_contact[6]; ?>">
                        <small>House No</small>
                        <input type="text" class="form-control" name="houseno3" value="<?php echo $e_contact[7]; ?>">
                        <small>P.O. BOX</small>
                        <input type="text" class="form-control" name="pobox3" value="<?php echo $e_contact[8]; ?>">
                      </div>

                    </div>
                </div>

                <!-- identify exprience level -->
                <div class="row">
                  <div class="col-md-6">
                            <!-- column1 -->
                  <div class="form-group">
                      <label for="post_content">What is your Exprience Level?</label>
                      <select name="exp_level" id="expSelector"  class="expSelector form-control">
                        <option value="<?php echo $row['exprience_level']; ?>"><?php echo $row['exprience_level']; ?></option>
                        <option value="startup">Start Up</option>
                        <option value="existing">Existing</option>
                        <option value="special">Special</option>
                      </select>
                  </div>

                  </div>

                  <!-- column2 -->
                  <div class="col-md-6">

                <div class="hidyear form-group ">
                      <label for="post_content">How many years of Exprience</label>
                      <input class="form-control" type="text" name="exp_year" value="<?php echo $row['exprience_year']; ?>">
                </div>

                  <div class="hidspecial form-group">
                      <label for="post_content">What is your Speciality</label>
                      <select name="exp_special"  class="form-control">
                        <option value="<?php echo $row['exprience_year'] ?>"><?php echo $row['exprience_year'] ?></option>
                        <option value="Diaspora">Diaspora</option>
                        <option value="Deliquence(NPL)">Deliquence(NPL)</option>
                      </select>
                  </div>

                  </div>
                </div><hr>


                <div class="form-group text-center">
                <input class="btn btn-primary btn-lg btn-block" type="submit" name="update_customer" value="Update Customer">
                </div><hr>


         </form>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php


     if(isset($_POST['update_customer'])) {

        $id = $_POST['c_id'];

        $fname   = mysqli_real_escape_string($connect,$_POST['fname']);
        $mname   = mysqli_real_escape_string($connect,$_POST['mname']);
        $lname   = mysqli_real_escape_string($connect,$_POST['lname']);

        $email    = mysqli_real_escape_string($connect,$_POST['email']);
        $mobile   = mysqli_real_escape_string($connect,$_POST['mobile']);
        $gender    = mysqli_real_escape_string($connect,$_POST['gender']);
        $age    =   mysqli_real_escape_string($connect,$_POST['age']);
        $dob    =   mysqli_real_escape_string($connect,$_POST['dob']);
        $birth_place    =   mysqli_real_escape_string($connect,$_POST['birth_place']);
        $nationality    =   mysqli_real_escape_string($connect,$_POST['nationality']);
        $martial_status = mysqli_real_escape_string($connect,$_POST['ms']);

        // occupation
        $occupation    =   mysqli_real_escape_string($connect,$_POST['occupation']);
        $employment_type   =   mysqli_real_escape_string($connect,$_POST['employment_type']);
        $salary_range    =   mysqli_real_escape_string($connect,$_POST['salary_range']);

        // education
        $education_background =   mysqli_real_escape_string($connect,$_POST['educational_bg']);
        $education_level =  mysqli_real_escape_string($connect,$_POST['education_level']);


        $exp_level   = mysqli_real_escape_string($connect,$_POST['exp_level']);
        if($exp_level == 'special'){
            $exp_year = mysqli_real_escape_string($connect,$_POST['exp_special']);
        }else if($exp_level=='existing'){
          $exp_year = mysqli_real_escape_string($connect,$_POST['exp_year']);
        }else{
          $exp_year = 0;
        }

        //current address
        $city = mysqli_real_escape_string($connect,$_POST['city']);
        $subcity = mysqli_real_escape_string($connect,$_POST['subcity']);
        $werada = mysqli_real_escape_string($connect,$_POST['werada']);
        $kebale = mysqli_real_escape_string($connect,$_POST['kebale']);
        $houseno = mysqli_real_escape_string($connect,$_POST['houseno']);
        $pincode = mysqli_real_escape_string($connect,$_POST['pincode']);

        $current_address = $city.", ".$subcity.", ".$werada.", ".$kebale.", ".$houseno.", ".$pincode;

        // permanaet address

        $city2 = mysqli_real_escape_string($connect,$_POST['city2']);
        $subcity2 = mysqli_real_escape_string($connect,$_POST['subcity2']);
        $werada2 = mysqli_real_escape_string($connect,$_POST['werada2']);
        $kebale2 = mysqli_real_escape_string($connect,$_POST['kebale2']);
        $houseno2 = mysqli_real_escape_string($connect,$_POST['houseno2']);
        $pincode2 = mysqli_real_escape_string($connect,$_POST['pincode2']);

        $permanent_address = $city2.", ".$subcity2.", ".$werada2.", ".$kebale2.", ".$houseno2.", ".$pincode2;

        if($_POST['check_address']=='yes'){
          $permanent_address = $current_address;
        }

        // emergency contact
        $em_name = mysqli_real_escape_string($connect,$_POST['em_name']);
        $mobile3 = mysqli_real_escape_string($connect,$_POST['mobile3']);
        $email3 = mysqli_real_escape_string($connect,$_POST['email3']);
        $city3 = mysqli_real_escape_string($connect,$_POST['city3']);
        $subcity3 = mysqli_real_escape_string($connect,$_POST['subcity3']);
        $werada3 = mysqli_real_escape_string($connect,$_POST['werada3']);
        $kebale3 = mysqli_real_escape_string($connect,$_POST['kebale3']);
        $houseno3 = mysqli_real_escape_string($connect,$_POST['houseno3']);
        $pobox3 = mysqli_real_escape_string($connect,$_POST['pobox3']);

        //
        $emergency_contact = $em_name.", ".$mobile3.", ".$email3.", ".$city3.", ".$subcity3.", ".$werada3.", ".$kebale3.", ".$houseno.", ".$pobox3;

        UpdateCustomer($id,$fname,$mname,$lname,$email,$mobile,$gender,$dob,$age,$birth_place,$martial_status,$occupation,$nationality,$current_address,$permanent_address,$emergency_contact,$education_background,$education_level,$salary_range,$exp_level, $exp_year,$employment_type);  



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
          $('#employment_type').hide();
          $('#salary_range').hide();
    }).change();

    // salry
    $('#employment_type').change(function(){
    if($(this).val()==="Self Employee")
        $('#salary_range').hide();
        else
          $('#salary_range').show();
    }).change();


</script>
  <?php require_once 'partials/footer.php'; ?>