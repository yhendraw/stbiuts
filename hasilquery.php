 <!DOCTYPE html>
<html>
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
	<title>Hasil Query</title>
</head>
<body style="background-color:#F08080">
<center> 
<h1 style="background-color:#FAEBD7">UNIVERSITAS STIKUBANK SEMARANG <br> TATAHUN AKADEMIK 2018/2019 </h1> 
<br>
<input type="button" value="Home" onclick="window.open('index.php')" button class="btn home">  </button> <br> <br>
</center>
 <?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$host='localhost';
$user='id3329403_dbstbifix';
$pass='apriana';
$database='id3329403_dbstbifix';

$conn= new mysqli($host,$user,$pass,$database);
//mysql_select_db();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=@$_POST['$katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` WHERE token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";


echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. " Stemming Porter" . $row["tokenstem"]."Stemming Nazief Adriani " . $row["tokenstem2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>
<center>
<h4 style="background-color:#FAEBD7">Oky Bondan Prakoso (15.01.53.0169) <br> Yuliana Hendra W (15.01.53.0118) </h4>  
</center>