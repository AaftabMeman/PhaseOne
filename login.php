<?php

  // Before we render the form let's check for form values
  session_start();
  $form_values = $_SESSION['form_values'] ?? null;

  // Clear the form values
  unset($_SESSION['form_values']);
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Login</title>
  </head>

  <body>

    <div class="container">
      <header >
        <h1 >Login</h1>

      <section >
        <form action="authenticate.php" method="post">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="example@gmai.com" required value="<?= $form_values['email'] ?? null ?>">
              </div>
            </div>
            
            <div class="col">
              <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required>
              </div>
            </div>
          </div>

          <button class="btn" type="submit">Login</button>
          <a class="btn" href="register.php">Register</a>
        </form>
      </section>
    </div>
  </body>
</html>