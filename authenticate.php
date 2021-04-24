<?php 
require_once('connect.php'); 
//define a flag variable 
$ok = true; 
// grab the information from the form and also validate 
$email = trim(filter_input(INPUT_POST, 'email')); 
$password = trim(filter_input(INPUT_POST, 'password'));
if(empty($email)) {
    echo "<p> Please provide your Email! </p>"; 
    $ok = false; 
}
if(empty($password)){
    echo "<p> Please provide your password! </p>"; 
    $ok = false; 
}
//validate the credentials 
if($ok === true ) {
    //set up query to see if a username matches 
    $sql = "SELECT id, email, password FROM users WHERE email = :email AND password = :password;"; 
    //prepare 
    $stmt = $db->prepare($sql); 
    //bind 
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    //execute
    $stmt->execute(); 
    if($stmt->rowCount() === 1){
        if($row = $stmt->fetch()) {
            session_start();
            $_SESSION["id"] = $row['id'];
            
            $_SESSION["successes"][] = "You have logged in successfully.";
            header('location: booking.php'); 
            exit();
        }
    }
    else {
        echo "<p> Login Invalid! </p>"; 
    }
}
else {
    echo "Sorry, something went wrong!"; 
}
  
$stmt->closeCursor();
?>
