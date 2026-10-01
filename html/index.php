<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entorn LAMP amb Docker</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .success { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 400px; }
    </style>
</head>
<body>

    <h1>Hola món!</h1>

    <div class="card">
        <h3>Estat de la connexió a la Base de Dades:</h3>
        <?php
        $host = 'db';
        $user = 'usuari';
        $password = 'contrasenya';
        $db = 'exemple';

        $conn = mysqli_connect($host, $user, $password, $db);

        if (!$conn) {
            echo "<p class='error'>Error de connexió: " . mysqli_connect_error() . "</p>";
        } else {
            echo "<p class='success'>Connexió a la base de dades <u>$db</u> realitzada amb èxit!</p>";
            echo "<p><strong>Host:</strong> $host</p>";
            echo "<p><strong>Usuari:</strong> $user</p>";
            echo "<p><strong>Versió MySQL:</strong> " . mysqli_get_server_info($conn) . "</p>";
            mysqli_close($conn);
        }
        ?>
    </div>

</body>
</html>
