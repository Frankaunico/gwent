<?php

class Rareza
{
    /**
     * 
     */
    public function __construct($post)
    {
        $this->wp = $post;
    }

    /**
     * Devuelve el nombre de la rareza. Se le llama con $objeto->nombreRareza()
     * @return string
     */
    public function nombreRareza()
    {
        if ($nombreRareza = get_field('nombre_rareza', $this->wp->ID)) {
            return $nombreRareza;
        }
        return '';
    }
}