<?php
// SQL COMMAND THAT SHOULD BE USED TO AUTHENTICATE
// select * from osoba where email="markopavlovic316@gmail.com" and lozinka="AA22BB33";
include_once 'components/baza.php';
$email=$_POST['email'];
$password=$_POST['password'];
$izraz=$veza->prepare("select sifra from osoba where email='$email' and password='$password';");
$izraz->execute();
$rs = $izraz->fetchAll();
foreach ($rs as $red){
    echo $red->sifra . PHP_EOL;
}
//if(count($rs)>0){
//    session_start();
//    $_SESSION['auth']=true;
//    setcookie('email',$_POST['email']);
//    header('location: home.php');
//} else{
//    header('location: index.php?email=' . $_POST['email']);
//}

//if($_POST['email']==='test@test.hr' && $_POST['password']==='test'){
//    session_start();
//    $_SESSION['auth']=true;
//    setcookie('email',$_POST['email']);
//    header('location: home.php');
//}else{
//    header('location: index.php?email=' . $_POST['email']);
//}

?>