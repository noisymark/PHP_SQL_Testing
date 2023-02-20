<?php
// SQL COMMAND THAT SHOULD BE USED TO AUTHENTICATE
// select * from osoba where email="markopavlovic316@gmail.com" and lozinka="AA22BB33";
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email=$_POST['email'];
        $password=$_POST['password'];
        require_once 'components/baza.php';
        $izraz=$veza->prepare("select * from osoba where email='$email' && lozinka='$password';");
    $izraz->execute();
    $rs=$izraz->fetchAll();
    foreach($rs as $red){$id=$red->sifra;}
    
    if(count($rs)===1){
        session_start();
        $_SESSION['auth']=true;
        $_SESSION['email']=$_POST['email'];
        $_SESSION['userid']=$id;
        $_SESSION['password']=$password;
        setcookie('email',$_POST['email']);
        setcookie('userid',$id);
        header('location: home.php');
    } else{
        header('location: index.php?email=' . $_POST['email']);
    }
    }

// OLD WAY FOR ONE-WAY TESTING PURPOSE - SESSION & COOKIE

//if($_POST['email']==='test@test.hr' && $_POST['password']==='test'){
//    session_start();
//    $_SESSION['auth']=true;
//    setcookie('email',$_POST['email']);
//    header('location: home.php');
//}else{
//    header('location: index.php?email=' . $_POST['email']);
//}

?>