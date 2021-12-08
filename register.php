<!-- check if the file already exists in the "uploads" folder. If it does, an error message is displayed, and $uploadOk 
is set to 0: -->

<?php                                   
session_start();
if(isset($_SESSION['name'])){
	if($_SESSION['name'] == 'admin'){
		header("Location: admin/admin.php");
	}
	else {
		header("Location: user/userlogin.php");
	}
}

if(isset($_POST['fname']))
  {
	$usertype = $_POST['usertype'];
	if($_POST['intarea']=="" && $usertype != 'Student')
    {
        $kerror1 = "Interst Of area Required!";
        $kfname = $_POST['fname'];
        $klname = $_POST['lname'];
        $kid = $_POST['id'];              //added by me
        $ksemester = $_POST['semester'];             //added by me for semester
        $kcountry = $_POST['country'];
        $kuniversity = $_POST['university'];
        $kusername = $_POST['username'];
        $kpass = $_POST['password'];
        $krpass = $_POST['rpassword'];
        $kqual = $_POST['qual'];
        $kemail = $_POST['em'];
        $kintarea = $_POST['intarea'];
        $kusertype = $_POST['usertype'];
	}
	else
    {
        include 'connection.php';
        $target_dir = "images/users/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
     
        if(isset($_POST["submit"])) 
         {
          $check = getimagesize($_FILES["img"]["tmp_name"]);
           if($check !== false) 
              {
                $error = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              }
           else 
              {  
               echo "File is not an image.";
               $uploadOk = 0;
              }
         }

// Check file size
if ($_FILES["img"]["size"] > 5000000)    //Now, we want to check the size of the file. If the file is larger than 500KB, an                                                   error message is displayed, and $uploadOk is set to 0.
{      
    $error = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats           ~allows users to upload JPG, JPEG, PNG, and GIF files. All other file types gives an                                                error message before setting $uploadOk to 0~
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
{
    $error ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	
   $kfname = $_POST['fname'];
	$klname = $_POST['lname'];
    $kid = $_POST['id'];          //added by me
    $ksemester = $_POST['semester'];         //added
	$kcountry = $_POST['country'];
	$kuniversity = $_POST['university'];
	$kusername = $_POST['username'];
	$kpass = $_POST['password'];
	$krpass = $_POST['rpassword'];
	$kqual = $_POST['qual'];
	$kemail = $_POST['em'];
	$kusertype = $_POST['usertype'];
	$kintarea = $_POST['intarea'];
// if everything is ok, try to upload file
} else {
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
    $kid = $_POST['id'];          ///added by me
    $ksemester = $_POST['semester'];          ///added
	$country = $_POST['country'];
	$university = $_POST['university'];
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpassword'];
	$qual = $_POST['qual'];
	$email = $_POST['em'];
	$gender = $_POST['gender'];
	if($rpass == $pass){
		$sql = "select * from `tbl_student` where username like '".$username. "'";

		$result = $con->query($sql); 
if ($result->num_rows > 0) {
	$kerror1 = "Username Already Exists!";
	$kfname = $_POST['fname'];
	$klname = $_POST['lname'];
    $kid = $_POST['id'];        /////////added by me
    $ksemester = $_POST['semester'];       ///added
	$kcountry = $_POST['country'];
	$kuniversity = $_POST['university'];
	$kusername = $_POST['username'];
	$kpass = $_POST['password'];
	$krpass = $_POST['rpassword'];
	$kqual = $_POST['qual'];
	$kemail = $_POST['em'];
	$kusertype = $_POST['usertype'];
	$kintarea = $_POST['intarea'];
}
else {
	$sql = "select * from `tbl_supervisor` where username like '".$username. "'";
	$result = $con->query($sql); 
	 if ($result->num_rows > 0) 
       {
		$kerror1 = "Username Already Exists!";
		$kfname = $_POST['fname'];
    $klname = $_POST['lname'];
    $kid = $_POST['id'];   
    $ksemester = $_POST['semester']; 
		$kcountry = $_POST['country'];
		$kuniversity = $_POST['university'];
		$kusername = $_POST['username'];
		$kpass = $_POST['password'];
		$krpass = $_POST['rpassword'];
		$kqual = $_POST['qual'];
		$kemail = $_POST['em'];
		$kusertype = $_POST['usertype'];
		$kintarea = $_POST['intarea'];
	   }
	 else{
		$sql = "select max(id) as mxid from `tbl_student`";
		$result = $con->query($sql); 
        if ($result->num_rows > 0) 
         {
          // output data of each row
           while($row = $result->fetch_assoc())
           {
		    $uid = $row['mxid'];
	       }
         }
	    $imgsrc = $target_dir.$uid.$username.'.'.$imageFileType;                ////added by me
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $imgsrc)) {
			
			if($usertype == 'Student')
            {
			$sql = "INSERT INTO `tbl_student`(`fname`, `lname`,'id', 'semester',`university`, `country`, `username`, `pass`,`img`,active,qualifications,email,gender) VALUES ('".$fname."','".$lname."','".$id."','".$semester."','".$university."','".$country."','".$username."','".$pass."','..\\\\".$imgsrc."',1,'".$qual."','".$email."','".$gender."')";
			$con->query($sql);	
			header('Location: approve.php');
		    exit();
			}
            
			else 
            {
	         $sql = "INSERT INTO `tbl_supervisor`(`fname`, `lname`, 'id','semester',`university`, `country`, `username`, `pass`,`img`,active,qualifications,email,gender,areaofinterest) VALUES ('".$fname."','".$lname."','".$university."','".$country."','".$username."','".$pass."','..\\\\".$imgsrc."',1,'".$qual."','".$email."','".$gender."','".$_POST['intarea']."')";
		   $con->query($sql);	
		   header('Location: approve.php');
		   exit();
		
	       }
		
		
        //echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
		
	
    } else {
          $error= "Sorry, there was an error uploading your file.";
		    $kfname = $_POST['fname'];
            $klname = $_POST['lname'];
            $kid = $_POST['id'];                         //added
             $ksemester = $_POST['semester'];        //////////added
            $kcountry = $_POST['country'];
            $kuniversity = $_POST['university'];
            $kusername = $_POST['username'];
            $kpass = $_POST['password'];
            $krpass = $_POST['rpassword'];
            $kqual = $_POST['qual'];
            $kemail = $_POST['em'];
            $kusertype = $_POST['usertype'];
            $kintarea = $_POST['intarea'];
         }
}}
	}
	else {
		
	$kerror1 = "Password does not matched!";
	$kfname = $_POST['fname'];
  $klname = $_POST['lname'];
  $kid = $_POST['id'];             //added
  $ksemester = $_POST['semester']; //added
	$kcountry = $_POST['country'];
	$kuniversity = $_POST['university'];
	$kusername = $_POST['username'];
	$kpass = $_POST['password'];
	$krpass = $_POST['rpassword'];
	$kqual = $_POST['qual'];
	$kemail = $_POST['em'];
	$kusertype = $_POST['usertype'];
	$kintarea = $_POST['intarea'];
	}
    
}
}}
?>
<?php
include 'temp_nav.php';
?>

