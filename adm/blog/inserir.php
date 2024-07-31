<?php


if (isset($_POST['tituloBlog'])) {


    require_once('class/blog.php');

    
    $tituloBlog = $_POST['tituloBlog'];
    $statusBlog = isset($_POST['statusBlog']) ? $_POST['statusBlog'] : 0;

   
    $sobreBlog = $_POST['sobreBlog'];
    $urlBlog = $_POST['urlBlog'];


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
        $fotoBlog = $blog->$fotoBlog;
    }


    $blog = new BlogClass();

    $blog -> fotoBlog = $fotoBlog;
    $blog -> tituloBlog = $tituloBlog;
    $blog -> statusBlog = $statusBlog;
    $blog -> sobreBlog = $sobreBlog;
    $blog -> urlBlog = $urlBlog;

  
    $blog->Inserir();

  

    
}

// salvar na pasta e no banco de dados



?>



<div class="col-md-11">
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"> Cadastro Blog</h2>
        </div>

        <form class="form-horizantal" action="index.php?p=blog&b=inserir" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group row">


                <div class="col-sm-4">
                        <div>
                            <label for="imagem">Imagem:</label>
                            <img src="img/sem-foto.jpg" alt="Imagem" class="img-fluid" id="fotoBlog">
                            <input type="file" id="inputImagem" name ='fotoBlog' style="display: none;">
                        </div>

                    </div>


                    <!-- <label for="imagem">Imagem Blog 1:</label> -->
                    <!-- <img src="img/profile-user.png" alt="Imagem" class="img-fluid" id="imagemExibida">  -->
                    <!-- <input type="file" id="imagem" name="fotoBlog" accept="image/*" required> -->

                    <div>

                        <label for="titulo">Título Blog:</label>
                        <input type="titulo" class="form-control" id="tituloBlog" name="tituloBlog" required placeholder=" Titulo Blog">

                        <label>Ativo:</label>
                            <input type="checkbox" id="statusBlog" name="statusBlog" value="1" checked>

                    </div>



                    <label for="texto">Sobre Blog:</label>
                    <textarea class="form-control" id="sobreBlog" name="sobreBlog" required placeholder=" Sobre Blog"></textarea>

                    <!-- <label for="texto">Texto Sobre Blog:</label> -->
                    <!-- <textarea class="form-control" id="sobreBlog" name="sobreBlog" required placeholder="Texto Sobre Blog"></textarea> -->

                    <label for="link">Link:</label>
                    <input type="link" class="form-control" id="urlBlog" name="urlBlog" required placeholder=" Url Blog">

                </div>

                <div class="buttonComotrab">
                    <button type="submit" class="btn btn-primary">Cadrastar Blog</button>
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