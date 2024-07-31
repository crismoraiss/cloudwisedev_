<?php
  require_once('class/servico.php');

  $listaServico = new ServicoClass();
  $listar = $listaServico->Listar();
  //var_dump($listar) ;

  ?>



<div class="table-responsive">

<div class="listar">
<h2 class="tituloListar"><a href="index.php?p=servico&s=inserir">INSERIR</a></h2>

<h2 class="tituloListar"><a href="index.php?p=servico&s=desativado">DESATIVADOS</a></h2>
</div>





<table class="table table-striped table-bordered">
    <caption>Listar Serviço</caption>


        <thead>
            <tr>

                <!-- <th>ID</th> -->
                <th>TITULO</th>
                <th>DESCRIÇÃO</th>
                <th>STATUS</th>

                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>

            </tr>

        </thead>



    <tbody>

   
    <?php foreach($listar as $linha) : ?>

        

        <tr>

            <!-- <td> <?php echo $linha['idServico'] ?></td> -->
            <td> <?php echo $linha['tituloServico'] ?></td>
            <td> <?php echo $linha['descricao'] ?></td>
            <td> <?php echo $linha['statusServico'] ?></td>

            <td><a href="index.php?p=servico&s=atualizar&id=<?php echo $linha['idServico'] ?>">ATUALIZAR</a></td>
            <td><a href="index.php?p=servico&s=desativar&id=<?php echo $linha['idServico'] ?>">DESATIVAR</a></td>
          

        </tr>

        <?php endforeach ?>

        <!-- <td><a href="index.php?p=servico&s=inserir">INSERIR</a></td> -->

    </tbody>



</table>


</div>

