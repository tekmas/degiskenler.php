<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
echo "Merhaba Türkiye <br/>";
echo "Merhaba Türkiye <br/>";
echo "Merhaba Türkiye <br/>";
echo "<hr>";

$metin="merhaba dünya";
echo $metin."<br>"; 
echo $metin."<br>"; 
echo "$metin <br/>"; 
echo "<hr>";

echo strtoupper($metin)."<br/>";
echo strtolower($metin)."<br/>";
echo ucfirst($metin)."<br/>";
echo ucwords($metin)."<br/>";
echo strlen($metin)."<br/>";
echo str_replace("merhaba","nasılsın",$metin)."<br/>";
echo substr($metin,5,10)."<br/>";

$sayi=5.14;
echo round($sayi);
echo "<hr>";
echo ceil($sayi);// yukarı yuvarladı
echo "<hr>";
echo floor($sayi);//aşağı yuvarladı
echo "<hr>";
echo abs(98-100);// mutlak değer
echo "<hr>";
echo rand(1,10);// rastgele sayı uretir
  
  $durum1=true;
$durum2=false;

$sifre=1453;
echo isset($sifre);

?>
</body>
</html>
