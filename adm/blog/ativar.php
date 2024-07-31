<?php

$id = $_GET['id'];

require_once('class/blog.php');
$blog  = new BlogClass();
$blog-> idBlog = $id;
$blog->Ativar();
