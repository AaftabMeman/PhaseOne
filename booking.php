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
<main>
    <article class="rr">
      <img src="r1.jpg" alt="error">
        </article>

<div class="rrr">
    When you get into a hotel room, you lock the door, and <br>
    you know there is a secrecy, there is a luxury, there is fantasy.<br>
     There is comfort. There is reassurance.<br>
         ~Diane von Furstenberg
        </div>

        <form action="view.php" method="post">
    <label for="fname">First name:</label>
   <input type="text"  name="fname"  placeholder= "First Name">
   <label for="lname">Last name:</label>
   <input type="text"  name="lname" placeholder="Last Name"><br>
   <label for="Phone">Phone Number:</label>
   <input type="tel" name="phonenum" placeholder="Phone Number">
   <label for="email">E-mail</label>
   <input type="email" name="email" placeholder="Email"><br>
   <label for="email">Location</label>
   <input type="location" name="location" placeholder="Location"><br>
   <label for="checkindate"> Check in Date: </label>
   <input type="date" name="chindate" placeholder="Check in Date">
   <label for="checkoutdate"> Check out Date: </label>
   <input type="date" name="choutdate" placeholder="Check out Date"><br>
   <input type="submit"  name="submit" value="Submit">

   </main>
  </html>

   