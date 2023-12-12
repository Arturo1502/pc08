<?php
session_start();
if (isset($_SESSION['publicaciones'])) {
    $envios = $_SESSION['publicaciones'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- css -->
    <link rel="stylesheet" href="/styles/styleRead.css">


</head>
<body>
    <div class="container">
    <h1>Listado de Articulos</h1>
    <div class="allPost">
        <?php foreach ($envios as $envio) :?>
        <div class="posteo">
            <h2><?php echo $envio['titulo'];?></h2>
            <p><?php echo $envio['contenido'];?></p>
            <a href="/index.php?action=delete&controller=PostController&id=<?php echo $envio['id']; ?>">Eliminar</a>
        </div>
        <?php endforeach?>
    </div >
        <a class="back" href="./post-create.php">Nuevo Articulo</a>
    </div>

    </div>
</body>
</html>