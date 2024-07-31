<?php



if (isset($_POST['tituloSobre'])) {


    require_once('class/sobre.php');

    
    $tituloSobre = $_POST['tituloSobre'];
    $statusSobre = isset($_POST['statusSobre']) ? $_POST['statusSobre'] : 0;

    

    $descricaoSobre = $_POST['descricaoSobre'];
    $descricaoSobre1 = $_POST['descricaoSobre1'];
    $urlSobre = $_POST['urlSobre'];

   
     $arquivo  = $_FILES['fotoSobre1'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/sobre/' . $arquivo['name'])) {

        $fotoSobre1 = 'sobre/' . $arquivo['name'];
    } else {
        throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
    }

    $arquivo  = $_FILES['fotoSobre2'];

 

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }
 
    if (move_uploaded_file($arquivo['tmp_name'], '../img/sobre/' . $arquivo['name'])) {
        $fotoSobre2 = 'sobre/' . $arquivo['name'];

    } else {
        throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
    }


    $arquivo  = $_FILES['fotoSobre3'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/sobre/' . $arquivo['name'])) {
        $fotoSobre3 = 'sobre/' . $arquivo['name'];

    } else {
        throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
    }

    $arquivo  = $_FILES['fotoSobre4'];

    if ($arquivo['error']) {
        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/sobre/' . $arquivo['name'])) {
        $fotoSobre4 = 'sobre/' . $arquivo['name'];

    } else {
        throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
    }

    $sobre = new SobreClass();

    $sobre->fotoSobre1 = $fotoSobre1;
    $sobre->fotoSobre2 = $fotoSobre2;
    $sobre->fotoSobre3 = $fotoSobre3;
    $sobre->fotoSobre4 = $fotoSobre4;
    $sobre->tituloSobre = $tituloSobre;
    $sobre->statusSobre = $statusSobre;
    $sobre->descricaoSobre = $descricaoSobre;
    $sobre->descricaoSobre1 = $descricaoSobre1;
    $sobre->urlSobre = $urlSobre;
    

    $sobre->Inserir();

}

// salvar na pasta e no banco de dados



?>


<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title">Cadastro Sobre</h2>
        </div>

        <form class="form-horizantal" action="index.php?p=sobre&s=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">

                <div class="teste">
                <div class="col-sm-4">
                         <div>
                            <label for="imagem">Imagem:</label>
                             <img src="img/sem-foto.jpg" alt="Imagem" class="img-fluid" id="fotoSobre1">
                             <input type="file" id="inputImagem" name='fotoSobre1' style="display: none;">

                        </div>

                            <div>

                                <label for="imagem">Imagem:</label>
                                <img src="img/sem-foto.jpg" alt="Imagem" class="img-fluid" id="fotoSobre2">
                                <input type="file" id="inputImagemm" name='fotoSobre2' style="display: none;">

                            </div>

                </div>


                    <div class="col-sm-4">

                                    <div>

                                        <label for="imagem">Imagem:</label>
                                        <img src="img/sem-foto.jpg" alt="Imagem" class="img-fluid" id="fotoSobre3">
                                        <input type="file" id="inputImagemmm" name='fotoSobre3' style="display: none;">

                                    </div>

                            <div>

                                    <label for="imagem">Imagem:</label>
                                    <img src="img/sem-foto.jpg" alt="Imagem" class="img-fluid" id="fotoSobre4">
                                    <input type="file" id="inputImagemmmm" name='fotoSobre4' style="display: none;">

                            </div>



                    </div>

                    </div>
                    <div>

                        <label for="titulo">Título Sobre:</label>
                        <input type="titulo" class="form-control" id="tituloSobre" name="tituloSobre" required placeholder=" Titulo Sobre">

                        <label>Ativo:</label>
                        <input type="checkbox" id="statusSobre" name="statusSobre" value="1" checked>

                        <label class="checkbox-label" for="statusSobre">Sim</label>

                    </div>



                    <label for="texto">Texto Sobre 1:</label>
                    <textarea class="form-control" id="descricaoSobre" name="descricaoSobre" required placeholder="Texto Sobre 1"></textarea>

                    <label for="texto">Texto Sobre 2:</label>
                    <textarea class="form-control" id="descricaoSobre1" name="descricaoSobre1" required placeholder="Texto Sobre 2"></textarea>

                    <!-- <label for="link">Link:</label> -->
                    <!-- <input type="link" class="form-control" id="urlSobre" name="urlSobre" placeholder="Link Sobre"> -->

                    <label for="link">Link:</label>
                    <input type="link" class="form-control" id="urlSobre" name="urlSobre" placeholder="Link Sobre">

                </div>

                <div class="buttonSobre">
                    <button type="submit" class="btn btn-primary">Cadrastar Sobre</button>
                </div>


            </div>

        </form>

    </div>
</div>



<script>
    // FORMULARIO DO INSERIR QUE DEIXE A IMG A MOSTRA

    document.getElementById('fotoSobre1').addEventListener('click', function() {
        document.getElementById('inputImagem').click();
    });

    document.getElementById('inputImagem').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoSobre1');
        let arquivo = event.target.files[0];

        if (arquivo) {
            // alert("OK");
            let carregar = new FileReader();

            carregar.onload = function(e) {
                imagemExibida.src = e.target.result;
            }

            carregar.readAsDataURL(arquivo)
        }


    });


    document.getElementById('fotoSobre2').addEventListener('click', function() {
        document.getElementById('inputImagemm').click();

});


    document.getElementById('inputImagemm').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoSobre2');
        let arquivo = event.target.files[0];

if (arquivo) {
    // alert("OK");

    let carregar = new FileReader();

    carregar.onload = function(e) {
        imagemExibida.src = e.target.result;
    }

    carregar.readAsDataURL(arquivo)

}


});


    document.getElementById('fotoSobre3').addEventListener('click', function() {
        document.getElementById('inputImagemmm').click();

});


    document.getElementById('inputImagemmm').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoSobre3');
        let arquivo = event.target.files[0];

if (arquivo) {
    // alert("OK");

    let carregar = new FileReader();

    carregar.onload = function(e) {
        imagemExibida.src = e.target.result;
    }

    carregar.readAsDataURL(arquivo)
}


});

    document.getElementById('fotoSobre4').addEventListener('click', function() {
        document.getElementById('inputImagemmmm').click();

});

    document.getElementById('inputImagemmmm').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoSobre4');
        let arquivo = event.target.files[0];

if (arquivo) {
    // alert("OK");

    let carregar = new FileReader();

    carregar.onload = function(e) {
        imagemExibida.src = e.target.result;
    }

    carregar.readAsDataURL(arquivo)
}


});

</script>