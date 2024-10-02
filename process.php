<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Censura</title>
</head>
<body>
    <h1>Risultato Censura</h1>

    <?php
    // Controllo se i dati sono stati inviati tramite POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupero i dati inviati dal form
        $paragrafo = $_POST['paragrafo'];
        $parola = $_POST['parola'];

        // Stampa del paragrafo originale e della sua lunghezza
        echo "<h2>Paragrafo originale:</h2>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri</p>";

        // Sostituzione della parola da censurare con asterischi della stessa lunghezza
        $lunghezza_parola = strlen($parola); // Calcolo la lunghezza della parola da censurare
        $asterischi = str_repeat('*', $lunghezza_parola); // Creo una stringa di asterischi della stessa lunghezza
        $paragrafo_censurato = str_ireplace($parola, $asterischi, $paragrafo); // Sostituisco la parola con gli asterischi

        // Stampa del paragrafo censurato e della sua lunghezza
        echo "<h2>Paragrafo censurato:</h2>";
        echo "<p>$paragrafo_censurato</p>";
        echo "<p>Lunghezza del paragrafo dopo la censura: " . strlen($paragrafo_censurato) . " caratteri</p>";
    } else {
        echo "<p>Errore: i dati non sono stati inviati correttamente.</p>";
    }
    ?>
</body>
</html>
