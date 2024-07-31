<?php

$id = $_GET['id'];

require_once('class/servico.php');
$servico  = new ServicoClass($id);


if (isset($_POST['tituloServico'])) {
    
    $tituloServico = $_POST['tituloServico'];
    $statusServico  = isset($_POST['statusServico']) ?$_POST['statusServico'] : 0;
    $descricao = $_POST['descricao'];

    


    $servico->tituloServico = $tituloServico;
    $servico->statusServico = $statusServico;
    $servico->descricao = $descricao;
   

    $servico->Atualizar();
  
}

// salvar na pasta e no banco de dados

?>


<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Serviço </h2>
        </div>

        <form class="form-horizantal" action="index.php?p=servico&s=atualizar&id=<?php echo $servico->idServico ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">


                    <div>
                        <label for="tituloServico">Titulo Serviço:</label>
                            <input type="titulo" class="form-control" id="tituloServico" name="tituloServico" required placeholder=" Titulo Serviço" value="<?php echo $servico->tituloServico ?>">

                            <div>
                            <label for="statusServico" class="col-sm-2 col-form-label">Status do Serviço:</label>
                            <div class="col-sm-2 checkbox-area">
                                <input class="checkbox-servico" type="checkbox" value="1" name="statusServico" id="statusServico">
                                <span class="checkbox-novo"></span>
                            </div>
                        </div>
                
                    </div>
 

                    <label for="texto">Texto Serviço:</label>
                    <textarea class="form-control" id="descricao" name="descricao" required placeholder="Texto Serviço"> <?php echo $servico->descricao ?> </textarea>

                   
                </div>

                <div class="buttonServico">
                   <button type="submit" class="btn btn-primary">Atualizar Serviço</button>
    
                </div>
             
                     
               
            </div>

        </form>

    </div>
</div>
