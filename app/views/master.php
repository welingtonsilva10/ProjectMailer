<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/logo.svg" type="image/x-icon">
    <title>Saas <?= $this->e($title)?></title>
    <style>

    </style>
</head>
<body>
    <header>
        <div class="imagePageBox">
            <img class="imagePage" src="" alt="Sem imagem">
        </div>
        <nav class="navigationMenu">
            <a class="linkPage ini" href="/">Inicio</a>
            <a class="linkPage con" href="/contact">Contato</a>
            <a class="linkPage pro" href="/product">Produto</a>
            <a class="linkPage log" href="/login">Conectar</a>
            <a class="linkPage reg" href="/register">Cadastrar</a>
        </nav>
    </header>

    <?=$this->section('content')?>

    <footer>

    </footer>
</body>
</html>