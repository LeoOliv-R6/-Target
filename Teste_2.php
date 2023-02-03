<html>
<?php

$inicio = 0;
$fim = 1;

echo "Sequência de 1 a 100: <br />";
echo $fim;

while ($fim <= 100) {
    $fim = $inicio + $fim;
    $inicio = $fim - $inicio;

    if ($fim <= 100) {
        echo "," . $fim;
    } else {
        echo ".";
    }
}

?>

</html>