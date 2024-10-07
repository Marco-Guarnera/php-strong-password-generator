<?php

// Fase di preparazione

// Variabili
// Strutture dati
// Funzioni

// Fase di raccolta dati
// Fase di elaborazione

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="PHP Password Generator">
    <!-- Title -->
    <title>PHP Password Generator</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Main Header -->
    <header id="main-header">
        <h1 class="text-center">PHP Password Generator</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <!-- Form -->
                    <form action="index.php" method="get">
                        <div class="mb-3">
                            <label for="password-length" class="form-label">Password length:</label>
                            <input type="number" id="password-length" class="form-control" name="password-length" placeholder="Password length">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php

// Fase di produzione

?>