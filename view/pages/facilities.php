<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facilities</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body>
<?php include('../layout/styles/header.php');
 include('../../model/config.php');?>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Library</a></li>
    <li><a data-toggle="tab" href="#menu1">Computer Laboratory</a></li>
    <li><a data-toggle="tab" href="#menu2">Lecture Rooms</a></li>
    <li><a data-toggle="tab" href="#menu3">Digital Studio</a></li>
	<li><a data-toggle="tab" href="#menu4">Auditorium</a></li>
	<li><a data-toggle="tab" href="#menu5">Canteen and Cafetaria</a></li>
    <li><a data-toggle="tab" href="#menu6">Wi-Fi Connectivity</a></li>
	<li><a data-toggle="tab" href="#menu7">University Medical Services</a></li>
  </ul>
<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Library</h3>
	  <?php
	  $maxcols = 1;
$i = 0;
$all_profiles_q="SELECT description FROM facilities where facility_name='Library'";
$all_profiles=mysqli_query($connect,$all_profiles_q);
	if(!$all_profiles){
            die("Database query failed: ".mysqli_error($connect));
        }
        $record=mysqli_fetch_assoc($all_profiles);
		echo $record['description'];
		
		
	  ?>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
