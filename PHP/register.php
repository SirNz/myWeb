<?php
// define variables and set to empty values
$username = $password = "";
$nameErr = $pwdErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])){
        $nameErr = "Username is required!";
    }
    else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])){
        $pwdErr = "Password is required!";
    }
    else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data) {
   $data = trim($data);  //去掉字符序列左边和右边的空格（中间的不管）
   $data = stripslashes($data);  //删除反斜杠
   $data = htmlspecialchars($data);  //把一些预定义的字符转换成HTML实体
   return $data;
}


/*
*连接mySQL数据库
*/
$con = mysqli_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysqli_select_db($con, "key_website");

$sql="INSERT INTO account (username, password)
VALUES
('$_POST[username]','$_POST[password]')";

if (!mysqli_query($sql,$con))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";

// $con->close(); 面向对象
mysqli_close($con) // 面向过程

?>

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