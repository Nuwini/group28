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
        
        <title>Add Post</title>
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
                
                $uid = $_POST['uid'];
                $dposted = $_POST['dposted'];
                $hpost = $_POST['hpost'];
                $posts= $_POST['posts'];
               
                $sql = "INSERT INTO post (user_id,date_posted,headline_post,post) VALUES ('$uid','$dposted','$hpost','$posts')";
                if (mysqli_query($conn, $sql)) {
                    //echo "insert successful";
				} else {
                    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 

            }
        ?>
        
         
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Add Post</h2>
        <form   method="post" action="">
            
            <div class="form-group">
                 <label for="uid" class="col-sm-6 control-label">User ID</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="uid">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="dposted" class="col-sm-6 control-label">Posted Date</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="date" name="dposted">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="hpost" class="col-sm-6 control-label">Headline of Post</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="hpost">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="posts" class="col-sm-6 control-label">Post</label>
                 <div class="col-sm-5">
                     <textarea class="form-control" type="text" name="posts"></textarea>
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:-950px;margin-top:20%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>