<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <script src="../../js/jquery-2.0.0.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add Course</title>
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
                /*echo "connected successfully";*/
                
                $cid = $_POST['cid'];
                $cname = $_POST['cname'];
                $ccoordinator = $_POST['ccoordinator'];
                $dprogramme = $_POST['dprogramme'];
                
               
                $sql = "INSERT INTO courses(course_id,course_name,course_coordinator,degreeProgramme) VALUES ('$cid','$cname','$ccoordinator','$dprogramme')";
                /*if (mysqli_query($conn, $sql)) {
                    echo "insert successful";
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } */

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
            <h2 style="margin-bottom:20px;">Add Course</h2>
        <form  method="post" action="">
            <div class="form-group">
            <label for="cid" class="col-sm-6 control-label">Course ID</label>
                <div class="col-sm-5">
            <input required class="form-control" type="text" name="cid">
                </div>
            </div>
            
            <div class="form-group">
                 <label for="cname" class="col-sm-6 control-label">Course name</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="cname">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="ccoordinator" class="col-sm-6 control-label">Course Coordinator</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="double" name="ccoordinator">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="dprogramme" class="col-sm-6 control-label">Degree Programme</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="dprogramme">
                 </div>
            </div>
            
                         
            <button type="submit" class="btn btn-default" style="margin-left:-950px;margin-top:20%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>