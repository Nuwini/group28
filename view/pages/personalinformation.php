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
		
		include('../../model/config.php');
    
        $result=mysqli_query($connect, "SELECT count(*) as total from emp_data");
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
                 <label for="title" class="col-sm-4 control-label">Title</label>
                 <div class="col-sm-3">
                 
                 <select name="title" class="form-control" id="title">
                    <option></option>
                    <option value="T0001">Mr</option>
                    <option value="T0002">Ms</option>
                    <option value="T0003">Dr</option>
                     </select>
                </div>
            
            <div class="form-group">
                 <label for="fname" class="col-sm-4 control-label">First Name</label>
                 <div class="col-sm-3">
                     <input required class="form-control" type="text" name="fname">
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
                <label for="email" class="col-sm-4 control-label">Email Address</label>
                <div class="col-sm-3">
                    <input required class="form-control" type="email" name="email" onmouseleave="Email(email)">
                </div>
            </div>
            
            <div class="form-group">
                <label for="cotactno1" class="col-sm-4 control-label">Contact Number</label>
                <div class="col-sm-3">
                    <input required class="form-control" type="text" name="contactno1" onmouseleave="phonenumber1(contactno1)">
                </div>
            </div>
            
                                   
             
            
                       
            <div class="form-group">
                 <label for="designation" class="col-sm-4 control-label">Designation</label>
                 <div class="col-sm-3">
                     <input required  class="form-control" type="text" name="designation">
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
                 <label for="department" class="col-sm-4 control-label">Department / Division / center</label>
                 <div class="col-sm-2">
                 <label for="department" class="col-sm-4 control-label">Department</label><br/>
                 <select name="department" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option value="D0001">Computation and Intelligent Systems</option>
                    <option value="D0002">Information Systems Engineering</option>
                    <option value="D0003">Communication and Media Technologies</option>
                     </select>
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                    <label for="division" class="col-sm-4 control-label">Division</label><br/>
                    <select name="division" class="form-control" id="dep_divi_center">
                    <option></option>
                    <option value="DIV0001">Academic and Pulications</option>
                    <option value="DIV0002">Establishments and Administration</option>
                    <option value="DIV0003">Examinations and Registration</option>
                    <option value="DIV0004">Engineering Division</option>
                    <option value="DIV0005">Finance Division</option>
                        <option value="DIV0006">Information Systems(NOC)</option></select>
                </div>
                
                <div class="form-group">
                <div class="col-sm-2">
                    <label for="center" class="col-sm-4 control-label">Center</label><br/>
                    <select name="center" class="form-control" id="dep_divi_center">
                    <option></option>
                     <option value="C0001">Advanced Digital Media Technology Center (ADMTC)</option>
                    <option value="C0002">Computing Services Center (CSC)</option>
                    <option value="C0003">Digital Forensic Center (DFC)</option>
                    <option value="C0004">E-learning Center (ELC)</option>
                    <option value="C0005">External Degree Center (EDC)</option>
                    <option value="C0006">Professional Development Center (PDC)</option>
                </select>
                 </div>
            </div>
                </div></div>
            
            <div class="form-group">
            <label for="research_interests" class="col-sm-4 control-label" >Research Interests</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="research_interests" name="research_interests"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="qualifications" class="col-sm-4 control-label" >Qualifications</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="qualifications" name="qualifications"></textarea></div>
            </div>
               
			<div class="form-group">
            <label for="facebook_link" class="col-sm-4 control-label" >Facebook Link</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="facebook_link" name="facebook_link"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="linkedin_link" class="col-sm-4 control-label" >LinkedIn Link</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="linkedin_link" name="linkedin_link"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="biography" class="col-sm-4 control-label" >Biography</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="biography" name="biography"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="academic_record" class="col-sm-4 control-label" >Academic Record</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="academic_record" name="academic_record"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="awards" class="col-sm-4 control-label" >Awards</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="awards" name="awards"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="activity" class="col-sm-4 control-label" >Activity</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="activity" name="activity"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="employeement_record" class="col-sm-4 control-label" >Employeement Record</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="employeement_record" name="employeement_record"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="teaching" class="col-sm-4 control-label" >Teaching</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="teaching" name="teaching"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="projects_supervised" class="col-sm-4 control-label" >Projects Supervised</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="projects_supervised" name="projects_supervised"></textarea></div>
            </div>
			
			<div class="form-group">
            <label for="publications" class="col-sm-4 control-label" >Publications</label>
             <div class="col-sm-3">
                 <textarea required class="form-control" id="publications" name="publications"></textarea></div>
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
                     <input type="file" name="profilepic">
                 </div>
            </div>
            
            <button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
              
            </form>
        </div>
    </body>
</html>