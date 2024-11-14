<?php


function Tambah($angka1, $angka2, $length) {
    $a = 2;
    $output = array();

    while ($a < $length) {
        array_push($output, $angka1, $angka2, $angka1 + $angka2);
        print_r($output);
        $a++;
    }
}

Tambah(5,9,3);
?>