<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table {
                border:1px solid black;
            }

            th, td {
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
        require('./conectarDB.php');
        ?>

        <?php
        $conn=conectar_DB();
        $sql = "SELECT * FROM MyGuests";
        $result = $conn->query($sql);

        echo '<hr>';
        
        echo '<table>';
            echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nombre</th>';
                echo '<th>Edad</th>';
                echo '<th>Email</th>';
                echo '<th>CP</th>';
                echo '<th>Password</th>';
                echo '<th>Reg_Date</th>';

            foreach ($result as $key => $value) {
                echo '<tr>';
                    echo '<td>' . $value['id'] .'</td>';
                    echo '<td>' . $value['nombre'] .'</td>';
                    echo '<td>' . $value['edad'] .'</td>';
                    echo '<td>' . $value['email'] .'</td>';
                    echo '<td>' . $value['cp'] .'</td>';
                    echo '<td>' . $value['contrasenna'] .'</td>';
                    echo '<td>' . $value['reg_date'] .'</td>';
                echo '</tr>';
                }

        echo '<br>';
        // var_dump($value);
        // echo '<br>';
        // echo '<br>';
        $conn->close();
        ?>
    </body>
</html>