<?php
// This file check if the route is proper. If not, it throw in an error view.

if (!is_file("./src/controllers/" . $target . ".php")){
    die("ERREUR, Cette page n'existe pas");
}

require("./src/controllers/" . $target . ".php");
require("./src/views/template.php");
?>