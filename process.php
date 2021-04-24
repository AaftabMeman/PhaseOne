<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hotel Arizona</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <article>
             <img src="arizona.png" alt="Eror">
            <div class="arizona">
            <h1>Hotel Arizona</h1>
                </div>
</article>
<ul>
    <li><a href="home.php">Home </a></li>
    <li> <a href="bookngs.php">Bookings</a></li>
    <li><a href="aboutus.php">About us</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
</ul>
</header>
</body>
</html>
<?php
// ob_start();

$first_name = filter_input(INPUT_POST, 'fname');
$last_name = filter_input(INPUT_POST, 'lname');
$phone = filter_input(INPUT_POST, 'phonenum',FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$chindate= filter_input(INPUT_POST,'chindate');
$choutdate= filter_input(INPUT_POST,'choutdate');
$id = null; 
$id = filter_input(INPUT_POST, 'user_id');



//set up a flag variable for debugging 
$ok = true; 

//if($ok === true){

    if($ok === true) {
        try {
            //connect to the database
            require('connect.php');
            //set up our SQL query 
            $sql = "INSERT INTO RoomBooking (first_name, last_name, phone, email, chin_date,chout_date) VALUES (:firstname, :lastname, :phone, :email, :chindate, :choutdate);"; 
            //call the prepare method of the PDO object 
            $statement = $db->prepare($sql);
            //bind parameters 
            $statement->bindParam(':firstname', $first_name);
            $statement->bindParam(':lastname', $last_name); 
            $statement->bindParam(':phone', $phone);
            $statement->bindParam(':email', $email); 
            $statement->bindParam(':chindate', $chindate); 
            $statement->bindParam(':choutdate', $choutdate); 
            //execute the query 
            $statement->execute();
            //close the db connection 
            $statement->closeCursor(); 
        }

            catch(PDOException $e) {
                echo "<p>Something went wrong! </p>";
                $error_message = $e->getMessage(); 
                echo $error_message;
                }
           }
           // ob_flush();
?>

