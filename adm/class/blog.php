
<?php

require_once('conexao.php');

class BlogClass{

   
    //ATRIBUTOS
    public $idBlog;
    public $tituloBlog;
    public $descricaoFotoBlog;
    public $fontBlog;
    public $fotoBlog;
    public $sobreBlog;
    public $tituloFonteBlog;
    public $urlBlog;
    public $statusBlog;



//METODOS

public function __construct($id = false)
{
    if($id){
        $this->idBlog = $id;
        $this->Carregar();
    }
}


public function ListarBlogg(){
    $query = "SELECT * FROM blogs  WHERE statusBlog = 1";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listab = $resultado->fetchAll();
    return $listab;
}


public function ListaarBlogg(){
    $query = "SELECT * FROM blogs  WHERE statusBlog = 0";
    $conn = Conexao::LigarConexao();
    $resultado = $conn->query($query);
    $listab = $resultado->fetchAll();
    return $listab;
}

public function Inserir()

    {
        $query = "INSERT INTO blogs (tituloBlog, fotoBlog, sobreBlog, urlBlog, statusBlog) VALUES 
        ('".$this->tituloBlog."','".$this->fotoBlog."','".$this->sobreBlog."','".$this->urlBlog."','".$this->statusBlog."')";
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=blog'</script>";

    }

    public function Carregar(){
        $query = "SELECT * FROM blogs WHERE idBlog = " . $this->idBlog;
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $listab = $resultado->fetchAll();
       

        foreach($listab as $linha){

            $this->tituloBlog    =   $linha['tituloBlog'];
            $this->fotoBlog      =   $linha['fotoBlog'];
            $this->sobreBlog     =   $linha['sobreBlog'];
            $this->statusBlog    =   $linha['statusBlog'];
            $this->urlBlog       =   $linha['urlBlog'];
        }

    }

    public function Atualizar(){
        $query = "UPDATE blogs SET 
        tituloBlog ='".$this->tituloBlog."', 
        fotoBlog ='".$this->fotoBlog."', 
        sobreBlog ='".$this->sobreBlog."',
        urlBlog ='".$this->urlBlog."', 
        statusBlog ='".$this->statusBlog."'
        WHERE idBlog = " .$this->idBlog;
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=blog'</script>";


    }

    public function Ativar(){
        $query = "UPDATE blogs SET  
        statusBlog   = '1'
        WHERE idBlog  = " . $this->idBlog; 
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=blog'</script>";
    
    
    }
    

    public function Desativar(){
        $query = "UPDATE blogs SET  
        statusBlog   = '0'
        WHERE idBlog  = " . $this->idBlog; 
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=blog'</script>"; 
    }
    




// INSERT INTO blogs (tituloBlog, fotoBlog, sobreBlog, urlBlog, statusBlog) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')

}



