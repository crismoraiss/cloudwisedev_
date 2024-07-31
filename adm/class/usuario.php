<?php
 
require_once('conexao.php');
 
class UsuarioClass{
 
   
    //ATRIBUTOS
    public $idUser;
    public $nomeUser;
    public $fotoUser;
    public $emailUser;
    public $foneUser;
    public $senhaUser;
    public $statusUser;
 
 
    public function __construct($id = false)
{
    if($id){
        $this->idUser = $id;
        $this->Carregar();
    }
}
 
   
public function Carregar(){
    $query = "SELECT * FROM usuario WHERE idUser = " . $this->idUser;
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listau = $resultado->fetchAll();
   
 
    foreach($listau as $linha){
        $this->nomeUser      =   $linha['nomeUser'];
        $this->fotoUser       =   $linha['fotoUser'];
        $this->emailUser       =   $linha['emailUser'];
        $this->foneUser      =   $linha['foneUser'];
        $this->senhaUser      =   $linha['senhaUser'];
        $this->statusUser   =   $linha['statusUser'];
    }
 
}
 
public function ListarUsuario(){
    $query = "SELECT * FROM usuario  WHERE statusUser = 1";
 
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listau = $resultado->fetchAll();
    return $listau;
}
 
 
public function ListarUsuarioo(){
    $query = "SELECT * FROM usuario  WHERE statusUser = 0";
 
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listau = $resultado->fetchAll();
    return $listau;
}
 
 
 
public function Inserir()
 
{
    $query = "INSERT INTO usuario (nomeUser, fotoUser, emailUser, foneUser, senhaUser, statusUser)
     VALUES ('".$this->nomeUser."','".$this->fotoUser."','".$this->emailUser."','".$this->foneUser."','".$this->senhaUser."','".$this->statusUser."')";
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=usuario'</script>";
 
}
 
 
 
public function Atualizar(){
    $query = "UPDATE usuario SET
    nomeUser ='".$this->nomeUser."',
    fotoUser ='".$this->fotoUser."',
    emailUser ='".$this->emailUser."',
    foneUser ='".$this->foneUser."',
    senhaUser ='".$this->senhaUser."',  
    statusUser ='".$this-> statusUser."'
    WHERE idUser = " .$this->idUser;
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=usuario'</script>";
 
 
}
 
 
public function Ativar(){
    $query = "UPDATE usuario SET  
    statusUser  = '1'
    WHERE idUser = " . $this->idUser;
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=usuario'</script>";
 
 
}
 
public function Desativar(){
    $query = "UPDATE usuario SET  
    statusUser   = '0'
    WHERE idUser  = " . $this->idUser;
    $conn = Conexao::LigarConexao();
    $conn->exec($query);
    echo "<script>document.location='index.php?p=usuario'</script>";
 
 
}
 
 
 
 
}