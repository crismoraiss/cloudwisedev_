<?php

class Conexao{
    public static function LigarConexao(){

        $conn = new PDO('mysql:dbname=agenciacloud;host=localhost', 'root', '');
        // $conn = new PDO('mysql:dbname=u283879542_cloudwise;host=smpsistema.com.br', 'u283879542_cloudwise', 'SenacAgencia03');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
}