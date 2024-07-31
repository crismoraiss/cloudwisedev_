<?php



if (isset($_POST['tituloTrabalho'])) {
    require_once('class/comotrab.php');

    $tituloTrabalho = $_POST['tituloTrabalho'];
    $descricaoTrabalho = $_POST['descricaoTrabalho'];

    // Verifica se o campo 'statusServico' está definido no array $_POST
    $statusTrabalho = isset($_POST['statusTrabalho']) ? $_POST['statusTrabalho'] : 0;

    $comotrab = new ComoTrabClass();

    $comotrab->tituloTrabalho = $tituloTrabalho;
    $comotrab->statusTrabalho = $statusTrabalho;
    $comotrab->descricaoTrabalho = $descricaoTrabalho;
   

    $comotrab->Inserir();

}




// salvar na pasta e no banco de dados

?>


<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Como Trabalhamos </h2>
        </div>

        <form class="form-horizantal" action="index.php?p=comotrab&c=inserir" method="POST">
            <div class="card-body">
                <div class="form-group row">


                    <div>
                        <label for="titulo">Título Como Trabalhamos:</label>
                            <input type="tituloTrabalho" class="form-control" id="tituloTrabalho" name="tituloTrabalho" required placeholder=" Titulo Como Trabalhamos">

                      
                            <label>Ativo:</label>
                            <input type="checkbox" id="stausTrabalho" name="statusTrabalho" value="1" checked>

                        <label class="checkbox-label" for="statusTrabalho">Sim</label>
                    </div>
 

                    <label for="texto">Texto Como Trabalhamos:</label>
                    <textarea class="form-control" id="descricaoTrabalho" name="descricaoTrabalho" required placeholder="Texto Como Trabalhamos"></textarea>

                </div>

                <div class="buttonComotrab">
                    <button type="submit" class="btn btn-primary">Cadrastar Como Trabalhamos</button>
                </div>
             
                     
               
            </div>

        </form>

    </div>
</div>
