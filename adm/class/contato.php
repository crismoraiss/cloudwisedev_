<?php 

require_once('conexao.php');

class ContatoClass{
    public $idContato;
    public $datacontato;
    public $emailContato;
    public $nomeContato;
    public $foneContato;
    public $mensagemContato;
    public $horaContato;
   

    public function InserirContato(){
        $sql = "INSERT INTO contatos (nomeContato,emailContato,foneContato,mensagemContato,dataContato,horaContato) VALUE 
        ('".$this->nomeContato."', '".$this->emailContato."', '".$this->foneContato."', 
        '".$this->mensagemContato."', '".$this->datacontato."', '".$this->horaContato."')";

        $conn = Conexao::LigarConexao();
        $conn->exec($sql);

    }


    //METODOS

public function ListarCont(){
    $query = "SELECT * FROM contatos";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listac = $resultado->fetchAll();
    return $listac;
}

}
