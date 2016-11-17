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
        <title>Update General Unformation</title>
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

		<form method="post" action="../../controller/changeinfo.php">

    <div class="container">
    <h1>Edit General Information</h1>
  	<hr>
	<div class="row">
      <table class="table">
                            <tr>
                                <td><div class="form-group">
                                    <label for="vision" class="col-lg-5 control-label">Vision</label><br /><br/>
                                        <textarea required class="form-control" id="vision" name="vision"><?php echo $record['vision']?></textarea></div>
                                    </td>
                                
                                <td><br /><br/><div class="form-group">
                                    <label for="mission" class="col-lg-5 control-label">Mission</label><br /> 
                                        <textarea required class="form-control" id="mission" name="mission"><?php echo $record['mission']?></textarea></div></td>
										
										<td><br /><br/><div class="form-group">
                                    <label for="description" class="col-lg-5 control-label"></label>General Description<br /> 
                                        <textarea required class="form-control" id="description" name="description"><?php echo $record['ucsc_description']?></textarea></div></td>
										
										<td><br /><br/><div class="form-group">
                                    <label for="goals" class="col-lg-5 control-label"></label>Goals<br /> 
                                        <textarea required class="form-control" id="goals" name="goals"><?php echo $record['goals']?></textarea></div></td>
                                
                                 </tr>
                            
                                                       
                                                        
                                        
                                                   
                            <tr>
                                <td  colspan="2" align="center"><button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
                                </td>
                            </tr>
       
        </table>
        
        </div>
        </div>
        </form>
    </body>
</html>