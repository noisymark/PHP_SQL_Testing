<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        // BEFORE INSERTING THERE SHOULD BE EMAIL-CHECK (NO DOUBLE EMAILS IN DB), INPUT SANITAZITATION AND EMAIL VALIDATION
    include_once 'components/baza.php';
    $izraz=$veza->prepare("insert into osoba(ime,prezime,email,lozinka,administrator,stanje) values ('$fname','$lname','$email','$password','0','1')");
    $izraz->execute();
}
    
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/header.php'?>
<link rel="stylesheet" href="components/css/pw.css">
<body>  
<div id="form" class="row text-center">
    <div class="col-xl-1 col-lg-1 col-md-1"></div>
    <div id="leftside" class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
        <img src="components/img/png.png" alt="Bluefreedomlogo" height="100px" width="100px">
        <br>
        <h6>BlueFreedom ensures the freedom of speech is available to everyone!</h6>
        <br>
        <h2 class="text-success">Welcome aboard!</h2>
    </div>
        <div id="rightside" class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
            <form method="POST" action="" >
            <div class="form-group">
                    <label for="fname">First name</label>
                    <input name="fname" type="text" class="form-control" id="fname" placeholder="First name" required="required">
                </div>
                <div class="form-group">
                    <label for="lname">Last name</label>
                    <input name="lname" type="text" class="form-control" id="lname" placeholder="Last name"required="required">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" value="<?=$email?>" required="required">
                    <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" onKeyUp="checkPasswordStrength();" required="required">
                </div>
                <div id="password-strength-status"></div>
                <div class="form-group">
                    <label for="confirmpassword">Confirm password</label>
                    <input name="confirmpassword" type="password" class="form-control" id="confirmpassword" placeholder="Confirm password" required="required">
                </div>
                <br>
                <div id="correct">
                    <h4><?=$text1?></h4>
                </div>
                <button type="submit" class="btn btn-primary"><i id="fa-inline-icon" class="fa-regular fa-user"></i>REGISTER</button>
            </form>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1"></div>
</div>
<?php include_once 'components/footer.php'?>
</body>
<?php include_once 'components/scripts.php'?>
<script src="components/js/pw.js"></script>
</html>