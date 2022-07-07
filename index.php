<?php 
require 'includes/funciones.php';

incluirTemplate('header', $inicio= true);
?>


    <main class="contenedor">
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
      



    </main><!-- seccion de informacion fin-->

    <section class="seccion contenedor">

      <h2>Casas y Depas en Venta</h2>

      <?php 
      $limite = 6;

      include 'includes/templates/anuncio.php' 
      ?>


      <div class="alinear-derechaLg">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
      </div>

    </section><!-- seccion de anuncios fin-->

    <section class="imagen-contacto">
      
      <h2>Encuetra la casa de tus sueños</h2>

      <div class="contenedor contenido-contacto">

      <p>Llena el formulario de contacto y un asesor se comunicará contigo a la brevedad</p>
      <a href="contacto.php" class="boton-amarillo-il">Contáctanos</a>
    </div>
    </section> <!-- .imagen-contacto seccion de contacto-->

    <div class="contenedor seccion seccion-inferior">

      <section class="blog">

        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
          
          <div class="imagen-entrada">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp">
              <source srcset="build/img/blog1.jpg" type="image/jpg">
              <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
            </picture>
          </div><!-- .imagen-entrada-->

          <div class="texto-entrada">

            <a href="entrada.php">

              <h4>Terraza en el techo de tu casa</h4>

              <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span></p>

              <p>
                Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
              </p>

            </a><!-- Link del articulo-->

          </div><!-- .texto-entrada -->

        </article><!-- .entrada-blog primera-->


        <article class="entrada-blog">
          
          <div class="imagen-entrada">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp">
              <source srcset="build/img/blog2.jpg" type="image/jpg">
              <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
            </picture>
          </div><!-- .imagen-entrada-->

          <div class="texto-entrada">

            <a href="entrada.php">

              <h4>Guia Para la decoracion de tu hogar</h4>

              <p>Escrito el: <span>21/10/2021</span> por <span>Admin</span></p>

              <p>
                Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
              </p>

            </a><!-- Link del articulo-->

          </div><!-- .texto-entrada -->

        </article><!-- .entrada-blog segunda-->

       

      </section><!-- .blog-->

      <section class="testimoniales">

        <h3>Testimoniales</h3>

        <div class="testimonial">

          <blockquote>
            El personal se comportó de una excelente forma, muy buena atencion y la casa que me ofrecieron cumplio con todas mis expectativas.
          </blockquote>
          <p>- Anais Moreno</p>

        </div><!-- .testimonial-->


      </section><!-- .testimoniales-->

    </div><!-- Seccion del blog  .seccion-inferior-->
    <?php incluirTemplate('footer'); ?>