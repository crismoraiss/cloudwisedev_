<?php



if (isset($_POST['tituloServico'])) {
    require_once('class/servico.php');

    $tituloServico = $_POST['tituloServico'];
    $descricao = $_POST['descricao'];

    // Verifica se o campo 'statusServico' está definido no array $_POST
    $statusServico = isset($_POST['statusServico']) ? $_POST['statusServico'] : 0;

    $servico = new ServicoClass();

    $servico->tituloServico = $tituloServico;
    $servico->statusServico = $statusServico;
    $servico->descricao = $descricao;

    $servico->Inserir();

}



// salvar na pasta e no banco de dados

?>


<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Serviço </h2>
        </div>

        <form class="form-horizantal" action="index.php?p=servico&s=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">


                    <div>
                        <label for="tituloServico">Titulo Serviço:</label>
                            <input type="titulo" class="form-control" id="tituloServico" name="tituloServico" required placeholder=" Titulo Serviço">


                        <!-- <label>Ativo:</label>  -->
                            <!-- <input type="checkbox" id="statusServico" name="statusServico"> -->
                        <!-- <label class="checkbox-label" for="statusServico">Sim</label> -->

                        <label>Ativo:</label>
                        <input type="checkbox" id="statusServico" name="statusServico" value="1" checked>

                
                    </div>
 

                    <label for="texto">Texto Serviço:</label>
                    <textarea class="form-control" id="descricao" name="descricao" required placeholder="Texto Serviço"></textarea>

                </div>

              <div class="buttonServico">
                   <button type="submit" class="btn btn-primary">Cadrastar Serviço</button>
    
                </div>
             
                     
               
            </div>

        </form>

    

    </div>
</div>



