<?php
    session_start();
    include_once "config.php";


    //stores variable to the database
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($phone) && !empty($password)){

        // check if phone number already exists in database
        $phone_query = "SELECT * FROM users WHERE phone='{$phone}'";
        $result = mysqli_query($conn, $phone_query);
        if (mysqli_num_rows($result) > 0) {
            echo "Phone number already exists.";
        }else{
            if(isset($_FILES['image'])){
                //takes the image details
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
                //This splits the image name from where the dot starts like cca.jpg 
                $img_explode = explode('.',$img_name);
                //it takes the last word after spliting it
                $img_ext = end($img_explode);

                $extensions = ["jpeg", "png", "jpg"];

                //this array searchs whether the image extension exits in the variable extension
                if(in_array($img_ext, $extensions) === true){
                    $types = ["image/jpeg", "image/jpg", "image/png"];

                    //this array searchs whether the image type exits in the variable type
                    if(in_array($img_type, $types) === true){
                        $time = time();

                        //create a new image name
                        $new_img_name = $time.$img_name;

                        //this function moves a new uploaded file to a new destination
                        if(move_uploaded_file($tmp_name,"images/".$new_img_name)){

                            //this function generate a random number from the time created to 100000000
                            $rand_id = rand(time(), 100000000);

                            //encrypts a password
                            $encrypt_pass = md5($password);
                            
                            //user verification
                            $verified = "not verified";
            
                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, phone, password, image, verified)
                            VALUES ({$rand_id}, '{$fname}', '{$lname}', '{$phone}', '{$encrypt_pass}', '{$new_img_name}', '{$verified}')");
                            //checks if the insert query is successful
                            if($insert_query){

                                //select the phone
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}'");

                                //if phone exists
                                if(mysqli_num_rows($select_sql2) > 0){

                                    //it fetchs the select_sql2 result
                                    $result = mysqli_fetch_assoc($select_sql2);

                                    // Set the user's verification status to false
                                    $_SESSION['verified'] = $verified;

                                    //session is equal to unique_id fetched in the db by the variable result
                                    $_SESSION['unique_id'] = $result['unique_id'];

                                    echo "success";
                                }else{
                                    echo "This phone number does not Exist!";
                                }
                            }else{
                                echo "Something went wrong. Please try again!";
                            }
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }else{
                    echo "Please upload an image file - jpeg, png, jpg";
                }
            }
        }
    }else {
        echo "All input fields are required";
    }

?>
