<!DOCTYPE html>
<html>
<head>
	<title>Hitung Vektor</title>
</head>
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.home {background-color: #6666ff ;} 
.home:hover {background: #b3b3ff;}
</style>
<head>
	<title>Hitung Vektor</title>
</head>
<body style="background-color:#F08080">
<center> 
<h1 style="background-color:#FAEBD7">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN AKADEMIK 2018/2019 </h1> 
<br>
<input type="button" value="Home" onclick="window.open('index.php')" button class="btn home">  </button> <br> <br>

<?php
$host='localhost';
$user='id3329403_dbstbifix';
$pass='apriana';
$database='id3329403_dbstbifix';

$conn= new mysqli($host,$user,$pass,$database);
//mysql_select_db();
//hitung index
mysqli_query($conn,"TRUNCATE TABLE tbindex");
$resn = mysqli_query($conn,"INSERT INTO `tbindex`(`Term`, `DocId`, `Count`) SELECT `token`,`nama_file`,count(*) FROM `dokumen` group by `nama_file`,token");
	//$n = mysql_num_rows($resn);
	

//berapa jumlah DocId total?, n
	$resn = mysqli_query($conn,"SELECT DISTINCT DocId FROM tbindex");
	$n = mysqli_num_rows($resn);
	
	//ambil setiap record dalam tabel tbindex
	//hitung bobot untuk setiap Term dalam setiap DocId
	$resBobot = mysqli_query($conn,"SELECT * FROM tbindex ORDER BY Id");
	$num_rows = mysqli_num_rows($resBobot);
	print("Terdapat " . $num_rows . " Term yang diberikan bobot. <br />");

	while($rowbobot = mysqli_fetch_array($resBobot)) {
		//$w = tf * log (n/N)
		$term = $rowbobot['Term'];		
		$tf = $rowbobot['Count'];
		$id = $rowbobot['Id'];
		
		//berapa jumlah dokumen yang mengandung term tersebut?, N
		$resNTerm = mysqli_query($conn,"SELECT Count(*) as N FROM tbindex WHERE Term = '$term'");
		$rowNTerm = mysqli_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'];
		
		$w = $tf * log($n/$NTerm);
		
		//update bobot dari term tersebut
		$resUpdateBobot = mysqli_query($conn,"UPDATE tbindex SET Bobot = $w WHERE Id = $id");		
  	} //end while $rowbobot


?>
<<h4 style="background-color:#FAEBD7">Oky Bondan Prakoso (15.01.53.0169) <br> Yuliana Hendra W (15.01.53.0118) </h4> 
</center>
</html>