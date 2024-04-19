<?php

require __DIR__ . '../vendor/autoload.php';

use App\Src\Guerreiro;
use App\Src\Mago;
use App\Src\Arqueiro;
use App\Src\Personagem;

function executarAtaque(Personagem $personagem) {
    $personagem->atacar();
}

$guerreiro = new Guerreiro();
$mago = new Mago();
$arqueiro = new Arqueiro();

executarAtaque($guerreiro); 
executarAtaque($mago); 
executarAtaque($arqueiro);
