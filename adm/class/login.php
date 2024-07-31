<!-- p3 -->

<?php

require_once('conexao.php');

class Login{

    public $idUser;
    public $nomeUser;
    public $fotoUser;
    public $emailUser;
    public $foneUser;
    public $senhaUser;
    public $statusUser;


    // METODOS

    public function VerificarLogin(){

        if(isset($this->emailUser)){
          $query = "SELECT * FROM usuario WHERE emailUser = '".$this->emailUser."' AND senhaUser = '".$this->senhaUser."';";
        }else{
            if(isset($this->idUser)){
                $query = "SELECT * FROM usuario WHERE idUser = ".$this->idUser;
            }
        }

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listaLogin = $resultado->fetch(PDO::FETCH_ASSOC);
        return $listaLogin;
    }

   

}