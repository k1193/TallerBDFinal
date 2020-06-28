<?php

include('baseDatos.php');
//Recibo los datos del formulario

if(isset($_POST["btnEnviar"])){
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["apellidoUsuario"];
    $correo=$_POST["emailUsuario"];
    $documento=$_POST["documentoUsuario"];
    $password=$_POST["passUsuario"];


    //creo objeto tipo base de datos(conexion)
    $operacionesconBaseDatos= new BaseDatos();
    

    //creo la consulta
    $consulta="INSERT INTO usuarios( nombre, apellido,correo,documento, password) VALUES ('$nombre','$apellido','$correo','$documento','$password')";


    //llamar a la basedatos y voy  a utilizar su metodo  para alterar ( insertar o escribir dentro) de la base de datoa
    $resultado=$operacionesconBaseDatos-> alterarBaseDatos($consulta);
    
    // validemos el resultado

    if($resultado){
        echo("<br>");
        echo("transaccion exitosa, datos agregados");
    }
    else{
        echo("<br>");
        die("error en la transaccion");

    }

}else{
    echo("no se presiono");
}


 
 


?>