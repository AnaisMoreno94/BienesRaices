<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>
    <main class="contenedor">

      <h1>Conoce Sobre Nosotros</h1>

      <div class="nosotros-display">

        <div class="img-nosotros">

        <picture>

          <source srcset="build/img/nosotros.webp" type="image/webp">

          <source srcset="build/img/nosotros.jpg" type="image/jpg">

          <img src="build/img/nosotros.jpg" alt="Imagen Nosotros">
        </picture>
        </div> <!-- .img-nosotros-->

        <div class="contenido-nosotros">

        <h2>25 Años de Experiencia</h2>
        
        <div class="texto-nosotros">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam dignissimos quia distinctio beatae, est, ipsum tenetur, sint quaerat architecto quidem totam eligendi ab inventore libero nam nobis neque cum!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam dignissimos quia distinctio beatae, est, ipsum tenetur, sint quaerat architecto quidem totam eligendi ab inventore libero nam nobis neque cum!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam dignissimos quia distinctio beatae, est, ipsum tenetur, sint quaerat architecto quidem totam eligendi ab inventore libero nam nobis neque cum!</p>

        </div>

        </div><!-- .contenido-nosotros-->

    </div><!-- .nosotros-display-->

    </main>

    <section class="contenedor">
      <h1>Más Sobre Nosotros</h1>

      <div class="iconos-nosotros">

        <div class="icono">
          <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
          <h3>Seguridad</h3>
          <p>Pio consequatur quod recusandae libero minus commodi sed rerum. Aspernatur totam velit odio ipsam accusantium, dolorum quam corrupti suscipit facilis! Nihil, vel!</p>
        </div><!-- .icono 1-->

        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
          <h3>Precio</h3>
          <p>Pio consequatur quod recusandae libero minus commodi sed rerum. Aspernatur totam velit odio ipsam accusantium, dolorum quam corrupti suscipit facilis! Nihil, vel!</p>
        </div><!-- .icono 2-->

        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono A Tiempo" loading="lazy">
          <h3>Tiempo</h3>
          <p>Pio consequatur quod recusandae libero minus commodi sed rerum. Aspernatur totam velit odio ipsam accusantium, dolorum quam corrupti suscipit facilis! Nihil, vel!</p>
        </div><!-- .icono 3-->


      </div><!-- .iconos-nosotros-->
      



    </section><!-- seccion de informacion fin-->

<?php incluirTemplate('footer')?>