<?php
        		include('../../model/config.php');
       ?>

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
        
        
				
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Publications</h2>
        <form method="post" action="../../controller/publication.php">
		
		    <div class="form-group">
                 <label for="first_author" class="col-sm-6 control-label">First Author</label>
                 <div class="col-sm-5">
                     <input required  class="form-control" type="text" name="first_author">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="collaborators" class="col-sm-6 control-label">Collaborators</label>
                 <div class="col-sm-5">
                     <input class="form-control" type="text" name="collaborators">
                 </div>
            </div>      
            
            <div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Title</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="topic">
                 </div>
            </div>
			
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Book Title</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="booktopic">
                 </div>
            </div>
            
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Publisher</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="publisher">
                 </div>
            </div>
			
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Series</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="series">
                 </div>
            </div>
			
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Volume</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="volume">
                 </div>
            </div>
			
            <div class="form-group">
                 <label for="date" class="col-sm-6 control-label">Date </label>
                 <div class="col-sm-5">
                     <input class="form-control" type="date" name="date">
                 </div>
            </div>
            
			
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Location</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="location">
                 </div>
            </div>
            
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Pages</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="pages">
                 </div>
            </div>
			
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">Language</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="language">
                 </div>
            </div>
			
			<div class="form-group">
                 <label for="topic" class="col-sm-6 control-label">ISBN</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="isbn">
                 </div>
            </div>
			
            <div class="form-group">
                 <label for="research_group" class="col-sm-6 control-label">Publication Type</label>
                 <div class="col-sm-5">
                     <input required class="form-control" type="text" name="type">
                 </div>
            </div>
    
            <button type="submit" class="btn btn-default" style="margin-left:200px;margin-top:5%;">Submit</button>
              
            </form>
        </div>
    </body>
</html>