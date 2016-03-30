<?php
$employeeResult = mysql_query("SELECT * FROM prodajalci", $connection);
$depoResult = mysql_query("SELECT * FROM skladisce", $connection);
$invoicesResult = mysql_query("SELECT * FROM racun", $connection);
$saleStatistics = mysql_query("SELECT id_zaposlenega, SUM( kolicina ) AS Prodano, mesec FROM racun GROUP BY mesec,ID_zaposlenega", $connection);

$f1 = fopen("result.txt", 'w');
$querySum = mysql_query("SELECT SUM( skladisce.cena_artikla * racun.kolicina ) AS vsota
FROM skladisce
JOIN racun ON skladisce.id_artikla = racun.id_artikla");
$row = mysql_fetch_row($querySum);
$rowOut = "Vsota vseh nakupov: ". $row[0]." EUR";
fwrite($f1,$rowOut);
fclose($f1);
?>