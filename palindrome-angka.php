<?php
function palindrome($angka)
{
    $output = false;
    if (strrev($angka) == $angka) {
        $output = true;
    }
    return $output;
}

function palindrome_angka($angka)
{
    if ($angka >= 1 && $angka <= 8) {
        return $angka + 1 . "<br>";
    }
    if (palindrome($angka)) {
        $angka++;
    }
    while (palindrome($angka) == false) {
        $angka++;
    }
    return $angka . "<br>";
    //tulis kode disini
}

//test cases
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
