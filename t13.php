<?php

function hitung_aritmatika($angka1, $angka2, $angka3) {
    $hasil_tambah = $angka1 + $angka2 + $angka3;
    $hasil_kurang = $angka1 - $angka2 - $angka3;
    $hasil_kali = $angka1 * $angka2 * $angka3;
    $hasil_bagi = $angka1 / $angka2 / $angka3;
    $hasil_modulus = $angka1 % $angka2 % $angka3;
    
    echo "Hasil pertambahan: " . $hasil_tambah . "<br>";
    echo "Hasil pengurangan: " . $hasil_kurang . "<br>";
    echo "Hasil perkalian: " . $hasil_kali . "<br>";
    echo "Hasil pembagian: " . $hasil_bagi . "<br>";
    echo "Hasil modulus: " . $hasil_modulus . "<br>";
}

hitung_aritmatika(10, 5, 2);

?>
