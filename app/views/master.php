<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" href="../../assets/images/logo.svg" type="image/x-icon">
    <title>Saas <?= $this->e($title)?></title>
</head>
<body>
    <header>
        <div class="imagePageBox">
            <img class="imagePage" src="../assets/images/logo.svg" alt="Sem imagem">
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
        <div class="container">
            <p> © 2024 W&R Desenvolvimento. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>