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
	
	<script>
		L_NO_TOUCH = false;
		L_DISABLE_3D = false;
	</script>
	
	<script src="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
	<link rel="stylesheet" href="https://rawcdn.githack.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css"/>
	<style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
	<style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	
	<style>
	#map_7053ed27e33a4f31bef8341cd777f6c7 {
		position: relative;
		width: 100.0%;
		height: 100.0%;
		left: 0.0%;
		top: 0.0%;
	}
	</style>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	
</head>
<body>

    <section id="menu">
        <div id="logo">Açlık</div>
        <?php 
		navbar();
		?>
    </section>

    <section id="solmenu">

        <?php
		sidebar();
		?>
		
        <main>
            <h1>Açlık</h1>
			<p>
				
				
				<canvas id="myChart" style="width:150%;max-width:1000px"></canvas>

				<script>
				var xValues = [<?php
				  $q = mysqli_query($baglan, "SELECT * FROM kitalar ");
				  $count = mysqli_num_rows($q);
				  $say = 1;
				  while($row = mysqli_fetch_assoc($q)){
					echo '"'.$row['kita'].'"';
					if($say != $count){
						echo ',';
					}
					$say++;
				  }
				  ?>];

				new Chart("myChart", {
				  type: "line",
				  data: {
					labels: xValues,
					datasets: [{ 
					  data: [<?php
				  $q = mysqli_query($baglan, "SELECT o.* FROM kitalar k ".
				  "JOIN aclik o ON k.id = o.kita_id ");
				  $count = mysqli_num_rows($q);
				  $say = 1;
				  while($row = mysqli_fetch_assoc($q)){
					echo $row['deger'];
					if($say != $count){
						echo ',';
					}
					$say++;
				  }
				  ?>],
					  borderColor: "red",
					  fill: false
					}]
				  },
				  options: {
					legend: {display: false}
				  }
				});
				</script>
				
				
				
				
				
				
				
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

