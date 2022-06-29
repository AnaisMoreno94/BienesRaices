<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/build/css/app.css" />
  </head>


  <body>
    <header class="header <?php echo $inicio ? 'index' : ''; ?> ">

      <div class="contenedor contenido-header">

        <div class="barra">

          <a href="/">
            <img class="logo_" src="/build/img/logo.svg" alt="logotipo de bienes raices" />
          </a><!-- enlace logotipo-->

          <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="Icono menu de hamburguesa">
          </div>

          <nav class="navegacion">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
            <p><span class="dark-mode-boton">&#9728</span></p>
          </nav>

          
        </div><!-- .barra-->
      </div><!-- .contenedor . contenido-header-->
     
    </header> <!-- .header-->