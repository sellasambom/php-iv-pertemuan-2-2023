<?php
// VARIABEL STRING

$nama = 'sella';
$pesan = 'SELAMAT DATANG';
echo"<h2>" . $pesan.'  '. $nama ."</h2>";
var_dump($nama);
//VARIABEL INT
$x = 10;
$y = 5;
 
echo "<p> x = " . $x."</p>" ;
echo "<p> y = " . $y."</p>" ;

$tambah = $x + $y;
echo "<p>" .$tambah ."</p>" ; 

$kurang = $x - $y; 
echo "<p>" .$kurang ."</p>" ;

$kali = $x * $y;
echo "<p>" .$kali ."</P>" ;

$bagi = $x / $y;
echo "<p>" .$bagi ."</p>" ;
var_dump($x);

//VARIABEL FLOAT UNTUK MENYIMPAN BILANGAN PECAHAN

$x = 23.3;
$y = 4.7;

echo $x;

var_dump($x);

//VARIABEL BOOLEAN
//TRUE dan FALSE
// AND X
// OR +

$a = true;
$b = false;
$c = $a || $b; 
$and = $a && $b;

echo "<br>";
var_dump($c);
var_dump($and);

//VARIABEL ARRAY
//Untuk menyimpan banyak dalam  satu variabel

//penulisan lama
$nama = array("sella","sultan","billy");

//penulisan baru
$nama_kedua = ['maria','yustin','sella'];

echo "<br>";
foreach($nama_kedua as $peserta)
{
    echo $peserta . "<br>";
}

$data = [
'nama' => 'sella',
'alamat' => 'sentani',
'jenis_kelamin' => 'perempuan',
];

echo "<br>";

echo 'nama : ' . $data['nama'] . '<br>';
echo 'alamat: ' . $data['alamat'] .
'<br>';
echo 'jenis kelamin : ' . $data['jenis_kelamin'] . '<br>';