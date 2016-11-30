<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/bootstrap-datepicker.min.js"></script>
        
        <script>
        $(function(){
                $('#date-container input').datepicker({
                });
        });
        </script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add Publication</title>
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
                
                $topic = $_POST['topic'];
                $date = $_POST['date'];
                $first_author= $_POST['first_author'];
                $collaborators = $_POST['collaborators'];
                $research_group= $_POST['research_group'];
                $pdf=$_POST['pdf'];
                /*echo "id " . $id;*/
               
                $sql = "INSERT INTO publications (topic,date,first_author,collaborators,research_group) VALUES ('$topic','$date','$first_author','$collaborators','$research_group')";
                if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

            }
        ?>
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Publications</h2>
        <form class="form-horizontal"  method="post" action="">
            
            
            <div class="form-group">
                 <label for="topic" class="col-sm-4 control-label">Title</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="topic">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="date" class="col-sm-4 control-label">Date </label>
                 <div class="col-sm-3">
                     <input class="form-control" type="date" name="date">
                 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="first_author" class="col-sm-4 control-label">First Author</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="first_author">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="collaborators" class="col-sm-4 control-label">Collaborators</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="collaborators">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="research_group" class="col-sm-4 control-label">Research Group</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="research_group">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="pdf" class="col-sm-4 control-label">Publication</label>
                 <div class="col-sm-3">
                     <input  type="file" name="pdf">
                 </div>
            </div>
    
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>