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
   <li><a href="traindownload.php"><i class="fa fa-user purple_color"></i> <span>Download training data</span></a></li>
   <li><a href="testdownload.php"><i class="fa fa-user purple_color"></i> <span>Download test data-Pref</span></a></li>
   <li><a href="testdownload1.php"><i class="fa fa-user purple_color"></i> <span>Download test data-Register</span></a></li>
   <li><a href="user_pref_combiner.php"><i class="fa fa-user purple_color"></i> <span>User Data combiner</span></a></li>
   <li><a href="upload1.php"><i class="fa fa-user purple_color"></i> <span>Upload Result-Pref</span></a></li>
   <li><a href="upload2.php"><i class="fa fa-user purple_color"></i> <span>Upload Result-Register</span></a></li>
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
               <!-- end topbar -->