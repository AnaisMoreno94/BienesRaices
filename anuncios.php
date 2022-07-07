<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
      <h1>Nuestros Anuncios</h1>
      <?php 
      $limite= 1000;
    
      include 'includes/templates/anuncio.php' 

      ?>



    </main>

    
<?php incluirTemplate('footer'); ?>