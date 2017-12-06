<!DOCTYPE html>
<html>
<head>
<title>Prvi zadatak</title>
</head>
<body>

<?php

$mojePoljeClanova = array("Zagreb", "Split", "Rijeka", "JESAMte", "Osijek", "Vinkovci", "Dubrovnik", "Split", "Komiža");
/*  Pisati ispod  */
$broj = count($mojePoljeClanova);
if ($broj>=5 && $broj<=8){
    foreach ($mojePoljeClanova as $stvar){
        if($stvar == "JESAMte"){
            echo "Pronadjen je zadani clan JESAMte";
        }else{
            echo "nije nista pronadjeno";
        }
    }
}elseif ($broj>8){
    foreach ($mojePoljeClanova as $stvar){
        if($stvar == "JESAMte"){
            echo "Broj clanova u polju: $broj";
            echo "Pronadjen je zadani clan JESAMte";
        }
    }
}elseif ($broj<5){
    foreach ($mojePoljeClanova as $stvar) {
    echo $stvar;
    }
    $mojePoljeClanova = shuffle($mojePoljeClanova);
    foreach ($mojePoljeClanova as $stvar) {
        echo $stvar;
    }
}

?>

</body>
</html>