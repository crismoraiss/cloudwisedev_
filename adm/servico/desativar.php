<?php

$id = $_GET['id'];

require_once('class/servico.php');
$servico  = new ServicoClass();
$servico-> idServico = $id;
$servico->Desativar();

