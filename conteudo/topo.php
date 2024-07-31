<header class="site topo" id="topoFixo">
      <a href="index.php"><img src="img/logo (3).png" alt="" /></a>

      <div>
       <button class="abrir-menu"></button>
      <nav class="menu">
        <button class="fechar-menu"></button>

        <?php
      $url = $_SERVER['REQUEST_URI'];
      $urlBase = basename($url);
      // echo $urlBase;


      ?>
        <ul>
          <li>
            <a href="sobre.php" <?php if ($urlBase == 'sobre.php') echo 'class="ativo"' ?>><i class="fa-solid fa-file-code"></i>Quem Somos</a>
          </li>
          <li>
            <a href="contato.php" <?php if ($urlBase == 'contato.php') echo 'class="ativo"' ?>><i class="fa-regular fa-address-card"></i>Contato</a>
          </li>
          <li>
            <a href="servicos.php" <?php if ($urlBase == 'servicos.php') echo 'class="ativo"' ?>><i class="fa-solid fa-wrench"></i>Serviços</a>
          </li>
          <li>
            <a href="adm/login.php"<?php if ($urlBase == 'login.php') echo 'class="ativo"' ?>><i class="fa-regular fa-user"></i>Login</a>
          </li>
        </ul>

       

        <div class="menu-2">

        
          
              <a href="https://www.facebook.com" target="_blank"
                ><i class="fa-brands fa-facebook"></i
              ></a>
           
              <a href="https://www.instagram.com" target="_blank"
                ><i class="fa-brands fa-instagram"></i
              ></a>
           
              <a href="https://www.linkedin.com" target="_blank"
                ><i class="fa-brands fa-linkedin"></i
              ></a>
  
        </div>
      </nav>
    </div>
      
    </header>
