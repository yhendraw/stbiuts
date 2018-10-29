
<title>Hapus</title>
<body style="background-color:#F08080">
<center> 
<h1 style="background-color:#FAEBD7">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN AKADEMIK 2018/2019 </h1> 
<br>




<?php
$host='localhost';
$user='id3329403_dbstbifix';
$pass='apriana';
$database='id3329403_dbstbifix';

$conn= new mysqli($host,$user,$pass,$database);
//mysql_select_db();

$query1 = "DELETE FROM `dokumen` WHERE 1";
$query2 = "DELETE FROM `upload` WHERE 1";
$hasil1 = mysqli_query ($conn,$query1);
$hasil2 = mysqli_query ($conn,$query2);

$files = glob('files/*'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}



 
echo "Data telah dihapus.";
?>

<br>
<a> Kembali ke tabel ? </a> <a href="hasil_tokenisasi.php"> YA </a> 

<h4 style="background-color:#FAEBD7">Oky Bondan Prakoso (15.01.53.0169) <br> Yuliana Hendra W (15.01.53.0118) </h4> 
</center>
</body>