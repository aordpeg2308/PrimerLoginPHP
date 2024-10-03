<?php

$nombreUsuario = $_POST['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice Usuario</title>
    <link rel="stylesheet" href="Styles/247segundo.css">  
</head>
<body>
    <div class="message" id="welcomeMessage">Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?></div>

    <script>
        
        setTimeout(() => {
            const message = document.getElementById('welcomeMessage');
            message.classList.add('fade-out');
        }, 3000); 
    </script>
</body>
</html>

