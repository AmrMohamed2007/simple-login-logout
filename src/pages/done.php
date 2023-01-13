
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../puplic/style.css">
</head>
<body>
<?php
  session_start();
 if(!isset($_SESSION["name"])){
    header("Location:../../index.php");
  
 }else{
 
 

  ?>
  <div class="conteiner-nav">
    <div class="nav">
            <ul class="content-nav">
                <li class="child item1"><a href="logout.php"class="green">Logut</a></li>
                <li class="child item2"><a href="#"class="green">About</a></li>
                <li class="child item3"><a href="#"class="green">Share</a></li>
            </ul>
            </div>
            <?php
            $title = $_SESSION["name"];
        echo "<h1 class='logo'>$title</h1>"
            ?>
                    
       
        </div>
        <?php }?>
</body>
</html>
