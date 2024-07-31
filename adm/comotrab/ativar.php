<?php

$id = $_GET['id'];

require_once('class/comotrab.php');
$comotrab  = new ComoTrabClass();
$comotrab-> idTrabalho = $id;
$comotrab->Ativar();