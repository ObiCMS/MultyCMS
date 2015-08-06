<?php
namespace Debug;

/*
 * Отбелязва грешки, които не са причинени от програмата, а са по-скоро потребителски
 * своеволия.
 * 
 * Основното предназначение на този клас е да събира съобщенията и да ги предоставя
 * за показване на потребителя.
 * 
 * Примери:
 * 
 * посочен е грешен под домейн
 * посочен е несъществуващ език
 * пратени са некоректни данни
 * 
 */
class Error {
    
    protected static $msg;
    
    public function __construct() {
        ;
    }
    
    public static function alert($a){
        /*
         * msj - Съобщение за потребителя
         * log - лог за системата
         */
        if($a['log']){
            echo $a['log'];
        }
        return FALSE;
    }
}
