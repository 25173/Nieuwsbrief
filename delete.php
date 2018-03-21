<?php


require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM 25173_email WHERE id= '$id'";
$result = mysqli_query($dbc,$query) or die ( "error delete");
header("Location: maillijst.php");
$dbc_closed = mysqli_close($dbc);

?>