<!DOCTYPE html>
<html lang="en">
<head>
<title>STBI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-image: url("https://goo.gl/aqiyXL");
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: black;
    font-family:garamond;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background-image: url("https://goo.gl/x3StXy");
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
    font-family:comic sans ms;
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-image: url("https://goo.gl/rVn2HU");
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}

.upload {background-color: #87CEFA;} 
.upload:hover {background: #adff2f;}

.token {background-color: #87CEFA;} 
.token:hover {background: #adff2f;}

.stem {background-color: #B0C4DE;} 
.stem:hover {background: #adff2f;}

.cariquery {background-color: #B0C4DE;} 
.cariquery:hover {background: #adff2f;}

.query {background-color: #87CEFA;} 
.query:hover {background: #adff2f;}

.bobot {background-color: #B0C4DE;} 
.bobot:hover {background: #adff2f;}

</style>
</head>
<body>

<header>
  <h1> <marquee direction = "left" behavior = "alternate"> UNIVERSITAS STIKUBANK SEMARANG </marquee> <br> TAHUN AKADEMIK 2018/2019  </h1>
</header>

<section>
  <nav>
    <ul>
<center>
<input type="button" value="Upload File PDF" onclick="window.open('upload.php')" button class="btn upload">  </button> <br> <br>
<input type="button" value="Pencarian Kata Dasar" onclick="window.open('stem.php')" button class="btn stem">  </button> <br> <br>
<input type="button" value="Hasil Tokenisasi" onclick="window.open('hasil_tokenisasi.php')" button class="btn token">  </button> <br> <br>
<input type="button" value="Pencarian Kata Kunci" onclick="window.open('awalquery.php')" button class="btn cariquery">  </button> <br> <br>
<input type="button" value="Hasil Query" onclick="window.open('query.php')" button class="btn query">  </button> <br> <br>
</center>

    </ul>
  </nav>
  
  <article>
    <h1>Tokenisasi</h1>
    <p>untuk materi steming (proses yg digunakan untuk mencari kata dasar)
seperti pembukaan, membuka, dibuka, bukaan (buka)
menggunakan:</p>
<p>1. algoritma poker = proses algoritma (tidak dapat menghilangkan kata sisipan)
yg dapat dihilangkan kata kah. lah. pun, me-h</p>
<p>2. algoritma nazief adriani = tidak ada informasi yg singkat pada data base
menggunakan tabel kata dasar</p>
    <h1>Sistem Pencarian</h1>
<p>Sistem pencarian dokumen putusan pengadilan/MA terdiri dari dua subsistem yaitu Subsistem pengelolaan dokumen (Indexing subsystem) dan Subsistem query </p>
  </article>
</section>

<footer>
   <h4> Oky Bondan Prakoso (15.01.53.0169) <br> Yuliana Hendra W (15.01.53.0118) </h4> 
</footer>

</body>
</html>
