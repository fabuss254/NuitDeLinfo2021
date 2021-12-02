<!DOCTYPE html>
<html lang='fr'>
    <head>
        <title><?=$title ?? "\$title non detecté"?></title>
        <link href="./assets/css/default.css" rel="stylesheet" type="text/css" />

        <link href="./assets/css/home.css" rel="stylesheet" type="text/css" />

        <script src="./assets/js/default.js"></script>
        <meta charset='utf-8'>
        
    </head>

    <body>
        <?php include("./src/views/header.php");?>
        <?=$content ?? "\$content non detecté"?>
        <?php include("./src/views/footer.php");?>
    </body>
</html>