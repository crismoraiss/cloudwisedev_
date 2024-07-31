<?php
require_once('class/usuario.php');
 
$ListaUsuario = new UsuarioClass();
$listau = $ListaUsuario->ListarUsuarioo();
 
?>
 
 
 
<div class="table-responsive">
 
 
 
 
<h2 class="tituloDesativado"><a href="index.php?p=usuario">ATIVOS</a></h2>
<!-- <h2 class="tituloListar"><a href="index.php?p=sobre&s=desativado">DESATIVADOS</a></h2> -->
 
 
 
 
<table class="table table-striped table-bordered">
    <caption>Listar Usuarios</caption>
 
        <thead>
            <tr>
 
                <!-- <th>ID</th> -->
                <th>NOME</th>
                <th>FOTO</th>
                <th>EMAIL</th>
                <th>FONE</th>
                <th>SENHA</th>
                <th>STATUS</th>
 
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>        
 
            </tr>
 
        </thead>
 
 
 
    <tbody>
 
    <?php foreach($listau as $linha) : ?>
 
        <tr>
 
            <!-- <td> <?php echo $linha['idUser'] ?></td> -->
            <td> <?php echo $linha['nomeUser'] ?></td>
            <td><?php echo '<img src="../img/'.$linha['fotoUser'].'" alt="">' ?></td>
            <td> <?php echo $linha['emailUser'] ?></td>
            <td> <?php echo $linha['foneUser'] ?></td>
            <td> <?php echo $linha['senhaUser'] ?></td>
 
            <td><?php echo $linha['statusUser'] ?></td>
 
            <td><a href="index.php?p=usuario&u=ativar&id=<?php echo $linha['idUser'] ?>">ATIVAR</a></td>
            <!-- <td><a href="index.php?p=Sobre&s=inserir">INSERIR</a></td> -->
 
        </tr>
 
        <?php endforeach ?>
 
     
 
    </tbody>
 
 
 
</table>
 
 
</div>