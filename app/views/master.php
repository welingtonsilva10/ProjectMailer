<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saas <?= $this->e($title)?></title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #958080;
            width: 100vw;
            height: 100vh;
            position: relative;
        }
        header{
            width: 100%;
            height: 6%;
            background-color: #cacaca;
        }
        footer{
            margin-top: 2px;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 6%;
            background-color: #cacaca;
        }
    </style>
</head>
<body>
    
    <header>

    </header>

    <?=$this->section('content')?>

    <footer>

    </footer>
</body>
</html>