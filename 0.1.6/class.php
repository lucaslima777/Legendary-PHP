<?php

class ClassName {
    public $name;
    protected $id_user;
    private $cpf;

    public function setId_user($id_user){
        $this->id_user = $id_user;
    }

    protected function validateId_user(){

    }
}

$instance = new ClassName;

$instance->setId_user(15267);

?>