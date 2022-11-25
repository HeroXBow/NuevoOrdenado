<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            function conectar_DB(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully<br>";
            return $conn;
            }

            $nombre='';
            $edad='';
            $email='';
            $cp='';
            $password='';
            if(empty($_POST['nombre'])){
            echo 'Error: Falta nombre';
            exit ;
            }else{
            $nombre=$_POST['nombre'];
            }
            if(empty($_POST['edad'])){
            echo 'Error: Falta edad';
            exit ;
            }else{
            $edad=$_POST['edad'];
            }

            if(empty($_POST['email'])){
            echo 'Error: Falta email';
            exit ;
            }
            if(empty($_POST['cp'])){
            echo 'Error: Falta cp';
            exit ;
            }
            if(empty($_POST['password'])){
            echo 'Error: Falta password';
            exit ;
            }
            $email=$_POST['email'];
            $cp=$_POST['cp'];
            $password=$_POST['password'];

            //QUE GUARDE EN LA DB
            $conn=conectar_DB();

            $sql = "SELECT * FROM MyGuests WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows >0) {
            echo "NO GUARDAR DATOS<br>";
            } else {

            $sql = "INSERT INTO MyGuests (nombre, edad, email, cp) VALUES ('$nombre', '$edad', '$email', '$cp')";
            if ($conn->query($sql) === TRUE) {
            echo "GUARDAR";
            } else {
            echo "Error creating table: " . $conn->error;
            }
            }
            $conn->close();
        ?>
    </body>
</html>