<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Migracion de Datos</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <h1 class="center">SNIS-VE</h1>
        <h2>Selecione la BD que Desea Migrar</h2>
        <input type="file" name="file">
        <p class="center"><input type="submit" value="Migrar"></p>
    </form>
</body>
</html>