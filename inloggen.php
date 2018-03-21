<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>email</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require("db.php");
session_start();
if (isset($_POST['username'])) {
    $username2 = $_POST['username'];
    $password2 = $_POST['password'];
    $query = "SELECT * FROM admin WHERE gebruiksnaam ='$username2' and wachtwoord ='$password2'";
    $result = mysqli_query($dbc, $query) or die('error connection query');
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION["username"] = $username2;
        header("Location: ../index.php");
    }
    }else{


?>

<form action="" name="login" method="post">
    <h1>inloggen</h1>
    <br>
    <div>
        <label for="naam">username:</label>
        <input type="text" id="naam" name="username" placeholder="name" required/>
        <label for="password">paswoord</label>
        <input type="password" id="password" name="password" placeholder="password" required/>
        <input type="submit" value="inloggen" name="submit">
    </div>
</form>

<?php

}
?>
</body>
</html>