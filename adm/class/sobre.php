<?php

require_once('conexao.php');

class SobreClass{

    //ATRIBUTOS
    public $idSobre;
    public $tituloSobre;
    public $descricaoSobre;
    public $descricaoSobre1;
    public $fotoSobre1;
    public $fotoSobre2;
    public $fotoSobre3;
    public $fotoSobre4;
    public $tituloMissao1; 
    public $descricaoMissao1;
    public $tituloMissao2;
    public $descricaoMissao2;
    public $tituloMissao3;
    public $descricaoMissao3;
    public $fotoMissao;
    public $tituloVisao1;
    public $descricaoVisao1;
    public $tituloVisao2; 
    public $descricaoVisao2;
    public $tituloVisao3;
    public $descricaoVisao3;
    public $fotoVisao; 
    public $tituloValores1;
    public $descricaoValores1;
    public $tituloValores2;
    public $descricaoValores2;
    public $tituloValores3; 
    public $descricaoValores3;
    public $fotoValores; 
    public $urlSobre;
    public $statusSobre;

    

//METODOS

public function __construct($id = false)
{
    if($id){
        $this->idSobre = $id;
        $this->Carregar();
    }
}

public function ListarS(){
    $query = "SELECT * FROM tblsobre  WHERE statusSobre = 1";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listas = $resultado->fetchAll();
    return $listas;
}


public function ListaarS(){
    $query = "SELECT * FROM tblsobre  WHERE statusSobre = 0";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listas = $resultado->fetchAll();
    return $listas;
}

public function Inserir()

 
    {
        $query = "INSERT INTO tblsobre (tituloSobre, descricaoSobre, fotoSobre1, fotoSobre2, 
        fotoSobre3, fotoSobre4, statusSobre, descricaoSobre1, urlSobre) VALUES

        ('".$this->tituloSobre."','".$this->descricaoSobre."','".$this->fotoSobre1."',
        '".$this->fotoSobre2."','".$this->fotoSobre3."','".$this->fotoSobre4."',
        '".$this->statusSobre."', '".$this->descricaoSobre1."','".$this->urlSobre."')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=sobre'</script>";

    }

    
public function Carregar(){
    $query = "SELECT * FROM tblsobre WHERE idSobre = " . $this->idSobre;
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listas = $resultado->fetchAll();
   

    foreach($listas as $linha){
        $this->tituloSobre      =   $linha['tituloSobre'];
        $this->fotoSobre1       =   $linha['fotoSobre1'];
        $this->fotoSobre2       =   $linha['fotoSobre2'];
        $this->fotoSobre3       =   $linha['fotoSobre3'];
        $this->fotoSobre4       =   $linha['fotoSobre4'];
        $this->descricaoSobre   =   $linha['descricaoSobre'];
        $this->descricaoSobre1  =   $linha['descricaoSobre1'];
        $this->statusSobre      =   $linha['statusSobre'];
        $this->urlSobre         =   $linha['urlSobre'];
    }

}


public function Atualizar(){
    $query = "UPDATE tblsobre SET 
    tituloSobre ='".$this->tituloSobre."', 
    fotoSobre1 ='".$this->fotoSobre1."',
    fotoSobre2 ='".$this->fotoSobre2."', 
    fotoSobre3 ='".$this->fotoSobre3."', 
    fotoSobre4 ='".$this->fotoSobre4."',  
    descricaoSobre ='".$this->descricaoSobre."',
    descricaoSobre1 ='".$this->descricaoSobre1."', 
    statusSobre ='".$this->statusSobre."',
    urlSobre ='".$this->urlSobre."'
    WHERE idSobre = " .$this->idSobre;
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=sobre'</script>";


}


public function Ativar(){
    $query = "UPDATE tblsobre SET  
    statusSobre    = '1'
    WHERE idSobre  = " . $this->idSobre; 
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=sobre'</script>";


}

public function Desativar(){
    $query = "UPDATE tblsobre SET  
    statusSobre    = '0'
    WHERE idSobre  = " . $this->idSobre; 
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=sobre'</script>";


}




 
}




// INSERT INTO tblsobre (tituloSobre, descricaoSobre, fotoSobre1, statusSobre, descricaoSobre1) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]');