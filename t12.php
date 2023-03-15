<?php

function tambah_tiga_angka($angka1, $angka2, $angka3) {
    $hasil = $angka1 + $angka2 + $angka3;
    return $hasil;
}

$hasil_tambah = tambah_tiga_angka(2, 4, 6);
echo "Hasil pertambahan: " . $hasil_tambah;

?>
