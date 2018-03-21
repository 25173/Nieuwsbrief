<html>
<head>
    <title> uitschrijving </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>uitschrijving</h2>
<?php
require('db.php');
$naam2 = $_POST['naam'];;
$email2 = $_POST['e_mail'];

$query ="SELECT * FROM 25173_email WHERE email = '$email2' AND  naam = '$naam2'";

$result = mysqli_query($dbc,$query) or die("error querying database");

$numbersOfRow = mysqli_num_rows($result);
if ($numbersOfRow == 0){
    echo 'helaas, het mailadres ' . $email2 . ' in combinatie met '. strtoupper($naam2).' staat niet in de database';
    echo '<br><a href="afmelden.html">klik hier om opniew te proberen</a><br>';
}else {
    echo 'hoera, je mailadres' . $email2 . ' is gevonden in de database <br>';

    $query = "DELETE FROM 25173_email WHERE email = '$email2' AND naam = '$naam2' ";

    $result = mysqli_query($dbc, $query) or die("error querying database");

    mysqli_close($dbc);

    echo 'het mailadres ' . $email2 . ' is verwijdert van de database <br>';
}
$dbc_closed = mysqli_close($dbc);

?>

<a href="index.html"><input type="button" value="probeer opnieuw"></a>

</body>
</html>