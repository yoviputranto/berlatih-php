<?php
function tentukan_deret_aritmatika($arr)
{
    // kode di sini
    $result = "false";
    $cek = $arr[1] - $arr[0];
    if ($arr[count($arr) - 1] - $arr[count($arr) - 2] == $cek) {
        $result = "true";
    }
    echo $result . "<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
