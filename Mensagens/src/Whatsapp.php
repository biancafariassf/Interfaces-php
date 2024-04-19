<?php

namespace App\Src;

class Whatsapp implements Mensageiro {
    
    private $mensagem;

    public function enviando($mensagem){
        echo "Enviando a mensagem Whatsapp para: $mensagem\n";
    }

}