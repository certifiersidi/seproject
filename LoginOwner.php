<?php 
  include_once 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pet Minding</title>
    <link rel="stylesheet" type="text/css" href="webapp.css">
  </head>
  <body>
    <section class="signup-form">
      <h2>Sign up</h2>
      <form action="signup.inc.php" method="POST">
        <input type="text" name="name" placeholder="username">
        <input type="text" name="email" placeholder="username">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="text" name="pwdrepeat" placeholder="repeat password">
        <button type="submit" name="submit">Sign up</button>
      </form>
    </section>

    
  <script type="text/javascript" src="script.js"></script>
  </body>
</html>
<?php 
  include_once 'footer.php';
?>