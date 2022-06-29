<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor contenedor-anuncio">

      <h1>Casa con acabados de lujo y alberca </h1>

      <div class="anuncio">
        <picture>
          <source srcset="build/img/destacada.webp" type="image/webp">

          <source srcset="build/img/destacada.jpg" type="image/jpeg">

          <img src="build/img/destacada.jpg" alt="Anuncio" loading="lazy">
        </picture>

        <div class="contenido-anuncio">

          <ul class="iconos-caracteristicas">

            <li>
              <img src="build/img/icono_wc.svg" alt="icono wc">
              <p>3</p>
            </li><!-- icono 1-->

            <li>
              <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
              <p>2</p>
            </li><!--Icono 2-->

            <li>
              <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
              <p>4</p>
            </li><!--Icono 3-->

          </ul><!-- .iconos-caracteristicas-->
          <p class="precio"> $ 3.000.000</p>
           <div class="texto-anuncio">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sed possimus est tempore nemo molestiae! Fuga facere perferendis, voluptatum repellendus laborum sunt quaerat provident impedit? Rerum maiores est dicta quae!</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quis! Provident id soluta ipsum est eius, officia libero odit animi quae deserunt fugit, perspiciatis necessitatibus dignissimos voluptas tempore, illum ullam.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolorum ullam omnis unde architecto numquam vitae molestias voluptatum, provident earum. Exercitationem laborum ea, sapiente ipsa libero id magni laboriosam blanditiis.</p>
           </div>
          
        </div><!-- .contenido-anuncio-->
      </div> <!-- .anuncio-->



    </main>
<?php incluirTemplate('footer'); ?>