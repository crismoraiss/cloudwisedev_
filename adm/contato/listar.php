<?php
   require_once('class/contato.php');

   $listarContato = new ContatoClass();
   $listac = $listarContato->ListarCont();
 
  ?>



<div class="table-responsive">

<table class="table table-striped table-bordered">
    <caption>Listar Contato</caption>

        <thead>
            <tr>

                <!-- <th>ID</th> -->
                <th>NOME</th> 
                <th>DATA</th> 
                <th>EMAIL</th> 
                <th>FONE </th>
                <th>HORA</th> 
                <th>MENSAGEM</th> 
               


            </tr>

        </thead>



    <tbody>

    <?php foreach($listac as $linha) : ?>

        <tr>

            <!-- <td> <?php echo $linha['idContato'] ?></td> -->
            <td> <?php echo $linha['nomeContato'] ?></td>
         
            <td> <?php echo $linha['dataContato'] ?></td>
            <td> <?php echo $linha['emailContato'] ?></td>
            <td> <?php echo $linha['foneContato'] ?></td>
            <td> <?php echo $linha['horaContato'] ?></td>
            <td> <?php echo $linha['mensagemContato'] ?></td>
           
        

            <!-- <td><a href="index.php?p=Contato&s=inserir">INSERIR</a></td> -->

        </tr>

        <?php endforeach ?>

    

    </tbody>



</table>


</div>