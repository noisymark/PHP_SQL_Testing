<?php
try{
$dsn='mysql:host=localhost;dbname=BlueFreedom;charset=utf8mb4;';
$parametri=[
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];
$veza = new PDO($dsn,'root','root',$parametri);
}catch(Exception $e){
  switch($e->getCode()){
    case 1049:
      echo 'Provjerite naziv baze podataka';
      break;
    case 2002:
      echo 'Provjerite naziv računala ili domene gdje se nalazi baza';
      break;
    case 1045:
      echo 'Provjerite korisnika i lozinku na bazi';
      break;
    default:
      echo $e->getMessage() . ' ' . $e->getCode();
      break;
  }
}
?>