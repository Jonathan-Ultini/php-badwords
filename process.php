<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Censura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Risultato Censura</h1>

        <?php
        // Controllo se i dati sono stati inviati tramite POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recupero i dati inviati dal form
            $paragrafo = $_POST['paragrafo'];
            $parola = $_POST['parola'];

            // Stampa del paragrafo originale e della sua lunghezza
            echo "<h2>Paragrafo originale:</h2>";
            echo "<div class='alert alert-info'>$paragrafo</div>";
            echo "<p>Lunghezza del paragrafo: <strong>" . strlen($paragrafo) . "</strong> caratteri</p>";

            // Sostituzione della parola da censurare con tre asterischi (***)
            $paragrafo_censurato = str_ireplace($parola, '***', $paragrafo);

            // Stampa del paragrafo censurato e della sua lunghezza
            echo "<h2>Paragrafo censurato:</h2>";
            echo "<div class='alert alert-warning'>$paragrafo_censurato</div>";
            echo "<p>Lunghezza del paragrafo dopo la censura: <strong>" . strlen($paragrafo_censurato) . "</strong> caratteri</p>";
        } else {
            echo "<div class='alert alert-danger'>Errore: i dati non sono stati inviati correttamente.</div>";
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
