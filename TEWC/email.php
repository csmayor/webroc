
<!doctype html>
<html>
<head>
<title>Bienvenida</title>
<meta charset="utf-8">
</head>
<body>
<p>¡Hola, <?php echo htmlspecialchars($_POST['nombre']); ?> ! </p>
<p>Ahora recibiras la informacion sobre todas novedades en la dirección : <?php echo $_POST["email"]; ?>.</p>
</body>
</html>