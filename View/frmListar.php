<?php
$lista = $_REQUEST["lista"];

foreach ($lista as $l){

    echo utf8_encode ($l->getNome())."<br>";
}

?>

