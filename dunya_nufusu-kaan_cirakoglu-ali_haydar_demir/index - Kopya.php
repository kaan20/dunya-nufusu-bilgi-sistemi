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

    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <section id="menu">
        <div id="logo">World Population</div>
        <nav>
          <a href="index.php">Main Page</a>
          <a href="logout.php">Çıkış</a>
		  
        </nav>
    </section>

    <section id="solmenu">

        <nav id="solmenunav" >
            <ul id="solmenunavul">
                <li id="solmenunavul1">
                    <a href="Map1.html" id="linka1">World Population Map</a>
                </li>
                <li id="solmenunavul2" >
                    <a href="solmenunavul2.html" id="linka2">Statistics</a>
                </li>
               

            </ul>
        </nav>
        <main>
            <h1>Tablo gelecek</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta beatae aliquam ex qui fugit totam consequatur maxime, nemo exercitationem cum cumque dolor a quae repellendus nam harum. Autem, officiis excepturi.
                

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