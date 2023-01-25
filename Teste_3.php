<?php
$json = file_get_contents("dados.json");
$data = json_decode($json);
$maior = 0;
$menor = 10000000;
$total=0;
$i=0;
foreach ($data as $key => $value) {

    $valor = $value->valor;
    $dia = $value->dia;
    if ($valor > $maior) {
        $diamaior = $dia;
        $maior = $valor;
    }

    if ($valor < $menor && $valor!=0) {
        $diamenor = $dia;
        $menor = $valor;
    }


    if ($valor!=0){

        $total = $valor+$total;
        $i++;
    }
}
$media = $total/$i;

echo "Maior dia foi $diamaior com valor: R$". number_format($maior,2, ',', '.')."<br>";
echo "Menor dia foi $diamenor com valor: R$". number_format($menor,2, ',', '.')."<br>";
echo "A média foi de R$". number_format($media,2, ',', '.')." por dia";
// O menor valor de faturamento ocorrido em um dia do mês;

// O maior valor de faturamento ocorrido em um dia do mês;

// Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.
?>