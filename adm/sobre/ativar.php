<?php

$id = $_GET['id'];

require_once('class/sobre.php');
$sobre  = new SobreClass();
$sobre-> idSobre = $id;
$sobre->Ativar();