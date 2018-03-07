<?php

class Faccion
{
    /**
     * Constructor de los objetos carta. Este post type no tendra pagina visual, se usara solo como base para otros Post-types como baraja o jugador.
     */
    public function __construct($post)
    {
        $this->wp = $post;
    }
	
    /**
     * Devuelve el color de la carta. Se le llama con $objeto->nombreFaccion()
     * @return string
     */
    public function nombreFaccion()
    {
        if ($nombreFaccion = get_field('nombrefaccion', $this->wp->ID)) {
            return $nombreFaccion;
        }
        return '';
    }
	
	    /**
     * Devuelve el color de la carta. Se le llama con $objeto->nombreFaccion()
     * @return string
     */
	    public function imagenFaccion()
    {
        if ($imagenFaccion = get_field('imagenfaccion', $this->wp->ID)) {
            return $imagenFaccion['url'];
        }
        return new NullObject();
    }

}