<?php

class User{
    public function login($login, $senha){
        if($login == 'admin' && $senha == 'root'){
            return true;
        }
        throw new Exception('Acesso negado');
    }
}

try{
    $user = new User;

    $result = $user->login('admin', 'rdoot');

    var_dump($result);
} catch (Exception $e){
    echo $e->getMessage() . '<br>';
    echo $e->getPrevious() . '<br>';
    echo $e->getCode() . '<br>';
    echo $e->getFile() . '<br>';
    echo $e->getLine() . '<br>';

}
?>