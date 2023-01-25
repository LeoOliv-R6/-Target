<?php
$str = "Essa frase deve ficar invertida";
$revstr = "";
$contador = strlen($str) - 1;

for ($i = $contador; $i >= 0; $i--) {
    $revstr .= $str[$i];
}
echo $revstr;

?>