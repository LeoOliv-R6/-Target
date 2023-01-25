<?php
$SP = 67836.43;//67.836,43 = 37.528456243467%
$RJ = 36678.66;//36.678,66 = 20.291360952795%
$MG = 29229.88;//29.229,88 = 16.170548370275%
$ES = 27165.48;//27.165,48 = 15.028481414968%
$Outros = 19849.53;//19.849,53 = 10.981153018494%

$i=0;
$contri = [$SP, $RJ, $MG, $ES, $Outros];
$estados = array("SP","RJ","MG","ES","Outros");
$total = array_sum($contri);
foreach ($contri as $mensal) {
    $pct = ($mensal*100)/$total;
    $estado = $estados[$i];
    echo "O estado $estado contribui com ". round($pct)." %<br>";
    $i++;
}
// echo $total; //180.759,98 = 100%
?>