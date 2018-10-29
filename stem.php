<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head> <title>STEMMING</title>
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}
.back {background-color: #b8b894;} 
.back:hover {background: #d6d6c2;}
 </style>
 </head>

<body style="background-color:#F08080">

<center> 
<h1 style="background-color:#FAEBD7">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN AKADEMIK 2018/2019</h1> 

<h3>PENCARIAN KATA DASAR</h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
<br><br><br>
<a href="index.php" button class="btn back" >Kembali </a></button> <br>
<center>
<h4 style="background-color:#FAEBD7">Oky Bondan Prakoso (15.01.53.0169) <br> Yuliana Hendra W (15.01.53.0118) </h4> 
</center>
</body>
</html>