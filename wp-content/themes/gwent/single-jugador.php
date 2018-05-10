<?php
include('header.php');

require_once('app/clases/Jugador.php');
require_once('app/clases/Carta.php');
require_once('app/clases/Faccion.php');
require_once('app/clases/NullObject.php');

$jugador = new Jugador($post);
?>

<div class="row col-12">
    
    <div class="col-12">
        <div class="col-12 col-md-4 offset-md-4 perfil-jugador">
            <div class="col-12">
                <?php if ($jugador->imagenJugador()->url()): ?>
                    <img src="<?php echo $jugador->imagenJugador();?>">
                <?php endif; ?>
            </div>
            
            <div class="col-12 texto-centrado margen-arriba">
                <?php if ($nombreJugador = $jugador->nombreJugador()): ?>
                    <h2><?php echo $nombreJugador;?></h2>
                <?php endif; ?>
            </div>

            <div class="col-12 texto-centrado">
                <?php if ($equipo = $jugador->equipo()): ?>
                    <h3 class="color-texto"><?php echo $equipo;?></h3>
                <?php endif; ?>
            </div>

            <div class="col-12">
                <div class="col-6 offset-3 texto-centrado redes-sociales">
                    <?php  if ($youtube = $jugador->youtube()) { echo '<a title="Youtube" href="' . $youtube . '"><i class="fab fa-youtube"></i></a>'; } ?>
                    <?php  if ($twitch = $jugador->twitch()) { echo '<a title="Twitch" href="' . $twitch . '"><i class="fab fa-twitch"></i></a>'; } ?>
                    <?php  if ($twitter = $jugador->twitter()) { echo '<a title="Twitter" href="' . $twitter . '"><i class="fab fa-twitter"></i></a>'; } ?>
                    <?php  if ($instagram = $jugador->instagram()) { echo '<a title="Instagram" href="' . $instagram . '"><i class="fab fa-instagram"></i></a>'; } ?>
                    <?php  if ($facebook = $jugador->facebook()) { echo '<a title="Facebook" href="' . $facebook . '"><i class="fab fa-facebook-square"></i></a>'; } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="margen-abajo">
            <h3>Carta Favorita</h3>
            <?php if ($nombreCarta = $jugador->cartaFavorita()->nombreCarta()): ?>
                <h4 class="color-texto"><?php echo $nombreCarta;?></h4>
            <?php endif; ?>
        </div>

        <?php if ($imagenCarta = $jugador->cartaFavorita()->imagenCarta()): ?>
            <div>
                <?php echo '<img src="'. $imagenCarta . '">';?>
            </div>
        <?php endif; ?>
    </div>

    <div class="col-12 col-md-4">
        <div class="margen-abajo">
            <h3>Facción Favorita</h3>
            <?php if ($nombreFaccion = $jugador->faccionFavorita()->nombreFaccion()): ?>
                <h4 class="color-texto"><?php echo $nombreFaccion;?></h4>
            <?php endif; ?>
        </div>
        <?php if ($imagenFaccion = $jugador->faccionFavorita()->imagenFaccion()): ?>
            <div>
                <?php echo '<img src="'. $imagenFaccion . '">';?>
            </div>
        <?php endif; ?>
    </div>

    <div class="col-12 col-md-4">
        <div class="margen-abajo">
            <h3>Lider Favorito</h3>
            <?php if ($nombreCarta = $jugador->liderFavorito()->nombreCarta()): ?>
                <h4 class="color-texto"><?php echo $nombreCarta;?></h4>
            <?php endif; ?>
        </div>
        <?php if ($imagenCarta = $jugador->liderFavorito()->imagenCarta()): ?>
            <div>
                <?php echo '<img src="'. $imagenCarta . '">';?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include('footer.php');?>
