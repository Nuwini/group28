<?php
        include '../model/config.php';
                         
                $coid = $_POST['coid'];
                $cname = $_POST['cname'];
                $ccoordinator = $_POST['ccoordinator'];
                $dprogramme = $_POST['dprogramme'];
                
               
                $sql = "INSERT INTO courses(course_id,course_name,course_coordinator,degreeProgramme) VALUES ('$coid','$cname','$ccoordinator','$dprogramme')";
                
				if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("A new course added successfully!");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                } 

            
        ?>