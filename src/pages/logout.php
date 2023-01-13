
<?php 
session_start();
session_unset();
session_destroy();
echo "<p> you are logout success redirect you ......";
header("Refresh:5,url=../../index.php");
?>
