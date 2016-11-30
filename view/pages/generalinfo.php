<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/functions.js"></script>
        <script>
              function phonenumber(telephone){  
              var phoneno = /^\d{10}$/;  
              if(telephone.value.match(phoneno))  
              {  
                  return true;  
              }  
              else  
              {  
                 alert("Please provide a valid Contact Number");  
                 return false;  
              }  
              }  
        </script>
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Edit General Information</title>
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
                
                $vision = $_POST['vision'];
                $mission = $_POST['mission'];
                $description = $_POST['description'];
                $telephone = $_POST['telephone'];
                $fax= $_POST['fax'];
                $email = $_POST['email'];
                $goals = $_POST['goals'];
                $mailing_add=$_POST['mailing_add'];
                $union = $_POST['union'];
                $directormsg =$_POST['directormsg'];
                
               
                $sql = "INSERT INTO info (vision,mission,ucsc_description,goals,mailing_address,telephone,fax,email,union_activities,director_msg) VALUES ('$vision','$mission','$description','$goals','$mailing_add','$telephone','$fax','$email','$union','$directormsg')";
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
            <h2 style="margin-bottom:20px;">General Information</h2>
        <form class="form-horizontal"  method="post" action="">
            <div class="form-group">
                 <label for="vision" class="col-sm-4 control-label">Vision</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="vision"></textarea>
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="mission" class="col-sm-4 control-label">Mission</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="mission"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="description" class="col-sm-4 control-label">Description</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="description"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="directormsg" class="col-sm-4 control-label">Message from Director</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="directormsg"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="goals" class="col-sm-4 control-label">Goals</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="goals"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="mailing_add" class="col-sm-4 control-label">Address</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="mailing_add"></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-4 control-label">Contact number</label>
                 <div class="col-sm-6">
                     <input required class="form-control" type="text" name="telephone" onmouseleave="phonenumber(telephone)">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-4 control-label">Fax</label>
                 <div class="col-sm-6">
                     <input required  class="form-control" type="text" name="fax">
                 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="email" class="col-sm-4 control-label">Email</label>
                 <div class="col-sm-6">
                     <input class="form-control" type="email" name="email" oninput="checkEmail()">
                 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="union" class="col-sm-4 control-label">Union activities</label>
                 <div class="col-sm-6">
                     <textarea required class="form-control" name="union"></textarea>
                 </div>
            </div>
            
            
            
            
            
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>