<?php

class Color
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
    public function nombreColor()
    {
        if ($nombreColor = get_field('nombreColor', $this->wp->ID)) {
            return $nombreColor;
        }
        return '';
    }

