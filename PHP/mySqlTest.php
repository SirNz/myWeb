<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Test Code</title>
</head>

<body>


    <?php
        $firstname = $lastname = $email = "";
        //
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST["firstname"];   
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
        }
    ?>


    <h2>PHP database connection test</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group">
            <label for="firstname">FirstName</label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp"
                        placeholder="First Name" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">LastName</label>
            <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp"
                        placeholder="Last Name" name="lastname">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Email" name="email">
        </div>
        <!-- <button type="submit" class="btn">Sign up</button> -->
        <input type="submit" name="submit" value="Sign Up">
    </form>

    <?php
    echo "<h2>您的输入：</h2>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $email;

    ?>


    <!--
    <?php
    //数据库相关信息
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "phpdb_test";

    //接收表单数据
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    /* mysqli数据库操作
    // 创建连接
    $con = mysqli_connect($servername, $username, $password);

    // 检测连接
    if (!$con){
        die("Connection failed: " . mysqli_connect_errno());
    }
    echo "Connection succed<br>";
    ?>
    -----------------------------------------<br>
    <?php
    // 创建数据库
    $sql = "CREATE DATABASE PHPDB_Test";
    if ($con->query($sql) === TRUE){
        echo "Create database succed";
    } else {
        echo "Error creating database: " . $con->error;
    }
    $con->close();
    */


    // PDO 实例创建数据库
    // try{
    //     $conn = new PDO("mysql:host=$servername", $username, $password);

    //     // 设置 PDO 错误模式为异常
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "CREATE DATABASE phpdb_test";

    //     // 使用 exec() ，因为没有结果返回
    //     $conn->exec($sql);

    //     echo "Create database succed";
    // }
    // catch(PDOException $e){
    //     echo $sql . "<br>" .$e->getMessage();
    // }

    // $conn = null;


    //PDO 创建表
    // try{
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     // 设置 PDO 错误模式，用于抛出异常
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     // 使用 sql 创建表
    //     $sql = "CREATE TABLE myGuests (
    //         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         firstname VARCHAR(30) NOT NULL,
    //         lastname VARCHAR(30) NOT NULL,
    //         email VARCHAR(50),
    //         reg_date TIMESTAMP
    //         )";

    //     // 使用 exec() ,返回受影响的行数（没有结果返回）
    //     $count = $conn->exec($sql);
    //     echo "Create database myGuests succed<br>";
    //     echo "----------------------------------<br>";
    //     echo "$count rows were changed.<br>";
    //     echo "----------------------------------<br>";
    // }
    // catch(PDOException $e){
    //     echo $sql . "<br>" . $e->getMessage();
    //     echo "----------------------------------<br>";
    // }

    // $conn = null;

    try {
        $conn1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('$firstname','$lastname', '$email')";

        $conn1->exec($sql);
        echo "Insert succed<br>";

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn1 = null;
    ?>
    -->

</body>

</html>