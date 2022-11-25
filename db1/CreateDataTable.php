<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";

    /*

    */
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        edad INT(3) NOT NULL,
        email VARCHAR(50),
        cp INT(6),
        contrasenna TEXT,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    //$sql = "SELEC * FROM myDB";
    if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }


    /*

    */
    $conn->close();

?>