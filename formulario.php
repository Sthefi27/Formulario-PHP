<!DOCTYPE html>
 <html>
    <head> 
        <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" type= "text/css" href= "style.css"> 
        <title> FORMULARIO </title>
    </head>

    <body> 
        <div class="form-group"> 
            <form method= "POST" action="formulario.php" id= "formulario"> 
                <h1><em>Formulario de registro</em></h1>
                <label for="nombre"> Nombre <span><em> (requerido)</em></span></label>
                <input type="text" name="nombre" class="form-input" required />

                <label for="apellido"> Apellido <span><em> (requerido)</em></span></label>
                <input type="text" name="apellido" class="form-input" required />

                <label for="email"> Email <span><em> (requerido)</em></span></label>
                <input type="email" name="email" class="form-input" />

                <input class="form-btn" name="submit" type="submit" value="Suscribirse" />

                <?php
                if($_POST){
                    $nombre =$_POST["nombre"];
                    $apellido = $_POST["apellido"];
                    $email =$_POST["email"];
                      //conexion
                      $servername = "localhost";
                      $username = "root";
                      $password = "";
                      $dbname = "practicasql";
                      //Create conexion
                      $conn = new mysqli($servername, $username, $password, $dbname);
                    //check conexion
                    
                    if ($conn->connect_error) {
                        die("Connection failed: " .$conn->connect_error);
                    }
                     $sql = "INSERT INTO ´usuario´ (´nombre´,´apellido´,´email´) VALUES ('$nombre','$apellido','$email')";
                     
                     if ($conn->query($sql)=== TRUE) {
                        echo "El registro se ha creado exitosamente";   
                    } else {
                        echo "Error: " .$sql . "<br>" .$conn->error;
                    }
                        $conn->close();
                }
                ?>

            </form>

        </div>
        <script src="main.js"> </script>
    </body>
 </html>


