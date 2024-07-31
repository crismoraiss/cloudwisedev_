<section data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="cnt-blog">

  <div class="blog site">
    <h2><i class="fa-solid fa-pager"></i>Blog</h2>


    <div>

    <?php foreach($listarb as $linha) : ?>

      <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
        <img src="img/<?php echo $linha['fotoBlog']?>" alt="<?php echo $linha['descricaoFotoBlog'] ?>">
        <h3><?php echo $linha['sobreBlog']?></h3>
        <h4><?php echo $linha['fontBlog']?><span style="color: #BFFF00; font-size: 21px">Wise</span> &#x2022; <?php echo $linha['tituloFonteBlog']?>
        </h4>
        <p><?php echo $linha['tituloBlog']?></p>
        <a href="<?php echo $linha['urlBlog']?>">Leia mais<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>
     
        <?php endforeach;?>

    </div>
  </div>

</section>