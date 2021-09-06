<!DOCTYPE HTML>
<html>
<head>
<title> Matrimonial Signup Page Website Template | SmartEye Apps</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="assets/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

<link href="assets/css/font-awesome.css" rel="stylesheet"> 



</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="container-fluid">
   <div class="cont-top shado-1">
      <div class="container">
          <div class="row">
              <div  class="col-sm-4 logo-cc">
                <img src="assets/images/christian_logo.gif">
              </div>
              <div  class="col-sm-8">
                <?php if (isset($validation)) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
                <?php endif; ?>

              <form action="<?php echo base_url('login'); ?>" method="post">
                <div class="row login-hd">
                    <div class="col-sm-2">
                      
                    </div>
                    <div style="padding-right:0px;" class="col-sm-4">
                      <input placeholder="Enter Email Address" type="text" class="form-control input-sm" name="email">
                    </div>
                    <div  style="padding-right:0px;" class="col-sm-4">
                        <input placeholder="Enter Password" type="text" class="form-control input-sm" name="password">
                    </div>
                    <div class="col-sm-2">
                        <button style="font-weight:600" class="btn btn-sm btn-success">Login</button>
                    </div>
                </div>
                
              </form>  
              </div>
          </div>

      </div>


   </div>
















 </div>



<div class="regformbg">
    <div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5">
              <div style="color:#535353; font-size:13px;" class="reg-box shado-1">
                  <h1>Register  Free</h1>

                  <?php if(session()->getFlashdata('success')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('success') ?></div>
                <?php endif;?>
                  <form action="<?= base_url('register') ?>" method="post">
              
                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Profile created by :</label>
                      </div>
                      <div class="col-sm-8">
                          <select name="createdby" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="">Select</option>
                              <option value="Self">Self</option>
                              <option value="Parents">Parents</option>
                              <option value="Sibling">Sibling</option>
                              <option value="Relative">Relative</option>
                              <option value="Friend">Friend</option>

                          </select>
                      </div>
                  </div>


                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Name :</label>
                      </div>
                      <div class="col-sm-8">
                         <input required="required" type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="uname" value="<?= $uname; ?>">
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Gender :</label>
                      </div>
                      <div class="col-sm-8">
                         <input value="Male" checked="checked" required="required" type="radio" name="gender" value="male"> Male &nbsp;&nbsp;
                          <input value="Female" required="required" type="radio" name="gender" value="female"> Female
                      </div>
                  </div>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Date of Birth :</label>
                      </div>
                      <div class="col-sm-8">
                          <div class="row">
                              <div style="padding:0px 2px;" class="col-sm-4">
                                <select name="day" required="required" style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm">
                                    <option value="0" selected="">DD</option>
                                    <option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                </select>
                              </div>
                              <div style="padding:0px 2px;" class="col-sm-4">
                                  <select name="month" required="required"  style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm">
                                    <option value="0" selected="">MM</option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
                                 </select>
                              </div>
                              <div style="padding:0px 2px;" class="col-sm-4">
                                  <select name="year"  required="required" style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm">
                                    <option value="0" selected="">YYYY</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option>
                                 </select>
                              </div>
                          </div>
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Maritial Status :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="mstatus" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option selected="selected" value="0">Select Marital Status</option>
          <option value="1">Unmarried</option><option value="2">Widow / Widower</option><option value="3">Divorced</option><option value="4">Separated</option>
                          </select>
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Denomination :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="denom" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0" selected="" title="Select Denomination" alt="Select Denomination">Select Denomination</option><option value="3" title="Adventist" alt="Adventist">Adventist</option><option value="4" title="Anglican / Episcopal" alt="Anglican / Episcopal">Anglican / Episcopal</option><option value="5" title="Apostolic" alt="Apostolic">Apostolic</option><option value="6" title="Assyrian" alt="Assyrian">Assyrian</option><option value="7" title="Assembly of God (AG)" alt="Assembly of God (AG)">Assembly of God (AG)</option><option value="8" title="Baptist" alt="Baptist">Baptist</option><option value="9" title="Born Again" alt="Born Again">Born Again</option><option value="10" title="Brethren" alt="Brethren">Brethren</option><option value="11" title="Calvinist" alt="Calvinist">Calvinist</option><option value="12" title="Catholic" alt="Catholic">Catholic</option><option value="13" title="Church of God" alt="Church of God">Church of God</option><option value="14" title="Church of South India (CSI)" alt="Church of South India (CSI)">Church of South India (CSI)</option><option value="45" title="Church of Christ" alt="Church of Christ">Church of Christ</option><option value="15" title="Congregational" alt="Congregational">Congregational</option><option value="16" title="Evangelical" alt="Evangelical">Evangelical</option><option value="17" title="Jacobite" alt="Jacobite">Jacobite</option><option value="18" title="Jehovah's Witnesses" alt="Jehovah's Witnesses">Jehovah's Witnesses</option><option value="20" title="Latin Catholic" alt="Latin Catholic">Latin Catholic</option><option value="21" title="Latter day saints" alt="Latter day saints">Latter day saints</option><option value="22" title="Lutheran" alt="Lutheran">Lutheran</option><option value="23" title="Malankara" alt="Malankara">Malankara</option><option value="24" title="Marthoma" alt="Marthoma">Marthoma</option><option value="25" title="Melkite" alt="Melkite">Melkite</option><option value="26" title="Mennonite" alt="Mennonite">Mennonite</option><option value="27" title="Methodist" alt="Methodist">Methodist</option><option value="28" title="Moravian" alt="Moravian">Moravian</option><option value="29" title="Orthodox" alt="Orthodox">Orthodox</option><option value="30" title="Pentecostal" alt="Pentecostal">Pentecostal</option><option value="31" title="Protestant" alt="Protestant">Protestant</option><option value="32" title="Presbyterian" alt="Presbyterian">Presbyterian</option><option value="33" title="Seventh-day Adventist" alt="Seventh-day Adventist">Seventh-day Adventist</option><option value="34" title="Syro Malabar" alt="Syro Malabar">Syro Malabar</option><option value="35" title="Syrian Catholic" alt="Syrian Catholic">Syrian Catholic</option><option value="5021" title="Church of North India" alt="Church of North India">Church of North India</option><option value="9997" title="Others" alt="Others">Others</option>
                          </select>
                      </div>
                  </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Division :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="division"  required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0" selected="" title="Select Division" alt="Select Division">Select Division</option><option value="2" title="Adi Dravida" alt="Adi Dravida">Adi Dravida</option><option value="1007" title="Anglo Indian" alt="Anglo Indian">Anglo Indian</option><option value="1008" title="Cheraman" alt="Cheraman">Cheraman</option><option value="1009" title="Fernando" alt="Fernando">Fernando</option><option value="1010" title="Garo" alt="Garo">Garo</option><option value="58" title="Goan" alt="Goan">Goan</option><option value="1011" title="Khasi" alt="Khasi">Khasi</option><option value="506" title="Knanaya" alt="Knanaya">Knanaya</option><option value="1012" title="Kuki" alt="Kuki">Kuki</option><option value="109" title="Madiga" alt="Madiga">Madiga</option><option value="111" title="Mahar" alt="Mahar">Mahar</option><option value="116" title="Mala" alt="Mala">Mala</option><option value="125" title="Matang" alt="Matang">Matang</option><option value="1013" title="Mizo" alt="Mizo">Mizo</option><option value="1014" title="Mukkuvar" alt="Mukkuvar">Mukkuvar</option><option value="137" title="Nadar" alt="Nadar">Nadar</option><option value="1015" title="Naga" alt="Naga">Naga</option><option value="176" title="SC" alt="SC">SC</option><option value="214" title="ST" alt="ST">ST</option><option value="63" title="Intercaste" alt="Intercaste">Intercaste</option><option value="9997" title="Others" alt="Others">Others</option><option value="9998" title="Don't wish to specify" alt="Don't wish to specify">Don't wish to specify</option> 
                          </select>
                      </div>
                  </div>


                    <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Subcast :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="subcast" type="text" placeholder="Enter Subcast" class="form-control sml-frm input-sm" name="">
                      </div>
                  </div>


                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Mother Tongue :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="language"  required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option value="0" selected="" title="Select Mother Tongue" alt="Select Mother Tongue">Select Mother Tongue</option><option value="117" title="Angika" alt="Angika">Angika</option><option value="Arunachali" title="Arunachali" alt="Arunachali">Arunachali</option><option value="2" title="Assamese" alt="Assamese">Assamese</option><option value="3" title="Awadhi" alt="Awadhi">Awadhi</option><option value="116" title="Badaga" alt="Badaga">Badaga</option><option value="4" title="Bengali" alt="Bengali">Bengali</option><option value="5" title="Bhojpuri" alt="Bhojpuri">Bhojpuri</option><option value="6" title="Brij" alt="Brij">Brij</option><option value="7" title="Bihari" alt="Bihari">Bihari</option><option value="8" title="Chatisgarhi" alt="Chatisgarhi">Chatisgarhi</option><option value="9" title="Dogri" alt="Dogri">Dogri</option><option value="10" title="English" alt="English">English</option><option value="11" title="French" alt="French">French</option><option value="12" title="Garhwali" alt="Garhwali">Garhwali</option><option value="13" title="Garo" alt="Garo">Garo</option><option value="14" title="Gujarati" alt="Gujarati">Gujarati</option><option value="15" title="Haryanvi" alt="Haryanvi">Haryanvi</option><option value="16" title="Himachali/Pahari" alt="Himachali/Pahari">Himachali/Pahari</option><option value="17" title="Hindi" alt="Hindi">Hindi</option><option value="18" title="Kanauji" alt="Kanauji">Kanauji</option><option value="19" title="Kannada" alt="Kannada">Kannada</option><option value="20" title="Kashmiri" alt="Kashmiri">Kashmiri</option><option value="21" title="Khandesi" alt="Khandesi">Khandesi</option><option value="22" title="Khasi" alt="Khasi">Khasi</option><option value="23" title="Konkani" alt="Konkani">Konkani</option><option value="24" title="Koshali" alt="Koshali">Koshali</option><option value="25" title="Kumoani" alt="Kumoani">Kumoani</option><option value="26" title="Kutchi" alt="Kutchi">Kutchi</option><option value="27" title="Lepcha" alt="Lepcha">Lepcha</option><option value="28" title="Ladacki" alt="Ladacki">Ladacki</option><option value="29" title="Magahi" alt="Magahi">Magahi</option><option value="30" title="Maithili" alt="Maithili">Maithili</option><option value="31" title="Malayalam" alt="Malayalam">Malayalam</option><option value="32" title="Manipuri" alt="Manipuri">Manipuri</option><option value="33" title="Marathi" alt="Marathi">Marathi</option><option value="34" title="Marwari" alt="Marwari">Marwari</option><option value="35" title="Miji" alt="Miji">Miji</option><option value="36" title="Mizo" alt="Mizo">Mizo</option><option value="37" title="Monpa" alt="Monpa">Monpa</option><option value="38" title="Nicobarese" alt="Nicobarese">Nicobarese</option><option value="39" title="Nepali" alt="Nepali">Nepali</option><option value="40" title="Odiya" alt="Odiya">Odiya</option><option value="41" title="Punjabi" alt="Punjabi">Punjabi</option><option value="42" title="Rajasthani" alt="Rajasthani">Rajasthani</option><option value="43" title="Sanskrit" alt="Sanskrit">Sanskrit</option><option value="44" title="Santhali" alt="Santhali">Santhali</option><option value="45" title="Sindhi" alt="Sindhi">Sindhi</option><option value="46" title="Sourashtra" alt="Sourashtra">Sourashtra</option><option value="47" title="Tamil" alt="Tamil">Tamil</option><option value="48" title="Telugu" alt="Telugu">Telugu</option><option value="49" title="Tripuri" alt="Tripuri">Tripuri</option><option value="50" title="Tulu" alt="Tulu">Tulu</option><option value="51" title="Urdu" alt="Urdu">Urdu</option><option value="52" title="Bhutia" alt="Bhutia">Bhutia</option><option value="53" title="Italian" alt="Italian">Italian</option><option value="54" title="Kakbarak" alt="Kakbarak">Kakbarak</option><option value="55" title="Persian" alt="Persian">Persian</option><option value="56" title="Spanish" alt="Spanish">Spanish</option><option value="57" title="Vietnamese" alt="Vietnamese">Vietnamese</option><option value="58" title="Arabic" alt="Arabic">Arabic</option><option value="59" title="Chinese" alt="Chinese">Chinese</option><option value="60" title="Portuguese" alt="Portuguese">Portuguese</option><option value="61" title="Russian" alt="Russian">Russian</option><option value="62" title="Thai" alt="Thai">Thai</option><option value="63" title="Bahasa indonesia" alt="Bahasa indonesia">Bahasa indonesia</option><option value="64" title="Malay" alt="Malay">Malay</option><option value="65" title="Sinhalese" alt="Sinhalese">Sinhalese</option><option value="100" title="Turkish" alt="Turkish">Turkish</option><option value="101" title="Kurdish" alt="Kurdish">Kurdish</option><option value="102" title="Kiswahili" alt="Kiswahili">Kiswahili</option><option value="103" title="Filipino" alt="Filipino">Filipino</option><option value="104" title="German" alt="German">German</option><option value="105" title="Albanian" alt="Albanian">Albanian</option><option value="106" title="Chichewa" alt="Chichewa">Chichewa</option><option value="107" title="Serbian" alt="Serbian">Serbian</option><option value="108" title="Dutch" alt="Dutch">Dutch</option><option value="109" title="Farsi" alt="Farsi">Farsi</option><option value="110" title="Hausa" alt="Hausa">Hausa</option><option value="111" title="Javanese" alt="Javanese">Javanese</option><option value="112" title="Mandarin" alt="Mandarin">Mandarin</option><option value="113" title="Pashtu" alt="Pashtu">Pashtu</option><option value="114" title="Sundanese" alt="Sundanese">Sundanese</option><option value="115" title="Turkmen" alt="Turkmen">Turkmen</option>
                          </select>
                      </div>
                  </div>

                    <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Enter Country :</label>
                      </div>
                      <div class="col-sm-8">
                         <input name="country" required="required" type="text" placeholder="Enter Country" class="form-control sml-frm input-sm" name="">
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Mobile No :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="mobile" required="required" type="number" placeholder="Enter Mobile No" class="form-control sml-frm input-sm" name="">
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Email Address :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="email" required="required" type="email" placeholder="Email Address" class="form-control sml-frm input-sm" name="">
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Login Password :</label>
                      </div>
                      <div class="col-sm-8">
                        <input name="password" required="required" type="password" placeholder="Enter Login Password" class="form-control sml-frm input-sm" name="">
                      </div>
                  </div>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          
                      </div>
                      <div class="col-sm-8">
                        <button style="font-weight:600; float:right" class="btn btn-sm btn-success">Register Now</button>
                      </div>
                  </div>

                  </form>



              </div>
            </div>
        </div>

    </div>

    <div class="fot-contrr">
      <div class="container">
        <div class="row center">
            <h2  class="dfsgg">Find the onw who Competes You</h2>
            <form method="post" action="http://localhost/matrimonial/search">
            <div  class="row iju-ckij">
                <div class="col-sm-3">
                 <span> Age : </span>
                  <select name="from" style="width:32%;">
                    <option value="">Select Age</option><option value="18">18</option><option value="19">19</option>
                    <option value="20">20</option><option value="21">21</option><option value="22">22</option>
                    <option value="23">23</option><option value="24">24</option><option value="25">25</option>
                    <option value="26">26</option><option value="27">27</option><option value="28">28</option>
                    <option value="29">29</option><option value="30">30</option><option value="31">31</option>
                    <option value="32">32</option><option value="33">33</option><option value="34">34</option>
                    <option value="35">35</option><option value="36">36</option><option value="37">37</option>
                    <option value="38">38</option><option value="39">39</option><option value="40">40</option>
                    <option value="41">41</option><option value="42">42</option><option value="43">43</option>
                    <option value="44">44</option><option value="45">45</option><option value="46">46</option>
                  </select>
                   <span> To : </span>
                  <select name="to" style="width:32%;">
                    <option value="">Select Age</option><option value="18">18</option><option value="19">19</option>
                    <option value="20">20</option><option value="21">21</option><option value="22">22</option>
                    <option value="23">23</option><option value="24">24</option><option value="25">25</option>
                    <option value="26">26</option><option value="27">27</option><option value="28">28</option>
                    <option value="29">29</option><option value="30">30</option><option value="31">31</option>
                    <option value="32">32</option><option value="33">33</option><option value="34">34</option>
                    <option value="35">35</option><option value="36">36</option><option value="37">37</option>
                    <option value="38">38</option><option value="39">39</option><option value="40">40</option>
                    <option value="41">41</option><option value="42">42</option><option value="43">43</option>
                    <option value="44">44</option><option value="45">45</option><option value="46">46</option>
                  </select>
                </div>
                 <div class="col-sm-2">
                    <select name="by" style="width:100%;">
                      <option value="">Created by</option>
                      <option value="Self">Self</option>
                      <option value="Parents">Parents</option>
                      <option value="Sibling">Sibling</option>
                      <option value="Relative">Relative</option>
                      <option value="Friend">Friend</option>
                    </select>

                 </div>
                  <div class="col-sm-2">
                    <select name="mstat" style="width:100%;">
                      <option value="">Maritial Status</option>
                      <option value="1">Unmarried</option>
                      <option value="2">Widow / Widower</option>
                      <option value="3">Divorced</option>
                      <option value="4">Separated</option>
                    </select>

                  </div>
                   <div class="col-sm-2">
                    <select name="denom" style="width:100%;">
                      <option  value="">Select Denomination</option>
                      <option  value="Adventist" >Adventist</option>
                      <option  value="Anglican / Episcopal" >Anglican / Episcopal</option>
                      <option  value="Apostolic" >Apostolic</option>
                      <option  value="Assyrian" >Assyrian</option>
                      <option  value="Assembly of God (AG)">Assembly of God (AG)</option>
                      <option  value="Baptist" >Baptist</option>
                      <option  value="Born Again" >Born Again</option>
                      <option  value="Brethren" >Brethren</option>
                      <option  value="Calvinist" >Calvinist</option>
                      <option  value="Catholic" >Catholic</option>
                      <option  value="Church of God" >Church of God</option>
                      <option  value="Church of South India (CSI)" >Church of South India (CSI)</option>
                      <option  value="Church of Christ" >Church of Christ</option>
                      <option  value="Congregational" >Congregational</option>
                      <option  value="Evangelical" >Evangelical</option>
                      <option  value="Jacobite" >Jacobite</option>
                      <option  value="Jehovah's Witnesses" >Jehovah's Witnesses</option>
                      <option  value="Latin Catholic" >Latin Catholic</option>
                      <option  value="Latter day saints" >Latter day saints</option>
                      <option  value="Lutheran" >Lutheran</option>
                      <option  value="Malankara" >Malankara</option>
                      <option  value="Marthoma" >Marthoma</option>
                      <option  value="Melkite" >Melkite</option>
                      <option  value="Mennonite" >Mennonite</option>
                      <option  value="Methodist" >Methodist</option>
                      <option  value="Moravian" >Moravian</option>
                      <option  value="Orthodox" >Orthodox</option>
                      <option  value="Pentecostal" >Pentecostal</option>
                      <option  value="Protestant">Protestant</option>
                      <option  value="Presbyterian" >Presbyterian</option>
                      <option  value="Seventh-day Adventist" >Seventh-day Adventist</option>
                      <option  value="Syro Malabar" >Syro Malabar</option>
                      <option  value="Syrian Catholic" >Syrian Catholic</option>
                      <option  value="Church of North India" >Church of North India</option>
                      <option  value="Others" value="9997">Others</option>
                    </select>
                   </div>
                    <div class="col-sm-2">
                        <button  style="width:100%;" class="btn btn-default">SEARCH</button>

                    </div>
            </div>
            </form>
        </div>
      </div>  
    </div>



    <div class="succss-story">
      
        <div class="container">
            <div style="margin-bottom:20px;" class="row center">
                <h2>Success Story</h2>
            </div>

            <div class="row">
                <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>
                 <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>

                 <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>

                 <div style="margin-top:20px;" class="col-sm-6">
                  <div class="col-sm-3">
                      <img style="width:100%;" src="assets/images/7dd.jpg">
                  </div>
                  <div class="col-sm-9">
                      <h4>Lorem & Ipsum</h4>
                      <p style="font-size:12px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,.</p>
                  </div>
                </div>

            </div>
              

        </div>

    </div>




  
  <div class="footer">
      
      <div class="container">
        <div style="padding:20px;" class="row">
          <div class="col-sm-6">
              <b>About Us</b>
              <p style="text-indent:20px;">There are many variations of passages of Lorem Ipsum available, but There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>

          </div>

           <div class="col-sm-3">
               <b>Help & Support</b>
               <ul class="sddasds">
          <li><a >24x7 Live help</a></li>
          <li><a >Contact us</a></li>
          <li><a >Feedback</a></li>
          <li><a >FAQs</a></li>
        </ul>

           </div>

            <div class="col-sm-3 ">
               <b>Quick Links</b>

                <ul class="sddasds">
          <li><a >24x7 Live help</a></li>
          <li><a >Contact us</a></li>
          <li><a >Feedback</a></li>
          <li><a >FAQs</a></li>
        </ul>

           </div>


        </div>
         


      </div>

      
    </div>
 <div class="copy">
        <a href="https://www.smarteyeapps.com"> Designed By Smarteyeapps.com</a>
    </div>

</div>
    
   

    </body>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap1.min.html"></script>