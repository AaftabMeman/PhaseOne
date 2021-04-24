<?php

// Include config file
require_once ("connect.php");
    $id = $_POST["id"];
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["password_confirmation"]);
    $user_name = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $email_confirmation = trim($_POST["email_confirmation"]);
    print_r($_POST);
    // Check input errors before inserting in database
    if(!empty($email) &&!empty($user_name) && !empty($email_confirmation) && !empty($password) && $confirm_password == $password)
    {
        
        $email = strtolower($email);

  // Hash the password
 // $password = password_hash($password, PASSWORD_DEFAULT);
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (:username,:email, :password);";
         
        if($stmt = $db->prepare($sql))
        {           
            $stmt->bindParam(':username', $user_name);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
        
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                header("location: login.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }
    }
    else {
        echo "<p> Please provide login name and password! </p>";
    }
    
    // Close connection
    $stmt->closeCursor(); 
require_once ('footer.php');
?>

