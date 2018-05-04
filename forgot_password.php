<?php 
    //add our database connection script
    require_once('libs/Smarty.class.php');
    include_once("resource/Database.php");
    include_once("resource/utilities.php");
    
    $smarty = new Smarty;

    //process the form if the reset password button is clicked
    if(isset($_POST['passwordResetBtn'])){
        //initialize an array to store any error message from the form
        $form_errors = array();

        //Form validation
        $required_fields = array('email', 'new_password', 'confirm_password');

        //call the function to check empty field and merge the return data into form_error array
        $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

        //Fields that requires checking for minimum length
        $fields_to_check_length = array('new_password' => 6, 'confirm_password' => 6);

        //call the function to check minimum required length and merge the return data into form_error array
        $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

        //email validation / merge the return data into form_error array
        $form_errors = array_merge($form_errors, check_email($_POST));
        $errors = show_errors($form_errors);

        //check if error array is empty, if yes process form data and insert record
        if(empty($form_errors)){
            echo $errors;
            //collect form data and store in variables
            $email = $_POST['email'];
            $password1 = $_POST['new_password'];
            $password2 = $_POST['confirm_password'];

            //check if new password and confirm password is same
            if($password1 != $password2){
                $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> New password and confirm password does not match</p>";
                $smarty->assign('result',$result);
            }else{
                try{
                    //create SQL select statement to verify if email address input exist in the database
                    $sqlQuery = "SELECT email FROM users WHERE email =:email";

                    //use PDO prepared to sanitize data
                    $statement = $db->prepare($sqlQuery);

                    //execute the query
                    $statement->execute(array(':email' => $email));

                    //check if record exist
                    if($statement->rowCount() == 1){
                        //hash the password
                        $hashed_password = password_hash($password1, PASSWORD_DEFAULT);

                        //SQL statement to update password
                        $sqlUpdate = "UPDATE users SET password =:password WHERE email=:email";

                        //use PDO prepared to sanitize SQL statement
                        $statement = $db->prepare($sqlUpdate);

                        //execute the statement
                        $statement->execute(array(':password' => $hashed_password, ':email' => $email));
                        
                        $result = show_message("Password Reset Successful", "Pass");
                        $smarty->assign('result',$result);
                    }
                    else{
                        $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> The email address provided
                                    does not exist in our database, please try again</p>";
                                    $smarty->assign('result',$result);
                                }
                }catch (PDOException $ex){
                    $result = $result =  show_message("An error occurred: ".$ex->getMessage());
                }
            }
        }
        else{
            if(count($form_errors) == 1){
                $result = show_message("There was 1 error in the form<br>");
            }else{
                $result = show_message("There were ".count($form_errors)." errors in the form <br>");
            }
            $smarty->assign('result',$result);
        }
    }
    $valid = isCookieValid($db);
  

    $smarty->assign('form_errors',$form_errors);
    $smarty->assign('errors',$errors);
    $smarty->assign('username',$username);
    $smarty->assign('db',$db);
    $smarty->assign('index','index.php');
    $smarty->assign('login','login.php');
    $smarty->assign('logout','logout.php');
    $smarty->assign('signup','signup.php');
    $smarty->assign('profile','profile.php');
    $smarty->assign('valid',$valid);
    

    $smarty->display('forgot_password.tpl');
?>