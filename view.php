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

$first_name = filter_input(INPUT_POST, 'fname');
$last_name = filter_input(INPUT_POST, 'lname');
$phone = filter_input(INPUT_POST, 'phonenum',FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$location = filter_input(INPUT_POST, 'location');
$chindate= filter_input(INPUT_POST,'chindate');
$choutdate= filter_input(INPUT_POST,'choutdate');


//set up a flag variable for debugging 
$ok = true; 
try{

    require('connect.php');

    $sql = "INSERT into RoomBooking (first_name, last_name, phone, email, location,chin_date, chout_date) 
    VALUES (:fname, :lname, :phonenum, :email, :location, :chindate, :choutdate)";
    
    $statement = $db->prepare($sql);

                //bind parameters using the bindParam method of the PDO Statement Object 
                $statement->bindParam(':fname', $first_name);
                $statement->bindParam(':lname', $last_name);
                $statement->bindParam(':phonenum', $phone);
                $statement->bindParam(':email', $email);
                $statement->bindParam(':location', $location);
                $statement->bindParam(':chindate', $chindate);
                $statement->bindParam(':choutdate', $choutdate);

                $statement->execute(); 
                
                //echo '<p> Success, your tune has been added!</p> ';
                //close DB connection 
                $statement->closeCursor(); 

                header ("location: view1.php");
                

                

            
            }
            catch(PDOException $e) {
                echo "<p>Something went wrong! </p>";


}
?>
   <a href="logout.php">Log Out </a>
            