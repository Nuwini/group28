<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Reservation Form</title>
    </head>
    <body>
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'ucsc';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }
                //echo "connected successfully";

                $userid = $_POST['userid'];
                $reservationid = $_POST['reservationid'];
                $facilityname = $_POST['facilityname'];
		$date = $_POST['date'];		
		$purpose = $_POST['purpose'];               
		$stime = $_POST['stime'];
		$etime = $_POST['etime'];
		$reservationfee = $_POST['reservationfee'];
		$facilityid = $_POST['facilityid'];

                $sql = "INSERT INTO reservation (r_id,facility_id,r_date,purpose,start_time,end_time,user_id,r_fee) VALUES ('$reservationid','$facilityid','$date','$purpose','$stime','$etime','$userid','$reservationfee')";
                if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 

            }
        ?>
        
         <?php
        
            $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'ucsc';

                //create connection
                $conn = mysqli_connect($server, $username, $password, $database);

                //check connection
                if (!$conn){
                    die("Connection faied: ".mysqli_connect_error());
                }
        
        
        ?> 
        
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Reservation Form</h2>
        <form class="form-horizontal"  method="post" action="">
            <div class="form-group">
                 <label for="userid" class="col-sm-4 control-label">User ID</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="userid">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="reservationid" class="col-sm-4 control-label">Reservation ID</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="reservationid">
                 </div>
            </div>
          
	<table class="table">
	   <tr>
   	   <td>
	    <div class="form-group">
                 <label for="facilityname" class="col-sm-4 control-label">Facility Name</label>
                 <div class="col-sm-3">
                 <select>
                    <option value="f0001">Auditorium</option>
                    <option value="f0002">Digital Studio</option>
                </select>
                 </div>
            </div></td>	    
            <td>
	    <div class="form-group">
                 <label for="facilityid" class="col-sm-4 control-label">Facility ID</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="facilityid">
                 </div>
            </div></td>
	    </tr>	
	</table>
  
            
            
             <div class="form-group">
                 <label for="date" class="col-sm-4 control-label">Date</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="date">
                 </div>
            </div>
            

             <div class="form-group">
                 <label for="purpose" class="col-sm-4 control-label">Purpose</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="purpose">
                 </div>
            </div>
 
	    <div class="form-group">
                 <label for="stime" class="col-sm-4 control-label">Start Time</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="stime">
                 </div>
            </div>
 
	    <div class="form-group">
                 <label for="etime" class="col-sm-4 control-label">End Time</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="etime">
                 </div>
            </div>

	    <div class="form-group">
                 <label for="reservationfee" class="col-sm-4 control-label">Reservation Fee</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="reservationfee">
                 </div>
            </div>	    
	    <button type="submit & pay" class="btn btn-default" style="margin-left:-133px;">Submit and Pay</button>
              
            </form>
        </div>
    </body>
</html>