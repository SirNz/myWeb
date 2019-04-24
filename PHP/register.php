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
    try {
        $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $sqlname, $sqlpwd);
        $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO account (username, password)
        VALUES ('$username','$password')";

        $conn1->exec($sql);
        print <<<EOT
        <div>
        Welcome to my personal website!<br>
        Your username is <font color="red"><b>$username</b></font><br>
        Your password is <font color="red"><b>$password</b></font>
        </div>
EOT;

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }





/*
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        Welcome to my personal website!<br>
        Your username is <font color="red"><b><?php echo $username; ?></b></font><br>
        Your password is <font color="red"><b><?php echo $password; ?></b></font>
    </div>
</body>

</html>
*/


?>