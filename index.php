<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Censura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Censura Parola nel Paragrafo</h1>
        <form action="process.php" method="POST">
            <div class="form-group">
                <label for="paragrafo">Inserisci il paragrafo:</label>
                <textarea id="paragrafo" name="paragrafo" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="parola">Inserisci la parola da censurare:</label>
                <input type="text" id="parola" name="parola" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
