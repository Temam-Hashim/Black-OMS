
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
            <div class="col-md-6">
                <div class="form-group">
                  <label for="post_content">Email</label>
                  <input type="email" class="form-control" name="email" value="<?php echo InputValue('email'); ?>" >
              </div>

                <div class="form-group">
                  <label for="post_content">Mobile No</label>
                  <input type="text" class="form-control" name="mobile" value="<?php echo InputValue('mobile'); ?>" required>
              </div>

              <div class="form-group">
                  <label for="post_content">Gender</label>
                  <select name="gender" id="gender" class="form-control" required>
                    <option value="">Select</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                  </select>
              </div>

                <div class="form-group">
                    <label for="post_content">Martial Status</label>
                    <select name="ms" id="ms" class="form-control" required>
                      <option value="">Select</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                    </select>
                </div>
              
                <div class="form-group">
                  <label for="post_content">Birth Date</label>
                    <input type="date" class="form-control" name="dob" value="<?php echo InputValue('dob'); ?>" required>
                </div>
          </div>
          <!-- second column -->
            <div class="col-md-6"> 
              <div class="form-group">
                  <label for="post_content">Age</label>
                  <select name="age" id="age" class="form-control" required>
                    <option value="">Select</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="35-50">35-50</option>
                    <option value="50-above">50-above</option>
                  </select>
              </div>
                 
              <div class="form-group">
                  <label for="">Religion</label>
                  <select name="religion" id="religion" class="form-control">
                    <option value="Musilim">Musilim</option>
                    <option value="Orthodox">Orthodox</option>
                    <option value="Protistant">Protistant</option>
                    <option value="Catholic">Catholic</option>
                    <option value="Others">Others</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Relation with Family</label>
                  <select name="family_relation" id="family_relation" class="form-control">
                    <option value="Good Relationship">Good Relationship</option>
                    <option value="Intermediate Relationship">Intermidiate Relationship</option>
                    <option value="Bad Relationship">Bad Relationship</option>
                  </select>
                </div>

                <div class="form-group">
                <label for="">Nationality</label>
                  <select name="nationality" id="nationality" class="form-control" required>
                        <option value="" selected>Select Country</option>
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
                  <input type="text" class="form-control" name="birth_place" value="<?php echo InputValue('birth_place'); ?>">
                </div>
              
            </diV>
        </div>
        <!-- language section -->
     
        <div class="form-group">
            <label for="title" class="text-center">Language</label>
            <div class="row">
              <!-- <div class="col-md-1"></div> -->
              <div class="col-md-4">
                <small>Mother Tongue</small>
                <input type="text" class="form-control" name="language_1" value="<?php echo InputValue('language_1'); ?>">
              </div>
              <div class="col-md-4">
              <small>Language #2</small>
                <input type="text" class="form-control" name="language_2" value="<?php echo InputValue('language_2'); ?>">
              </div>
              <div class="col-md-4">
              <small>Language #3</small>
                <input type="text" class="form-control" name="language_3" value="<?php echo InputValue('language_3'); ?>">
              </div>
            </div>
        </div>
