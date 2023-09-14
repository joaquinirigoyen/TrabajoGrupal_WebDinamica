<?php
    include_once("../../Control/control3/SaludoPersonalizado.php");

    $obj = new SaludoPersonalizado();

    if ($_GET){
        $nombre = $_GET['nombreForm'];
        $apellido = $_GET['apellidoForm'];
        $edad = $_GET['edadForm'];
        $direccion = $_GET['direccionForm'];

        $respuesta = $obj->crearSaludo($nombre, $apellido, $edad, $direccion);

    } else {
        $respuesta = "No se recibieron datos";
    }

    $tituloPagina = "Ejericio 3 del TP1";
    $tp = "botonTP1";
    $ejercicio = "botonEjer3";
    
    include_once('../estructura/encabezado.php');
?>
     
            <div class="contenedorEnunciado">
                Resultado saludo
            </div>
            <div class="contenedorCentrado">

                <?php
                    echo $respuesta;
                ?>
                
                <div id="contieneLinkVolver">
                    <a href="ejercicio3.php" id="linkVolver"><br> Volver <a>
                </div>
            </div>
        
<?php
    include_once('../estructura/pie.php');
?>