<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

       <!-- The site.php is a file name -->
     <form action = "site.php" method = "get">

       Name: <br>
       <input type="text" name="name">
       <br>
       <br>

       Age:
       <br>
        <input type="number" name="age">
        <input type="submit">

     </form>

     <br>
     Your name is <?php echo $_GET["name"]?>
     <br>
     Your age is <?php echo $_GET["age"]?>

  </body>
</html>
