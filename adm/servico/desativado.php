<?php
  require_once('class/servico.php');

  $listaServico = new ServicoClass();
  $listar = $listaServico->Listaar();
  //var_dump($listar) ;

  ?>



<div class="table-responsive">

<div class="listar">
<h2 class="tituloDesativado"><a href="index.php?p=servico">ATIVOS</a></h2>
</div>






<table class="table table-striped table-bordered">
    <caption>Listar Serviço</caption>


        <thead>
            <tr>

                <!-- <th>ID</th> -->
                <th>TITULO</th>
                <th>DESCRIÇÃO</th>
                <th>STATUS</th>

                <th>ATIVAR</th>
               

            </tr>

        </thead>



    <tbody>

   
    <?php foreach($listar as $linha) : ?>

        

        <tr>

            <!-- <td> <?php echo $linha['idServico'] ?></td> -->
            <td> <?php echo $linha['tituloServico'] ?></td>
            <td> <?php echo $linha['descricao'] ?></td>
            <td> <?php echo $linha['statusServico'] ?></td>

            <td><a href="index.php?p=servico&s=ativar&id=<?php echo $linha['idServico'] ?>">ATIVAR</a></td>
           
          

        </tr>

        <?php endforeach ?>


    </tbody>



</table>


</div>

