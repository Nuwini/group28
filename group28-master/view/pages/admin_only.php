<html>
<head>
<title>
</title>

<link rel="stylesheet" type="text/css" href="../layout/styles/application/application.css">
<script src="../layout/scripts/jquery.js"></script>
<script src="../layout/scripts/jquery-2.js"></script>
<script src="../layout/scripts/jquery.js"></script>
<script src="../layout/scripts/jquery_002.js"></script>

<link rel="stylesheet" href="../layout/styles/bootstrap.min.css">
<script src="../layout/scripts/jquery-2.0.0.js"></script>
<script src="../layout/scripts/bootstrap.min.js"></script>
<link rel="stylesheet" href="../layout/styles/staff_center_back_style.css" type="text/css" media="all">


<style>
.forms111{
	position:absolute;
	margin-left:150px;
	margin-top:35px;
}
</style>

</head>
<body style="margin:0;padding:0;">
<style>

    #menu{
        display: block;
        text-decoration: none;
        color: white;
    }
</style>
<div class="nav">
    <div class="logo">
        <img src="../images/general/UCSC_logo [Converted] white.png" class="logo">
        <script src="../layout/scripts/application.js"></script>
    </div>

    <ul class="mainmenu">

        <li><span><a a="" href="" id="menu">My Account</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="admin_only.php?type=update" id="menu" style="font-size: 1.2em;">Update Profile Information</a></span></li>
         <li><span><a href="generalinfo.php" id="menu" style="font-size: 1.2em;">Add General Details</a></span></li>

        </ul>
      <li><span><a href="admin_only.php?type=stats" id="menu">Statistics</a></span><div class="messages"></div></li>
      <li><span><a href="add_department.php" id="menu">Department</a></span></li>
	  <li><span><a href="adddivision.php" id="menu">Division</a></span></li>
      <li><span><a href="#" id="menu">Center</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="add_center.php">Add Center</a></span></li>
          <li><span><a href="view_edit_center.php">View & Edit Center</a></span></li>
        </ul>

      <li><span><a href="#" id="menu">Facility</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="facilities.php">Add Facility</a></span></li>
          <li><span><a href="view_edit_facility.php">View & Edit Facility</a></span></li>
        </ul>
      <li><span><a href="#" id="menu">Course</a></span></li>

      <ul class="submenu" style="display: none;">

       <li><span><a href="courses.php">Add Course</a></span></li>
        <li><span><a href="view_edit_course.php">View & Edit Course</a></span></li>
      </ul>
      <li><span><a href="posts.php" id="menu">Posts</a></span></li>
	  <li><span><a href="#" id="menu">Achievement</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="add_achievement.php">Add Achievement</a></span></li>
          <li><span><a href="view_edit_achievement.php">View & Edit Achievement</a></span></li>
        </ul>
		<li><span><a href="addpublication.php" id="menu">Publications</a></span></li>
		<li><span><a href="paymentstaff.php" id="menu">Payments</a></span></li>
		<li><span><a href="reservationinternal.php" id="menu">Reservation</a></span></li>
	  
      <li><span><a href="#" id="menu">Settings</a></span></li>
    </ul>
</div>

<div class="forms111">

<?php
	if(isset($_GET['type'])){
		if($_GET['type'] == 'update'){
			require "adminupdateprofile.php";
		}
		else if($_GET['type'] == 'updateinfo'){
			require "generalinfo.php";
		}

		else if($_GET['type'] == 'dep'){
				require "add_department.php";
		}
		else if($_GET['type'] == 'divi'){
				require "adddivision.php";
		}
		else if($_GET['type'] == 'center'){
				require "add_center.php";
		}
		else if($_GET['type'] == 'center1'){
				require "view_edit_center.php";
		}
		else if($_GET['type'] == 'achievement'){
				require "add_achievement.php";
		}
		else if($_GET['type'] == 'achievement1'){
				require "view_edit_achievement.php";
		}
		else if($_GET['type'] == 'facility'){
				require "add_facility.php";
		}
		else if($_GET['type'] == 'publication'){
				require "addpublication.php";
		}
		else if($_GET['type'] == 'course'){
				require "courses.php";
		}
		else if($_GET['type'] == 'course1'){
				require "view_edit_course.php";
		}
		else if($_GET['type'] == 'payment'){
				require "paymentstaff.php";
		}
		else if($_GET['type'] == 'post'){
				require "posts.php";
		}
		else if($_GET['type'] == 'reservation'){
				require "reservationinternal.php";
		}
		else if($_GET['type'] == 'stats'){
				require "statisticaldetails.php";
		}
		else if($_GET['type'] == 'facility'){
				require "facilities.php";
		}
		else if($_GET['type'] == 'facility1'){
				require "view_edit_facility.php";
		}
		

	}
	else{
			require "welcomepage.php";
		}


?>
</div>
</body>
</html>
