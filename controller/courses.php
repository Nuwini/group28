<?php
        
                         
                $coid = $_POST['coid'];
                $cname = $_POST['cname'];
                $ccoordinator = $_POST['ccoordinator'];
                $dprogramme = $_POST['dprogramme'];
                
               
                $sql = "INSERT INTO courses(course_id,course_name,course_coordinator,degreeProgramme) VALUES ('$coid','$cname','$ccoordinator','$dprogramme')";
                if (mysqli_query($conn, $sql)) {
                    echo "insert successful";
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                } 

            }
        ?>