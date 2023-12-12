


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Articulo</title>
    <link rel="stylesheet" href="/styles/style.css">

</head>

<body>
    <div class="container">
        <div class="titulo">
            <h1>Agregar Nuevo Artículo</h1>
        </div>
        <div class="card">
            <form class="nuevo" action="/index.php?action=store&controller=PostController" method="post">
                <div class="ingresar">
                    

                    <label for="tituloInput">Título:</label>
                    <input class="ingTituto" type="text" name="tituloInput" id="tituloInput">
                </div>
                <div class="ingresar">
                    <label for="contenidoInput">Contenido:</label>
                    <textarea id="contenidoInput" name="contenidoInput"></textarea>
                </div>
                <button class="btn" type="submit">Guardar Articulo</button>
            </form>
        </div>

    </div>
</body>

</html>