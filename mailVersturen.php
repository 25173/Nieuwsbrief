<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>overzicht mail adressen</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>mailen</h1>

        <form action="mail.php" method="post">

            <label for="onderwerp">onderwerp</label>
            <input type="text" id="onderwerp" name="onderwerp" required placeholder="onderwerp">
            <br>
            <label for="bericht">bericht</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="verstuur" name="submit">
        </form>
        <a href="index.html"><input type="button" value="Uitloggen"></a>

</body>
</html>