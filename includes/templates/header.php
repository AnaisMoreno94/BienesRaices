<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>

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

        <?php echo $inicio ? "<h1>Venta de Casa y Departamentos Exclusivos de Lujo</h1>" : ''; ?>
      </div><!-- .contenedor . contenido-header-->
     
    </header> <!-- .header-->