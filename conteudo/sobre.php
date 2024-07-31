 <section data-aos="fade-up" data-aos-duration="1500" class="cnt-sobre">
        
        <div class="sobre site">

        <?php foreach($listarss as $linha) : ?>

          <div data-aos="fade-up" data-aos-duration="1500" class="txtsobre">
            <h2>
              <i class="fa-solid fa-file-code"></i><?php echo $linha['tituloSobre']?></span>
              <span style="color: #BFFF00; font-size: 35px">Wise</span>
            </h2>
            <p>
              A <span style="color: #f2f2f2; font-size: 21px">Cloud</span>
              <span style="color: #BFFF00; font-size: 21px">Wise</span> <?php echo $linha['descricaoSobre']?>
            </p>
            <p><?php echo $linha['descricaoSobre1']?></p>

            <a href="<?php echo $linha['urlSobre']?>">Quem Somos<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          </div>

          <div data-aos="zoom-in" data-aos-duration="1500" class="sobreimg">
            <img src="img/<?php echo $linha['fotoSobre1']?>" alt="" />
            <img src="img/<?php echo $linha['fotoSobre2']?>" alt="" />
            <img src="img/<?php echo $linha['fotoSobre3']?>" alt="" />
            <img src="img/<?php echo $linha['fotoSobre4']?>" alt="" />
          </div>

          <?php endforeach; ?>

        </div>



      </section>
