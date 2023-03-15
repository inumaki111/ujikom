<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biodata.css">
    <title>Document</title>
</head>
<body>
    <h2>Uji kom</h2>
    <?php 

$nis = $_POST['nis'];
$nama = $_POST ['nama'];  
$rayon = $_POST['rayon'];
 
echo "NIS : " . $nis;
echo "<br/>";

echo "Nama : " . $nama;
echo "<br/>";

echo "Rayon : " . $rayon;

?>