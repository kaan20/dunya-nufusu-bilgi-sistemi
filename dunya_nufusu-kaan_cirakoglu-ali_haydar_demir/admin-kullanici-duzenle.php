<?php
session_start();
ob_start();
require "settings.php"; // require, include gibi belirtilen dosyayı kodun yazıldığı dosya içerisine eklemek için kullanılır. Ama include gibi uyarı vermek yerine hata verir ve kodun çalışmasını durdurur. require fonksiyonunun da kullanımı include fonksiyonu ile aynıdır.
require "sidebar.php";
require "navbar.php";
require "footer.php";
include_once 'connection.php'; // Bu fonksiyon include fonksiyonu ile aynı şekilde çalışarak dışarıdan dosya dahil etme olanağı sağlar. Tek farkı bir dosya içerisinde aynı dosyanın birden fazla çağrılmasını engeller.

$userID = $_SESSION["kullaniciID"];

if(!isset($_SESSION["kullaniciID"])) {
	header('Location: login.php'); // sayfa yönlendirme
}

if($_SESSION["kullaniciTipi"] != 2):
    header('Location: login.php');
endif;

ob_end_flush();




if($_POST['id'] != ''){
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$cinsiyet = $_POST['cinsiyet'];
	$dogum_tarihi = $_POST['dogum_tarihi'];
	$type = $_POST['type'];
	
	$q = mysqli_query($baglan, "UPDATE kullanicilar SET ".
	"name = '".$name."', ".
	"surname = '".$surname."', ".
	"email = '".$email."', ".
	"phone = '".$phone."', ".
	"cinsiyet = '".$cinsiyet."', ".
	"dogum_tarihi = '".$dogum_tarihi."', ".
	"type = '".$type."' ".
	"WHERE id = '".$id."' LIMIT 1 ");
	
	header("Location: admin-kullanicilar.php");
}


$id = $_GET['id'];

$q = mysqli_query($baglan,"SELECT * FROM kullanicilar WHERE id = '".$id."' LIMIT 1 ");
$r = mysqli_fetch_assoc($q);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo $favicon; ?>" type="image/ico" />

    <title><?php echo $siteBasligi; ?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php
			
			ustSidebar();
			
			echo $userID;
			
			?>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
			<?php
			
			adminSidebar();
			?>
            
          </div>
        </div>

        <!-- top navigation -->
		
		<?php
		
		navbar();
		
		?>
		
        <!-- /top navigation -->

        
		<!-- page content -->
	<div class="right_col" role="main">
	 
		<div class="row">
			
			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
				  <div class="x_title">
					<h2>Üyeler <small>Var olan kaydı düzenle</small></h2>
					
					<div class="clearfix"></div>
				  </div>
				  <div class="x_content">
					<br />
					<form class="form-horizontal form-label-left" action="" method="POST" enctype="multipart/form-data">
						
						
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Ad
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="x_content">
									<input type="text" id="" name="name" class="form-control col-md-7 col-xs-12" value="<?php echo $r['name']?>" required>
								</div>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Soyad
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="x_content">
									<input type="text" id="" name="surname" class="form-control col-md-7 col-xs-12" value="<?php echo $r['surname']?>" required>
								</div>
							</div>
						</div>
						
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Cep Tel
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="x_content">
									<input type="text" id="" name="phone" class="form-control col-md-7 col-xs-12" value="<?php echo $r['phone']?>" >
								</div>
							</div>
						</div>
						
						
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Mail Adres
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="x_content">
									<input type="text" id="" name="email" class="form-control col-md-7 col-xs-12" value="<?php echo $r['email']?>" >
								</div>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Doğum Tarihi
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="x_content">
									<input type="text" id="" name="dogum_tarihi" class="form-control col-md-7 col-xs-12" value="<?php echo $r['dogum_tarihi']?>" >
								</div>
							</div>
						</div>
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Cinsiyet
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<select class="form-control" style="width: 100%;" name="cinsiyet" >
									<option value="1" <?php echo $r['cinsiyet'] == 1 ? 'selected' : '';  ?>>Erkek</option>
									<option value="2" <?php echo $r['cinsiyet'] == 2 ? 'selected' : '';  ?>>Kadın</option>
									<option value="3" <?php echo $r['cinsiyet'] == 3 ? 'selected' : '';  ?>>Diğer</option>
									
								</select>
							
							</div>
						</div>
						
						
						<div class="form-group col-md-12">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">
								Kullanıcı Türü
							</label>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<select class="form-control" style="width: 100%;" name="type" required>
									
									<option value="1" <?php echo $r['type'] == 1 ? 'selected' : '';  ?>>Kullanıcı</option>
									<option value="2" <?php echo $r['type'] == 2 ? 'selected' : '';  ?>>Admin</option>
									
								</select>
							
							</div>
						</div>
					  
					  
					  <div class="ln_solid"></div>
					  <div class="form-group">
						<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
							<input type="hidden" name="id" value="<?=$r['id']?>" />
							<button type="submit" class="btn btn-success">Kaydet</button>
						</div>
					  </div>

					</form>
				  </div>
				</div>
			</div>
	   
			
			
		  
		 	</div>
        </div>
        
        <!-- /page content -->

        <!-- footer content -->
		
		<?php
		
		footer();
		
		?>
		
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>