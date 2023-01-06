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

	
	<style>
	#map_7053ed27e33a4f31bef8341cd777f6c7 {
		position: relative;
		width: 100.0%;
		height: 100.0%;
		left: 0.0%;
		top: 0.0%;
	}
	#myChart{
					width: 25%;
				}
	</style>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	
</head>
<body>

    <section id="menu">
        <div id="logo">Su Kaynakları</div>
        <?php 
		navbar();
		?>
    </section>

    <section id="solmenu">

        <?php
		sidebar();
		?>
		
        <main>
            <h1>Su Kaynakları</h1>
			<p>
      <style type="text/css">
				.chart{
					width: 60%;
				}
				#myChart{
					width: 55%;
				}
				</style>
				
				
				
				<div class="chartBox">
					<canvas id="myChart"></canvas>
				</div>
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
        
        
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: [
			<?php
			  $q = mysqli_query($baglan, "SELECT k.* FROM kitalar k 
			  JOIN gida o ON k.id = o.kita_id ");
			  $count = mysqli_num_rows($q);
			  $say = 1;
			  while($row = mysqli_fetch_assoc($q)){
				echo '"'.$row['kita'].'"';
				if($say != $count){
					echo ',';
				}
				$say++;
			  }
			  ?>
			],
            datasets: [{
              label: '# of Votes',
              data: [
				<?php
				  $q = mysqli_query($baglan, "SELECT o.* FROM kitalar k ".
				  "JOIN gida o ON k.id = o.kita_id ");
				  $count = mysqli_num_rows($q);
				  $say = 1;
				  while($row = mysqli_fetch_assoc($q)){
					echo $row['deger'];
					if($say != $count){
						echo ',';
					}
					$say++;
				  }
				  ?>
				  ],
              borderWidth: 1
            }]
            
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });


        // <block:data:2>
const data = [];
const data2 = [];
let prev = 100;
let prev2 = 80;
for (let i = 0; i < 1000; i++) {
  prev += 5 - Math.random() * 10;
  data.push({x: i, y: prev});
  prev2 += 5 - Math.random() * 10;
  data2.push({x: i, y: prev2});
}
// </block:data>

// <block:animation:1>
let easing = helpers.easingEffects.easeOutQuad;
let restart = false;
const totalDuration = 5000;
const duration = (ctx) => easing(ctx.index / data.length) * totalDuration / data.length;
const delay = (ctx) => easing(ctx.index / data.length) * totalDuration;
const previousY = (ctx) => ctx.index === 0 ? ctx.chart.scales.y.getPixelForValue(100) : ctx.chart.getDatasetMeta(ctx.datasetIndex).data[ctx.index - 1].getProps(['y'], true).y;
const animation = {
  x: {
    type: 'number',
    easing: 'linear',
    duration: duration,
    from: NaN, // the point is initially skipped
    delay(ctx) {
      if (ctx.type !== 'data' || ctx.xStarted) {
        return 0;
      }
      ctx.xStarted = true;
      return delay(ctx);
    }
  },
  y: {
    type: 'number',
    easing: 'linear',
    duration: duration,
    from: previousY,
    delay(ctx) {
      if (ctx.type !== 'data' || ctx.yStarted) {
        return 0;
      }
      ctx.yStarted = true;
      return delay(ctx);
    }
  }
};
// </block:animation>

// <block:config:0>
const config = {
  type: 'line',
  data: {
    datasets: [{
      borderColor: Utils.CHART_COLORS.red,
      borderWidth: 1,
      radius: 0,
      data: data,
    },
    {
      borderColor: Utils.CHART_COLORS.blue,
      borderWidth: 1,
      radius: 0,
      data: data2,
    }]
  },
  options: {
    animation,
    interaction: {
      intersect: false
    },
    plugins: {
      legend: false,
      title: {
        display: true,
        text: () => easing.name
      }
    },
    scales: {
      x: {
        type: 'linear'
      }
    }
  }
};
// </block:config>

// <block:actions:2>
function restartAnims(chart) {
  chart.stop();
  const meta0 = chart.getDatasetMeta(0);
  const meta1 = chart.getDatasetMeta(1);
  for (let i = 0; i < data.length; i++) {
    const ctx0 = meta0.controller.getContext(i);
    const ctx1 = meta1.controller.getContext(i);
    ctx0.xStarted = ctx0.yStarted = false;
    ctx1.xStarted = ctx1.yStarted = false;
  }
  chart.update();
}

const actions = [
  {
    name: 'easeOutQuad',
    handler(chart) {
      easing = helpers.easingEffects.easeOutQuad;
      restartAnims(chart);
    }
  },
  {
    name: 'easeOutCubic',
    handler(chart) {
      easing = helpers.easingEffects.easeOutCubic;
      restartAnims(chart);
    }
  },
  {
    name: 'easeOutQuart',
    handler(chart) {
      easing = helpers.easingEffects.easeOutQuart;
      restartAnims(chart);
    }
  },
  {
    name: 'easeOutQuint',
    handler(chart) {
      easing = helpers.easingEffects.easeOutQuint;
      restartAnims(chart);
    }
  },
  {
    name: 'easeInQuad',
    handler(chart) {
      easing = helpers.easingEffects.easeInQuad;
      restartAnims(chart);
    }
  },
  {
    name: 'easeInCubic',
    handler(chart) {
      easing = helpers.easingEffects.easeInCubic;
      restartAnims(chart);
    }
  },
  {
    name: 'easeInQuart',
    handler(chart) {
      easing = helpers.easingEffects.easeInQuart;
      restartAnims(chart);
    }
  },
  {
    name: 'easeInQuint',
    handler(chart) {
      easing = helpers.easingEffects.easeInQuint;
      restartAnims(chart);
    }
  },
];
// </block:actions>

module.exports = {
  config,
  actions
};
      </script>
  
  
				
				
				
            
			
			</p>
            
			
			
			
			
			
			<p>
				
				<script>
				window.onload = function () {

				var options = {
					animationEnabled: true,
					title: {
						text: "GDP Growth Rate - 2016"
					},
					axisY: {
						title: "Growth Rate (in %)",
						suffix: "%"
					},
					axisX: {
						title: "Countries"
					},
					data: [{
						type: "column",
						yValueFormatString: "#,##0.0#"%"",
						dataPoints: [
							
							<?php
							  $q = mysqli_query($baglan, "SELECT * FROM ulkeler  ");
							  $count = mysqli_num_rows($q);
							  $say = 1;
							  while($row = mysqli_fetch_assoc($q)){
								echo '{label: "'.$row['ulke'].'", y: '.$row['deger'].'}';
								if($say != $count){
									echo ',';
								}
								$say++;
							  }
							  ?>
							
							
						]
					}]
				};
				$("#chartContainer").CanvasJSChart(options);

				}
				</script>
				</head>
				<body>
				<div id="chartContainer" style="height: 450px; width: 60%; 
    position: relative;
    left: 500px;"></div>
				<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
				<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
			
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