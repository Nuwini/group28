<?php
include 'model/config.php';

$sql = "SELECT * FROM info";
$sql1="select center_name from centers";
$sql2="select dep_name from department";

$result = mysqli_query($connect, $sql);
$result1 = mysqli_query($connect,$sql1);
$result2 = mysqli_query($connect,$sql2);

                if (!$result) {
                    echo "Error";
                    die();
				}
				if (!$result1) {
                    echo "Error";
                    die();
				}
				if (!$result2) {
                    echo "Error";
                    die();
				}
				
                $record = mysqli_fetch_assoc($result);
				
				
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>

<title>UCSC</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="view/layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="view/layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="view/layout/scripts/jquery-s3slider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#featured_slide_").s3Slider({
		timeOut:10000 
	});
});
</script>

</head>
<body id="top">
<div class="wrapper row1">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="view/pages/about_us.php"><strong>About Us</strong></a></li>
      <li><a href="view/pages/research_degrees.php"><strong>Education</strong></a></li>
      <li><a href="view/pages/academic_staff.php"><strong>People</strong></a></li>
      <li><a href="view/pages/gallery.php"><strong>Gallery</strong></a></li>
      <li><a href="view/pages/facilities.php"><strong>Facilities</strong></a></li>
      <li><a href="view/pages/achievements.php"><strong>News/Notices</strong></a></li>
      <li class="last"><a href="#"><strong>Contact Us</strong></a></li>
    </ul>
  </div>
