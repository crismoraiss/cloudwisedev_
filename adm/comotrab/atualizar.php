<?php


$id = $_GET['id'];

require_once('class/comotrab.php');
$comotrab = new ComoTrabClass($id);


if (isset($_POST['tituloTrabalho'])) {


    $tituloTrabalho = $_POST['tituloTrabalho'];
    $descricaoTrabalho = $_POST['descricaoTrabalho'];

    // Verifica se o campo 'statusServico' está definido no array $_POST
    $statusTrabalho = isset($_POST['statusTrabalho']) ? $_POST['statusTrabalho'] : 0;

   

    $comotrab->tituloTrabalho = $tituloTrabalho;
    $comotrab->statusTrabalho = $statusTrabalho;
    $comotrab->descricaoTrabalho = $descricaoTrabalho;
   

    $comotrab->Atualizar();

}



// salvar na pasta e no banco de dados

?>


<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro de Como Trabalhamos </h2>
        </div>

        <form class="form-horizantal" action="index.php?p=comotrab&c=atualizar&id=<?php echo $comotrab->idTrabalho ?>" method="POST">
            <div class="card-body">
                <div class="form-group row">


                    <div>
                        <label for="titulo">Título Como Trabalhamos:</label>
                            <input type="tituloTrabalho" class="form-control" id="tituloTrabalho" name="tituloTrabalho" required placeholder=" Titulo Como Trabalhamos" value="<?php echo $comotrab->tituloTrabalho ?>">

                      
                            <label>Ativo:</label>
                            <input type="checkbox" id="stausTrabalho" name="statusTrabalho" value="1" checked>

                        <label class="checkbox-label" for="statusTrabalho">Sim</label>
                    </div>
 

                    <label for="texto">Texto Como Trabalhamos:</label>
                    <textarea class="form-control" id="descricaoTrabalho" name="descricaoTrabalho" required placeholder="Texto Como Trabalhamos"><?php echo $comotrab->descricaoTrabalho ?></textarea>

                </div>

                <div class="buttonComotrab">
                    <button type="submit" class="btn btn-primary">Atualizar Como Trabalho</button>
                </div>
             
                     
               
            </div>

        </form>

    </div>
</div>
