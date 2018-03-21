<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>verstuurd</title>
</head>
<body>
<?php
require('db.php');
$query = "SELECT email FROM 25173_email WHERE 1";
$result = mysqli_query($dbc,$query) or die('error database');
while ($row = mysqli_fetch_array($result)) {
    $to = $row['email'];
    $subject = $_POST['onderwerp'];
    $message = $_POST['bericht'];
    $header = 'From: 25173@ma-web.nl';
    mail($to, $subject, $message, $header);
}
echo '<h1> de mail is verstuurd </h1>';
echo ">hier </a> om uit te loggen</h2>";
$dbc_closed = mysqli_close($dbc);

?>

</body>
