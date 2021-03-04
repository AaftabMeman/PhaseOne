<?php
try {
    $dsn = 'mysql:host=localhost;dbname=HotelBooking'; 
    $username = 'root'; 
    $password = 'root'; //mamp users 
    //$password = ''; wamp users  

    $db = new PDO($dsn, $username, $password); 
    echo "<p> Successfully connected!!!  </p>";
}
catch(PDOException $e){
    echo "<p> Something went wrong :( </p>"; 
    $error_message = $e->getMessage(); 
    echo $error_message; 
}
?>