<!-- education background -->
        <div class="row">
                <!-- educational background -->
        <div class="form-group col-md-6">
          <label for="">Educational Background</label>
          <select name="educational_bg" id="educational_bg" class="form-control">
            <option value="Educated">Educated</option>
            <option value="Uneducated">Uneducated</option>
          </select>
        </div>
               <!-- if eucational background == tru display this column -->
            <div class="form-group col-md-6">
             <label for="">Education Level</label>
             <select name="education_level" id="education_level" class="form-control">
               <option value="certificate(Grade 1-8)">certificate(Grade 1-8)</option>
               <option value="certificate(Grade 9-12)">certificate(Grade 9-12)</option>
               <option value="TVT">TVT</option>
               <option value="Diploma">Diploma</option>
               <option value="BA/BSc Degree">BA/BSC Degree</option>
               <option value="MA/MSC Degree">MA/MSC Degree</option>
               <option value="PHD Degree">PHD Degree</option>
             </select>
           </div>

        </div>

      <div class="row">
              <!-- occupation statsu -->
              <div class="form-group col-md-4">
                <label for="">Occupation</label>
                <select name="occupation" id="occupation" class="form-control">
                  <option value="Employed">Employed</option>
                  <option value="UnEmployed">UnEmployed</option>
                </select>
              </div>
                <!--  employement type -->
                  <div class="form-group col-md-4">
                    <label for="">Employment Type</label>
                    <select name="employment_type" id="employment_type" class="form-control">
                      <option value="Self Employee">Self Employee</option>
                      <option value="Govt Organization">Govt Organization</option>
                      <option value="Private Company">Private Company</option>
                      <option value="NGO">NGO</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4"  id = "employment_type_div">
                    <label for="" id="label_1">Self Employee Type</label>
                    <select name="self_employment_type" id="self_employment_type" class="form-control">
                      <option value="Marchant">Marchant</option>
                      <option value="Farmer">Farmer</option>
                    </select>
                  </div>

              <!-- salary if not self employ -->
                <div class="form-group col-md-4"  id = "salary_range_div">
                      <label for="" id="label_2">Salary Range</label>
                      <select name="salary_range" id="salary_range" class="form-control">
                        <option value="<1000">< 1000 </option>
                        <option value="1002-3000">1001-3000</option>
                        <option value="3001-5000">3001-5000</option>
                        <option value="Above 5000">Above 5000</option>
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
                <input type="text" class="form-control" name="city2" value="<?php echo InputValue('city2'); ?>" >
                <small>Kebale</small>
                <input type="text" class="form-control" name="kebale2" value="<?php echo InputValue('kebale2'); ?>">
              </div>

              <div class="col-md-4">
              <small>Sub City</small>
                <input type="text" class="form-control" name="subcity2" value="<?php echo InputValue('subcity2'); ?>">
                <small>House No</small>
                <input type="text" class="form-control" name="houseno2" value="<?php echo InputValue('houseno2'); ?>">
              </div>

              <div class="col-md-4">
              <small>Werada</small>
                <input type="text" class="form-control" name="werada2" value="<?php echo InputValue('werada2'); ?>">
                <small>PIN Code</small>
                <input type="text" class="form-control" name="pincode2" value="<?php echo InputValue('pincode2'); ?>">
              </div>

            </div>
        </div>

        <!-- family detail -->
        <div class="form-group">
            <label for="title" class="text-center">Mother Full Name</label>
            <div class="row">
              <!-- <div class="col-md-1"></div> -->
              <div class="col-md-4">
                <small>first Name</small>
                <input type="text" class="form-control" name="m_fname" value="<?php echo InputValue('m_fname'); ?>" >
              </div>
              <div class="col-md-4">
              <small>middle name</small>
                <input type="text" class="form-control" name="m_mname" value="<?php echo InputValue('m_mname'); ?>" >
              </div>
              <div class="col-md-4">
              <small>last name</small>
                <input type="text" class="form-control" name="m_lname" value="<?php echo InputValue('m_lname'); ?>" >
              </div>
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="text-center">Family Job Status</label>
            <div class="row">
              <!-- father job status -->
              <div class="col-md-6">
                  <small for="">Father Occupation</small>
                  <select name="father_occupation" id="father_occupation" class="form-control">
                    <option value="Unemployed">UnEmployed</option>
                    <option value="Employee">Employee</option>
                    <option value="Self Employee">Self Employee</option>
                    <option value="Student">Student</option>
                    <option value="NA">NA</option>
                  </select>
              </div>

              <div class="col-md-6">
              <small for="">Self Employee Type</small>
                  <select name="father_self_employee_type" id="father_self_employee_type" class="form-control">
                    <option value="Marchant">Marchant</option>
                    <option value="Farmer">Farmer</option>
                  </select>
            </div>
          </div>
          <div class="row">
                  <!--mathor job status-->
                  <div class="col-md-6">
                  <small for="">Mother Occupation</small>
                  <select name="mother_occupation" id="mother_occupation" class="form-control">
                    <option value="Unemployed">UnEmployed</option>
                    <option value="Employee">Employee</option>
                    <option value="Self Employee">Self Employee</option>
                    <option value="Student">Student</option>
                    <option value="NA">NA</option>
                  </select>
              </div>

              <div class="col-md-6">
              <small for="">Self Employee Type</small>
                  <select name="mother_self_employee_type" id="mother_self_employee_type" class="form-control">
                    <option value="Marchant">Marchant</option>
                    <option value="Farmer">Farmer</option>
                  </select>
            </div>
          </div><br>

          <div class="form-group">
            <label for="">Sibling Detail</label>
            <div class="row">
              <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <small for="title" class="text-center">Do You Have Sibbling?</small>
                    <select name="have_sibbling" id="have_sibbling" class="form-control">
                       <option value="yes">Yes</option>
                      <option value="no">No</option>
                    </select>
                </div>
                <div class="col-md-4">
                  <small>Number Of Brother</small>
                  <input type="text" class="form-control" name="brother_no" id="brother_no" value="<?php echo InputValue('m_mname'); ?>">
                </div>
                <div class="col-md-4">
                  <small>Number Of Sister</small>
                  <input type="text" class="form-control" name="sister_no" id="sister_no" value="<?php echo InputValue('m_lname'); ?>">
                </div>
            </div>
            <!-- brother detail -->
            <div class="row">
                <div class="col-md-6">
                    <small for="">Brother Marriage Status</small>
                    <select name="brother_marriage_status" id="brother_marriage_status" class="form-control">
                         <option value="Unmarried">Unmarried</option>
                         <option value="Married">Married</option>
                      </select>
                 </div>
               <!-- brother wife occupation -->
                 <div class="col-md-6">
                    <small for="">Brother Wife Occupation</small>
                    <select name="brother_wife_occupation" id="brother_wife_occupation" class="form-control">
                        <option value="Unemployed">UnEmployed</option>
                        <option value="Employee">Employee</option>
                        <option value="Self Employee">Self Employee</option>
                        <option value="Student">Student</option>
                      </select>
                 </div>
            </div>
            <div class="row">
                         <!-- sister detail -->
                <div class="col-md-6">
                    <small for="">Sister Marriage Status</small>
                    <select name="sister_marriage_status" id="sister_marriage_status" class="form-control">
                        <option value="Unmarried">Unmarried</option>
                        <option value="Married">Married</option>
                      </select>
                 </div>
            <!-- sister husband occupation-->
                <div class="col-md-6">
                    <small for="">Sister Husband Occupation</small>
                    <select name="sister_husband_occupation" id="sister_husband_occupation" class="form-control">
                        <option value="Unemployed">UnEmployed</option>
                        <option value="Employee">Employee</option>
                        <option value="Self Employee">Self Employee</option>
                        <option value="Student">Student</option>
                      </select>
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
                <input type="text" class="form-control" name="em_name" value="<?php echo InputValue('em_name'); ?>">
                <small>Mobile</small>
                <input type="text" class="form-control" name="mobile3" value="<?php echo InputValue('mobile3'); ?>">
                <small>Email</small>
                <input type="text" class="form-control" name="email3" value="<?php echo InputValue('email3'); ?>" >
 
              </div>

              <div class="col-md-4">
                <small>City</small>
                <input type="text" class="form-control" name="city3" value="<?php echo InputValue('city3'); ?>" >
                 <small>Sub City</small>
                <input type="text" class="form-control" name="subcity3" value="<?php echo InputValue('subcity3'); ?>">
                <small>Kebale</small>
                <input type="text" class="form-control" name="kebale3" value="<?php echo InputValue('kebale3'); ?>">

              </div>

              <div class="col-md-4">
               <small>Werada</small>
                <input type="text" class="form-control" name="werada3" value="<?php echo InputValue('werada3'); ?>">
                <small>House No</small>
                <input type="text" class="form-control" name="houseno3" value="<?php echo InputValue('houseno3'); ?>">
                <small>P.O. BOX</small>
                <input type="text" class="form-control" name="pobox3" value="<?php echo InputValue('pobox3'); ?>">
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
              <input class="form-control" type="text" name="exp_year">
        </div>

          <div class="hidspecial form-group">
              <label for="post_content">What is your Speciality</label>
              <select name="exp_special"  class="form-control">
                <option value="Disapora">Diaspora</option>
                <option value="Deliquence(NPL)">Deliquence(NPL)</option>
              </select>
          </div>

          </div>
        </div><hr>


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
        $dob    =   Escape($_POST['dob']);
        $birth_place    =   Escape($_POST['birth_place']);
        $nationality    =   Escape($_POST['nationality']);
        $martial_status = Escape($_POST['ms']);

        // occupation
        $occupation    =   Escape($_POST['occupation']);
        $employment_type   =   Escape($_POST['employment_type']).", ".Escape($_POST['self_employment_type']);
        $salary_range    =   Escape($_POST['salary_range']);

        // education
        $education_background =   Escape($_POST['educational_bg']);
        $education_level =  Escape($_POST['education_level']);


        $exp_level   = Escape($_POST['exp_level']);
        if($exp_level == 'special'){
            $exp_year = Escape($_POST['exp_special']);
        }else if($exp_level=='existing'){
          $exp_year = Escape($_POST['exp_year']);
        }else{
          $exp_year = 0;
        }

        //current address
        $city = Escape($_POST['city']);
        $subcity = Escape($_POST['subcity']);
        $werada = Escape($_POST['werada']);
        $kebale = Escape($_POST['kebale']);
        $houseno = Escape($_POST['houseno']);
        $pincode = Escape($_POST['pincode']);

        $current_address = $city.", ".$subcity.", ".$werada.", ".$kebale.", ".$houseno.", ".$pincode;

        // permanaet address

        $city2 = Escape($_POST['city2']);
        $subcity2 = Escape($_POST['subcity2']);
        $werada2 = Escape($_POST['werada2']);
        $kebale2 = Escape($_POST['kebale2']);
        $houseno2 = Escape($_POST['houseno2']);
        $pincode2 = Escape($_POST['pincode2']);

        $permanent_address = $city2.", ".$subcity2.", ".$werada2.", ".$kebale2.", ".$houseno2.", ".$pincode2;

        if($_POST['check_address']=='yes'){
          $permanent_address = $current_address;
        }

        // emergency contact
        $em_name = Escape($_POST['em_name']);
        $mobile3 = Escape($_POST['mobile3']);
        $email3 = Escape($_POST['email3']);
        $city3 = Escape($_POST['city3']);
        $subcity3 = Escape($_POST['subcity3']);
        $werada3 = Escape($_POST['werada3']);
        $kebale3 = Escape($_POST['kebale3']);
        $houseno3 = Escape($_POST['houseno3']);
        $pobox3 = Escape($_POST['pobox3']);

        
        $emergency_contact = $em_name.", ".$mobile3.", ".$email3.", ".$city3.", ".$subcity3.", ".$werada3.", ".$kebale3.", ".$houseno.", ".$pobox3;

        // family detail
        $mother_name = Escape($_POST['m_fname']).", ".Escape($_POST['m_mname']).", ".Escape($_POST['m_lname']);
        $mother_occupation = Escape($_POST['mother_occupation']).", ".Escape($_POST['mother_self_employee_type']);
        $father_occupation = Escape($_POST['father_occupation']).", ".Escape($_POST['father_self_employee_type']);
        $family_relation = Escape($_POST['family_relation']);
        // sibbling detail
        $sibbling_detail = Escape($_POST['have_sibbling']).", ".Escape($_POST['brother_no']).", ".Escape($_POST['sister_no']).", ".Escape($_POST['brother_marriage_status']).", ".Escape($_POST['brother_wife_occupation']).", ".Escape($_POST['sister_marriage_status']).", ".Escape($_POST['sister_husband_occupation']);
        // religion
        $religion = Escape($_POST['religion']);
        // language
        $language = Escape($_POST['language_1']).",".Escape($_POST['language_2']).",".Escape($_POST['language_3']);
        // generate random job seeker id
        $job_seeker_id = time();
        

        $res = GetDataById('registration', 'c_mobile',$mobile);
        $count = $res->num_rows;
        if($count==0){
            $res = AddNewCustomer($fname,$mname,$lname,$email,$mobile,$gender,$dob,$age,$birth_place,$martial_status,$occupation,$nationality,$current_address,$permanent_address,$emergency_contact,$education_background,$education_level,$salary_range,$exp_level,$exp_year,$employment_type,$mother_name,$mother_occupation,$father_occupation,$sibbling_detail,$religion,$language,$family_relation,$job_seeker_id);  
            if($res){
              $message = "<div class='alert alert-success text-center'><b>$fname $mname $lname</b> has successfully Registered as <b> $exp_level</b> and has been forwarded to staff.</div>";
              header("Location:customer_add.php?message=$message");
            }else{
              $dat = mysqli_error($connect);
              echo $dat;
              $message = "<div class='alert alert-danger text-center'>Failed to register this customer. Please try again!</div> ";
               header("Location:customer_add.php?message=$message");
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