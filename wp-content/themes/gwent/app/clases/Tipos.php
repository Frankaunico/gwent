<?php

class Tipos
{
    /**
     * 
     */
    public function __construct($post)
    {
        $this->wp = $post;
    }

    /**
     * Devuelve el color de la carta. Se le llama con $objeto->nombreColor()
     * @return string
     */
    public function nombreTipo()
    {
        if ($nombreTipo = get_field('nombreTipo', $this->wp->ID)) {
            return $nombreTipo;
        }
        return '';
    }

