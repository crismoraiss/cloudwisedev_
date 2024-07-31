<?php
    require_once('class/dash.php');
    $qtdDash        = new DashClass();
    $qtdServico     = $qtdDash->QtdServico();
    $qtdBlog        = $qtdDash->QtdBlog();
    $qtdComoTrab    = $qtdDash->QtdComoTrab();
    $qtdSobre       = $qtdDash->QtdSobre();
    $qtdContato     = $qtdDash->QtdContato();
?>

<div class="col-8 col-dash">
    <div class="row">




    <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">Serviços</h5>
    <h5 class="card-title"> <?php echo $qtdServico['idServico']; ?></h5>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">Blogs</h5>
    <h5 class="card-title"><?php echo $qtdBlog['idBlog']; ?></h5>
  </div>
</div>



<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">Como Trabalhamos</h5>
    <h5 class="card-title"><?php echo $qtdComoTrab['idTrabalho']; ?></h5>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">Sobre</h5>
    <h5 class="card-title"><?php echo $qtdSobre['idSobre']; ?></h5>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">E-mail</h5>
    <h5 class="card-title"><?php echo $qtdContato['idContato']; ?></h5>
  </div>
</div>






      <!--  <div class="col-3">
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Serviços</h5>
                    <h6>
                        <?php echo $qtdServico['idServico']; ?>
                    </h6>
                </div>
            </div>
         </div> -->


         <!-- <div class="col-3"> 
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Blogs</h5>
                    <h6><?php echo $qtdBlog['idBlog']; ?></h6>
                </div>
            </div>
         </div>  -->

         <!--<div class="col-3"> 
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Como Trabalhamos</h5>
                    <h6><?php echo $qtdComoTrab['idTrabalho']; ?></h6>
                </div>
            </div>
         </div> 

         <div class="col-3"> 
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Sobre</h5>
                    <h6><?php echo $qtdSobre['idSobre']; ?></h6>
                </div>
            </div>
         </div> 

         <div class="col-3"> 
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">E-mail</h5>
                    <h6><?php echo $qtdContato['idContato']; ?></h6>
                </div>
            </div>
        </div> -->

    </div>
</div>