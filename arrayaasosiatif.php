<?php

$siswa = array(
    "Shera" => 85,
    "Alea" => 72,
    "Cindy" => 90,
    "Nurani" => 60,
    "Shope" => 78
);

foreach ($siswa as $nama => $nilai) {

     echo "<br>";
    
    if ($nilai > 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }
    

    echo "Nama: $nama, Nilai: $nilai, Keterangan: $keterangan" . "<br>";
  
}
?>
 tugas-php-part4
