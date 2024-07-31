<section class="banner">
        <!-- <img src="img/banner02.png" alt="" />
        <img src="img/banner06.png" alt="" />
        <img src="img/banner07.png" alt="" />
        <img src="img/banner08.png" alt="" /> -->

        <?php foreach($listarbanner as $linha) : ?>
       
        <h1><?php echo $linha['tituloBanner']?></h1>
        <h2><?php echo $linha['subTituloBanner']?> Dev</h2>
          
        

        <h3>
         <span id="element"></span>
        </h3>


        <?php endforeach; ?>
      </section>

      <section class="banner-seta">
      <div class="site">
      <i class="fa fa-angle-double-down icone"></i>
      </div>
      </section>

      
      