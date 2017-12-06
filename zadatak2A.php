<!DOCTYPE html>
<html>
<body>
<?php
$ime = $_GET["ime"];
$prezime = $_GET["prezime"];
$adresa = $_GET["adresa"];
$grad = $_GET["grad"];
$doba = $_GET["doba"];
$prijava = isset($_GET['prijava']) ? $_GET['prijava'] : '';
$ime = strtoupper($ime);
$prezime = strtoupper($prezime);
$adresa = strtoupper($adresa);
echo $ime,"<br>";
echo $prezime,"<br>";
echo $adresa,"<br>";
if($grad == "Zagreb"){
    echo "Molim Vas uputite se do FER-a!<br>";
}elseif ($grad == "Split" && $prijava==TRUE){
    echo "Molimo uputite se do FESB-a!<br>";
}elseif ($grad == "Rijeka" && $prijava==TRUE){
    echo "Molimo uputite se do Elektrotehničkog fakulteta!<br>";
}elseif ($grad == "Osijek" && $prijava==TRUE){
    echo "Molima Vas idite do FERIT-a!<br>";
}
?>
</body>
</html>