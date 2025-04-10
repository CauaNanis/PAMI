<?php
    $array = [-24 ,-24 ,1, -20, 30, -60, -80, -100, 69, -69];
    $maiores = 0;
    $menores = 0;

    foreach ($array as $key => $numero) {
        if($numero>0){
            $maiores++;
        }
        if($numero<0){
            $menores++;
        }
    }
    echo 'Existem ' . $maiores . ' números maiores que 0, e ' . $menores . ' números menores que 0';
?>