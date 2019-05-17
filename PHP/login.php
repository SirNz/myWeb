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
    // include('conn.php');  调用conn文件登录
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $sqlname, $sqlpwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM account 
        WHERE username='$username' AND password='$password'";
        $request = $conn->prepare($sql);

        // 绑定参数
        // $request->bindParam(':username', $username);
        // $request->bindParam(':password', $password);
        
        $request->execute();
        $res = $request->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($res)){
            // echo "<script>alert('登录成功！');</script>";
            header('Location: http://localhost/myweb/index.html');
        }else {
            header('Location: http://localhost/myweb/login.html');
        }
    } catch (Exception $e) {
        die("Error!!".$e->getMessage());
    }


?>