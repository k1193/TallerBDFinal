<?php

include('baseDatos.php');

if(isset($_POST["btnBuscar"])){

    // recibir datos del formulario
    
    $documento=$_POST["NumeroDocumento"];

    //$nombre=$_POST["nombreUsuario"];
   
     //creo objeto tipo base de datos(conexion)

     $operacionesconBaseDatos=new BaseDatos();

     // creo una consulta
     $consulta="SELECT nombre,documento FROM usuarios where documento='$documento'";
     //$consulta="SELECT nombre,correo FROM usuarios where nombre='ivan'";

     


     //llamar a la basedatos y voy  a utilizar su metodo  para leer ( buscar) en la base de dato)
    $resultado=$operacionesconBaseDatos-> consultarEnBaseDatos($consulta);
    echo("<br>");
    print_r($resultado);

}
else{
    echo(" no encontrado");
}

?>