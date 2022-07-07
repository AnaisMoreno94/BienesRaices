<?php 
    // Importar la conexión
    require '../includes/config/database.php';
    $db = conectarDB();

    // Escribir el Query
    $query = "SELECT * FROM propiedades";

    // Consultar la BD 
    $resultadoConsulta = mysqli_query($db, $query);

    // Muestra mensaje condicional al agregar o editar propiedades
    $resultado = $_GET['resultado'] ?? null;


    //Verificar tipo de request para envio de query de eliminacion 
    if($_SERVER['REQUEST_METHOD'] = 'POST'){
      $id = $_POST['id'];
      $id = filter_var($id , FILTER_VALIDATE_INT);

      if($id){

        //Seleccionar el Archivo de la imagen
        $query= "SELECT imagen FROM propiedades WHERE id= ${id}";
        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        //Eliminar el archivo de la imagen
        unlink('../imagenes/'. $propiedad['imagen']);

        //Elimina la propiedad
        $query= "DELETE FROM propiedades WHERE id = ${id}";
        $resultado= mysqli_query($db, $query);

        if($resultado) {
          header('location: /admin?resultado=3');
        }
      }
    }
    

    // Incluye un template

    require '../includes/funciones.php';
    incluirTemplate('header-admin');

?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        
        <?php if( intval( $resultado ) === 1): ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php elseif( intval( $resultado ) === 2 ): ?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p>
        <?php elseif( intval( $resultado ) === 3 ): ?>
            <p class="alerta exito">Anuncio Eliminado Correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde-il">Nueva Propiedad</a>


        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los Resultados -->
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" class="imagen-tabla"> </td>
                    <td> <p class="AutoPrecio"><?php echo $propiedad['precio']; ?></p></td>
                    <td>
                      <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'];?>" >
                        <button type="button" class="btn btn-secondary btn-editar">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                          </svg>
                        </button>
                      </a>

                      <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $propiedad['id']?>">

                        <button class="btn btn-secondary btn-borrar">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                          </svg>
                        </button>
                      </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>


<?php 

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer-admin');
?>