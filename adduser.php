<?php
            if(isset($_POST['save'])){
                //open the json file
                $new_student = file_get_contents("./assets/json/student.json");
                $new_student = json_decode($new_student);
        
                //data in out POST
                $input = array(
                    
                    'img' => 'pexels.png',
                    'name' => $_POST['name'],
                    'Email' => $_POST['Email'],
                    'phone' => $_POST['phone'],
                    'enroll1'=> $_POST['enroolnum'],
                    'date1'=> $_POST['dateofadmission']
                );
                
                //append the input to our array
                $new_student[] = $input;
                //encode back to json
                $new_student = json_encode($new_student, JSON_PRETTY_PRINT);
                file_put_contents("./assets/json/student.json", $new_student);
        

            } else{
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                echo var_dump($_POST);
            }

        ?>