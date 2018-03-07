<?php
require_once('app/clases/Jugador.php');

$objeto = new Jugador($post);

//var_dump($objeto->jugadores());

foreach ($objeto->jugadores() as $jugador) {

       echo $jugador['twitter'];
	   
 }