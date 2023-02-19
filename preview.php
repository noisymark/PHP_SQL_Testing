<?php

require_once 'components/baza.php';

$izraz = $veza->prepare('select * from osoba');
$izraz->execute();
$rs = $izraz->fetchAll();
foreach($rs as $red):
?>
<h1><?=$red->ime ?>, <?=$red->prezime ?></h1>
<?php
endforeach;
?>