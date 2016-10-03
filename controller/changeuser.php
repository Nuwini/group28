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
$research = $_POST['research_interests'];

$sql = "UPDATE staff SET f_name='$fname',m_name='$mname',l_name='$lname',name_initials='$initials',nic='$nic',research_interests='$research',gender='$gender',email='$email',contact_no1='$tp1',contact_no2='$tp2',
add_line1='$addr1',add_line2='$addr2',add_city='$city',add_country='$country',designation='$designation',dep_id='$department',center_id='$center',division_id='$division' WHERE user_id='$userid'";

if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Successfully Updated!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 
            
?>