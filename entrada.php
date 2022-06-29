<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>
    <main class="contenedor contenedor-entrada">
      <h1>Guia para la decoracion de tu hogar</h1>

      <div class="contenido-entrada">
        <picture>
          <source srcset="build/img/destacada2.webp" type="image/webp">
          <source srcset="build/img/destacada2.jog" type="image/jpg">
          <img src="build/img/destacada2.jpg" alt="Imagen entrada Blog">
        </picture>

        <div class="texto-entrada">
          <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>

          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit culpa fugit corrupti blanditiis consectetur, earum, asperiores quidem voluptates ea ipsum sunt natus possimus repudiandae, sed id totam aliquid quia modi!</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis odit officiis similique sunt. Tempore at veniam voluptatibus, mollitia atque distinctio itaque pariatur omnis eligendi? Nostrum iure aut aliquam esse eaque!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet perferendis, sunt, ab dolorem porro eius, quo sequi magni pariatur ratione ducimus quam debitis ipsam facere velit voluptates! A, vitae iste!</p>
        </div>
      </div>
    </main>
<?php incluirTemplate('footer'); ?>