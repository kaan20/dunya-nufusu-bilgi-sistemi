<?php

require "settings.php"; // require, include gibi belirtilen dosyayı kodun yazıldığı dosya içerisine eklemek için kullanılır. Ama include gibi uyarı vermek yerine hata verir ve kodun çalışmasını durdurur. require fonksiyonunun da kullanımı include fonksiyonu ile aynıdır.
session_start(); // oturumu başlatıyoruz.
ob_start(); // yönlendirmelerde ihtiyacımız var. sayfa yönlendirmeleri
include_once 'connection.php'; // Bu fonksiyon include fonksiyonu ile aynı şekilde çalışarak dışarıdan dosya dahil etme olanağı sağlar. Tek farkı bir dosya içerisi



$user_id = $_SESSION["kullaniciID"];
$tarih = date('Y-m-d H:i:s');
$log = 'Çıkış Yaptı';
$ip = $_SERVER["REMOTE_ADDR"];

mysqli_query($baglan, "INSERT INTO kullanicilar_log (`user_id`,`tarih`,`text`,`ip`) VALUES ('".$user_id."', '".$tarih."', '".$log."', '".$ip."' ) ");


session_destroy();
//echo "Çıkış Yaptınız. Giriş Sayfasına Yönlendiriliyorsunuz..";
header("Refresh: 2; url=login.php");
ob_end_flush();
?>

<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>


    $(function() {
      var current_progress = 0;
      var interval = setInterval(function() {
        current_progress += 20;
        $("#dynamic")
        .css("width", current_progress + "%")
        .attr("aria-valuenow", current_progress)
        .text("");
        if (current_progress >= 100)
          clearInterval(interval);
          <?php
              header("Refresh: 2; url=login.php");
			  
          ?>
        }, 200);
      });
    </script>
	<meta charset="UTF-8">
  </head>
  <body style="background-color: #f2f2f2;">
    <div class="card" style="margin-top: 10%; margin-left: 25%; width: 50%; box-shadow: 0px 0px 110px -25px rgba(0,0,0, 0.5);">
      <div class="card-body">
        <p class="card-text">Giriş sayfasına yönlendiriliyorsunuz.....</p>
        <div class="progress">
            <div id="dynamic" class="progress-bar progress-bar-success progress-bar active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <!--<span id="current-progress"></span>-->
            </div>
        </div>
      </div>
    </div>
  </body>
</html>