<?php

/**
 * Null Object se usa siempre como return negativo (no hay imagen) cuando se usa algun tipo de imagen en el return positivo (si hay imagen)
 * @link <https://en.wikipedia.org/wiki/Null_Object_pattern#php>
*/
class NullObject {

    public function __get($key) {
        return '';
    }

    public function __call($a, $b) {
        return '';
    }

}