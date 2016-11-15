<?php
include('../../model/config.php');
$sql = "SELECT ucsc_description FROM info";
$result = mysqli_query($connect, $sql);
if (!$result) {
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
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To the Layout.css -->
<link rel="stylesheet" href="../layout/styles/3_column.css" type="text/css" />
</head>
<body id="top">

 <?php include('../layout/styles/header.php');?>
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
    <div id="left_column">
      <div class="holder">
        <h2 class="title">Quick Links</h2>
        <ul class="nostart">
          <li><a href="#">Alumni</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Job opportunities</a></li>
          <li><a href="#">Maps and Directions</a></li>
          <li><a href="#">Online Courses</a></li>
          <li><a href="#">Postgraduate research</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="undergraduate_studies.html">Undergraduate Courses</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title">CONFERENCES AND SYMPOSIUMS</h2>
        <div class="imgholder"><a href="conferences_and_sysmposiums.php"><img src="../images/demo/icter.png" alt="" /></a></div>
        <div class="imgholder last"><a href="conferences_and_sysmposiums.php"><img src="../images/demo/symposium.png" alt="" /></a></div>
      </div>
    </div>
    <!-- ############ -->
    <div id="content">
      <h1 class="title">University of Colombo School of Computing</h1>
      <div class="imgholder"><img src="../images/demo/ucsc.png" alt="" /></div>
      <p><?php echo $record['ucsc_description']?></p>

	  <h2> <class="title">Academic Departments</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>Department</th>
            <th>Dpt. Head Name</th>
            <th>Contact No.</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr class="light">
            <td>Department of communication and media technologies(CMT)</td>
            <td>Mr.G.K.A.Dias</td>
            <td>(+94)112158955</td>
            <td>gkad@ucsc.cmb.ac.lk</td>
          </tr>
          <tr class="dark">
            <td>Department of Information Systems Engineering(ISE)</td>
            <td>Prof.K.P.Hewagamage</td>
            <td>(+94)112158945</td>
            <td>kph@ucsc.cmb.ac.lk</td>
          </tr>
          <tr class="light">
            <td>Department of communication and intelligent systems (CIS)</td>
            <td>Dr.Ajantha Athukorale</td>
            <td>(+94)112158985</td>
            <td>aja@ucsc.cmb.ac.lk</td>
          </tr>
        </tbody>
      </table>
      <h2 class="title">Abbreviations</h2>
      <ul>
        <li>ADMTC  Advanced Digital Multimedia Technology Centre</li></br>
        <li>CMT  Communication and Media Technologies</li></br>
        <li>CSC  Computing Services Centre</li></br>
        <li>CIS  Computation and Intelligent Systems(CIS)</li></br>
        <li>DFC  Digital Forensic Centre</li></br>
        <li>EDC  External Degrees Centre</li></br>
        <li>eLC E-Learning Centre</li></br>
        <li>ISE  Information Systems Engineering</li></br>
        <li>NOC  Network Operating Centre</li></br>
        <li>PDC  Professional Development Centre</li></br>
        <li>UCSC  University of Colombo School of Computing</li>
      </ul>
      </div>
    <!-- ############ -->
    <div id="right_column">
      <div class="holder">
        <h2 class="title">Goals</h2>
        <ol>
          <li>A centre of excellence in teaching and learning</li></br>
          <li>Cross disciplinary research in computing</li></br>
          <li>To create socially responsible professionals</li></br>
          <li>Environment for productive work and career enhancement</li></br>
          <li>Enhance the institutional image</li></br>
          <li>To empower society through ICT</li></br>
          <li>To make the country a knowledge hub</li>
        </ol>
        
      </div>
      <div class="holder">
        <h2 class="title">INFRASTRUCTURE AND SERVICES</h2>
        <div class="imgholder"><a href="infrastructure_and_services.html"><img src="../images/demo/library.png" alt="" /></a></div>
        <div class="imgholder"><a href="infrastructure_and_services.html"><img src="../images/demo/lecture.png" alt="" /></a></div>
        <div class="imgholder last"><a href="infrastructure_and_services.html"><img src="../images/demo/labs.png" alt="" /></a></div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<?php include('../layout/styles/footer.php');?>

</body>
</html>