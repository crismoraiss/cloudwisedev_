<?php
 
$id = $_GET['id'];
require_once('class/usuario.php');
$usuario = new UsuarioClass($id);
 
 
if (isset($_POST['nomeUser'])) {
 
   
    $nomeUser = $_POST['nomeUser'];
    $statusUser = isset($_POST['statusUser']) ? $_POST['statusUser'] : 0;
    $emailUser = $_POST['emailUser'];
    $foneUser = $_POST['foneUser'];
    $senhaUser = $_POST['senhaUser'];
    $statusUser = $_POST['statusUser'];
 
 
 
 
    if(!empty($_FILES['fotoUser']['name'])){
        $arquivo  = $_FILES['fotoUser'];
   
        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }
   
        if (move_uploaded_file($arquivo['tmp_name'], '../img/fotouser/' . $arquivo['name'])) {
   
            $fotoUser = 'fotouser/' . $arquivo['name'];
        } else {
            throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
        }
 
    }else{
        $fotoUser = $usuario->fotoUser;
    }
 
 
 
    $usuario  -> fotoUser        = $fotoUser;
    $usuario  -> nomeUser        = $nomeUser;
    $usuario  -> emailUser       = $emailUser;
    $usuario  -> foneUser        = $foneUser;
    $usuario  -> senhaUser       = $senhaUser;
    $usuario  -> statusUser       = $statusUser;
   
   
 
    $usuario->Atualizar();
 
}
 
// salvar na pasta e no banco de dados
 
 
 
?>
 
 
<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Usuarios</h2>
        </div>
 
        <form class="form-horizantal" action="index.php?p=usuario&u=atualizar&id=<?php echo $usuario->idUser ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">
 
 
                <div class="col-sm-4">
                        <div>
                            <label for="imagem">Imagem:</label>
 
                            <img src="<?php echo '../img/' . $usuario->fotoUser ?>" alt="Imagem" class="img-fluid" id="fotoUser">
 
                            <input type="file" id="inputImagem" name ='fotoUser' style="display: none;">
                        </div>
 
                    </div>
 
 
                    <!-- <label for="imagem">Imagem Blog 1:</label> -->
                    <!-- <img src="img/profile-user.png" alt="Imagem" class="img-fluid" id="imagemExibida">  -->
                    <!-- <input type="file" id="imagem" name="fotoBlog" accept="image/*" required> -->
 
                    <div>
 
                        <label for="titulo">Nome User:</label>
                        <input type="titulo" class="form-control" id="nomeUser" name="nomeUser" required placeholder="nome usuario" value="<?php echo $usuario->nomeUser?>">
 
                        <label>Ativo:</label>
                            <input type="checkbox" id="statusUser" name="statusUser" value="1" checked>
 
                    </div>
 
 
                    <label for="titulo">email User:</label>
                        <input type="titulo" class="form-control" id="emailUser" name="emailUser" required placeholder="email usuario" value="<?php echo $usuario->emailUser ?>">
 
                    <label for="texto">Fone User:</label>
                    <textarea class="form-control" id="foneUser" name="foneUser" required placeholder="telefone user"><?php echo $usuario->foneUser ?></textarea>
 
                    <!-- <label for="texto">Texto Sobre Blog:</label> -->
                    <!-- <textarea class="form-control" id="foneUser" name="foneUser" required placeholder="Texto Sobre Blog"></textarea> -->
 
                   
                    <label for="texto">Senha User:</label>
                    <textarea class="form-control" id="senhaUser" name="senhaUser" required placeholder="telefone User"><?php echo $usuario->senhaUser ?></textarea>
 
                </div>
 
                <div class="buttonComotrab">
                    <button type="submit" class="btn btn-primary">Atualizar Usuario</button>
                </div>
 
 
 
            </div>
 
        </form>
 
    </div>
</div>
 
 
<script>
    // FORMULARIO DO INSERIR QUE DEIXE A IMG A MOSTRA
 
    document.getElementById('fotoUser').addEventListener('click', function() {
        document.getElementById('inputImagem').click();
    });
 
    document.getElementById('inputImagem').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoUser');
        let arquivo = event.target.files[0];
 
        if (arquivo) {
            // alert("OK");
            let carregar = new FileReader();
 
            carregar.onload = function(e) {
                imagemExibida.src = e.target.result;
            }
 
            carregar.readAsDataURL(arquivo)
        }
 
 
    });
</script>