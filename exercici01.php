<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Recibido</title>
</head>
<body>
<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])) { 

            echo "<h2>Formulario recibido:</h2>";
            echo "<p><strong>Primer Nombre:</strong> " . htmlspecialchars($_POST['fname']) . "</p>";
            echo "<p><strong>Apellidos:</strong> " . htmlspecialchars($_POST['lname']) . "</p>";
            echo "<p><strong>Correo:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p><strong>Género:</strong> " . htmlspecialchars($_POST['gender']) . "</p>";
            echo "<p><strong>Edad:</strong> " . htmlspecialchars($_POST['age']) . "</p>";
            echo "<p><strong>Ciudad:</strong> " . htmlspecialchars($_POST['city']) . "</p>";
            echo "<p><strong>Aficiones:</strong> " . nl2br(htmlspecialchars($_POST['hobbies'])) . "</p>";
        } else {
            echo "<h2>El camp nom està buit o falta algun camp obligatori. Si us plau, introdueix tots els camps obligats.</h2>";
        }
    } else {
        echo "<h2>Accés no vàlid.</h2>";
    }
    ?>
</div>

</body>
</html>
