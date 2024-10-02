<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Censura</title>
</head>
<body>
    <h1>Censura Parola nel Paragrafo</h1>
    <form action="process.php" method="POST">
        <div>
            <label for="paragrafo">Inserisci il paragrafo:</label><br>
            <textarea id="paragrafo" name="paragrafo" rows="5" cols="50" required></textarea>
        </div>
        <div>
            <label for="parola">Inserisci la parola da censurare:</label><br>
            <input type="text" id="parola" name="parola" required>
        </div>
        <br>
        <div>
            <input type="submit" value="Invia">
        </div>
    </form>
</body>
</html>