</div>
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="img">
      <h1><a href="index.html"><img src="view/images/demo/logo-ucsc-1.png"/></a></h1>
          </div>
    <div class="fl_right">
      <form action="controller/normalSearch.php" method="post" id="sitesearch">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="searchText" />
          <input type="image" src="view/images/demo/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
      <p><a href="view/pages/advanceSearch.php">advance-search</a></p>
      <p><a href="#">Site Map</a> | <a href="view/pages/login_index.php">Login</a></p>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="view/images/demo/selected photos/UCSC Building 3.jpg" alt="" /></a>
        <div class="introtext">
          <h2>Vision</h2>
          <p><?php echo $record['vision']?></p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="view/images/demo/12.png" alt="" /></a>
        <div class="introtext">
          <h2>Mission</h2>
          <p><?php echo $record['mission']?></p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="view/images/demo/13.jpeg" alt="" /></a>
        <div class="introtext">
          <h2>Message from the Director</h2>
          <p></p>
        </div>
      </li>
      <li class="clear featured_slide_Image"></li>
    </ul>
  </div>
  <div id="hpage_featured_info" class="clear">
    <ul>
      <li><a href="#"><img src="view/images/demo/undergraduate_programmes.jpg" alt="" /> <strong>Undergraduate Programmes</strong></a></li>
      <li><a href="#"><img src="view/images/demo/postgraduate_programmes.jpg" alt="" /> <strong>Postgraduate Programmes</strong></a></li>
      <li class="last"><a href="#"><img src="view/images/demo/external.jpg" alt="" /> <strong>External and Extension Programmes</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <ul>
      <li><a href="#">Current Students</a>
        <ul>
          <li><a href="#">&raquo; Career Guidance Unit</a></li>
          <li><a href="#">&raquo; Student Accommodation</a></li>
          <li><a href="#">&raquo; Student Directory</a></li>
          <li><a href="#">&raquo; Student Facilities</a></li>
          <li class="last"><a href="#">&raquo; Students Union</a></li>
        </ul>
      </li>
      <li><a href="#">Prospective Students</a>
        <ul>
          <li><a href="#">&raquo; University Life</a></li>
          <li><a href="#">&raquo; Academic Courses</a></li>
          <li><a href="#">&raquo; How To Apply</a></li>
          <li><a href="#">&raquo; Cost And Fees</a></li>
          <li class="last"><a href="#">&raquo; Visit The University</a></li>
        </ul>
      </li>
      <li><a href="#">International Students</a>
        <ul>
          <li><a href="#">&raquo; Why Our University</a></li>
          <li><a href="#">&raquo; How To Apply</a></li>
          <li class="last"><a href="#">&raquo; Cost &amp; Finances</a></li>
        </ul>
      </li>
      <li class="last"><a href="#">Academic Departments</a>
        <ul>
          <li><a href="#">&raquo; Department of communication and media technologies(CMT)</a></li>
          <li><a href="#">&raquo; Department of Information Systems Engineering(ISE)</a></li>
          <li class="last"><a href="#">&raquo; Department of communication and intelligent systems (CIS)</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <ul id="hpage_latestnews">
          <li class="odd clear">
            <div class="imgholder"><img src="view/images/demo/faq.png" alt="" /></div>
            <a href="#">Frequently Asked Questions</a>
            <p></p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="view/images/demo/location.png" alt="" /></div>
            <a href="#">Location</a>
            <p></p>
          </li>
          <li class="odd clear">
            <div class="imgholder"><img src="view/images/demo/uoc.png" alt="" /></div>
            <a href="#">University of Colombo</a>
            <p></p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="view/images/demo/calendar.png" alt="" /></div>
            <a href="#">Academic Calendar</a>
            <p></p>
          </li>
          <li class="odd clear">
            <div class="imgholder"><img src="view/images/demo/wiki.png" alt="" /></div>
            <a href="#">UCSC Wiki</a>
            <p></p>
          </li>
          <li class="even clear">
            <div class="imgholder"><img src="view/images/demo/tv.png" alt="" /></div>
            <a href="#">UCSC TV</a>
            <p></p>
          </li>
        </ul>
      </div>
      <div class="fl_right">
        <h2></h2>
        <img src="view/images/demo/virtual.png" alt="" />
        <p></p>
        <p class="readmore"><a href="#">Virtual Tour &raquo;</a></p>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="academiclinks" class="clear">
    <div class="linkbox">
      <h2>Degrees</h2>
      <ul>
        <li><a href="#">&raquo; Undergraduate Progammes</a></li>
        <li><a href="#">&raquo; Postgraduate progammes</a></li>
        <li><a href="#">&raquo; Research Degrees</a></li>
        <li><a href="view/pages/BIT.php">&raquo; External Degrees</a></li>
        <li><a href="#">&raquo; Online Programmes</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>Management</h2>
      <ul>
        <li><a href="#">&raquo; Academic & Publication</a></li>
        <li><a href="#">&raquo; Establishments & Administration </a></li>
        <li><a href="#">&raquo; Examination and Registraton</a></li>
        <li><a href="#">&raquo; Engineering Division</a></li>
        <li><a href="#">&raquo; Finance Division</a></li>
        <li><a href="#">&raquo; Information Systems(NOC)</a></li>
        <li><a href="#">&raquo; Strategic Plan</a></li>
      </ul>
    </div>
    <div class="linkbox">
      <h2>UCSC Centres</h2>
	  
	  <?php
	  if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
		
		echo "<ul>";
        echo "<li><a href='view/pages/centres.php'>".$row["center_name"]."</a></li><br>";
		echo "</ul>";
	}
}
	  ?>
      </div>
    <div class="linkbox last">
      <h2>Departments</h2>
      <?php
	  if (mysqli_num_rows($result2) > 0) {
    
    while($row = mysqli_fetch_assoc($result2)) {
		
		echo "<ul>";
        echo "<li><a href='view/pages/departments.php'>".$row["dep_name"]."</a></li><br>";
		echo "</ul>";
	}
}
	  ?>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="view/images/demo/google.png" alt="" /><br />
        <a href="#">Find Us With Google Maps &raquo;</a></div>
      <address>
      University of Colombo School of Computing<br />
      UCSC Building Complex<br />
      35,Reid Avenue,Colombo 07<br />
      SRI LANKA<br />
      <br />
      Tel: +94 -11- 2581245/ 7<br />
      Fax: +94 -11- 2587239<br />
      Email: <a href="#">info@ucsc.cmb.ac.lk</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="#">Twitter</a></li>
          <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
          <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
          <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
          <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
          <li><a style="background-position:-352px 0;" href="#">YouTube</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
   
    <!-- ####################################################################################################### --> 
  </div>
</div>

</body>
</html>