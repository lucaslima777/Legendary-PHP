<?php

abstract class BankAccount {
    
    public $amount;

   abstract public function getMoney($value);
}

//Second Class
class InvestmentAccount extends BankAccount{

    public function getMoney($value){

    }

}

?>