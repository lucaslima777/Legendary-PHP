<?php

class Validation{
    public static function max($text, $size_max){
        $size_text = strlen($text);

        if($size_text > $size_max){
            throw new ValidationError;
        }
    }
}

?>