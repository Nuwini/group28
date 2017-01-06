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
			$sql="select vision,mission,ucsc_description,goals,mailing_address,telephone,fax,email,union_activities,director_mg,image1,image2,image3 from info";
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
                     <textarea required class="form-control" name="vision" ><?php echo $record['vision']?></textarea>
                 </div>
            </div>
             <div class="form-group">
                 <label for="mission" class="col-sm-6 control-label">Mission</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="mission" ><?php echo $record['mission']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="ucsc_description" class="col-sm-6 control-label">Description</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="ucsc_description" ><?php echo $record['ucsc_description']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="director_mg" class="col-sm-6 control-label">Message from Director</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="director_mg" ><?php echo $record['director_mg']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="goals" class="col-sm-6 control-label">Goals</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="goals" ><?php echo $record['goals']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="mailing_address" class="col-sm-6 control-label">Address</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="mailing_address" ><?php echo $record['mailing_address']?></textarea>
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="telephone" onmouseleave="phonenumber(telephone)" value="<?php echo $record['telephone']?>">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="fax" class="col-sm-6 control-label">Fax</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="fax" value="<?php echo $record['fax']?>">
                 </div>
            </div>
            
            
             <div class="form-group">
                 <label for="email" class="col-sm-6 control-label">Email</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="email" name="email" oninput="checkEmail()" value="<?php echo $record['email']?>">
                 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="union_activities" class="col-sm-6 control-label">Union activities</label>
                 <div class="col-sm-5">
                     <textarea required class="form-control" name="union_activities" ><?php echo $record['union_activities']?></textarea>
                 </div>
            </div>
			
			
                 <div class="form-group">
                 <label for="image1" class="col-sm-6 control-label">Slider Image 1</label>
                 <div class="col-sm-5">
					  <?php echo $record['image1']; ?>
					  <?php echo '<img width="20%" class="avatar img-circle" alt="avatar" src="./view/images/demo/' . $record['image1'] . '"/>' ?>
                      
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="image1">
                 </div>
            </div>
			
			
        			<div class="form-group">
                 <label for="image2" class="col-sm-6 control-label">Slider Image 2</label>
                 <div class="col-sm-5">
				 <?php echo $record['image2']; ?>
                     <?php echo '<img width="20%" class="avatar img-circle" alt="avatar" src="./view/images/demo/' . $record['image1'] . '"/>' ?>
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="image2">
                 </div>
            </div>
			
			<div class="form-group">
                 <label for="image3" class="col-sm-6 control-label">Slider Image 3</label>
                 <div class="col-sm-5">
				 <?php echo $record['image3']; ?>
                     <?php echo '<img width="20%" class="avatar img-circle" alt="avatar" src="./view/images/demo/' . $record['image1'] . '"/>' ?>
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="image3">
                 </div>
            </div>
			
			
			
			
            
            
            
            
            
            <button type="submit" class="btn btn-default" style="margin-left:200px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>