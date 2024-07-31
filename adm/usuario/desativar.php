<?php
 
$id = $_GET['id'];
 
require_once('class/usuario.php');
$usuario  = new UsuarioClass();
$usuario-> idUser = $id;
$usuario->Desativar();