<html>
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-2.0.0.js"></scrip>
        <script src="../js/bootstrap.min.js"></script>
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>Add member</title>
        
        <script>
            $(function(){
                selectUpdate();
            });
            
            function selectUpdate() {
                var sel_type = $('#s_type').val();
                var sel_staff_cat = $('#s_category').val();
                
                switch(sel_type) {
                    case "type1": {
                        var content = "<option value='cat1'>Professor</option> \
                    <option value='cat2'>Senior Lecturer</option>   \
                    <option value='cat3'>Lecturer</option>  \
                    <option value='cat4'>Instructor</option>    \
                    <option value='cat5'>Temp. Academic Staff</option>";
                        
                        $('#s_category').html(content);
                    }
                    break;
                    case "type4": {
                        var content = "<option value='cat6'>Masters Programme</option> \
                    <option value='cat7'>Undergraduate Programme</option>";
                        
                        $('#s_category').html(content);
                    }
                    break;
                    default: {
                        $('#s_category').html("");
                    }
                }
            }
            
            function check() {
                if($("#password").val() !== $("#repassword").val()) {
                    alert("Passwords mismatch");
                    return false;
                }
                return true;
            }
            
            
                function phonenumber1(contactno1){  
      var phoneno = /^\d{10}$/;  
      if(contactno1.value.match(phoneno))  
      {  
          return true;  
      }  
      else  
      {  
         alert("Please provide a valid Phone Number");  
         return false;  
      }  
      }  
            
             function phonenumber2(contactno2){  
      var phoneno = /^\d{10}$/;  
      if(contactno2.value.match(phoneno))  
      {  
          return true;  
      }  
      else  
      {  
         alert("Please provide a valid Phone Number");  
         return false;  
      }  
      }  
            
    function Email(email)  
    {  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(email.value.match(mailformat))  
    {  
    return true;  
    }  
    else  
    {  
    alert("Please provide a valid email address");  
    return false;  
    }  
    }  
            
           
            
        </script>
         
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
                
                $userid= $_POST['userid'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $name_initials = $_POST['name_initials'];
                $nic=$_POST['nic'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $contactno1 = $_POST['contactno1'];
                $contactno2 = $_POST['contactno2'];
                $addline1 = $_POST['addline1'];
		        $addline2 = $_POST['addline2'];
                $city = $_POST['city'];
		        $country = $_POST['country'];
                $stype= $_POST['s_type'];
		        $scategory = $_POST['s_category'];                
		        $department = $_POST['department'];
                $division = $_POST['division'];
                $center=$_POST['center'];
		        $password = $_POST['password'];
		        $profilepic = $_POST['profilepic'];
                
                   $sql = "INSERT INTO staff (user_id,f_name,m_name,l_name,name_initials,nic,gender,email,contact_no1,contact_no2,add_line1,add_line2,add_city,add_country,s_type,s_category,dep_id,center_id,division_id,password,profile_pic) VALUES ('$userid','$fname','$mname','$lname','$name_initials','$nic','$gender','$email','$contactno1','$contactno2','$addline1','$addline2','$city','$country','$stype','$scategory','$department','$center','$division','$password','$profilepic')"; 
                

                
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
    
        $result=mysqli_query($conn, "SELECT count(*) as total from staff");
        $count = mysqli_fetch_assoc($result)['total'];
        $count++;
        $user_id = "EO" . strval($count);
        ?>
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:25px;">Welcome to UCSC</h2>
        <form class="form-horizontal" method="post" action="" onsubmit='return check()'>
            <div class="form-group">
            <label for="userid" class="col-sm-4 control-label">UserID</label>
                <div class="col-sm-3">
            <input required class="form-control" type="text" name="userid" value="<?php echo $user_id; ?>">
                </div>
            </div>
            
            <div class="form-group">
                 <label for="fname" class="col-sm-4 control-label">First Name</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="fname">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="lname" class="col-sm-4 control-label">Middle Name</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="mname">
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="lname" class="col-sm-4 control-label">Last Name</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="lname">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="name_initials" class="col-sm-4 control-label">Name with initials</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="name_initials">
                 </div>
            </div>
            
            <div class="form-group">
              <label for="gender" class="col-sm-4 control-label">Gender</label>
                <label class="radio-inline radio-left">
              <input type="radio" name="gender" id="gender" value="male"> Male
            </label>
                <label class="radio-inline radio-left">
              <input type="radio" name="gender" id="gender" value="female"> Female
            </label>
            </div>
            
        <div class="form-group"> 
        <label for="nic" class="col-sm-4 control-label">NIC </label>
        <div class="col-sm-3">
            <input required id="nic" type="text" name="nic" class="form-control">
        </div></div>
            
            
            
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">Email Address</label>
                <div class="col-sm-3">
                    <input required class="form-control" type="email" name="email" onmouseleave="Email(email)">
                </div>
            </div>
            
            <div class="form-group">
                <label for="cotactno1" class="col-sm-4 control-label">Contact Number 1</label>
                <div class="col-sm-3">
                    <input required class="form-control" type="text" name="contactno1" onmouseleave="phonenumber1(contactno1)">
                </div>
            </div>
            
            <div class="form-group">
                <label for="cotactno2" class="col-sm-4 control-label">Contact Number 2</label>
                <div class="col-sm-3">
                    <input required class="form-control" type="text" name="contactno2" onmouseleave="phonenumber2(contactno2)">
                </div>
            </div>
                        
             <div class="form-group">
                 <label for="addline1" class="col-sm-4 control-label">Address line1</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="addline1">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="addline2" class="col-sm-4 control-label">Address line2</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="addline2">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="city" class="col-sm-4 control-label">City</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="city">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="country" class="col-sm-4 control-label">Country</label>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="country">
                 </div>
            </div>
            
            <div class="form-group">
                 <label for="s_type" class="col-sm-4 control-label">Staff Type</label>
                 <div class="col-sm-3">
                 <select name="s_type" class="form-control" id="s_type" onchange="selectUpdate()">
                    <option value="type1">Academic Staff</option>
                    <option value="type2">Administrative Staff</option>
                    <option value="type3">Project Staff</option>
                    <option value="type4">Visiting Staff</option>
                </select>
                 </div>
            </div>
            
             <div class="form-group">
                 <label for="s_category" class="col-sm-4 control-label">Staff Category</label>
                 <div class="col-sm-3">
                 <select name="s_category" class="form-control" id="s_category">
                </select>
                 </div>
            </div>
            
            
            <div class="form-group">
                 <label for="department" class="col-sm-4 control-label">Department / Division / center</label>
                 <div class="col-sm-2">
                 <label for="department" class="col-sm-4 control-label">Department</label><br/>
                 <select name="department" class="form-control" id="dep_divi_center">
                    <option></option>
                    <?php
                    $department = mysqli_query($conn, "select * from department");
                    if (mysqli_num_rows($department) > 0) {
                        while($row = mysqli_fetch_assoc($department)) {
                            echo "<option value='" . $row["dep_id"] . "'>" . $row["dep_name"]. "</option>";
                        }
                    }
                    ?>
                     </select>
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                    <label for="division" class="col-sm-4 control-label">Division</label><br/>
                    <select name="division" class="form-control" id="dep_divi_center">
                    <option></option>
                   <?php
                    $division = mysqli_query($conn, "select * from division");
                    if (mysqli_num_rows($division) > 0) {
                        while($row = mysqli_fetch_assoc($division)) {
                            echo "<option value='" . $row["division_id"] . "'>" . $row["division_name"]. "</option>";
                        }
                    }
                    ?>
                    
                </select>
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                    <label for="center" class="col-sm-4 control-label">Center</label><br/>
                    <select name="center" class="form-control" id="dep_divi_center">
                    <option></option>
                    <?php
                    $centers = mysqli_query($conn, "select * from centers");
                    if (mysqli_num_rows($centers) > 0) {
                        while($row = mysqli_fetch_assoc($centers)) {
                            echo "<option value='" . $row["center_id"] . "'>" . $row["center_name"]. "</option>";
                        }
                    }
                    ?>
                </select>
                 </div>
            </div>
            </div>
            </div>
                  
            <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Password</label>
                <div class="col-sm-3">
            <input required type="password" class="form-control" id="password" name="password">
                </div>
            </div>
           
            <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Re-confirm Password</label>
                <div class="col-sm-3">
            <input required type="password" class="form-control" id="repassword">
                </div>
            </div>
            
           <div class="form-group">
                 <label for="profilepic" class="col-sm-4 control-label">Profile Image</label>
                 <div class="col-sm-3">
                     <input  type="file" name="profilepic">
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>