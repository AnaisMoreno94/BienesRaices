<?php 

  //importar conexion a base de datos
  require 'includes/config/database.php';
  $db = conectarDB();

  $id = $_GET['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);
  if($id){
      //consultar 
  $query = "SELECT * FROM propiedades WHERE id= ${id}";
  $resultado = mysqli_query($db, $query);

  //obtener resultado
  $propiedad=mysqli_fetch_assoc($resultado);
  } else {
    
  }

  if(!$propiedad){
    header('location: index');
  }  
  



require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor contenedor-anuncio">
      

      <h1><?php echo $propiedad['titulo']?></h1>
      
      <div class="text-center">
      <img src="imagenes/<?php echo $propiedad['imagen']?>" alt="Anuncio" loading="lazy" class="img-anuncio">
      </div>

      <div class="anuncio">

       


        <div class="contenido-anuncio">

          <ul class="iconos-caracteristicas">

            <li>
              <img src="build/img/icono_wc.svg" alt="icono wc">
              <p><?php echo $propiedad['wc']?></p>
            </li><!-- icono 1-->

            <li>
              <img src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
              <p><?php echo $propiedad['estacionamiento']?></p>
            </li><!--Icono 2-->

            <li>
              <img src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
              <p><?php echo $propiedad['habitaciones']?></p>
            </li><!--Icono 3-->

          </ul><!-- .iconos-caracteristicas-->
          <p class="precio AutoPrecio"> <?php echo $propiedad['precio']?></p>
           <div class="texto-anuncio">

             <p><?php echo $propiedad['descripcion']?></p>
             
           </div>
          
        </div><!-- .contenido-anuncio-->
      </div> <!-- .anuncio-->



    </main>
<?php incluirTemplate('footer');
   mysqli_close($db);
 ?>