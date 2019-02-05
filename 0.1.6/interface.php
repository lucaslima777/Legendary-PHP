<?php

interface Compression{

    //Return True or False
    public function open(string $file) : bool;
    public function compress($file) : bool;
    public function returnFile($file) : bool;
}



class WinZip implements Compression{

    public function open(string $file) : bool{

        $success_open = true;

        if($success_open){
            echo 'Success open' . '<br>';
            return true;
        }
        return false;
    }

    public function compress($file) : bool{
        
        $success_compress = true;

        if($success_compress){
            echo 'Success compress' . '<br>';
            return true;
        }
        return false;
    }

    public function returnFile($file) : bool{
        
        $success_returnFile = true;

        if($success_returnFile){
            echo 'Success returnFile' . '<br>';
            return true;
        }
        return false;
    }
}
$instanceWinZip = new WinZip;

$file = 'note.txt';
$instanceWinZip->open($file);

$instanceWinZip->compress(15267);

$file_compressed = 'note.zip';
$instanceWinZip->returnFile($file_compressed);


?>