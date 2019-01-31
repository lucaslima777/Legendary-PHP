<?php

class customException extends Exception {

}

class Broadcast {
    public function erro(){
        throw new customException;
    }
}

try {

    trigger_error('Esta função será removida em próximas versoes', E_USER_DEPRECATED);
    $broadcast = new Broadcast;
    $broadcast->erro();

    //throw new Error();

} catch (\customException $errorCustom) {
    echo 'custom exception is activate';
} catch (\Error $errorNative) {
    echo 'error native is activate';
} catch (\Error | \customException $errorNative) {
    echo 'error native and custom is activate';
}

?>