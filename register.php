<!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>wedme.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

<?php
include'header.php';
?>

		<div id="fh5co-couple"  class="fh5co-section-gray" style="background-image:url(images/wed11.jpg); center;" data-stellar-background-ratio="0.5">
			<div class="container">
				        <div class="row">
            
            <div class="col-sm-8">
              <div style="color:black; font-size:13px;" class="reg-box shado-1">
                  <h1>Register  Free</h1>
                  <form method="post" action="" enctype="multipart/form-data">
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
                  </div><br>


                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Name :</label>
                      </div>
                      <div class="col-sm-8">
                         <input required="required" type="text" placeholder="Enter Name" class="form-control sml-frm input-sm" name="name"
						 pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted.">
                      </div>
                  </div><br>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Gender :</label>
                      </div>
                      <div class="col-sm-8">
                         <input value="Male" checked="checked" required="required" type="radio" name="gender"> Male &nbsp;&nbsp;
                          <input value="Female" required="required" type="radio" name="gender"> Female
                      </div>
                  </div><br>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Date of Birth :</label>
                      </div>
                      <div class="col-sm-8">
                          <input required="required" type="date" name="dob">
                      </div>
                  </div><br>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Maritial Status :</label>
                      </div>
                      <div class="col-sm-8">
                         <select name="mstatus" required="required" style="padding-top: 3px;" class="form-control sml-frm input-sm">
                              <option selected="selected" value="0">Select Marital Status</option>
                              <option value="Unmarried">Unmarried</option>
							  <option value="Widow / Widower">Widow / Widower</option>
							  <option value="Divorced">Divorced</option>
							  <option value="Separated">Separated</option>
                          </select>
                      </div>
                  </div><br>
               
                 
                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Enter Housename :</label>
                      </div>
                      <div class="col-sm-8">
                         <input  required="required" type="text" placeholder="Enter House Name" 
						 class="form-control sml-frm input-sm" name="hname"
						 pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted.">
                      </div>
                  </div><br>
                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Enter Streetname :</label>
                      </div>
                      <div class="col-sm-8">
                         <input  required="required" type="text" placeholder="Enter Street Name" 
						 class="form-control sml-frm input-sm" name="sname"
						 pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted.">
                      </div>
                  </div>	<br>			  

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Enter City :</label>
                      </div>
                      <div class="col-sm-8">
                         <input required="required" type="text" placeholder="Enter City" 
						 class="form-control sml-frm input-sm" name="city"
						 pattern='[a-zA-Z\s]{3,30}' title="Minimum 3 & maximum 30 characters. Letters only permitted.">
                      </div>
                  </div><br>
				  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Enter Pincode :</label>
                      </div>
                      <div class="col-sm-8">
                         <input required="required" type="text" placeholder="Enter Pincode" 
						 class="form-control sml-frm input-sm" name="pincode"
						 pattern='[0-9]{3,10}' title="Minimum 3 & maximum 10 characters. digits only permitted.">
                      </div>
                  </div><br>

                  <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Mobile No :</label>
                      </div>
                      <div class="col-sm-8">
                        <input required="required" type="number" placeholder="Enter Mobile No" 
						class="form-control sml-frm input-sm" name="phno"
						pattern='[0-9]{10}' title="10 digits only.">
                      </div>
                  </div><br>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Email Address :</label>
                      </div>
                      <div class="col-sm-8">
                        <input required="required" type="email" placeholder="Email Address" 
						class="form-control sml-frm input-sm" name="email">
                      </div>
                  </div><br>

                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Login Password :</label>
                      </div>
                      <div class="col-sm-8">
                        <input required="required" type="password" placeholder="Enter Login Password" 
						class="form-control sml-frm input-sm" name="pswd"
						pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
						title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                  </div><br>
                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Confirm Password :</label>
                      </div>
                      <div class="col-sm-8">
                        <input required="required" type="password" placeholder="Confirm Password" 
						class="form-control sml-frm input-sm" name="cpswd"
						pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
						title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                      </div>
                  </div><br>
                   <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">Photo :</label>
                      </div>
                      <div class="col-sm-8">
                          <input required="required" type="file" id="photo" name="photo">
                      </div>
                  </div><br>

                      <div class="col-sm-8">
                        <button style="font-weight:600; float:right" name="reg" class="btn btn-sm btn-success" type="submit">Register Now</button>
                      </div>
                  </div>

                  </form>
<?php
   include 'dbconnect.php';
   
