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

    <title>Register</title>
  </head>

  <body>
    
    <div class="container">
      <header >
        <h1 >Registration</h1>
       
      </header>

      <section class="mb-5">
        <form action="insert.php" method="post">
          <div>
            <div >
              <div >
                <label for="username">User Name:</label>
                <input class="form-control" type="text" name="username" required placeholder="Yourname" value="<?= $form_values['username'] ?? null ?>">
              </div>
            </div>
          
          <div >
            <div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="example@email.com" required value="<?= $form_values['email'] ?? null ?>">
              </div>
            </div>

            <div >
              <div >
                <label for="email_confirmation">Email Confirmation:</label>
                <input class="form-control" type="email" name="email_confirmation" placeholder="example@email.com" required value="<?= $form_values['email_confirmation'] ?? null ?>">
              </div>
            </div>
          </div>

          <div >
            <div >
              <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" required>
              </div>
            </div>

            <div >
              <div >
                <label for="password_confirmation">Password Confirmation:</label>
                <input class="form-control" type="password" name="password_confirmation" required>
              </div>
            </div>
          </div>

          <!-- Add the recaptcha field -->
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

          <button class="btn" type="submit">Register</button>
          <a class="btn" href="login.php">Login</a>
        </form>
      </section>
    </div>

    <!-- Add the recaptcha scripts -->
    <?php include_once('config.php') ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= SITEKEY ?>"></script>
    <script>
      grecaptcha.ready(() => {
        grecaptcha.execute("<?= SITEKEY ?>", { action: "register" })
        .then(token => document.querySelector("#recaptchaResponse").value = token)
        .catch(error => console.error(error));
      });
    </script>
  </body>
</html>