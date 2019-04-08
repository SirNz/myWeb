<?php
// define variables and set to empty values
$username = $password = $email = $gender = $comment = $website = "";
$userErr = $pwdErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])){
        $userErr = "Username is required!";
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

//    $email = test_input($_POST["email"]);
//    $website = test_input($_POST["website"]);
//    $comment = test_input($_POST["comment"]);
//    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


$con = mysqli_connect("localhost:3306","root","root");
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

mysqli_close($con)



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