<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

  <body>
    <div class="login-box">

        <form class="login-form" action="includes/login_inc.php" method="post">
        <h1>Welcome</h1>

        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>

            <input class="txt" type="text" name="username" autocomplete="off" placeholder="Username">
            <input class="txt" type="password" name="password" placeholder="Password" autocomplete="off">
            <input class ="button" type="submit" value="Login">
        </form>
    </div>
  </body>
</html>
