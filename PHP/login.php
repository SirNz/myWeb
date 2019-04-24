<?php
    // 数据库信息
    $servername = "localhost";
    $sqlname = "root";
    $sqlpwd = "root";
    $dbname = "key_website";

    // 接收表单数据
    $username = $password = "";
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];   
        $password = $_POST["password"];
    }

    // 连接数据库
    // include('conn.php');
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $sqlname, $sqlpwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM account 
        WHERE username='$username' AND password='password'";
        $sqlresult = "";

        $conn->exec($sql);
        if ($conn1){
            echo "Login Succed!";
        } else{
            echo "username or password Error!";
        }

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

?>