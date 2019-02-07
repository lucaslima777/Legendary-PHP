<?php



interface paymentInterface{

    public function setClientData(array $dados): bool;
    public function setPedido($pedido);
    public function preocess();
}



class wirecard{

    public function setClientData(array $dados) : bool{
        return false;
    }

    public function setPedido(){
        
    }

    public function preocess() : bool{
        echo 'Pagamento IUGU';
        return false;
    }
}

$payment = new Wirecard();
$payment->setClientData([]);
$payment->payment(); 
