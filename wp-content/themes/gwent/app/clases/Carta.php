<?php

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
     * Devuelve el nombre de la carta. Se le llama con $objeto->nombreCarta()
     * @return string
     */
    public function nombreCarta()
    {
        if ($nombreCarta = get_field('nombreCarta', $this->wp->ID)) {
            return $nombreCarta;
        }
        return '';
    }

    /**
     * Devuelve la imagen de la carta. Se le llama con $objeto->imagenCarta()
     * @return object
     */
    public function imagenCarta()
    {
        if ($imagenCarta = get_field('nombreImagen', $this->wp->ID)) {
            return $imagenCarta['url'];
        }
        return new NullObject();
    }
}