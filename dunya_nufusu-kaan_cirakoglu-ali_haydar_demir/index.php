<?php
session_start();
ob_start();
require "settings.php"; 
require "sidebar.php";
require "navbar.php";
require "footer.php";
include_once 'connection.php'; 

$userID = $_SESSION["kullaniciID"];



if(!isset($_SESSION["kullaniciID"])) {
	header('Location: login.php');
}

if($_SESSION["kullaniciTipi"] != 1):
    header('Location: adminIndex.php');
endif;

ob_end_flush();






?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
	
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <section id="menu">
        <div id="logo">2022 Dünya Nufusü</div>
        <?php 
		navbar();
		?>
    </section>

    <section id="solmenu">

        <?php
		sidebar();
		?>
		
        <main>
            <h1>2022 Dünya Nufusü</h1>
			<p>
            
            
				<img src="img/dunya-nufusu.jpg" width="80%">
            </p>
        </main>

    </section>
	<section id="footer">
		<div class="row">
			<?php
			footer();
			?>
		</div>
	</section>
	
</body>
</html>