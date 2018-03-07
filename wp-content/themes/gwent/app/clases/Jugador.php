<?php

require_once('Carta.php');
require_once('Faccion.php');

class Jugador
{
    /**
     * Constructor de los objetos jugador. El post de cada jugador lo guardará en $objeto->wp.
     */
    public function __construct($post)
    {
        $this->wp = $post;
    }
    /**
     * Devuelve el nombre del jugador. Se le llama con $objeto->nombreJugador()
     * @return string
     */
    public function nombreJugador()
    {
        if ($nombreJugador = get_field('nombre_jugador', $this->wp->ID)) {
            return $nombreJugador;
        }
        return '';
    }

	   /**
     * Devuelve el nombre de la faccion favorita. Se le llama con $objeto->nombreJugador()
     * @return string
     */
    public function faccionFavorita()
    {
        if ($faccionFavorita = get_field('faccion_favorita', $this->wp->ID)) {
            return new Faccion($faccionFavorita); 
        }
        return new NullObject();
    }
	
	  /**
     * Devuelve el objeto carta que es el lider favorito del jugador.
     * @return array
     */
    public function liderFavorito()
    {
        if ($liderFavorito = get_field('lider_favorito', $this->wp->ID)) {
            return new Carta($liderFavorito); 
        }
        return new NullObject();
    }
	
    /**
     * Devuelve el objeto carta que es la cata favorita del jugador.
     * @return array
     */
    public function cartaFavorita()
    {
        if ($cartaFavorita = get_field('carta_favorita', $this->wp->ID)) {
            return new Carta($cartaFavorita); 
        }
        return new NullObject();
    }
	
    /**
     * Devuelve de facebook del jugador.
     * @return array
     */
    public function facebook()
    {
	   if ($facebook = get_field('redes', $this->wp->ID)) {
            return $facebook[0]['facebook'];
        }
        return '';
    }
	
	    /**
     * Devuelve de youtube del jugador.
     * @return array
     */
    public function youtube()
    {
	   if ($youtube = get_field('redes', $this->wp->ID)) {
            return $youtube[0]['youtube'];
        }
        return '';
    }
	
	    /**
     * Devuelve de instagram del jugador.
     * @return array
     */
    public function instagram()
    {
	   if ($instagram = get_field('redes', $this->wp->ID)) {
            return $instagram[0]['instagram'];
        }
        return '';
    }
	
		/**
     * Devuelve de twitter del jugador.
     * @return array
     */
    public function twitter()
    {
	   if ($twitter = get_field('redes', $this->wp->ID)) {
            return $twitter[0]['twitter'];
        }
        return '';
    }
	
		/**
     * Devuelve de twitch del jugador.
     * @return array
     */
    public function twitch()
    {
	   if ($twitch = get_field('redes', $this->wp->ID)) {
            return $twitch[0]['twitch'];
        }
        return '';
    }
	
	    /**
     * Devuelve la imagen del jugador. Se le llama con $objeto->imagenJugador()
     * @return object
     */
    public function imagenJugador()
    {
        if ($imagenJugador = get_field('foto', $this->wp->ID)) {
            return $imagenJugador['url'];
        }
        return new NullObject();
    }
	
		/**
     * Devuelve el equipo. Se le llama con $objeto->imagenEquipo()
     * @return object
     */
    public function Equipo()
    {
        if ($Equipo = get_field('equipo', $this->wp->ID)) {
            return $Equipo;
        }
        return new NullObject();
    }
}