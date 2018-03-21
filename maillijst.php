<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>overzicht mail adressen</title>
</head>
<body>
<h1>database</h1>
    <?php

    // CONNECTIE MAKEN
    require('db.php');
    // QUERY (OPDRACHT) SCHRIJVEN

        $query = "SELECT * FROM 25173_email WHERE 1 ORDER BY id ASC; ";

        // QUERY UITVOEREN
        $result = mysqli_query($dbc, $query) or die ('De query is mislukt.');

        // MET EEN WHILE-LOOP ALLE GEGEVENS IN BEELD BRENGEN
        echo "<h2>mail:</h2><table>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><th>" . $row['id'] . "</th>";
            echo "<th>" . $row['naam'] . "</th>";
            echo "<th>" . $row['tussenvoegsel'] . "</th> ";
            echo " <th>" . $row['achternaam'] . "</th>";
            echo " <th>" . $row['email'] . "</th>";
            echo " <th>" . $row['trn_date'] . "</th>";
            echo "<th><a href= delete.php?id=" . $row["id"] . "><button>DELETE</button></a></th>";
            echo "<th><a href= update.php?id=" . $row["id"] . "><button>UPDATE</button></a></th></tr>";
        }
        echo "</table>";
        echo "<h2> klik <a href=index.html>hier </a> om uit te loggen</h2>";
        echo "<p>Klik <a href='inschrijving.html'>hier</a> om een email toe te voegen!</p>";

        // CONNECTIE SLUITEN
    $dbc_closed = mysqli_close($dbc);
    ?>
</body>
</html>