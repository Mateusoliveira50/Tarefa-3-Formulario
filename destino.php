<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="corpo">
    <div class="box">
    <?php if (isset($_POST['usuario'])) : ?>
        <h2> Bem Vindo, <?= $_POST['usuario'] ?></h2>
        <?php endif; ?>
    </div>
</body>
</html>
