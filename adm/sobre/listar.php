<?php
    require_once('class/sobre.php');

    $listaSobre = new SobreClass();
    $listarss = $listaSobre->ListarS();

  ?>




<div class="table-responsive">

<div class="listar">
<h2 class="tituloListar"><a href="index.php?p=sobre&s=inserir">INSERIR</a></h2>
<h2 class="tituloListar"><a href="index.php?p=sobre&s=desativado">DESATIVADOS</a></h2>
</div>



<table class="table table-striped table-bordered">
    <caption>Listar Sobre</caption>

        <thead>
            <tr>

                <!-- <th>ID</th> -->
                <th>TITULO</th> 
                <th>DESCRIÇÃO 1</th> 
                <th>DESCRIÇÃO 2</th>
                <th>FOTO 1</th> 
                <th>FOTO 2</th> 
                <th>FOTO 3</th> 
                <th>FOTO 4</th> 
               
                <th>URL</th> 
                <th>STATUS</th>

                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>         

            </tr>

        </thead>



    <tbody>

    <?php foreach($listarss as $linha) : ?>

        <tr>

            <!-- <td> <?php echo $linha['idSobre'] ?></td> -->
         
            <td> <?php echo $linha['tituloSobre'] ?></td>
            <td> <?php echo $linha['descricaoSobre'] ?></td>
            <td> <?php echo $linha['descricaoSobre1'] ?></td>
            <td><?php echo '<img src="../img/'.$linha['fotoSobre1'].'" alt="">' ?></td>
            <td><?php echo '<img src="../img/'.$linha['fotoSobre2'].'" alt="">' ?></td>
            <td><?php echo '<img src="../img/'.$linha['fotoSobre3'].'" alt="">' ?></td>
            <td><?php echo '<img src="../img/'.$linha['fotoSobre4'].'" alt="">' ?></td>
            <td> <?php echo $linha['urlSobre'] ?></td>
          
            <td><?php echo $linha['statusSobre'] ?></td>

            <td><a href="index.php?p=sobre&s=atualizar&id=<?php echo $linha['idSobre'] ?>">ATUALIZAR</a></td>
            <td><a href="index.php?p=sobre&s=desativar&id=<?php echo $linha['idSobre'] ?>">DESATIVAR</a></td>
            <!-- <td><a href="index.php?p=Sobre&s=inserir">INSERIR</a></td> -->

        </tr>

        <?php endforeach ?>

      

    </tbody>



</table>


</div>