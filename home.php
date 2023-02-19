<?php

session_start();
if(!$_SESSION['auth']){header('location: authorisation.php');}

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/header.php'?>
<body>  

<h2>SUCCES !!</h2>
<br>
<a href="logout.php">LOGOUT</a>
<?php include_once 'components/footer.php'?>
</body>
<?php include_once 'components/scripts.php'?>
</html>