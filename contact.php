<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact - Gameworld</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="MainPage">
    <?php include "header.php" ?>
    <form action="contact.php" method="post">
      <h3>Name</h3>
      <input type="text" name="Name" value="Name">
      <h3>Age</h3>
      <input type="text" name="Age" value="Age">
      <h3>Message</h3>
      <input type="textarea" name="Message" value="Message">
      <input type="submit" name="submit" value="submit">
    </form>
    </div>
  </body>
</html>
