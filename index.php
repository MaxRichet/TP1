<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'impôt</title>
</head>
<body>
    <h1>Calcul de l'impôt</h1>
    <form action="resultatImpot.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="revenu">Revenu :</label>
        <input type="number" id="revenu" name="revenu" required><br><br>

        <input type="submit" value="OK">
    </form>
</body>
</html>