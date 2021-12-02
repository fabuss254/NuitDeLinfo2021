<?php

$body = '<h1>La page a hjk</h1>';
$body .= "<h1>Recherche</h1><form action={$_SERVER["PHP_SELF"]} method = 'POST'>";
$body .= "<input type = 'text', name = 'nombre'>";
$body .= '<label for="cars">Type de recherche:</label>';
$body .= '<select id="type" name="type">';
$body .= '<option value="sauveteur">Sauveteur</option>';
$body .= '<option value="rescape">Rescapé</option>';
$body .= '<option value="navire">Navire</option>';
$body .= '<option value="accident">Accident</option>';
$body .= "</select>";
$body .= "<input type='submit', value = 'Confirmer'></form>";

include "patern.php";
?>