<?php

require_once('conexao.php');

class ComoTrabClass{

   
    //ATRIBUTOS
    public $idTrabalho;
    public $tituloTrabalho;
    public $descricaoFotoTrabalho;
    public $fotoTrabalho;
    public $descricaoTrabalho;
    public $statusTrabalho;
  
//METODOS


public function __construct($id = false)
{
    if($id){
        $this->idTrabalho = $id;
        $this->Carregar();
    }
}


public function ListarComoTrabb(){
    $query = "SELECT * FROM trabalhos  WHERE statusTrabalho = 1";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listabb = $resultado->fetchAll();
    return $listabb;
}



public function ListaarComoTrabb(){
    $query = "SELECT * FROM trabalhos  WHERE statusTrabalho = 0";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listabb = $resultado->fetchAll();
    return $listabb;
}


public function Inserir()

{
    $query = "INSERT INTO trabalhos (tituloTrabalho, descricaoTrabalho, statusTrabalho) 
    VALUES ('".$this->tituloTrabalho."','".$this->descricaoTrabalho."','".$this->statusTrabalho."')";
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=comotrab'</script>";

}

public function Carregar(){
    $query = "SELECT * FROM trabalhos WHERE idTrabalho = " . $this->idTrabalho;
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listabb = $resultado->fetchAll();
   

    foreach($listabb as $linha){

        $this->tituloTrabalho     =   $linha['tituloTrabalho'];
        $this->descricaoTrabalho  =   $linha['descricaoTrabalho'];
        $this->statusTrabalho     =   $linha['statusTrabalho'];
    }

}

public function Atualizar(){
    $query = "UPDATE trabalhos SET  
    tituloTrabalho     = '".$this->tituloTrabalho."',
    descricaoTrabalho  = '".$this->descricaoTrabalho."',
    statusTrabalho     = '".$this->statusTrabalho."'
    WHERE idTrabalho   = " . $this->idTrabalho; 
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=comotrab'</script>";


}


public function Ativar(){
    $query = "UPDATE trabalhos SET  
    statusTrabalho   = '1'
    WHERE idTrabalho  = " . $this->idTrabalho; 
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=comotrab'</script>";


}



public function Desativar(){
    $query = "UPDATE trabalhos SET  
    statusTrabalho   = '0'
    WHERE idTrabalho  = " . $this->idTrabalho; 
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=comotrab'</script>";


}


}

