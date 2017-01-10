<?php
include ('../../model/config.php');
 ?>
<?php
session_start();
$userid= $_SESSION['login_user'];
 ?>



<html>
<head>
<title>UCSC | Admin Panel
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
<style>

    #menu{
        display: block;
        text-decoration: none;
        color: white;
    }
</style>

</head>
<body style="margin:0;padding:0;">
	<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="userid">
			<div class="sessionid">
						<div style="padding-top: 12px; float: left; height: 1.2em; background-color:# fff; color: white; font-weight: bold;font-size:1.2em;">
							<?php
							$res1 =  mysqli_fetch_assoc(mysqli_query($connect,"select name_initials,profile_pic from staff where user_id = '$userid' "));
							 ?>
							<?php
							echo $res1['name_initials'];
							?>
						</div></br>
						<div style="position: absolute; padding-top: 10px; float: left; height: 1.2em; background-color:# fff; color: white;font-size:1.2em ">
							<?php echo $userid;?>
						</div>
						<div style="padding-left: 10px; float:left; height: 60px; width: 60px; margin-top: -27px;">
							<?php


							echo '<td><h4><img style="height: 60px; width: 60px;"src="../images/staff/'. $res1['profile_pic'] .'"/></h4></td>';
						?>
					</div>
		</div>
			</div>

	</div>
<div class="nav1">
    <div class="logo">
        <img src="../images/general/UCSC_logo [Converted] white.png" class="logo">
        <script src="../layout/scripts/application.js"></script>
    </div>

    <ul class="mainmenu">

        <li><span><a a="" href="#" id="menu">My Account</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="admin_only.php?type=update" id="menu" style="font-size: 1.2em;">Update Profile</a></span></li>
<<<<<<< HEAD
         <li><span><a href="admin_only.php?type=updateinfo" id="menu" style="font-size: 1.2em;">Add Details</a></span></li>
=======
         <li><span><a href="generalinfo.php" id="menu" style="font-size: 1.2em;">Add General</a></span></li>
>>>>>>> Monolithic commit

        </ul>
      <li><span><a href="admin_only.php?type=stats" id="menu">Statistics</a></span><div class="messages"></div></li>
      <li><span><a href="admin_only.php?type=dep" id="menu">Department</a></span></li>
	  <li><span><a href="admin_only.php?type=divi" id="menu">Division</a></span></li>
      <li><span><a href="#" id="menu">Center</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="admin_only.php?type=center">Add Center</a></span></li>
          <li><span><a href="admin_only.php?type=center1">View & Edit Center</a></span></li>
        </ul>

      <li><span><a href="#" id="menu">Facility</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="admin_only.php?type=facility">Add Facility</a></span></li>
          <li><span><a href="admin_only.php?type=facility1">View & Edit Facility</a></span></li>
        </ul>
      <li><span><a href="#" id="menu">Course</a></span></li>

      <ul class="submenu" style="display: none;">

       <li><span><a href="admin_only.php?type=course">">Add Course</a></span></li>
        <li><span><a href="admin_only.php?type=course1">View & Edit Course</a></span></li>
      </ul>
      <li><span><a href="admin_only.php?type=post" id="menu">Posts</a></span></li>
	  <li><span><a href="#" id="menu">Achievement</a></span></li>
        <ul class="submenu" style="display: none;">

         <li><span><a href="admin_only.php?type=achievement">Add Achievement</a></span></li>
          <li><span><a href="admin_only.php?type=achievement1">View & Edit Achievement</a></span></li>
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
