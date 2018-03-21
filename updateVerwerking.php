<?php


require('db.php');

$naam = $_POST['naam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];

$id=$_REQUEST['id'];
$query = "UPDATE 25173_email SET naam = '$naam', tussenvoegsel= '$tussenvoegsel', achternaam = '$achternaam', email = '$email' WHERE email = '$email'";
$result = mysqli_query($dbc,$query) or die ( "error update");
header("Location: maillijst.php");
$dbc_closed = mysqli_close($dbc);

?>