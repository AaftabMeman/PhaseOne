<?php

try {
    $dsn = 'mysql:host=172.31.22.43;dbname=Aaftabbhai200461755'; 
    $username = 'Aaftabbhai200461755'; 
    $password = 'anI_COUd0w'; //mamp users 
    //$password = ''; wamp users  

    $db = new PDO($dsn, $username, $password); 
   
}
catch(PDOException $e){
    echo "<p> Something went wrong :( </p>"; 
    $error_message = $e->getMessage(); 
    echo $error_message; 
}

?>
