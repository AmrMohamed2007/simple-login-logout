<?php
        session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["name"] == "amr"){
                $_SESSION["name"] = "amr";

            }
        }
        if(isset($_SESSION["name"])){
            echo "Welcome " . $_SESSION["name"];
            header("Refresh:5,url=./src/pages/hello.php");

        }else{
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/puplic/style.css">
</head>
<body>

<div class="conteiner-nav">
    <div class="nav">
            <ul class="content-nav">
                <li class="child item1"><a href="/test/"class="green">Home</a></li>
                <li class="child item2"><a href="#"class="green">About</a></li>
                <li class="child item3"><a href="#"class="green">Concat</a></li>
            </ul>
            </div>
            <h1 class="logo">Amr</h1>
        </div>
        
    <div class="container">
      
        <form  class="form" method="post">
            <div class="container-c">
   <div class="h1-login" class="child-login"> <h1>Login</h1></div>
   <div class="input_email" class="child-login"><input type="text" name="name" required></div>
   <div class="input_email" class="child-login"><input type="email" name="email" required></div>

   <div class="input_password" class="child-login"><input type="password" required></div>
   <div class="input_submit" class="child-login"><input type="submit"></div>
</div>
   </form>
</div>
<?php }?>

<script type="text/javascript">
    window.onload = function () {
        const audio = new Audio("Dndnha.Com.Marwan.Bablo.Racore.mp3");
   audio.loop = true;
   audio.play();
    }
  
</script>
</body>
</html>