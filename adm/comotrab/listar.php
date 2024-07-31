<?php 
require_once('class/comotrab.php');

$ListaComoTrab = new ComoTrabClass();
$listarbb = $ListaComoTrab->ListarComoTrabb();

?>

<div class="table-responsive">

<div class="listar">
<h2 class="tituloListar"><a href="index.php?p=comotrab&c=inserir">NOVO</a></h2>

<h2 class="tituloListar"><a href="index.php?p=comotrab&c=desativado">DESATIVADOS</a></h2>
</div>

<table class="table table-striped table-bordered">
    <caption>Listar Como Trabalhamos</caption>

        <thead>
            <tr>

                <!-- <th>ID</th> -->
                <th>TITULO</th>
                <th>DESCRIÇÃO</th>
                <!-- <th>FOTO</th> -->
                <!-- <th>DESCRIÇÃO FOTO</th> -->
                <th>STATUS</th>

                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>

            </tr>

        </thead>


        <tbody>

    <?php foreach($listarbb as $linha) : ?>

        <tr>

            <!-- <td> <?php echo $linha['idTrabalho'] ?></td> -->
            <td> <?php echo $linha['tituloTrabalho'] ?></td>
            <td> <?php echo $linha['descricaoTrabalho'] ?></td>
            

            <td> <?php echo $linha['statusTrabalho'] ?></td>
        

           
            

            <td><a href="index.php?p=comotrab&c=atualizar&id=<?php echo $linha['idTrabalho'] ?>">ATUALIZAR</a></td>
            <td><a href="index.php?p=comotrab&c=desativar&id=<?php echo $linha['idTrabalho'] ?>">DESATIVAR</a></td>

        </tr>

        <?php endforeach ?>


        
    </tbody>



    


</table>


</div>