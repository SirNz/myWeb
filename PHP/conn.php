<?php
    // 数据库信息
    $servername = "localhost";
    $username = "root";
    $password = "root";
    
    try {
        $conn = new PDO("mysql:host=$servername;", $username, $password);
        echo "连接成功";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>