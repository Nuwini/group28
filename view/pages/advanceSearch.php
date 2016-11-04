<?php 
include '../model/config.php';
include 'searchContent.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../view/layout/styles/layout.css" type="text/css" />
<style type="text/css">

	.insideFrame{
		background-color: white;
		margin: 8px;
		height: 42px;
		width: 1225px



	}
	.outsideFrame{
		background-color: lightblue;
		border: 2px solid black;
		height: 100px;
		width: 1250px;
		margin-top: 4px;


	}
</style>


</head>
<body>

<div class="wrapper row2">
  <div id="header" class="clear" style="padding-bottom:100px">
    <div class="img">
      <h1><a href="../../index.php"><img src="../images/demo/logo-ucsc-1.png"/></a></h1>
 
	</div>

  </div>
 	<div  style="background-color:white;height:100px">
  		<div style="float:right">
		<form action="advanceSearch.php"  method= "post">

			<div id="radio" style="color:black">
				<label style="color:black"> search by :</label>
				<input name ="radio" type ="radio"  value="by_date" >date
				<input name ="radio" type="radio" value="by_headline" >headline
				<br> date input format - dd/mm/yyyy

			</div>

			<br><input type= "text"  name = "searchText" placeholder="search >>">
			<input type="submit"  value = "search"> 

			<select id="adv"  name="advanceSearch">
    			<option disabled selected value> advance search </option>
    			<option value = "staff"> search staff </option>
    			<option value = "publication">  publications </option>
    			<option value = "post"> posts </option>
    			<option value = "general"> general </option>
			</select>

		</form>
		</div>
	</div>
</div>
<?php

	$output1 = explode(",",$output1);


?>
<?php
	foreach ($output1 as $item) {
		if($item==""){
				continue;
			}

		?>
		<div class="outsideFrame">
		<?php
			$separate = explode("|",$item);
		?>
			<div style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:20px"><?php echo $separate[0]; ?> </div>
		
			<div class="insideFrame">

				<p> <?php echo $separate[1]; ?></p>
		

			</div>


		</div>
<?php
		# code...
	}

?>



<?php

	$output2 = explode(",",$output2);


?>
<?php
	foreach ($output2 as $item) {
		if($item==""){
				continue;
			}

		?>
		<div class="outsideFrame">
			
			<a style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:20px" href="staffProfileToUser.php"><?php echo $item; ?></a>
			
			<div class="insideFrame">

				<p> <?php echo $item ?></p>


		

			</div>


		</div>
<?php
		# code...
	}

?>


<div style="padding-left:8px; padding-top:4px; font-weight: bold; font-size:40px color:black"><?php echo $output3; ?> </div>







</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../view/layout/scripts/postPublicationSearch.js"></script>



</html>