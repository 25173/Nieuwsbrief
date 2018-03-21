<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>update</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php


require('db.php');
$id=$_GET['id'];
$query = "select * FROM 25173_email WHERE id= '$id'";
$result = mysqli_query($dbc,$query) or die ( "error delete");
$row = mysqli_fetch_array($result);
$dbc_closed = mysqli_close($dbc);
?>

<form action="updateVerwerking.php" name="form" method="post">

    <div>
        <label for="naam">wat is je naam</label>
        <input type="text" id="naam" name="naam" placeholder="Naam" value="<?php echo $row['naam'] ?>" required/><br>
        <label for="tussenvoegsel">wat is je tusenvoegsel</label>
        <input type="text" id="tussenvoegsel" name="tussenvoegsel" placeholder="tussenvoegsel" value="<?php echo $row['tussenvoegsel']?>"><br>
        <label for="achternaam">wat is je achternaam</label>
        <input type="text" id="achternaam" name="achternaam" placeholder="Achternaam" value="<?php echo $row['achternaam']?>" required/><br>
        <label for="email">wat is je E-mail</label>
        <input type="text" id="email" name="email" value="<?php echo $row['email']?>" placeholder="E-mail" required/><br>
        <input type="submit" value="update" name="submit" >
    </div>
</form>
</body>
</html>