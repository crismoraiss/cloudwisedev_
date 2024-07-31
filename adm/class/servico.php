<?php

require_once('conexao.php');

class ServicoClass{

    //ATRIBUTOS
    public $idServico;
    public $tituloServico;
    public $descricao;
    public $statusServico;

//METODOS

public function __construct($id = false)
{
    if($id){
        $this->idServico = $id;
        $this->Carregar();
    }
}



public function Listar(){
    $query = "SELECT * FROM servicos WHERE statusServico = 1 ORDER BY tituloServico ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}


public function Listaar(){
    $query = "SELECT * FROM servicos WHERE statusServico = 0 ORDER BY tituloServico ASC";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}

 public function Inserir()

    {
        $query = "INSERT INTO servicos (tituloServico, descricao, statusServico) VALUES 
        ('".$this->tituloServico."','".$this->descricao."','".$this->statusServico."');";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";

    }

    public function Carregar(){
        $query = "SELECT * FROM servicos WHERE idServico = " . $this->idServico;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
       

        foreach($lista as $linha){

            $this->tituloServico  =   $linha['tituloServico'];
            $this->descricao      =   $linha['descricao'];
            $this->statusServico  =   $linha['statusServico'];
        }

    }

    public function Atualizar(){
        $query = "UPDATE servicos SET  
        tituloServico    = '".$this->tituloServico."',
        descricao        = '".$this->descricao."',
        statusServico    = '".$this->statusServico."'
        WHERE idServico  = " . $this->idServico; 
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";


    }

    
    public function Ativar(){
        $query = "UPDATE servicos SET  
        statusServico    = '1'
        WHERE idServico  = " . $this->idServico; 
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script> document.location='index.php?p=servico'</script>";


    }


    public function Desativar(){
        $query = "UPDATE servicos SET  
        statusServico    = '0'
        WHERE idServico  = " . $this->idServico; 
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script> document.location='index.php?p=servico'</script>";


    }


}
