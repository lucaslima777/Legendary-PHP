<?php

use PHPUnit\Framework\TestCase;
use App\Cliente;

class ClienteTest extends TestCase
{
    public function testVerifyNameAtribClient()
    {
        $cliente = new Cliente;
        $cliente->setName('Lucas');

        $this->assertEquals('Lucas', $cliente->getName());
    }

    public function testvalidCPF()
    {
        $cpf = new Cliente;
        $resultado = $cpf->setCPF('123.456.789-00');

        $this->assertTrue($resultado);
    }
    
    /**
     * @expectedException Exception
     */
    public function testvalidCpfERRO()
    {
        $cpf = new Cliente;
        $resultado = $cpf->setCPF('12345678900');
    }
}
