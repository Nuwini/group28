<?php
session_start();
$userid = $_SESSION['login_user'];
?>
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
        <title>Edit My Account</title>
    </head>
    <body>
        
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
                //echo "connected successfully";
                
                $sql = "SELECT * FROM staff WHERE user_id='$userid'";
                
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error";
                    die();
				}
                $record = mysqli_fetch_assoc($result);
            
        ?>
        
                
                
                
    
    <form method="post" action="changeuser.php">

    <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <img src="../img/3.jpg" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input class="form-control" type="file" name="profile_pic">
        </div>
      </div>
                        <table class="table">
                            <tr>
                                <th colspan="2" id="form_titles"><h3>Personal Information</h3></th>                        
                            </tr>
                            <tr>
                                <td colspan="2" ><span id="errors"></span></td>                  
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                    <label for="full_name" class="col-lg-5 control-label">Full Name :</label><br /><br/>
                                    <label for="f_name" class="col-lg-5 control-label">First Name</label><br />
                                        <input required id="f_name" type="text" name="f_name" class="form-control" value="<?php echo $record['f_name']?>" style="width:400px"></div>
                                    </td>
                                
                                <td><br /><br/><div class="form-group">
                                    <label for="m_name" class="col-lg-5 control-label">Middle Name</label><br /> 
                                        <input required id="m_name" type="text" name="m_name"  class="form-control" value="<?php echo $record['m_name']?>" style="width:400px"></div></td>
                                
                                <td><br /><br/><div class="form-group">
                                    <label for="l_name" class="col-lg-5 control-label"> Last Name</label><br />
                                    <input required id="l_name" type="text" name="last_name" class="form-control" value="<?php echo $record['l_name']?>" style="width:400px"></div>
                                    </td>
                            </tr>
                            
                             <tr>
                                 <td><div class="form-group">
                                 <label for="name_initials" class="col-lg-6 control-label">Name with initials :</label><br /><br/> 
                                 <input required id="name_initials" type="text" name="name_initials" class="form-control" value="<?php echo $record['name_initials']?>" style="width:400px"></div>
                                 </td>
                                 
                                <td><div class="form-group"> 
                                <label for="nic" class="col-sm-5 control-label">NIC : </label><br /><br/>
                                    <input required id="nic" type="text" name="nic" class="form-control" value="<?php echo $record['nic']?>" style="width:400px"></div></td>
                            </tr>
                            
                            <tr>
                                <td><div class="form-group">
                                <label for="gender" class="col-sm-4 control-label">Gender :</label><br/><br/>
                                <label class="radio-inline radio-left">
                                <input <?php if($record['gender'] == 'male') echo "checked"; ?> type="radio" name="gender" id="gender" value="male"> Male</label>
                                <label class="radio-inline radio-left">
                                <input <?php if($record['gender'] == 'female') echo "checked"; ?> type="radio" name="gender" id="gender" value="female"> Female
                                </label>
                                </div></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><div class="form-group">
                                <label for="email" class="col-sm-5 control-label">Email: </label><br /><br/> 
                                    <input required id="email" type="email" name="email" class="form-control" value="<?php echo $record['email']?>" style="width:400px"></div></td>
                            </tr>
                            
                             <tr>
                                 <td><div class="form-group">
                                 <label for="contactno_1" class="col-sm-5 control-label">Contact no 1 :</label><br />
                                     <input required id="contactno_1" type="text" name="contactno_1" class="form-control" value="<?php echo $record['contact_no1']?>" style="width:400px"></div></td>
                                 <td><div class="form-group">
                                 <label for="contactno_2" class="col-sm-5 control-label">Contact no 2 :</label><br />
                                     <input required id="contactno_2" type="text" name="contactno_2" class="form-control" value="<?php echo $record['contact_no2']?>" style="width:400px"></div></td>
                            </tr>
                            
                             <tr>
                                 <td colspan="2"><div class="form-group">
                                 <label for="designation" class="col-sm-5 control-label">Designation :</label><br /><br/>
                                     <input required id="designation" type="text" name="designation" class="form-control" value="<?php echo $record['designation']?>" style="width:400px"></div></td>
                            </tr>
                            
                             <tr>
                            
                            <td><div class="form-group">
                                <label for="department" class="col-sm-10 control-label">Department / Division / center :</label><br/><br/>
                                <div class="col-sm-10">
                 <label for="department" class="col-sm-10 control-label">Department</label><br/>
                 <select name="department" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option <?php if($record['dep_id'] == 'D0001') echo "selected"; ?> value="D0001">Computation and Intelligent Systems</option>
                    <option <?php if($record['dep_id'] == 'D0002') echo "selected"; ?> value="D0002">Information Systems Engineering</option>
                    <option <?php if($record['dep_id'] == 'D0003') echo "selected"; ?> value="D0003">Communication and Media Technologies</option>
                  </select></div>
                    </div></td>
                
                <td><br/><br/><div class="form-group">
                <div class="col-sm-10">
                    <label for="division" class="col-sm-10 control-label">Division</label><br/>   
                    <select name="division" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option <?php if($record['division_id'] == 'DIV0001') echo "selected"; ?> value="DIV0001">Academic and Pulications</option>
                    <option <?php if($record['division_id'] == 'DIV0002') echo "selected"; ?> value="DIV0002">Establishments and Administration</option>
                    <option <?php if($record['division_id'] == 'DIV0003') echo "selected"; ?> value="DIV0003">Examinations and Registration</option>
                    <option <?php if($record['division_id'] == 'DIV0004') echo "selected"; ?> value="DIV0004">Engineering Division</option>
                    <option <?php if($record['division_id'] == 'DIV0005') echo "selected"; ?> value="DIV0005">Finance Division</option>
                    <option <?php if($record['division_id'] == 'DIV0006') echo "selected"; ?> value="DIV0006">Information Systems(NOC)</option></select>
                    </div> </div>
                    </td>
                
                <td><br/><br/><div class="form-group">
                <div class="col-sm-10">
                    <label for="center" class="col-sm-10 control-label">Center</label><br/>
                    <select name="center" class="form-control" id="dep_divi_center">
                    <option></option>
                     <option <?php if($record['center_id'] == 'C0001') echo "selected"; ?> value="C0001">Advanced Digital Media Technology Center (ADMTC)</option>
                    <option <?php if($record['center_id'] == 'C0002') echo "selected"; ?> value="C0002">Computing Services Center (CSC)</option>
                    <option <?php if($record['center_id'] == 'C0003') echo "selected"; ?> value="C0003">Digital Forensic Center (DFC)</option>
                    <option <?php if($record['center_id'] == 'C0004') echo "selected"; ?> value="C0004">E-learning Center (ELC)</option>
                    <option <?php if($record['center_id'] == 'C0005') echo "selected"; ?> value="C0005">External Degree Center (EDC)</option>
                    <option <?php if($record['center_id'] == 'C0006') echo "selected"; ?> value="C0006">Professional Development Center (PDC)</option>
                </select>
                    </div></div></td>
             </tr>
            
                            <tr>                          
                    
                                <td><div class="form-group">
                                <label for="address" class="col-sm-5 control-label">Address : </label><br /><br/>
                                <label for="add_line1" class="col-sm-5 control-label">Line 1</label><br /> 
                                    <input required id="add_line1" type="text" name="add_line1" class="form-control" style="width:400px" value="<?php echo $record['add_line1']?>" ></div></td>
                                <td><br /><br/><div class="form-group">
                                <label for="add_line1" class="col-sm-5 control-label">Line 2</label><br />
                                    <input required id="add_line2" type="text" name="add_line2" class="form-control" style="width:400px" value="<?php echo $record['add_line2']?>"></div>
                            </td>
                            </tr>
                            <tr>
                                <td><div class="form-group">
                                <label for="city" class="col-sm-5 control-label"> City</label> <br /> 
                                    <input required id="add_city" type="text" name="city" class="form-control" style="width:400px" value="<?php echo $record['add_city']?>"></div></td>
                                <td><div class="form-group"> 
                                <label for="country" class="col-sm-5 control-label">Country </label><br /> 
                                    <input required id="add_country" type="text" name="country" class="form-control" style="width:400px" value="<?php echo $record['add_country']?>"></div></td>
                            </tr>
                            
                            <tr>
                            <td colspan="2"><div class="form-group">
                            <label for="research_interests">Research Interests :</label>
                            <textarea required class="form-control" id="research_interests" name="research_interests"><?php echo $record['research_interests']?></textarea>
                            </div>
                                </td>
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