<section data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="cnt-trabalhamos">


  <div class="trabalhamos site">

    <img data-aos="zoom-in" data-aos-duration="1500" src="img/imgTrabalhamos (1).png" alt="">

   
      <div class="comot">

      <h2><i class="fa-solid fa-list-check"></i>Como Trabalhamos</h2>

      <?php foreach($listarbb as $linha) : ?>

    <div class="txttrabalho">

      <!-- <h2><i class="fa-solid fa-list-check"></i>Como Trabalhamos</h2> -->

      <h3><i class="fa-solid fa-circle-check"></i><?php echo $linha['tituloTrabalho']?></h3>

      <p><?php echo $linha['descricaoTrabalho']?></p>

    </div>

      <?php endforeach; ?>


    </div>


  </div>


</section>

