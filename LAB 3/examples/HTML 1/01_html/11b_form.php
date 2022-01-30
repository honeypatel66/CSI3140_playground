<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
<?php
  if (!empty($_POST)) {
    ?>
    <h1>Hello <?php echo $_POST["first_name"] ?></h1>
    <a href="11b_form.php">Try Again</a>
    <?
  } else {
    ?>
    <form method="post">
      <input type="text" name="first_name" id="firstName" placeholder="Your name" />
      <input type="submit" value="Go" />
    </form>
    <?
  }
?>
  </body>
</html>


