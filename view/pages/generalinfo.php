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



include('../../model/config.php');



$sql = "SELECT * FROM info";



$result = mysqli_query($connect, $sql);

if (!$result) {

echo "Error";

die();

}

$record = mysqli_fetch_assoc($result);



?>
                
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">General Information</h2>
        <form method="post" action="../../controller/changeinfo.php">
            <div class="form-group">
                 <label for="vision" class="col-sm-6 control-label">Vision</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="vision"><?php echo $record['vision']?></textarea>
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="mission" class="col-sm-6 control-label">Mission</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="mission"><?php echo $record['mission']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="description" class="col-sm-6 control-label">Description</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="ucsc_description"><?php echo $record['ucsc_description']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="directormsg" class="col-sm-6 control-label">Message from Director</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="director_mg"><?php echo $record['director_mg']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="goals" class="col-sm-6 control-label">Goals</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="goals"><?php echo $record['goals']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="mailing_address" class="col-sm-6 control-label">Address</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="mailing_address"><?php echo $record['mailing_address']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                 <div class="col-sm-5">
                     <input required id="telephone" type="text" class="form-control" name="telephone" onmouseleave="phonenumber(telephone)" value="<?php echo $record['telephone']?>">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-6 control-label">Fax</label>
                 <div class="col-sm-5">
                     <input required  id="fax" type="text" class="form-control" name="fax" value="<?php echo $record['fax']?>">
                 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-sm-5">
                     <input required id="email" class="form-control" type="email" name="email" oninput="checkEmail()" value="<?php echo $record['email']?>">
                 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="union" class="col-sm-6 control-label">Union activities</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="union_activities"><?php echo $record['union_activities']?></textarea></textarea>
                 </div>
            </div>
            
            
            
            
            
            <button type="submit" class="btn btn-default" style="margin-left:100px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>