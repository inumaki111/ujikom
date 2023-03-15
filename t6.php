<?php

$nilai = 90;

if ($nilai >= 90 && $nilai <= 100) {
    echo "Peringkat Anda: A";
} elseif ($nilai >= 80 && $nilai < 90) {
    echo "Peringkat Anda: B";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "Peringkat Anda: C";
} else {
    echo "Peringkat Anda: D";
}

?>
