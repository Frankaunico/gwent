<?php

require_once('Rareza.php');
require_once('Faccion.php');

class Carta
{
    /**
     * Constructor de los objetos carta. Este post type no tendra pagina visual, se usara solo como base para otros Post-types como baraja o jugador.
     */
    public function __construct($post)
    {
        $this->wp = $post;
    }

    /**
     * Devuelve el objeto faccion que es la faccion de la carta.
     * @return object
     */
    public function faccionCarta()
    {
        if ($faccionCarta = get_field('faccion_carta', $this->wp->ID)) {
            return new Faccion($faccionCarta); 
        }
        return new NullObject();
    }

    /**
     * Devuelve la imagen de la carta. Se le llama con $objeto->imagenCarta()
     * @return object
     */
    public function imagenCarta()
    {
        if ($imagenCarta = get_field('imagen_carta', $this->wp->ID)) {
            return $imagenCarta['url'];
        }
        return '';
    }

    /**
     * Devuelve la imagen de la carta recortada. Se le llama con $objeto->imagenCartaRecortada()
     * @return object
     */
    public function imagenCartaRecortada()
    {
        if ($imagenCartaRecortada = get_field('imagen_carta_recortada', $this->wp->ID)) {
            return $imagenCartaRecortada['url'];
        }
        return '';
    }

    /**
     * Devuelve el nombre de la carta. Se le llama con $objeto->nombreCarta()
     * @return string
     */
    public function nombreCarta()
    {
        if ($nombreCarta = get_field('nombre_carta', $this->wp->ID)) {
            return $nombreCarta;
        }
        return '';
    }

    /**
     * Devuelve el objeto rareza que es la rareza de la carta.
     * @return object
     */
    public function rarezaCarta()
    {
        if ($rarezaCarta = get_field('rareza_carta', $this->wp->ID)) {
            return new Rareza($rarezaCarta); 
        }
        return new NullObject();
    }
}