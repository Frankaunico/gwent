<?php
include('header.php');
require_once('app/clases/Jugador.php');
require_once('app/clases/Carta.php');
require_once('app/clases/Faccion.php');
require_once('app/clases/NullObject.php');

$jugador = new Jugador($post);

?>

<div class="row imagenpequena col-12 col-md-12">
<div class="col-12 col-md-4">
<img src="<?php echo  $jugador->imagenJugador();?>">
</div>
<div class="col-12 col-md-8">
<div>
<h1><?php echo  $jugador->nombreJugador();?></h1>
</div>
<div>
<h2><?php echo  $jugador->Equipo();?></h2>
</div>
<div>
<?php  if ($youtube=$jugador->youtube()){ echo '<a title="Youtube" href="'.$youtube.'"><i class="fab fa-youtube"></i></a>';}?>
<?php  if ($twitch=$jugador->twitch()){ echo '<a title="Twitch" href="'.$twitch.'"><i class="fab fa-twitch"></i></a>';}?>
<?php  if ($twitter=$jugador->twitter()){ echo '<a title="Twitter" href="'.$twitter.'"><i class="fab fa-twitter"></i></a>';}?>
<?php  if ($instagram=$jugador->instagram()){ echo '<a title="Instagram" href="'.$instagram.'"><i class="fab fa-instagram"></i></a>';}?>
<?php  if ($facebook=$jugador->facebook()){ echo '<a title="Facebook" href="'.$facebook.'"><i class="fab fa-facebook-square"></i></a>';}?>
</div>
</div>
<div class="col-12 col-md-4">
<div>
<h2>Carta Favorita</h2>
</div>
<div>
<?php echo  '<img src="'. $jugador->cartaFavorita()->imagenCarta() .'" alt="Twitter" />';?>
</div>
<div>
<h2><?php echo  $jugador->cartaFavorita()->nombreCarta();?></h2>
</div>
</div>
<div class="col-12 col-md-4">
<div>
<h2>Facción Favorita</h2>
</div>
<div>
<?php echo  '<img src="'. $jugador->faccionFavorita()->imagenFaccion() .'" alt="Twitter" />';?>
</div>
<div>
<h2><?php echo  $jugador->faccionFavorita()->nombreFaccion();?></h2>
</div>
</div>
<div class="col-12 col-md-4">
<div>
<h2>Lider Favorito</h2>
</div>
<div>
<?php echo  '<img src="'. $jugador->liderFavorito()->imagenCarta() .'" alt="Twitter" />';?>
</div>
<div>
<h2><?php echo  $jugador->liderFavorito()->nombreCarta();?></h2>
</div>
</div>
</div>
<?php
include('footer.php');
?>