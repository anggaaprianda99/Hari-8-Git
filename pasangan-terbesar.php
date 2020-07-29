<?php
function pasangan_terbesar($angka){
// kode di sini
// pseudecode
// 1. looping sebanyak karakter pada angka
// 2. dapatkan pasangan angka dengan metode substr
// 3. pasangan angka pertama di set sebagai terbesar
// 4. selama looping kalau ketemu angka yang lebih besar, terbesarnya di update dengan angka
// 5. return angka terbesar
    $angka_terbesar = substr($angka, 0, 2);
    for($i = 0 ; $i <= strlen($angka); $i++){
        $pasangan_angka = substr($angka, $i, 2);
        if($pasangan_angka > $angka_terbesar){
            $angka_terbesar = $pasangan_angka;
        }
    }
    return $angka_terbesar;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>" .pasangan_terbesar(12783456); // 83
echo "<br>" .pasangan_terbesar(910233); // 91
echo "<br>" .pasangan_terbesar(71856421); // 85
echo "<br>" .pasangan_terbesar(79918293); // 99

?>