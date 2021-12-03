<!DOCTYPE html>
<html lang='fr'>
    <head>
        <title><?=$title ?? "\$title non detecté"?></title>

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

        <!-- CSS -->
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