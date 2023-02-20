<?php
$email = isset($_GET['email']) ? $_GET['email'] : (isset($_COOKIE['email']) ? $_COOKIE['email'] : '');
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/header.php'?>
<body>  
<div id="form" class="row text-center">
    <div class="col-xl-1 col-lg-1 col-md-1"></div>
    <div id="leftside" class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
        <img src="components/img/png.png" alt="Bluefreedomlogo" height="100px" width="100px">
        <br>
        <h6>BlueFreedom ensures the freedom of speech is available to everyone!</h6>
        <br>
        <form action="registration.php" method="get">
            <button type="submit" class="btn btn-success text-white"><i id="fa-inline-icon" class="fa-regular fa-user"></i> REGISTER HERE</button>
        </form>
    </div>
        <div id="rightside" class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
            <form method="POST" action="authorisation.php" >
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="<?=$email?>">
                    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <small id="accountHelp"><a style="text-decoration:none;color:black" href="lostpassword.php">FORGOT PASSWORD ?</a></small>
                </div>
                <br>
                <button type="submit" class="btn btn-primary"><i id="fa-inline-icon" class="fa-solid fa-fingerprint"></i>LOGIN</button>
            </form>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
</div>



<?php include_once 'components/footer.php'?>
</body>
<?php include_once 'components/scripts.php'?>
</html>