<!--  page banner -->
  <section id="page-banner" class="page-banner-main-block" style="background-image: url('images/bg/page-banner.jpg')"> 
    <h1 class="page-banner-heading text-center">Register</h1>
  </section> 
<!--  end page banner  -->

<div class="row">
  <div class="col-sm-3"></div>
   <form method="post" enctype="multipart/form-data" action="register.php">
       <div class="col-sm-6">
              <label>Name </label>
              <div class="form-group">
                <input type="text" class="form-control" required id="name"  name="fname" placeholder="Enter First Name" value="<?php if(isset($kfname)) echo $kfname;?>"/>
              </div>
           
              <div class="form-group">
                <input type="text" required class="form-control" id="name"  name="lname" placeholder="Enter Last Name" value="<?php if(isset($kfname)) echo $klname;?>"/>
              </div>
           
               <div class="form-group">
                <label>Registration id</label>
                <input type="text" required class="form-control"  name="id" placeholder="university id (Compulsory for student)" value="<?php if(isset($kid)) echo $kid;?>"/>        <!-- ///////edited by me-->
              </div>
           
              <div class="form-group">
                <label>Semester</label>
                <input type="text" required class="form-control" id="semester"  name="semester" value="<?php if(isset($kfname)) echo $ksemester;?>"/>               <!-- //edited by me -->
              </div>
           
              <div class="form-group">
              	<label>Gender</label>
              	   <select class="form-control" name="gender">
              		<option value='male'> Male </option>
              		<option value='female'> Female </option>
              	   </select>
              </div>
           
               <div class="form-group">
                <label>University</label>
                <input type="text" required class="form-control"  name="university" placeholder="Enter Your Universty name " value="<?php if(isset($kfname)) echo $kuniversity;?>"/>
              </div>
           
              <div class="form-group">
					       <select class="form-control" required name="country">
                               <option value="">Select Country</option>
                               <option value="Afganistan">Afghanistan</option>
                               <option value="Albania">Albania</option>
                               <option value="Algeria">Algeria</option>
                               <option value="American Samoa">American Samoa</option>
                               <option value="Andorra">Andorra</option>
                               <option value="Angola">Angola</option>
                               <option value="Anguilla">Anguilla</option>
                               <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                               <option value="Argentina">Argentina</option>
                               <option value="Armenia">Armenia</option>
                               <option value="Aruba">Aruba</option>
                               <option value="Australia">Australia</option>
                               <option value="Austria">Austria</option>
                               <option value="Azerbaijan">Azerbaijan</option>
                               <option value="Bahamas">Bahamas</option>
                               <option value="Bahrain">Bahrain</option>
                               <option value="Bangladesh">Bangladesh</option>
                               <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
           
              <div class="form-group">
                <input type="text" required class="form-control" id="name"  name="qual" placeholder="Enter Your Qualifications" value="<?php if(isset($kfname)) echo  $kqual;?>"/>
              </div>
    
				<div class="form-group">
				   <label> Register as: </label>
				    <select class="form-control" required name="usertype">
                          <option <?php if(isset($kusertype) && $kusertype=='Admin') echo 'selected'; ?> value="Admin">Admin</option>
                    
				          <option <?php if(isset($kusertype) && $kusertype=='Student') echo 'selected'; ?> value="Student">Student</option>
                    
                          <option <?php if(isset($kusertype) && $kusertype=='Supervisor') echo 'selected'; ?>  value="Supervisor">Supervisor</option>
                               
                          <option <?php if(isset($kusertype) && $kusertype=='Head_of_Committee') echo 'selected'; ?>  value="head_of_committee">Head of Committee</option>
                            
                          <option <?php if(isset($kusertype) && $kusertype=='Evaluation_Committee') echo 'selected'; ?>  value="Evaluation_Committee">Evaluation Committtee</option>
                    </select>
				</div>
    
				<div class="form-group">
                    <input type="text" class="form-control" id="name"  name="intarea" placeholder="Enter Your Area of Interest (Compulsory for Supervisor)" value="<?php if(isset($kfname)) echo  $kintarea;?>"/>
				</div>
							
                <div class="form-group">
                <input type="email" required class="form-control" id="name"  name="em" placeholder="Enter Your email" value="<?php if(isset($kfname)) echo  $kemail;?>"/>
                </div>
           
               <div class="form-group"><label>Upload your Pic: </label>
                <input required type="file" name="img"  /><p style="color:red; font-size:13px;"><?php if(isset($error)) echo $error; ?></p>
              </div>
           
              <div class="form-group">
                <input required type="text" class="form-control" id="name"  name="username" placeholder="Enter Your Username" value="<?php if(isset($kfname)) echo $kusername;?>"/>
              </div>
           
              <div class="form-group">
                <input required class="form-control" type="password" 
                name="password" placeholder="Enter Your Password" value="<?php if(isset($kfname)) echo $kpass;?>"/>
              </div>
           
              <div class="form-group">
                <input  class="form-control" type="password" 
                name="rpassword"  required placeholder="Re-enter Your Password" value="<?php if(isset($kfname)) echo $krpass;?>"/>
                <P style="font-size:13px; color:red"><?php if(isset($kerror1))echo $kerror1;?></P>
              </div>
              
               <div class="form-group">             
                <button type="submit" class="btn btn-default">Register</button>
               </div>
           
    </form>
  </div>
 </div>
            <div class="col-sm-3"></div></div>

<?php
include 'temp_footer.php';
?>