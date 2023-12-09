<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>WEDME Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="./images/logo/admin.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="./images/logo/admin.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>Admin</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <a href="index.php"><h4>WEDME</h4></a>
                  <ul class="list-unstyled components">
                    
                     <li><a href="profile.php"><i class="fa fa-user red_color"></i> <span>My Profile</span></a></li>
                     <li><a href="addusers.php"><i class="fa fa-user red_color"></i> <span>Add User</span></a></li>
                     <li><a href="req.php"><i class="fa fa-bell orange_color"></i> <span>New Requests</span></a></li>
                     <li><a href="ausers.php"><i class="fa fa-user green_color"></i> <span>Approved Users</span></a></li>
                     <li><a href="rusers.php"><i class="fa fa-user red_color"></i> <span>Rejected Users</span></a></li>
                     <!-- <li><a href="details1.php"><i class="fa fa-user purple_color"></i> <span>View Users</span></a></li> -->
                     <li><a href="logout.php"><i class="fa fa-sign-out blue2_color"></i> <span>Logout</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="./images/logo/admin.png" alt="#" /><span class="name_user">Admin</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.php">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
              
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>


<div id="fh5co-couple"  class="fh5co-section-gray" style="background-image:url(/images/wed11.jpg); center;" data-stellar-background-ratio="0.5">
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
                              <option value="">Profile created by</option>
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
                  </div>   <br>          

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
                          
                      </div>

                       <div class="row  to-fmid">
                      <div class="col-sm-4 no-padding">
                          <label class="cflo">     </label>
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
   


  $target_dir = "../photo/";

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
            $sql="INSERT INTO `tbl_users` VALUES ('$id','$createdby','$name','$gender','$dob','$mstatus','$hname','$sname','$city','$pincode','$phno','$email','$target_file')";
            if(mysqli_query($con,$sql))
            {
                $sql1="INSERT INTO `tbl_login` VALUES ('$lid','$email','$pswd','user',0,'')";
                if(mysqli_query($con,$sql1))
                {
                    echo"<script>alert('Account created ! Please login ');</script>";
                    
                }
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






      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>