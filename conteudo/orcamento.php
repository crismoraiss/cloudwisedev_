 <section data-aos="zoom-in" data-aos-duration="1000" class="cnt-orcamento">



        <div class="orcamento site">
          <div>
            <h2>Transforme seu <span>Sonho</span> em <span>Realidade</span>.</h2>
            <h2>Faça um <span>Orçamento</span> e veja como podemos levar seu negócio a altura.</h2>
            <a href="contato.php">Entre em contato <i class="fa-solid fa-comments-dollar"></i></a>
          </div>
  
           <details class="sanfona">
            <summary>Dúvidas frequentes</summary>

            <?php foreach($listarfa as $linha) : ?>

            <button class="accordion"><?php echo $linha['perguntaFaq']?></button>
            <div class="panel">
              <p><?php echo $linha['respostaFaq']?></p>
            </div>

            <?php endforeach; ?>

           <!-- <details>
              <summary>A Cloud Wise trabalha apenas com empresas grandes?</summary>
              <p>Não, trabalhamos com empresas de todos os portes e segmentos, desde pequenos empreendedores até grandes corporações.</p>
            </details>
            <details>
              <summary>Como posso solicitar um orçamento para o meu projeto?</summary>
              <p>Você pode entrar em contato conosco através do formulário de contato em nosso site, ou por e-mail/telefone. Nossa equipe estará feliz em discutir suas necessidades e fornecer um orçamento personalizado para o seu projeto.</p>
            </details>
            <details>
              <summary>Quanto tempo leva para desenvolver um site?</summary>
              <p>O tempo de desenvolvimento varia de acordo com a complexidade do projeto, mas trabalhamos eficientemente para entregar resultados no menor prazo possível.</p>
            </details>
            <details>
              <summary>Vocês oferecem suporte contínuo após o lançamento do site?</summary>
              <p>Sim, oferecemos suporte contínuo para garantir o funcionamento adequado do seu site e ajudá-lo com quaisquer atualizações ou melhorias necessárias.</p>
            </details>
            <details>
              <summary>Vocês oferecem serviços de criação de conteúdo?</summary>
              <p>Sim, podemos auxiliar na criação de conteúdo relevante e otimizado para o seu site, ajudando-o a se destacar nos mecanismos de busca.</p>
            </details> -->
          </details> 

        </div>

   

      </section>