<?php 

session_start();

if(!isset($_SESSION['login'])){
    header("Location:login.php");
}

require_once('class/login.php');
    $usuario = new Login();
    $usuario->idUser = $_SESSION['idUser'];
   $dadosLogin =  $usuario->VerificarLogin();

// se nao existir a chave login, é p mandar p pag do login (acessar o adm e ir direto p pagina do login) p1
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />


</head>
<body>
    <header>
        <div class="logo"> <a href="index.php?p=dashboard"><img src="img/logoBranco.png" alt="logo da imagem"></a>
        </div>
        <div class="perfil"><img src="../img/<?php echo $dadosLogin['fotoUser'];?>" alt="imagem perfil"><p><a href="#"><?php echo $dadosLogin['nomeUser']; ?></a></p></div>
    </header>
    <main>




    <div class="estrutura">


    <ul class="menuFixo">
            <li><a href="index.php?p=sobre">SOBRE</a></li>
            <li><a href="index.php?p=comotrab">COMO TRABALHAMOS</a></li>
            <li><a href="index.php?p=servico">SERVIÇOS</a></li>
            <li><a href="index.php?p=blog">BLOG</a></li>
            <li><a href="index.php?p=contato">CONTATO</a></li>
            <li><a href="index.php?p=usuario">USUARIO</a></li>
        </ul>




    <div class="conteudo">

        <?php 

            $pagina = @$_GET['p'];

                switch ($pagina) {

                    case 'sobre':
                        require_once('sobre/sobre.php');
                    break;


                    case 'comotrab':
                        require_once('comotrab/comotrab.php');
                    break;


                    case 'servico':
                        require_once('servico/servico.php');
                    break;


                    case 'blog':
                        require_once('blog/blog.php');
                    break;

        
                    case 'contato':
                        require_once('contato/contato.php');
                    break;

                    case 'usuario':
                        require_once('usuario/usuario.php');
                    break;



                  

                    default:
                    require_once('dash/dash.php');
                    break;


             }


        ?>

    </div>


    </div>

     
    </main>
</body>
</html>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


