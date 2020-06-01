<?php

function getBooklist()
{
    // echo $_SERVER["DOCUMENT_ROOT"];
    require_once($_SERVER["DOCUMENT_ROOT"] . "/php/base/conn.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM booklist";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
    header('Location: index.php'); // 導回登入頁面
}
?>