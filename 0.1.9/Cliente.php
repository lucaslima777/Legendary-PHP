<?php namespace App;

class Cliente
{
    private $nome;
    private $cpf;

    public function setName($nome)
    {
            $this->nome = $nome;
    }

    public function getName()
    {
            return $this->nome;
    }

    public function setCPF($cpf)
    {
        if(preg_match('/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/', $cpf)){
            $this->cpf = $cpf;
            return true;
        }
        throw new \Exception("CPF invalido");
    }

}