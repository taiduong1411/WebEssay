<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB_NAME', 'WebEssay');

    function create_connection()
    {
        $conn = new mysqli(HOST, USER, PASS, DB_NAME);
        if ($conn->connect_error)
        {
            die('Can not connect to the server: ' . $conn->connect_error);
        }
        return $conn;
    }
    $conn = create_connection();
?>