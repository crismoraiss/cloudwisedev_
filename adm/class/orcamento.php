<?php

require_once('conexao.php');

class FaqClass{

    //ATRIBUTOS
    public $idFaq;
    public $perguntaFaq;
    public $respostaFaq;
    public $statusFaq;

//METODOS

public function ListarFaqq(){
    $query = "SELECT * FROM faq WHERE statusFaq = 1";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listaf = $resultado->fetchAll();
    return $listaf;
}

}
