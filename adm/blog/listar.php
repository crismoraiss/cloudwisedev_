<?php
 
  require_once('class/blog.php');

  $listaBlog = new BlogClass();
  $listarb = $listaBlog->ListarBlogg();
  //var_dump($listar) ;


  ?>



<div class="table-responsive">


<div class="listar">
<h2 class="tituloListar"><a href="index.php?p=blog&b=inserir">NOVO</a></h2>

<h2 class="tituloListar"><a href="index.php?p=blog&b=desativado">DESATIVADOS</a></h2>
</div>


<table class="table table-striped table-bordered">
    <caption>Listar Blog</caption>

        <thead>
            <tr>

                <!-- <th>ID</th> -->
                <th>TITULO</th>
                <!-- <th>TITULO FONT</th> -->
                <!-- <th>DESCRIÇÃO</th> -->
                <!-- <th>FONT</th> -->
                <th>FOTO</th>
                <th>SOBRE</th>
                <th>STATUS</th>
                <th>URL</th>

                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>

            </tr>

        </thead>


        <tbody>

    <?php foreach($listarb as $linha) : ?>

        <tr>

            <!-- <td> <?php echo $linha['idBlog'] ?></td> -->
            <td> <?php echo $linha['tituloBlog'] ?></td>
          
        

            <td><?php echo '<img src="../img/'.$linha['fotoBlog'].'" alt="'.$linha['descricaoFotoBlog'].'">' ?></td>
            <td> <?php echo $linha['sobreBlog'] ?></td>
            <td> <?php echo $linha['statusBlog'] ?></td>
            <td> <?php echo $linha['urlBlog'] ?></td>

            <td><a href="index.php?p=blog&b=atualizar&id=<?php echo $linha['idBlog'] ?>">ATUALIZAR</a></td>
            <td><a href="index.php?p=blog&b=desativar&id=<?php echo $linha['idBlog'] ?>">DESATIVAR</a></td>

        </tr>

        <?php endforeach ?>

 

    </tbody>



    


</table>


</div>