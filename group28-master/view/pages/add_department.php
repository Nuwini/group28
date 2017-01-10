<?php
        		include('../../model/config.php');
       ?>

<html>
    <head>
        <meta charset="UTF-8">
  <title>Department</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
<link rel="stylesheet" href="../layout/styles/style_forms.css">
        
        <style>
            .radio-left {
                float: left;
            }
			
			.forms1 {
				width:800px;
				margin-top: 150px;
				margin-left: 400px;
				position: absolute;
			}    
        </style>
        
        <title>Add Department</title>
    </head>
    <body>
        
        <?php
        $result=mysqli_query($connect, "SELECT count(*) as total from department"); 
		$count = mysqli_fetch_assoc($result)['total']; 
		$count++; 
		$did = "D000" . strval($count);
                 
        ?> 
         
        
	<div class="forms1">    
	<form class="well form-horizontal" action="../../controller/department.php" method="post"  id="contact_form">
	<fieldset>
	<!-- Form Name -->
	<legend>ADD DEPARTMENT</legend>
   
            <div class="form-group">
            <label class="col-md-6 control-label">Department ID</label> 
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
					<input required class="form-control" type="text" name="id" value="<?php echo $did; ?>"><br>
                </div>
				</div>
			</div>
            
            <div class="form-group">
                <label class="col-md-6 control-label"> Department</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                     <input required class="form-control" type="text" name="name">
                </div>
				</div>
            </div>
            
             <div class="form-group">
                 <label for="location" class="col-sm-6 control-label">Location</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                     <input required  class="form-control" type="text" name="location">
                 </div>
				 </div>
            </div>
            
            <div class="form-group">
                <label for="telephone" class="col-sm-6 control-label">Contact number</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input required class="form-control" type="text" name="telephone">
                 </div>
				 </div>
            </div>
            
             <div class="form-group">
                <label for="fax" class="col-sm-6 control-label">Fax</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <input required  class="form-control" type="text" name="fax">
                </div>
				</div>
            </div>
            
            
            <div class="form-group">
                <label for="head" class="col-sm-6 control-label">Head of the department</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input class="form-control" type="text" name="head">
                </div>
				</div>
            </div>
            
			<div class="form-group">
                <label for="head" class="col-sm-6 control-label">Description</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                     <input class="form-control" type="text" name="description">
                </div>
				</div>
            </div>
			
            <div class="form-group">
                <label for="email" class="col-sm-6 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                     <input class="form-control" type="email" name="email">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                <label for="website" class="col-sm-6 control-label">Web site</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                     <input class="form-control" type="wrbsite" name="website">
                </div>
				</div>
            </div>
            
            <div class="form-group">
                 <label for="image" class="col-sm-6 control-label">Image</label>
                <div class="col-md-4 inputGroupContainer">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                     <input  type="file" name="image">
                 </div>
				 </div>
            </div>
			
			
            <div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4">
					<button type="submit" class="btn btn-warning" name="submit" >Submit </button>
				</div>
			</div>
			
            </fieldset>
			
            </form>
        </div>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    </body>
</html>