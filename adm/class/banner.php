<?php

require_once('conexao.php');

class BannerClass{

    //ATRIBUTOS
    public $idBanner;
    public $tituloBanner;
    public $subTituloBanner;
    public $descricaoBanner;
    public $statusBanner;

//METODOS

public function ListarBann(){
    $query = "SELECT * FROM banner WHERE statusBanner = 1";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listaban = $resultado->fetchAll();
    return $listaban;
}

}
