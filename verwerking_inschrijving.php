<html>
<head>
    <title> inschrijving </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>inschrijving</h2>
<?php
require('db.php');
$naam2 = $_POST['naam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam2 = $_POST['achternaam'];
$email2 = $_POST['email'];
$trn_date = date("Y-m-d");


$query ="SELECT * FROM 25173_email WHERE email = '$email2'";

$result = mysqli_query($dbc,$query) or die("error querying database 1");


$numbersOfRow = mysqli_num_rows($result);
if ($numbersOfRow == 1){
    echo 'helaas, het mailadres ' . $email2 . ' staat al in de database <br>';
}else {

    $query = "INSERT into 25173_email (naam,tussenvoegsel,achternaam,email)
              VALUES ('$naam2', '$tussenvoegsel','$achternaam2', '$email2')";
    $result = mysqli_query($dbc, $query) or die("error querying database");
    mysqli_close($dbc);
    if ($result) {
        echo '<p> inschrijving is gelukt en de volgende gegevens zitten er in <br></p>';
        echo 'naam :'.$naam2 . '<br>';
        echo 'tussenvoegsel:'.$tussenvoegsel . '<br>';
        echo 'achternaam'.$achternaam2 . '<br>';
        echo 'email'.$email2 . '<br>';
        echo 'Datum :'.$trn_date.'<br>';
    } else {
        echo 'sorry er is iets misgegaan, probeer opnieuw.';
    }
}
$dbc_closed = mysqli_close($dbc);

?>    
    <a href="index.html"><input type="button" value="terug"></a>

</body>
</html>