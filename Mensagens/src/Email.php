<?php

namespace App\Src;

class Email implements Mensageiro {
    private $mensagem;

    public function enviando($mensagem){
        echo "Enviando o email para: $mensagem\n";
    }

}