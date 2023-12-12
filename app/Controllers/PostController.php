<?php

namespace App\Controllers;

use App\Models\Post;
require_once __DIR__ . '/../Models/Post.php';


class PostController{
    function index()
    {
        
        $publicacion = new Post();
        $publicaciones = $publicacion->all();
        session_start();
        
        $_SESSION['publicaciones'] = $publicaciones;

        header('Location: ../resources/views/post-read.php');;
        return $publicacion;
    }



    function store()
    {   
        
        $publicacion = new Post();
        $publicacion->create($_POST['tituloInput'], $_POST['contenidoInput']);

        header('location: ../index.php');
    }


    function delete($id){
        $publicacion = new Post();
        $publicacion->delete($id);
        header('location: ../index.php');
    }
}

?>
