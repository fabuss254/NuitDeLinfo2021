<?php
$css = null;
$html = "<html>";
$html .= "<head>";
$html .= "<meta charset='utf-8'>";
$html .= "<title>$title</title>";
$html .= "<link rel='stylesheet' href='$css'>";
$html .= "</head>";
$html .= $body;
$html .= "</html>";
echo $html;
?>