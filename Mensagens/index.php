<?php
require 'vendor/autoload.php';
use App\Src\Mensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->enviando("Lígia");

$SMS = new SMS();
$SMS->enviando("Diego");

$Email = new Email();
$Email->enviando("Miguel");