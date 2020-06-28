<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/style.css">
    <style>
        .container{
            background-color: ;
            color:black;
        }
        .form-group input:focus{
            background: #5DE2C5;
            color:black;       
        }
        .color{

            background-image: url(https://i.pinimg.com/564x/49/c2/1a/49c21a40ae8d7b1c3c194c8c83eb3b3a.jpg);     
        }

        .image {
        width:300px;
        height:250px;
        border-radius:150px;    
        }

        .form-group{
            color:white;
        }

        
    </style>
    

</head>
<body class="color">
    
    

    <header class="text-center" >
    <img src="fonts/ima.png" class="image">
    <h1 class="text-center mt-5  text-white" > Registro de usuarios </h1>
    </header>
        <main>
        
        <div class="container" class="input-icons">

            <div class="row justify-content-center" >
                <div class="col-4">

                    <form action="agregarDatos.php" method="POST">
                        <div class="form-group">
                            <label for="nombreUsuario">Nombre</label>
                            
                            <input type="text" class="form-control  " id="nombreUsuario" name="nombreUsuario">
                            
                        </div>
                        <div class="form-group ">
                            <label for="apellidoUsuario">Apellidos</label>
                            <input type="text" class="form-control " class="input-field"   id="apellidoUsuario" name="apellidoUsuario">
                            
                        </div>

                    
                        <div class="form-group">
                     
                            <label for="emailUsuario">Email</label> 
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>  
                            <input type="email" class="form-control " id="emailUsuario" name="emailUsuario" placeHolder="ingrese el correo ">
                            
                        </div>

                        <div class="form-group">
                            <label for="documentoUsuario">Documento</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">곰</div>
                            </div>
                            <input type="number" class="form-control  " id="documentoUsuario" name="documentoUsuario"placeHolder="ingrese su Documento">
                        </div>

                

                        <div class="form-group  has-feedback">
                            <label for="passUsuario">Contraseña</label>
                            <input type="password" class="form-control " id="passUsuario" name="passUsuario"placeHolder="ingrese la contraseña">
                            <span class = "fa fa-map-marker form-control-feedback" aria-hidden = "true"> </span>
                        </div>
                        
                        <button type="submit" class="btn btn-success  btn-block"  id="btnEnviar" name="btnEnviar">Enviar</button>
   
                    </form>
                    <br>
                    <form action="consultarDatos.php" method="POST" class="mt-5-mb-5"> 
                        
                        <div class="form-group" >
                            <label for="NumeroDocumento"> Buscar por Identificación:</label>
                            <input type="number" class="form-control" id="NumeroDocumento" name="NumeroDocumento"placeHolder="ingrese su Documento">           

                        </div>
                        <button type="submit" class="btn btn-primary  btn-block"  id="btnBuscar" name="btnBuscar">Buscar</button>
                    </form>                  
                    <br>
                    <form action="EliminarDatos.php" method="POST" class="mt-5-mb-5">
                        <div class="form-group">
                            <label for="documentoEliminar"> Eliminar por Documento:</label>
                            <input type="number" class="form-control" id="documentoEliminar" name="documentoEliminar"placeHolder="ingrese su Documento">
                        </div>
                        
                        <button type="submit" class="btn btn-danger  btn-block"  id="btnEliminar" name="btnEliminar">Eliminar</button> 
                    </form>     
                </div>




                    
                         
                   
                                        
            </div>
           
        </div>
        </main>
            
        
    
        
        <footer class="row justify-content-center  text-white">
           && creado by ksandra@@

    
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>