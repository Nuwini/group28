<?php 
	include '../model/config.php';
?>

<?php

$output1 = "";
$output2 = "";
$output3 = "";


if(isset($_POST['searchText'])){


	$searchText = $_POST['searchText'];

	if(!empty($searchText)){

		

		if(isset($_POST['advanceSearch'])){
	
			$searchType = $_POST['advanceSearch'];


			if($searchType == "post"){


				if(isset($_POST['radio'])){


				$radioval = $_POST['radio'];

				if($radioval == 'by_headline'){

					$searchq = $_POST['searchText'];
					
					$query = mysqli_query($connect,"SELECT * FROM post WHERE headline_post LIKE '%$searchq%' ") or die("could not search");	
					$count = mysqli_num_rows($query);	
		
					if($count == 0 ){
						$output3 =  "there was no search results";
					}
					else{
						while($row = mysqli_fetch_array($query)){
							$fname = $row['headline_post'];
							$lname = $row['post'];
							$output1 .= $fname.'|'.$lname.',';

						}

					}

				}
				elseif($radioval == 'by_date'){
	
					$searchq = $_POST['searchText'];		
					$date = DateTime::createFromFormat('d/m/Y', $searchq)->format('Y-m-d');

					$query = mysqli_query($connect,"SELECT * FROM post WHERE date_posted='$date'") or die("could not search");
					$count = mysqli_num_rows($query);
					if($count == 0 ){
						$output1 =  "there was no search results";
					}
					else{
	
						while($row = mysqli_fetch_array($query)){
							$fname = $row['headline_post'];
							$lname = $row['post'];

							$output1 .= $fname.' |'.$lname.',';
						}


					}
				}
			}
			else{

					$output3 = "please select a radio button";
			}
			}


			if($searchType == "publication"){


				if(isset($_POST['radio'])){


				$radioval = $_POST['radio'];

				if($radioval == 'by_headline'){

					$searchq = $_POST['searchText'];
					$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
					$query = mysql_query("SELECT * FROM publications WHERE topic LIKE '%$searchq%' ") or die("could not search");	
					$count = mysql_num_rows($query);	
		
					if($count == 0 ){
						$output1 =  "there was no search results";
					}
					else{
						while($row = mysql_fetch_array($query)){
							$fname = $row['topic'];
							$lname = $row['first_author'];
							$output1 .='<div>'.$fname.' '.$lname.'</div>';

						}

					}

				}
				elseif($radioval == 'by_date'){
	
					$searchq = $_POST['searchText'];		
					$date = DateTime::createFromFormat('d/m/Y', $searchq)->format('Y-m-d');

					$query = mysql_query("SELECT * FROM publications WHERE date='$date'") or die("could not search");
					$count = mysql_num_rows($query);

					if($count == 0 ){
						$output1 =  "there was no search results";
					}
					else{
	
						while($row = mysql_fetch_array($query)){
							$fname = $row['topic'];
							$lname = $row['first_author'];

							$output1 .='<div>'.$fname.' '.$lname.'</div>';
						}


					}
				}
			}
			else{

					$output1 = "please select a radio button";
			}
			}





			elseif ($searchType == "staff") {

				if(!empty($searchText)){
					$searchq = $_POST['searchText'];
					
	
					$query=mysqli_query($connect,"SELECT * FROM staff WHERE f_name LIKE '%$searchq%'or m_name LIKE '%$searchq%' or l_name LIKE '%$searchq%'") or die("could not search");
					$count = mysqli_num_rows($query);
						if($count == 0 ){
							$output3 =  "there was no search results";
	
						}
						else{
							while($row = mysqli_fetch_array($query)){
								$fname = $row['f_name'];
								$lname = $row['l_name'];
			
								
			
								$output2 .= $fname.' '.$lname.',';
							}
						}
				}
				




				
				
			}
			


			



		}
		else{


	$searchq = $_POST['searchText'];
	
	
	$query = mysqli_query($connect,"SELECT * FROM post WHERE headline_post LIKE '%$searchq%'") or die("could not search");
	$count = mysqli_num_rows($query);
	if($count == 0 ){
		$output1 =  "there was no search results";
	
	}
	else{
		while($row = mysqli_fetch_array($query)){
			$fname = $row['headline_post'];
			$lname = $row['post'];
			
			
			
			$output1 .= $fname.'|'.$lname.',';
		}
	}

			
		}



	}
	else{

		if(isset($_POST['advanceSearch'])){

					$searchType = $_POST['advanceSearch'];

					if ($searchType == "staff"){
					

					$searchq = $_POST['searchText'];
					
	
					$query=mysqli_query($connect,"SELECT * FROM staff WHERE f_name LIKE '%$searchq%'or m_name LIKE '%$searchq%' or l_name LIKE '%$searchq%'") or die("could not search");
					$count = mysqli_num_rows($query);
						if($count == 0 ){
							$output1 =  "there was no search results";
	
						}
						else{
							while($row = mysqli_fetch_array($query)){
								$fname = $row['f_name'];
								$lname = $row['l_name'];
			
								
			
								$output2 .= $fname.' '.$lname.',';
							}
						}
					}
				elseif($searchType == "post"){

					


				if(isset($_POST['radio'])){


				$radioval = $_POST['radio'];

				if($radioval == 'by_headline'){

					$searchq = $_POST['searchText'];
					
					$query = mysqli_query($connect,"SELECT * FROM post WHERE headline_post LIKE '%$searchq%' ") or die("could not search");	
					$count = mysqli_num_rows($query);	
		
					if($count == 0 ){
						$output3 =  "there was no search results";
					}
					else{
						while($row = mysqli_fetch_array($query)){
							$fname = $row['headline_post'];
							$lname = $row['post'];
							$output1 .= $fname.'|'.$lname.',';

						}

					}

				}
				elseif($radioval == 'by_date'){
	
					$searchq = $_POST['searchText'];		
					$date = DateTime::createFromFormat('d/m/Y', $searchq)->format('Y-m-d');

					$query = mysqli_query("SELECT * FROM post WHERE date_posted='$date'") or die("could not search");
					$count = mysqli_num_rows($query);

					if($count == 0 ){
						$output1 =  "there was no search results";
					}
					else{
	
						while($row = mysqli_fetch_array($query)){
							$fname = $row['headline_post'];
							$lname = $row['post'];

							$output1 .= $fname.' |'.$lname.',';
						}


					}
				}

			}
			else{


					
					$searchq = $_POST['searchText'];
					
					$query = mysqli_query($connect,"SELECT * FROM post WHERE headline_post LIKE '%$searchq%' ") or die("could not search");	
					$count = mysqli_num_rows($query);	
		
					if($count == 0 ){
						$output1 =  "there was no search results";
					}
					else{
						while($row = mysqli_fetch_array($query)){
							$fname = $row['headline_post'];
							$lname = $row['post'];
							$output1 .= $fname.'|'.$lname.',';
							

						}

					}


				
			}
			}







		}
		else{

	$searchq = $_POST['searchText'];
	
	
	$query = mysqli_query($connect,"SELECT * FROM post WHERE headline_post LIKE '%$searchq%'") or die("could not search");
	$count = mysqli_num_rows($query);
	if($count == 0 ){
		$output1 =  "there was no search results";
	
	}
	else{
		while($row = mysqli_fetch_array($query)){
			$fname = $row['headline_post'];
			$lname = $row['post'];
			
			
			
			$output1 .= $fname.'|'.$lname.',';
		}
	}
}

	}
	

	


}


?>