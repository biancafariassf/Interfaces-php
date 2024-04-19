<?php

namespace App\Src;
class SMS implements Mensageiro {
    
    private $mensagem;

    public function enviando($mensagem){
        echo "Enviando a mensagem SMS para: $mensagem\n";
    }

}
