<?php 
require_once('class/comotrab.php');

$ListaComoTrab = new ComoTrabClass();
$listarbb = $ListaComoTrab->ListaarComoTrabb();

?>

<div class="table-responsive">

<h2 class="tituloDesativado"><a href="index.php?p=comotrab">ATIVOS</a></h2>



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

                <th>ATIVAR</th>
               

            </tr>

        </thead>


        <tbody>

    <?php foreach($listarbb as $linha) : ?>

        <tr>

            <!-- <td> <?php echo $linha['idTrabalho'] ?></td> -->
            <td> <?php echo $linha['tituloTrabalho'] ?></td>
            <td> <?php echo $linha['descricaoTrabalho'] ?></td>
            

            <td> <?php echo $linha['statusTrabalho'] ?></td>
        

           
            

            <td><a href="index.php?p=comotrab&c=ativar&id=<?php echo $linha['idTrabalho'] ?>">ATIVAR</a></td>
          

        </tr>

        <?php endforeach ?>


        
    </tbody>



    


</table>


</div>