<?php
            if(isset($_POST['save'])){
                //open the json file
                $data = file_get_contents('members.json');
                $data = json_decode($data);
        
                //data in out POST
                $input = array(
                    'id' => $_POST['id'],
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'address' => $_POST['address'],
                    'gender' => $_POST['gender']
                );
        
                //append the input to our array
                $data[] = $input;
                //encode back to json
                $data = json_encode($data, JSON_PRETTY_PRINT);
                file_put_contents('members.json', $data);
        
                header('location: index.php');
            }
        ?>