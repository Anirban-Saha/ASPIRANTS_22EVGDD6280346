<?php

    // // Declare DB Variables
    // $servername  = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "blog";

    // // Create connection
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $GLOBALS['conn'] = $conn;

    // } catch(PDOException $e) {
    //     $GLOBALS['e'] = $e;
    //     echo "Connection failed: " . $e->getMessage();
    // }


    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'ubgddv3u4txrf');
    define('DB_PASSWORD', 'mh4zmjgezwu4');
    define('DB_NAME', 'db2dapnpsqw0tn');

    /* Attempt to connect to MySQL database */
    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $GLOBALS['conn'] = $pdo;

    } catch(PDOException $e){
        $GLOBALS['e'] = $e;
        die("ERROR: Could not connect. " . $e->getMessage());
    }

