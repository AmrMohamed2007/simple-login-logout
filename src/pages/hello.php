<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
  <?php
  session_start();
 if(isset($_SESSION["name"])){
  echo "we redirect you soon";
  header("Refresh:5,url=done.php");
 }else{
  header("Location:../../index.php");
 }

  ?>


</body>
</html>
