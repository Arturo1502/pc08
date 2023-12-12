<?php

namespace App\Controllers;

use App\Models\Post;
require_once __DIR__ . '/../Models/Post.php';


class PostController{
    function index()
    {
        session_start();
        $publicacion = new Post();
        $publicaciones = $publicacion->all();
        
        
        $_SESSION['publicaciones'] = $publicaciones;

        header('Location: ../resources/views/post-read.php');;
        exit;
    }



    function store()
    {   
        
        $publicacion = new Post();
        $publicacion->create($_POST['tituloInput'], $_POST['contenidoInput']);

        header('location: ../index.php');
        exit;
    }


    function delete($id){
        $publicacion = new Post();
        $publicacion->delete($id);
        header('location: ../index.php');
        exit;
    }
}

?>
