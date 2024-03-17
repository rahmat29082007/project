<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <div class="btn">

    <div class="container">
  <?php

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    
    if ($nilai == '' || empty($nilai)) {
      $nilai = 0;
    }
  
  

    if($nilai >= 75 ){

        $emoji= "<img src='image/bahagia.png' style='width: 50px ; height: 40px; margin-left:185px;  margin-top: 30px;' >";
        $ket  = "<div style='font-weight:bold; font-size:30px; display:flex; justify-content:center; color:blue; padding-top:25px;'> Kompeten </div>";

        $namanya = "<div style='font-weight:bold; font-size:30px; display:flex; justify-content:center;'> $nama </div>";
      $newline =  "<br>";
   
     $nilainya=" <div style='font-weight:bold; font-size:30px; display:flex; justify-content:center;'> Nilai </div>";
      $newline =  "<br>";

      $hasil = "<div style='font-weight:bold; font-size:35px; display:flex; justify-content:center; color:blue;'>$nilai</div>";
    }else if($nilai < 75) {
      $emoji= "<img src='image/Sad-PNG.png' style='width: 50px ; height: 40px; margin-left:185px;  margin-top: 30px;' >";
      $ket = "<div style='font-weight:bold; font-size:30px; display:flex; justify-content:center; color:blue; padding-top:30px;'>  Tidak Kompeten </div>";

     $namanya = "<div style='font-weight:bold; font-size:30px; display:flex; justify-content:center;'> $nama </div>";
      $newline =  "<br>";
   
     $nilainya=" <div style='font-weight:bold; font-size:30px; display:flex; justify-content:center;'>Nilai </div>";
     $newline =  "<br>";

      $hasil = "<div style='font-weight:bold; font-size:35px; display:flex; justify-content:center; color:blue;'>$nilai</div>";
    }else if (empty($nilai) || $nilai=='' ) {
      
    } else{
      $newline = '';
      $namanya = '';
      $nilainya= '';
      $hasil   = '';
    }
  
  } else{
    $newline = '';
    $namanya = '';
    $nilainya= '';
    $hasil   = '';
    $ket     = '';
  }
  ?>
      <div class="vi" style="margin-top:35px;">
          <?php
echo $emoji;
echo $ket;

          ?>
    <div class="box" style="padding-left:170px; padding-top: 50px; ">Rincian Nilai</div>
        </div>
        <div class="container2">
          <?php
echo $newline;
echo $namanya;
echo $newline;
echo $nilainya;
echo $newline;
echo $hasil;

?>
      </div>
    </div>
    <div class="tabel">
      <p>CEK KETERANGAN NILAI</p>
      <form method="post" action="index.php">
        <label style="margin-left:60px ; ">Nama</label><br>
        <input type="text" name="nama" style="margin-left:60px ; ">
        <br>
        <label style="margin-left:60px ; ">nilai</label><br>
        <input type="number"value=0; min=0; require name="nilai" style="margin-left:60px ; ">
        <br>
        <input style="margin-left:60px ; " type="submit" name="kirim" >
      </form>
    </div>
  </div>
</body>
</html>