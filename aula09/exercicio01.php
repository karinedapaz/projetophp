<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo."/>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div> 
    <?php
    $a = isset($_GET ["ano"] )?$_GET["ano"] :1900;
    echo "Voce nasceu em $a";
    
</body>
</html>