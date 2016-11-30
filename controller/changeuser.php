<?php

session_start();

include('../model/config.php');

$userid = $_SESSION['login_user'];
$fname = $_POST['f_name'];
$mname = $_POST['m_name'];
$lname = $_POST['last_name'];
$initials = $_POST['name_initials'];
$nic = $_POST['nic'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tp1 = $_POST['contactno_1'];
$tp2 = $_POST['contactno_2'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$division = $_POST['division'];
$center = $_POST['center'];
$addr1 = $_POST['add_line1'];
$addr2 = $_POST['add_line2'];
$city = $_POST['city'];
$country = $_POST['country'];
$research = $_POST['research'];

$sql = "UPDATE staff,academicemp_data SET staff.f_name='$fname',staff.m_name='$mname',staff.l_name='$lname',staff.name_initials='$initials',staff.nic='$nic',
academicemp_data.research='$research',staff.gender='$gender',staff.email='$email',staff.contact_no1='$tp1',staff.contact_no2='$tp2',staff.add_line1='$addr1',
staff.add_line2='$addr2',staff.add_city='$city',staff.add_country='$country',staff.designation='$designation',staff.dep_id='$department',
staff.center_id='$center',staff.division_id='$division' WHERE staff.user_id=academicemp_data.user_id AND staff.user_id='$userid'";

 
if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>