<?php

class Magic{
    public function __get($field){
        echo 'This method get does not exist: ' .$field . '<br>';
    }

    public function __set($field, $value){
        echo 'This method set does not exist: ' .$field . '<br>';
    }

    public function __construct(){
        //Execute when the object is created
        echo 'This construct does not exist: ' . '<br>';
    }

    public function __destruct(){
        //Execute when the object is destroyed
    }

    public function __toString(){
        
    }
}

$magic = new Magic();

//__construct
//$magic = new Magic(error example);


//__get
$magic->test_get;

//__set
$magic->test_set = "value";


?>