<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    require_once($_SERVER["DOCUMENT_ROOT"] . "/php/base/conn.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo $conn->connect_error;
    } else {
        $sql = "DELETE FROM booklist WHERE Id = $id;";
        $conn->query($sql);
    }
    $conn->close();
    header("Location: /");
}