if(isset($_POST['reg']))
{
	$id=autoid("tbl_users","uid");
	$lid=autoid("tbl_login","login_id");
	
    $flag=0;
	//$id,$createdby,$name,$gender,$dob,$mstatus,$hname,$sname,$city,$pincode,$phno,$email,$pswd,$cpswd
    
	$createdby=$_POST['createdby'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
	$mstatus=$_POST['mstatus'];
    $hname=$_POST['hname'];
    $sname=$_POST['sname'];
    $city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	$cpswd=$_POST['cpswd'];
	$date=date("y-m-d");

   
	

	$date1=new DateTime($dob);
    $date2=new DateTime($date);
	$interval = $date1->diff($date2);

    $myage= $interval->y; 
	


  $target_dir = "photo/";

    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . $phno . "." . $imageFileType;
    $uploadOk = 1;
    
    // Check if file already exists, replace it
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
          //  echo "The file ". $phno . "." . $imageFileType . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }








	if ($myage >= 18)
	{ 
      $flag=0;
	} 
    else
	{ 
     $flag=2;
	}
	    
		
		if($flag==2)
        {
            echo"<script>alert('Enter valid DOB');</script>";
        }
	
	
    if($pswd!=$cpswd)
    {
        $flag=1;
    }
	
    if($flag==0)
    {
        
        
        $data="SELECT * FROM tbl_users natural join tbl_login";
        $c=0;
        $sd="SELECT * FROM tbl_users";
        $p=mysqli_query($con,$sd);
        while($row=mysqli_fetch_array($p))
        {
            $c++;
        }
        $c++;
        $sq=mysqli_query($con,$data);
        while($row=mysqli_fetch_array($sq))
        {
            if($row['email']==$email||$row['phno']==$phno)
            {
                $flag=1;
            }
        }
        if($flag==1)
        {
            echo"<script>alert('This account already exsists');</script>";
        }
        else if($flag==0)
        {
            /* --------- NOTES
            Registering user's username has to be saved on all table in the registeration time because SESSION username is checked with particular operations table
            */


            //Inserting to Login table
            $login_table="INSERT INTO `tbl_login` VALUES ('$lid','$email','$pswd','user',0,0,'0')";
            if(mysqli_query($con,$login_table))
                {
                    $message_flag = 2; //Will be using for showing 'Account created' message
                    echo"<script>alert('Account created ! Please login ');</script>";
                }

            //-------------------Inserting to tbl_users,register table
            $x_username = $email;
            $x_address = $hname+$sname;

            $sql="INSERT INTO `tbl_users` VALUES ('$id','$createdby','$name','$gender','$dob','$mstatus','$hname','$sname','$city','$pincode','$phno','$email','$target_file')";
            
            if(mysqli_query($con,$sql))
            {
               // echo"<script>alert('Account created ! Please login ');</script>";
            }
            
            $register_table="INSERT INTO `register` VALUES ('$id', '$x_username','$createdby','$name','$name','$dob','$gender','$mstatus','$email','$phno','$x_address','','','','','','','','','','','','','','','','$target_file','',0)";
            //mysqli_query($con,$register_table);
            if(mysqli_query($con,$register_table))
            {
                //echo"<script>alert('Register success !');</script>";
            }
            //Inserting to  interest table
            //$interest_table = "INSERT INTO 'interest' VALUES('$id','$x_username','','')";
            //mysqli_query($con,$interest_table);

            //Inserting to  bio_hobby table
            
            $bio_hobby_table = "INSERT INTO `bio_hobby` VALUES ('$id','$x_username','','','','','','',0)";
            //mysqli_query($con,$bio_hobby_table);
            if(mysqli_query($con,$bio_hobby_table))
            {
                //echo"<script>alert('bio hobby success');</script>";
            }
            //Inserting to  partner_preference table
            $partner_preference = "INSERT INTO `partner_preference` VALUES('$id','$x_username','','','','','','','','','','','','','','','','','','','','','','',0)";
           //mysqli_query($con,$partner_preference);
            if(mysqli_query($con,$partner_preference))
            {
                //echo"<script>alert('partner pref success');</script>";
            }
            //Inserting to  personal_interest table
            //$personal_interest_table = "INSERT INTO `personal_interest` VALUES('$id','$x_username','','','','')";
            //mysqli_query($con,$personal_interest_table);
            //if(mysqli_query($con,$personal_interest_table))
           // {
                //echo"<script>alert('peronal interest success');</script>";
          //  }

            //Inserting to  profession_education table
            $profession_education_table = "INSERT INTO `profession_education` VALUES('$id','$x_username','','','','','','','','','',0)";
            //mysqli_query($con,$personal_interest_table);
            if(mysqli_query($con,$profession_education_table))
            {
                //echo"<script>alert('profession_education success');</script>";
            }
            //Inserting to  `user_preference`
            $user_preference_table = "INSERT INTO `user_preference` VALUES('$x_username','',0)";
            //mysqli_query($con,$personal_interest_table);
            if(mysqli_query($con,$user_preference_table))
            {
                //echo"<script>alert('profession_education success');</script>";
            }

        }
    }
    else
    {
     echo"<script>alert('Password doesn't match);</script>";   
    }
}
            ?>


              </div>
            </div>
        </div>
			</div>
		</div>
		




	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="dist/scripts.min.js"></script>
	</body>
</html>

