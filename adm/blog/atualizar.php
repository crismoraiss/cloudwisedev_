<?php

$id = $_GET['id'];
require_once('class/blog.php');
$blog = new BlogClass($id);


if (isset($_POST['tituloBlog'])) {

    $tituloBlog    = $_POST['tituloBlog'];
    $statusBlog    = isset($_POST['statusBlog']) ? $_POST['statusBlog'] : 0;
    $sobreBlog     = $_POST['sobreBlog'];
    $urlBlog       = $_POST['urlBlog'];


    if(!empty($_FILES['fotoBlog']['name'])){
        $arquivo  = $_FILES['fotoBlog'];
        if ($arquivo['error']) {
            throw new Exception('Error' . $arquivo['error']);
        }

        if (move_uploaded_file($arquivo['tmp_name'], '../img/blog/' . $arquivo['name'])) {
            $fotoBlog = 'blog/' . $arquivo['name'];

        } else {
            throw new Exception('Error: Não foi possivel realizar o Upload da imagem');
        }

    }else{
        $fotoBlog = $blog->fotoBlog;
    }

   
    $blog -> fotoBlog = $fotoBlog;
    $blog -> tituloBlog = $tituloBlog;
    $blog -> statusBlog = $statusBlog;
    $blog -> sobreBlog = $sobreBlog;
    $blog -> urlBlog = $urlBlog;

  
    $blog->Atualizar();

    
}

// salvar na pasta e no banco de dados



?>


<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro Blog</h2>
        </div>

        <form class="form-horizantal" action="index.php?p=blog&b=atualizar&id=<?php echo $blog->idBlog ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">


                <div class="col-sm-4">
                        <div>
                            <label for="imagem">Imagem:</label>
                            <img src="<?php echo '../img/' . $blog-> fotoBlog ?>" alt="Imagem" class="img-fluid" id="fotoBlog">
                            <input type="file" id="inputImagem" name ='fotoBlog' style="display: none;">
                        </div>

                    </div>

                    <div>

                        <label for="titulo">Título Blog:</label>
                        <input type="titulo" class="form-control" id="tituloBlog" name="tituloBlog" required placeholder=" Titulo Blog" value="<?php echo $blog->tituloBlog ?>">

                        <label>Ativo:</label>
                        <input type="checkbox" id="statusBlog" name="statusBlog" value="1" checked>

                        <label class="checkbox-label" for="ativo">Sim</label>

                    </div>



                    <label for="texto">Sobre Blog:</label>
                    <textarea class="form-control" id="sobreBlog" name="sobreBlog" required placeholder=" Sobre Blog"><?php echo $blog->sobreBlog ?></textarea>

                    <label for="link">Link:</label>
                    <input type="link" class="form-control" id="urlBlog" name="urlBlog" required placeholder=" Url Blog" value="<?php echo $blog->urlBlog ?>">

                </div>

                <div class="buttonComotrab">
                    <button type="submit" class="btn btn-primary">Atuaizar Blog</button>
                </div>



            </div>

        </form>

    </div>
</div>


<script>
    // FORMULARIO DO INSERIR QUE DEIXE A IMG A MOSTRA

    document.getElementById('fotoBlog').addEventListener('click', function() {
        document.getElementById('inputImagem').click();
    });

    document.getElementById('inputImagem').addEventListener('change', function(event) {
        let imagemExibida = document.getElementById('fotoBlog');
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