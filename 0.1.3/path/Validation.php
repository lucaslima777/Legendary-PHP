<?php

class Validation{
    public static function max($text, $size_max){
        $size_text = strlen($text);

        if($size_text > $size_max){
            throw new \ValidationError('Seu texto não pode ser maior que ' . $size_max);
        }
        return true;
    }

    public static function min($text, $size_min){
        $size_text = strlen($text);

        if($size_text < $size_min){
            throw new \ValidationError('Seu texto não pode ser menor que ' . $size_min);
        }
        return true;
    }
}

?>