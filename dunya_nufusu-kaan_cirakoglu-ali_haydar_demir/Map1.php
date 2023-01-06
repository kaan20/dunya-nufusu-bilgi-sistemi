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
		
		width: 80%;
		height: 600px;
		
	}
	</style>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	
</head>
<body>

    <section id="menu">
        <div id="logo">Ülkelere Göre Dünya Nufusu</div>
        <?php 
		navbar();
		?>
    </section>

    <section id="solmenu">

        <?php
		sidebar();
		?>
		
        <main>
            <h1>Ülkelere Göre Dünya Nufusu</h1>
			<p>
				
				<div class="folium-map" id="map_7053ed27e33a4f31bef8341cd777f6c7" ></div>

			<script>    
    
            var map_7053ed27e33a4f31bef8341cd777f6c7 = L.map(
                "map_7053ed27e33a4f31bef8341cd777f6c7",
                {
                    center: [22.66, 79.37],
                    crs: L.CRS.EPSG3857,
                    zoom: 4,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );

            

        
    
            var tile_layer_a1fdb25c0ea44550ab30d4d2e1c941ca = L.tileLayer(
                "https://stamen-tiles-{s}.a.ssl.fastly.net/terrain/{z}/{x}/{y}.jpg",
                {"attribution": "Map tiles by \u003ca href=\"http://stamen.com\"\u003eStamen Design\u003c/a\u003e, under \u003ca href=\"http://creativecommons.org/licenses/by/3.0\"\u003eCC BY 3.0\u003c/a\u003e. Data by \u0026copy; \u003ca href=\"http://openstreetmap.org\"\u003eOpenStreetMap\u003c/a\u003e, under \u003ca href=\"http://creativecommons.org/licenses/by-sa/3.0\"\u003eCC BY SA\u003c/a\u003e.", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_7053ed27e33a4f31bef8341cd777f6c7);
        
    
            var feature_group_d439deadb24742239fe2c65be8e9a555 = L.featureGroup(
                {}
            ).addTo(map_7053ed27e33a4f31bef8341cd777f6c7);
        
    
            var marker_85bcc08d2ddd46578dec9dcaf6e579bb = L.marker(
                [34.28, 69.11],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_ac96f849046b4305b94676421ee1df90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85bcc08d2ddd46578dec9dcaf6e579bb.setIcon(icon_ac96f849046b4305b94676421ee1df90);
        
    
        var popup_e24cd5ac8b7c4fbaa15361ed02d6fa3c = L.popup({"maxWidth": "100%"});

        
            var i_frame_8abee0b867db43e0984c8b815dc3d6ff = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQWZnaGFuaXN0YW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEthYnVsCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEFGRwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEFmZ2hhbmlzdGFuIEFmZ2hhbmkgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzODA0MTc1NAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzlhL0ZsYWdfb2ZfQWZnaGFuaXN0YW4uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e24cd5ac8b7c4fbaa15361ed02d6fa3c.setContent(i_frame_8abee0b867db43e0984c8b815dc3d6ff);
        

        marker_85bcc08d2ddd46578dec9dcaf6e579bb.bindPopup(popup_e24cd5ac8b7c4fbaa15361ed02d6fa3c)
        ;

        
    
    
            marker_85bcc08d2ddd46578dec9dcaf6e579bb.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_59a874fd6f9f431c85eacec21c96df47 = L.marker(
                [41.18, 19.49],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9d2e1267bf964112a87f2878fea707f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_59a874fd6f9f431c85eacec21c96df47.setIcon(icon_9d2e1267bf964112a87f2878fea707f2);
        
    
        var popup_5c4037314bcd482da14f44bce5cd9391 = L.popup({"maxWidth": "100%"});

        
            var i_frame_2a851035ac144fdaa91c8a4d1fa8a918 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQWxiYW5pYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVGlyYW5hCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEFMQgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEFsYmFuaWFuIExlayAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI4NTQxOTEKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zNi9GbGFnX29mX0FsYmFuaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5c4037314bcd482da14f44bce5cd9391.setContent(i_frame_2a851035ac144fdaa91c8a4d1fa8a918);
        

        marker_59a874fd6f9f431c85eacec21c96df47.bindPopup(popup_5c4037314bcd482da14f44bce5cd9391)
        ;

        
    
    
            marker_59a874fd6f9f431c85eacec21c96df47.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2401a7efe7f64040961a28f2a1e644dd = L.marker(
                [27.87, 3.76],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6d6762a315314affa2266467b8a39a3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2401a7efe7f64040961a28f2a1e644dd.setIcon(icon_6d6762a315314affa2266467b8a39a3e);
        
    
        var popup_436303695d87499ca916ecdd3337c1ec = L.popup({"maxWidth": "100%"});

        
            var i_frame_13529f8a5a8b4875be9bb233a1f21d85 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQWxnZXJpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQWxnZXIKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gRFpBCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQWxnZXJpYW4gRGluYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0MzA1MzA1NAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy83Lzc3L0ZsYWdfb2ZfQWxnZXJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_436303695d87499ca916ecdd3337c1ec.setContent(i_frame_13529f8a5a8b4875be9bb233a1f21d85);
        

        marker_2401a7efe7f64040961a28f2a1e644dd.bindPopup(popup_436303695d87499ca916ecdd3337c1ec)
        ;

        
    
    
            marker_2401a7efe7f64040961a28f2a1e644dd.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9443e78f37164558a40aae9f9c9e80bd = L.marker(
                [-14.27, -170.72],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4ca7e3deddd74bda8299c2cfb232b860 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9443e78f37164558a40aae9f9c9e80bd.setIcon(icon_4ca7e3deddd74bda8299c2cfb232b860);
        
    
        var popup_ca6871edab434cc6b306c34f7133ebc8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_f946a5d42a8747599f6ed1b9f73d4193 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQW1lcmljYW4gU2Ftb2EgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEZhZ2F0b2dvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEFTTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU1MzEyCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBuYW4gaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ca6871edab434cc6b306c34f7133ebc8.setContent(i_frame_f946a5d42a8747599f6ed1b9f73d4193);
        

        marker_9443e78f37164558a40aae9f9c9e80bd.bindPopup(popup_ca6871edab434cc6b306c34f7133ebc8)
        ;

        
    
    
            marker_9443e78f37164558a40aae9f9c9e80bd.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_ec079c79aeb140b191eaba3eca5b6a68 = L.marker(
                [42.5, 1.52],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3fc0790ab83040eca27a8f258d9005e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ec079c79aeb140b191eaba3eca5b6a68.setIcon(icon_3fc0790ab83040eca27a8f258d9005e0);
        
    
        var popup_40c0800f490c4191a9259a5676b545b1 = L.popup({"maxWidth": "100%"});

        
            var i_frame_0eb91f37d6014ec1ac6a776fe4702f15 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQW5kb3JyYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQW5kb3JyYSBsYSBWZWxsYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBBTkQKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNzcxNDIKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMS8xOS9GbGFnX29mX0FuZG9ycmEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_40c0800f490c4191a9259a5676b545b1.setContent(i_frame_0eb91f37d6014ec1ac6a776fe4702f15);
        

        marker_ec079c79aeb140b191eaba3eca5b6a68.bindPopup(popup_40c0800f490c4191a9259a5676b545b1)
        ;

        
    
    
            marker_ec079c79aeb140b191eaba3eca5b6a68.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9285dc64b7854a3eb6d44bc20c14d39f = L.marker(
                [-12.126, 17.785],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_dc08f04f02724592872fd4903ad4b938 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9285dc64b7854a3eb6d44bc20c14d39f.setIcon(icon_dc08f04f02724592872fd4903ad4b938);
        
    
        var popup_25606f9667ad4d559c34eeb5b5e9e8a9 = L.popup({"maxWidth": "100%"});

        
            var i_frame_45e5e7f11a58491a957a887ab59393d0 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQW5nb2xhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBMdWFuZGEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQUdPCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQW5nb2xhbiBLd2FuemEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzMTgyNTI5NQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzlkL0ZsYWdfb2ZfQW5nb2xhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_25606f9667ad4d559c34eeb5b5e9e8a9.setContent(i_frame_45e5e7f11a58491a957a887ab59393d0);
        

        marker_9285dc64b7854a3eb6d44bc20c14d39f.bindPopup(popup_25606f9667ad4d559c34eeb5b5e9e8a9)
        ;

        
    
    
            marker_9285dc64b7854a3eb6d44bc20c14d39f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6010034c77114226aebfa5582fdd91e1 = L.marker(
                [17.637999999999998, -61.77],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_cc2379f2b022471fb5f0192588afe872 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6010034c77114226aebfa5582fdd91e1.setIcon(icon_cc2379f2b022471fb5f0192588afe872);
        
    
        var popup_ec1dd89d771448a6aa9e763801c381e6 = L.popup({"maxWidth": "100%"});

        
            var i_frame_30fbfed343aa4f5c8544e1e725251512 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQW50aWd1YSBhbmQgQmFyYnVkYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gU2FpbnQgSm9obidzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEFURwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEVhc3QgQ2FyaWJiZWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDk3MTE4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzgvODkvRmxhZ19vZl9BbnRpZ3VhX2FuZF9CYXJidWRhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ec1dd89d771448a6aa9e763801c381e6.setContent(i_frame_30fbfed343aa4f5c8544e1e725251512);
        

        marker_6010034c77114226aebfa5582fdd91e1.bindPopup(popup_ec1dd89d771448a6aa9e763801c381e6)
        ;

        
    
    
            marker_6010034c77114226aebfa5582fdd91e1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b0655edd5811412191283d5c816ef033 = L.marker(
                [-34.922, -65.28],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_c6c6cedcea674b05bc32a3b78a6863b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0655edd5811412191283d5c816ef033.setIcon(icon_c6c6cedcea674b05bc32a3b78a6863b1);
        
    
        var popup_9824af4db2ea4fdbb1ff68b86e23aed6 = L.popup({"maxWidth": "100%"});

        
            var i_frame_336a0bd6c7fc4ddc9ec121b923ee2256 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQXJnZW50aW5hIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCdWVub3MgQWlyZXMKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQVJHCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQXJnZW50aW5lIFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0NDkzODcxMgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8xLzFhL0ZsYWdfb2ZfQXJnZW50aW5hLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9824af4db2ea4fdbb1ff68b86e23aed6.setContent(i_frame_336a0bd6c7fc4ddc9ec121b923ee2256);
        

        marker_b0655edd5811412191283d5c816ef033.bindPopup(popup_9824af4db2ea4fdbb1ff68b86e23aed6)
        ;

        
    
    
            marker_b0655edd5811412191283d5c816ef033.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_0730d41a82f04d93af9532bb437dc150 = L.marker(
                [40.27, 44.49],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_800d40cf8215404b81ccb42bc84c7ac7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0730d41a82f04d93af9532bb437dc150.setIcon(icon_800d40cf8215404b81ccb42bc84c7ac7);
        
    
        var popup_0daaebd8ce204fb7b08cd5a311a8dd54 = L.popup({"maxWidth": "100%"});

        
            var i_frame_4bb46081213449c688da30d688603574 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQXJtZW5pYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gWWVyZXZhbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBBUk0KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBBcm1lbmlhbiBEcmFtIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjk1NzczMQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8yLzJmL0ZsYWdfb2ZfQXJtZW5pYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0daaebd8ce204fb7b08cd5a311a8dd54.setContent(i_frame_4bb46081213449c688da30d688603574);
        

        marker_0730d41a82f04d93af9532bb437dc150.bindPopup(popup_0daaebd8ce204fb7b08cd5a311a8dd54)
        ;

        
    
    
            marker_0730d41a82f04d93af9532bb437dc150.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_93795ae565cf4b08bdfa8f553db12afb = L.marker(
                [12.51, -69.98],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_dc952e8184bd423f96607fd02b7e1fbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_93795ae565cf4b08bdfa8f553db12afb.setIcon(icon_dc952e8184bd423f96607fd02b7e1fbf);
        
    
        var popup_71ccf9730796402a90ab63165626e109 = L.popup({"maxWidth": "100%"});

        
            var i_frame_1417d5659a8c4f9a9103f2268966d931 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQXJ1YmEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE9yYW5qZXN0YWQKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQVcKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBBcnViYW4gRmxvcmluIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTA2MzE0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL2NvbW1vbnMud2lraW1lZGlhLm9yZy93L2luZGV4LnBocD9zZWFyY2g9YXJ1YmErZmxhZyZ0aXRsZT1TcGVjaWFsJTNBU2VhcmNoJmdvPUdvJm5zMD0xJm5zNj0xJm5zMTI9MSZuczE0PTEmbnMxMDA9MSZuczEwNj0xIy9tZWRpYS9GaWxlOkFydWJhX0ZsYWcuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_71ccf9730796402a90ab63165626e109.setContent(i_frame_1417d5659a8c4f9a9103f2268966d931);
        

        marker_93795ae565cf4b08bdfa8f553db12afb.bindPopup(popup_71ccf9730796402a90ab63165626e109)
        ;

        
    
    
            marker_93795ae565cf4b08bdfa8f553db12afb.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_480c78dd68304b34803db5a4e62c2173 = L.marker(
                [-25.26, 134.95],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0da8e2470b1640b8b55db152708db380 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_480c78dd68304b34803db5a4e62c2173.setIcon(icon_0da8e2470b1640b8b55db152708db380);
        
    
        var popup_81ae97cebfce448db5fb63e99c57769d = L.popup({"maxWidth": "100%"});

        
            var i_frame_09d7077470da41eaa2621cc8413249ef = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQXVzdHJhbGlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDYW5iZXJyYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBBVVMKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBBdXN0cmFsaWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI1MzY0MzA3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzgvODgvRmxhZ19vZl9BdXN0cmFsaWFfJTI4Y29udmVydGVkJTI5LnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_81ae97cebfce448db5fb63e99c57769d.setContent(i_frame_09d7077470da41eaa2621cc8413249ef);
        

        marker_480c78dd68304b34803db5a4e62c2173.bindPopup(popup_81ae97cebfce448db5fb63e99c57769d)
        ;

        
    
    
            marker_480c78dd68304b34803db5a4e62c2173.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_22ce806aa7424208b477299f2fb1ce9d = L.marker(
                [47.63, 14.22],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_56f9bfffd6c9402abb41e524c51fe9fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_22ce806aa7424208b477299f2fb1ce9d.setIcon(icon_56f9bfffd6c9402abb41e524c51fe9fb);
        
    
        var popup_e07fcd0da4c84ee1a458151c356906e4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_ed1220081f3e4f5e89d9f4e90a0f218e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQXVzdHJpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gV2llbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBBVVQKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gODg3NzA2Nwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy80LzQxL0ZsYWdfb2ZfQXVzdHJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e07fcd0da4c84ee1a458151c356906e4.setContent(i_frame_ed1220081f3e4f5e89d9f4e90a0f218e);
        

        marker_22ce806aa7424208b477299f2fb1ce9d.bindPopup(popup_e07fcd0da4c84ee1a458151c356906e4)
        ;

        
    
    
            marker_22ce806aa7424208b477299f2fb1ce9d.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c3288e29bafb43ea95b74aa00e041e27 = L.marker(
                [40.31, 47.97],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4f6c6ca720e14934a535bc5319302dbc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c3288e29bafb43ea95b74aa00e041e27.setIcon(icon_4f6c6ca720e14934a535bc5319302dbc);
        
    
        var popup_b452f017c1a449b5a4ff827cc5f5943d = L.popup({"maxWidth": "100%"});

        
            var i_frame_d28e90da258745e19603fba4c2842a3f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQXplcmJhaWphbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmFrdQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBBWkUKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBBemVyYmFpamFuIE5ldyBNYW5hdCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEwMDIzMzE4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2QvZGQvRmxhZ19vZl9BemVyYmFpamFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_b452f017c1a449b5a4ff827cc5f5943d.setContent(i_frame_d28e90da258745e19603fba4c2842a3f);
        

        marker_c3288e29bafb43ea95b74aa00e041e27.bindPopup(popup_b452f017c1a449b5a4ff827cc5f5943d)
        ;

        
    
    
            marker_c3288e29bafb43ea95b74aa00e041e27.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_ed0f4473aa7c499bac53983f229f4ce0 = L.marker(
                [24.75, -77.99],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_866e2bd3879d46df8d1aa823bc6d1ed0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ed0f4473aa7c499bac53983f229f4ce0.setIcon(icon_866e2bd3879d46df8d1aa823bc6d1ed0);
        
    
        var popup_d974dea4d7134cc0a977fe830c5eb0e9 = L.popup({"maxWidth": "100%"});

        
            var i_frame_701caaa3f8ec4b8088df90ed369db04c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmFoYW1hcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTmFzc2F1Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJIUwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJhaGFtaWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDM4OTQ4Mgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzkzL0ZsYWdfb2ZfdGhlX0JhaGFtYXMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d974dea4d7134cc0a977fe830c5eb0e9.setContent(i_frame_701caaa3f8ec4b8088df90ed369db04c);
        

        marker_ed0f4473aa7c499bac53983f229f4ce0.bindPopup(popup_d974dea4d7134cc0a977fe830c5eb0e9)
        ;

        
    
    
            marker_ed0f4473aa7c499bac53983f229f4ce0.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2886494f7a7d49e8b39827976bd651d3 = L.marker(
                [26.05, 50.53],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_841e823442f645f98cb0dd0677b6af25 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2886494f7a7d49e8b39827976bd651d3.setIcon(icon_841e823442f645f98cb0dd0677b6af25);
        
    
        var popup_d4654cf135984cfca6d8943636d8ebf5 = L.popup({"maxWidth": "100%"});

        
            var i_frame_94e1fbeae2054d3ab244808aa67f095a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmFocmFpbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gYWwtTWFuYW1hCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJIUgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJhaHJhaW5pIERpbmFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTY0MTE3Mgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8yLzJjL0ZsYWdfb2ZfQmFocmFpbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d4654cf135984cfca6d8943636d8ebf5.setContent(i_frame_94e1fbeae2054d3ab244808aa67f095a);
        

        marker_2886494f7a7d49e8b39827976bd651d3.bindPopup(popup_d4654cf135984cfca6d8943636d8ebf5)
        ;

        
    
    
            marker_2886494f7a7d49e8b39827976bd651d3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b78e1e59fa6c495aad65819c69170c32 = L.marker(
                [24.29, 90.01100000000001],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_63e37947158649b0a74fd80a2f658e30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b78e1e59fa6c495aad65819c69170c32.setIcon(icon_63e37947158649b0a74fd80a2f658e30);
        
    
        var popup_4bcbe26a23334bf7ad747344526569b8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_9a7d62eb244445908dcb09045afa40bd = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmFuZ2xhZGVzaCAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gRGhha2EKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQkdECjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQmFuZ2xhZGVzaGkgVGFrYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE2MzA0NjE2MQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9mL2Y5L0ZsYWdfb2ZfQmFuZ2xhZGVzaC5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_4bcbe26a23334bf7ad747344526569b8.setContent(i_frame_9a7d62eb244445908dcb09045afa40bd);
        

        marker_b78e1e59fa6c495aad65819c69170c32.bindPopup(popup_4bcbe26a23334bf7ad747344526569b8)
        ;

        
    
    
            marker_b78e1e59fa6c495aad65819c69170c32.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_a3b697793510450ca7fb702149fdac6c = L.marker(
                [13.18, -59.55],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0e4d2d8cd58642e7af9b1f281ee5c0f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a3b697793510450ca7fb702149fdac6c.setIcon(icon_0e4d2d8cd58642e7af9b1f281ee5c0f1);
        
    
        var popup_7d79c890edb64c9fb104ef1dbfc1698a = L.popup({"maxWidth": "100%"});

        
            var i_frame_348dce00ce7a45308dc8899d467d32db = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmFyYmFkb3MgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJyaWRnZXRvd24KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQlJCCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQmFyYmFkb3MgRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjg3MDI1Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2UvZWYvRmxhZ19vZl9CYXJiYWRvcy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_7d79c890edb64c9fb104ef1dbfc1698a.setContent(i_frame_348dce00ce7a45308dc8899d467d32db);
        

        marker_a3b697793510450ca7fb702149fdac6c.bindPopup(popup_7d79c890edb64c9fb104ef1dbfc1698a)
        ;

        
    
    
            marker_a3b697793510450ca7fb702149fdac6c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_07feb8798dd744fda291133080feb6e4 = L.marker(
                [53.3, 28.01],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_8bcd46cfd7424b84be8fb3fa48bf9657 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07feb8798dd744fda291133080feb6e4.setIcon(icon_8bcd46cfd7424b84be8fb3fa48bf9657);
        
    
        var popup_22fa04003def4ad4ae59c513d3af85b4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_ef8240e2ea7f44c08c3ba856f6da1f9e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmVsYXJ1cyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTWluc2sKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQkxSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQmVsYXJ1c3NpYW4gUnVibGUgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA5NDY2ODU2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzgvODUvRmxhZ19vZl9CZWxhcnVzLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_22fa04003def4ad4ae59c513d3af85b4.setContent(i_frame_ef8240e2ea7f44c08c3ba856f6da1f9e);
        

        marker_07feb8798dd744fda291133080feb6e4.bindPopup(popup_22fa04003def4ad4ae59c513d3af85b4)
        ;

        
    
    
            marker_07feb8798dd744fda291133080feb6e4.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d4ed841ebd34489dbebfaeef6093c878 = L.marker(
                [50.9, 4.27],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9238c8a43e454c30bfde1f8baa97ac71 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4ed841ebd34489dbebfaeef6093c878.setIcon(icon_9238c8a43e454c30bfde1f8baa97ac71);
        
    
        var popup_305bea11dc1547028b04048f906e09db = L.popup({"maxWidth": "100%"});

        
            var i_frame_0b1f185b3c89451b906f53b9d1bdd0f3 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmVsZ2l1bSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQnJ1eGVsbGVzIFtCcnVzc2VsXQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBCRUwKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTE0ODQwNTUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOS85Mi9GbGFnX29mX0JlbGdpdW1fJTI4Y2l2aWwlMjkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_305bea11dc1547028b04048f906e09db.setContent(i_frame_0b1f185b3c89451b906f53b9d1bdd0f3);
        

        marker_d4ed841ebd34489dbebfaeef6093c878.bindPopup(popup_305bea11dc1547028b04048f906e09db)
        ;

        
    
    
            marker_d4ed841ebd34489dbebfaeef6093c878.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_345cc183a1ab4e7b8d8cd52efacae0fd = L.marker(
                [17.59, -88.18],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_13e004df946541f4ab57c589a120f239 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_345cc183a1ab4e7b8d8cd52efacae0fd.setIcon(icon_13e004df946541f4ab57c589a120f239);
        
    
        var popup_22d5b29ade504b0fa790d399e4ca76fe = L.popup({"maxWidth": "100%"});

        
            var i_frame_65b5b2c51aa646c480cb5100a182a44b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmVsaXplIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCZWxtb3Bhbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBCTFoKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBCZWxpemUgRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzkwMzUzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2UvZTcvRmxhZ19vZl9CZWxpemUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_22d5b29ade504b0fa790d399e4ca76fe.setContent(i_frame_65b5b2c51aa646c480cb5100a182a44b);
        

        marker_345cc183a1ab4e7b8d8cd52efacae0fd.bindPopup(popup_22d5b29ade504b0fa790d399e4ca76fe)
        ;

        
    
    
            marker_345cc183a1ab4e7b8d8cd52efacae0fd.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_a7906860b403494ead5623b65fa14bbc = L.marker(
                [9.69, 2.27],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_53ff211f4a1b452eb38a2d98e02b17d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7906860b403494ead5623b65fa14bbc.setIcon(icon_53ff211f4a1b452eb38a2d98e02b17d1);
        
    
        var popup_fdc33aa3944443dab35f72631171493f = L.popup({"maxWidth": "100%"});

        
            var i_frame_1f83d5c4ec8c4dd3b1fb62aae7486eb5 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmVuaW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFBvcnRvLU5vdm8KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQkVOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQ0ZBIEZyYW5jIEJDRUFPIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTE4MDExNTEKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMC8wYS9GbGFnX29mX0JlbmluLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_fdc33aa3944443dab35f72631171493f.setContent(i_frame_1f83d5c4ec8c4dd3b1fb62aae7486eb5);
        

        marker_a7906860b403494ead5623b65fa14bbc.bindPopup(popup_fdc33aa3944443dab35f72631171493f)
        ;

        
    
    
            marker_a7906860b403494ead5623b65fa14bbc.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9ab856603e434a46a0670b3a658f6fcf = L.marker(
                [32.29, -64.79],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_dede8015cbfc4a319b53000f02da57d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9ab856603e434a46a0670b3a658f6fcf.setIcon(icon_dede8015cbfc4a319b53000f02da57d9);
        
    
        var popup_a63713b3820b4342a6c0567cdb8aff97 = L.popup({"maxWidth": "100%"});

        
            var i_frame_fd3a9999ab3b4f45a157ba0a9c0197b6 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmVybXVkYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gSGFtaWx0b24KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQk1VCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQmVybXVkaWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDYzOTE4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL2NvbW1vbnMud2lraW1lZGlhLm9yZy93L2luZGV4LnBocD9zZWFyY2g9YmVybXVkYStmbGFnJnRpdGxlPVNwZWNpYWw6U2VhcmNoJnByb2ZpbGU9YWR2YW5jZWQmZnVsbHRleHQ9MSZhZHZhbmNlZFNlYXJjaC1jdXJyZW50PSU3QiU3RCZuczA9MSZuczY9MSZuczEyPTEmbnMxND0xJm5zMTAwPTEmbnMxMDY9MSMvbWVkaWEvRmlsZTpGbGFnX29mX0Jlcm11ZGEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a63713b3820b4342a6c0567cdb8aff97.setContent(i_frame_fd3a9999ab3b4f45a157ba0a9c0197b6);
        

        marker_9ab856603e434a46a0670b3a658f6fcf.bindPopup(popup_a63713b3820b4342a6c0567cdb8aff97)
        ;

        
    
    
            marker_9ab856603e434a46a0670b3a658f6fcf.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_afd612488f304450aac78f3ef3e444de = L.marker(
                [27.44, 90.39],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7e5a0fa6744a49188070e3a5775aaa73 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_afd612488f304450aac78f3ef3e444de.setIcon(icon_7e5a0fa6744a49188070e3a5775aaa73);
        
    
        var popup_c931762f3ad74001af6f9bca32929772 = L.popup({"maxWidth": "100%"});

        
            var i_frame_716bf6db0ab6421eb1ee20033ee3bdb7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQmh1dGFuIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBUaGltcGh1Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJUTgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJodXRhbiBOZ3VsdHJ1bSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDc2MzA5Mgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzkxL0ZsYWdfb2ZfQmh1dGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_c931762f3ad74001af6f9bca32929772.setContent(i_frame_716bf6db0ab6421eb1ee20033ee3bdb7);
        

        marker_afd612488f304450aac78f3ef3e444de.bindPopup(popup_c931762f3ad74001af6f9bca32929772)
        ;

        
    
    
            marker_afd612488f304450aac78f3ef3e444de.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6343c13975494c189c5f27a10b526ef5 = L.marker(
                [-16.59, -64.88],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_46fb63b75ada493dacf4e905f1341403 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6343c13975494c189c5f27a10b526ef5.setIcon(icon_46fb63b75ada493dacf4e905f1341403);
        
    
        var popup_931b60bf419244da8fbbad441813cb1c = L.popup({"maxWidth": "100%"});

        
            var i_frame_6dff63ae06544a2781fa3c79f8ac4af7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQm9saXZpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTGEgUGF6Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJPTAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJvbGl2aWFubyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDExNTEzMTAwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNDgvRmxhZ19vZl9Cb2xpdmlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_931b60bf419244da8fbbad441813cb1c.setContent(i_frame_6dff63ae06544a2781fa3c79f8ac4af7);
        

        marker_6343c13975494c189c5f27a10b526ef5.bindPopup(popup_931b60bf419244da8fbbad441813cb1c)
        ;

        
    
    
            marker_6343c13975494c189c5f27a10b526ef5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_131a31499b274574a7c330f6d7d39561 = L.marker(
                [43.92, 18.29],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_97923d53b1994357a41f6e19a9167cb6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_131a31499b274574a7c330f6d7d39561.setIcon(icon_97923d53b1994357a41f6e19a9167cb6);
        
    
        var popup_190f7da03b0349d789d7cf8a5da8c447 = L.popup({"maxWidth": "100%"});

        
            var i_frame_8aec178dbfa647df824adccb5f38ebe0 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQm9zbmlhIGFuZCBIZXJ6ZWdvdmluYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gU2FyYWpldm8KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQklICjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTWFya2EgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzMzAxMDAwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2IvYmYvRmxhZ19vZl9Cb3NuaWFfYW5kX0hlcnplZ292aW5hLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_190f7da03b0349d789d7cf8a5da8c447.setContent(i_frame_8aec178dbfa647df824adccb5f38ebe0);
        

        marker_131a31499b274574a7c330f6d7d39561.bindPopup(popup_190f7da03b0349d789d7cf8a5da8c447)
        ;

        
    
    
            marker_131a31499b274574a7c330f6d7d39561.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_27fe4148092b4089a801f90644fd889a = L.marker(
                [-22.076999999999998, 24.08],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_ba2ea3ca0f0243878335f553359948a1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27fe4148092b4089a801f90644fd889a.setIcon(icon_ba2ea3ca0f0243878335f553359948a1);
        
    
        var popup_e946e563ecd143558849527bf66c9203 = L.popup({"maxWidth": "100%"});

        
            var i_frame_81c4d55f16a84576ac9b8ea0a37e8f38 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQm90c3dhbmEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEdhYm9yb25lCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJXQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJvdHN3YW5hIFB1bGEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyMzAzNjk3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZmEvRmxhZ19vZl9Cb3Rzd2FuYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e946e563ecd143558849527bf66c9203.setContent(i_frame_81c4d55f16a84576ac9b8ea0a37e8f38);
        

        marker_27fe4148092b4089a801f90644fd889a.bindPopup(popup_e946e563ecd143558849527bf66c9203)
        ;

        
    
    
            marker_27fe4148092b4089a801f90644fd889a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_21d825bd3e5d4561ae2a7f6cdac64c17 = L.marker(
                [-7.832999999999999, -54.74],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_60a5be13e10e420cb178a5e2e3157c95 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_21d825bd3e5d4561ae2a7f6cdac64c17.setIcon(icon_60a5be13e10e420cb178a5e2e3157c95);
        
    
        var popup_9f46b959428442e592d34b8466a9ffbb = L.popup({"maxWidth": "100%"});

        
            var i_frame_d6d4285c3988400ab75bcb4d91b7c2af = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQnJhemlsIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCcmFzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJSQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJyYXppbGlhbiBSZWFsIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjExMDQ5NTI3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9lbi8wLzA1L0ZsYWdfb2ZfQnJhemlsLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9f46b959428442e592d34b8466a9ffbb.setContent(i_frame_d6d4285c3988400ab75bcb4d91b7c2af);
        

        marker_21d825bd3e5d4561ae2a7f6cdac64c17.bindPopup(popup_9f46b959428442e592d34b8466a9ffbb)
        ;

        
    
    
            marker_21d825bd3e5d4561ae2a7f6cdac64c17.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_27bb5203e2cf43fdabafc137a32e7313 = L.marker(
                [4.5, 114.6],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4bb0ae3732a2458e94d018a1dd3fb2a1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27bb5203e2cf43fdabafc137a32e7313.setIcon(icon_4bb0ae3732a2458e94d018a1dd3fb2a1);
        
    
        var popup_382e5e41e73f452f8427d331d13716e8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_3fa0e0258b5b4163a264ce7eea97ee68 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQnJ1bmVpIERhcnVzc2FsYW0gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJhbmRhciBTZXJpIEJlZ2F3YW4KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQlJOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQnJ1bmVpIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDQzMzI4NQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzljL0ZsYWdfb2ZfQnJ1bmVpLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_382e5e41e73f452f8427d331d13716e8.setContent(i_frame_3fa0e0258b5b4163a264ce7eea97ee68);
        

        marker_27bb5203e2cf43fdabafc137a32e7313.bindPopup(popup_382e5e41e73f452f8427d331d13716e8)
        ;

        
    
    
            marker_27bb5203e2cf43fdabafc137a32e7313.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_256c7600e5da469887e27574401792e3 = L.marker(
                [42.47, 25.36],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0333bd0dbbd3428dbbaacd4afafddee1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_256c7600e5da469887e27574401792e3.setIcon(icon_0333bd0dbbd3428dbbaacd4afafddee1);
        
    
        var popup_9f5499fd6c57473aa366a3eca33392b3 = L.popup({"maxWidth": "100%"});

        
            var i_frame_02f05490379943c49a903a24fd65f867 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQnVsZ2FyaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNvZmlhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJHUgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJ1bGdhcmlhbiBMZXYgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA2OTc1NzYxCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzkvOWEvRmxhZ19vZl9CdWxnYXJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9f5499fd6c57473aa366a3eca33392b3.setContent(i_frame_02f05490379943c49a903a24fd65f867);
        

        marker_256c7600e5da469887e27574401792e3.bindPopup(popup_9f5499fd6c57473aa366a3eca33392b3)
        ;

        
    
    
            marker_256c7600e5da469887e27574401792e3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_5ef899db9ac64fb5801c83c48a3a59f7 = L.marker(
                [12.3, -1.98],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e68f597473fd4d43817b259c2efc540a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5ef899db9ac64fb5801c83c48a3a59f7.setIcon(icon_e68f597473fd4d43817b259c2efc540a);
        
    
        var popup_d5158339574e4c5ca5a322af7afc5d4e = L.popup({"maxWidth": "100%"});

        
            var i_frame_4bae45ee27c44e618f93cdc6f80074db = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQnVya2luYSBGYXNvIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBPdWFnYWRvdWdvdQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBCRkEKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDRkEgRnJhbmMgQkNFQU8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyMDMyMTM3OAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8zLzMxL0ZsYWdfb2ZfQnVya2luYV9GYXNvLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d5158339574e4c5ca5a322af7afc5d4e.setContent(i_frame_4bae45ee27c44e618f93cdc6f80074db);
        

        marker_5ef899db9ac64fb5801c83c48a3a59f7.bindPopup(popup_d5158339574e4c5ca5a322af7afc5d4e)
        ;

        
    
    
            marker_5ef899db9ac64fb5801c83c48a3a59f7.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b174f73f5f3e42ca88670fc41079e300 = L.marker(
                [-3.28, 29.83],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_ef458832976f4c50b9b78d85c6020d99 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b174f73f5f3e42ca88670fc41079e300.setIcon(icon_ef458832976f4c50b9b78d85c6020d99);
        
    
        var popup_0430a6bd9a4f4cb4acc109251a1af468 = L.popup({"maxWidth": "100%"});

        
            var i_frame_82d29ea2d4af430baf41b47eb8bdcf43 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQnVydW5kaSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQnVqdW1idXJhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEJESQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEJ1cnVuZGkgRnJhbmMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMTUzMDU4MAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy81LzUwL0ZsYWdfb2ZfQnVydW5kaS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0430a6bd9a4f4cb4acc109251a1af468.setContent(i_frame_82d29ea2d4af430baf41b47eb8bdcf43);
        

        marker_b174f73f5f3e42ca88670fc41079e300.bindPopup(popup_0430a6bd9a4f4cb4acc109251a1af468)
        ;

        
    
    
            marker_b174f73f5f3e42ca88670fc41079e300.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_3cd25cb433334b0e8c951430c7b55d20 = L.marker(
                [12.78, 104.84],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_751c7ad64f3c4d04af3e9b9dbd648bf6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3cd25cb433334b0e8c951430c7b55d20.setIcon(icon_751c7ad64f3c4d04af3e9b9dbd648bf6);
        
    
        var popup_87fea16988cb4edbac07c3319f958279 = L.popup({"maxWidth": "100%"});

        
            var i_frame_4de41b1a8e3e4c4e9e3d9e04fcf45116 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2FtYm9kaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFBobm9tIFBlbmgKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gS0hNCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gS2FtcHVjaGVhbiBSaWVsIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTY0ODY1NDIKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOC84My9GbGFnX29mX0NhbWJvZGlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_87fea16988cb4edbac07c3319f958279.setContent(i_frame_4de41b1a8e3e4c4e9e3d9e04fcf45116);
        

        marker_3cd25cb433334b0e8c951430c7b55d20.bindPopup(popup_87fea16988cb4edbac07c3319f958279)
        ;

        
    
    
            marker_3cd25cb433334b0e8c951430c7b55d20.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b810ad8e246d419d9402cb45195b5db5 = L.marker(
                [5.77, 12.67],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_defa443821ba42a790d2184fda4e5fba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b810ad8e246d419d9402cb45195b5db5.setIcon(icon_defa443821ba42a790d2184fda4e5fba);
        
    
        var popup_1ccff692d033423cb8e33672252dc581 = L.popup({"maxWidth": "100%"});

        
            var i_frame_6f4b7f567e184a84b1b9dfc2ab39b229 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2FtZXJvb24gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFlhb3VuZAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBDTVIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDRkEgRnJhbmMgQkVBQyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI1ODc2MzgwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNGYvRmxhZ19vZl9DYW1lcm9vbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_1ccff692d033423cb8e33672252dc581.setContent(i_frame_6f4b7f567e184a84b1b9dfc2ab39b229);
        

        marker_b810ad8e246d419d9402cb45195b5db5.bindPopup(popup_1ccff692d033423cb8e33672252dc581)
        ;

        
    
    
            marker_b810ad8e246d419d9402cb45195b5db5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6e71f9eabcd447bfa774efecd2d9c618 = L.marker(
                [60.74, -111.3],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_24d1647b73114ac4bf3a8f9a40513bf5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6e71f9eabcd447bfa774efecd2d9c618.setIcon(icon_24d1647b73114ac4bf3a8f9a40513bf5);
        
    
        var popup_33c6c422b4804f5a831ea936284a74a0 = L.popup({"maxWidth": "100%"});

        
            var i_frame_53e2fb03ae134f7aa1cf8cf141d91975 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2FuYWRhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBPdHRhd2EKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQ0FOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQ2FuYWRpYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzc1ODkyNjIKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2VuL2MvY2YvRmxhZ19vZl9DYW5hZGEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_33c6c422b4804f5a831ea936284a74a0.setContent(i_frame_53e2fb03ae134f7aa1cf8cf141d91975);
        

        marker_6e71f9eabcd447bfa774efecd2d9c618.bindPopup(popup_33c6c422b4804f5a831ea936284a74a0)
        ;

        
    
    
            marker_6e71f9eabcd447bfa774efecd2d9c618.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_556d6c64fa6949a8bad19d8a7932148f = L.marker(
                [19.32, -81.26],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_493797d5e76a4b8b820169300fad7f14 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_556d6c64fa6949a8bad19d8a7932148f.setIcon(icon_493797d5e76a4b8b820169300fad7f14);
        
    
        var popup_547c7c281f424a64b3912e169eabbc54 = L.popup({"maxWidth": "100%"});

        
            var i_frame_3bb25751078445828ec2c81763156a11 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2F5bWFuIElzbGFuZHMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEdlb3JnZSBUb3duCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENZTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENheW1hbiBJc2xhbmRzIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDY0OTQ4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzMvMzgvRmxhZ19vZl9DYXBlX1ZlcmRlLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_547c7c281f424a64b3912e169eabbc54.setContent(i_frame_3bb25751078445828ec2c81763156a11);
        

        marker_556d6c64fa6949a8bad19d8a7932148f.bindPopup(popup_547c7c281f424a64b3912e169eabbc54)
        ;

        
    
    
            marker_556d6c64fa6949a8bad19d8a7932148f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2e21f68a78d94bb99fad0708e9b9d297 = L.marker(
                [6.55, 20.3],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_64614551caa546628effa6f92a3357c6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e21f68a78d94bb99fad0708e9b9d297.setIcon(icon_64614551caa546628effa6f92a3357c6);
        
    
        var popup_d8e31a1941954793a4b57ed038706659 = L.popup({"maxWidth": "100%"});

        
            var i_frame_82e46ec5b96d41f199769012f87fe773 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2VudHJhbCBBZnJpY2FuIFJlcHVibGljIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCYW5ndWkKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQ0FGCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQ0ZBIEZyYW5jIEJFQUMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0NzQ1MTg1Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzYvNmYvRmxhZ19vZl90aGVfQ2VudHJhbF9BZnJpY2FuX1JlcHVibGljLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d8e31a1941954793a4b57ed038706659.setContent(i_frame_82e46ec5b96d41f199769012f87fe773);
        

        marker_2e21f68a78d94bb99fad0708e9b9d297.bindPopup(popup_d8e31a1941954793a4b57ed038706659)
        ;

        
    
    
            marker_2e21f68a78d94bb99fad0708e9b9d297.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_4d020df72cf14b8dabb3246b2f280cce = L.marker(
                [15.17, 18.7],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_aa8ed5b94687444c9eb86b2c18947cca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4d020df72cf14b8dabb3246b2f280cce.setIcon(icon_aa8ed5b94687444c9eb86b2c18947cca);
        
    
        var popup_6df454c6564d42e3a1547e166f21e77e = L.popup({"maxWidth": "100%"});

        
            var i_frame_1d6eff6990e8420f9c7071e6740de667 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2hhZCAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTidEamFtCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFRDRAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENGQSBGcmFuYyBCRUFDIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTU5NDY4NzYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNC80Yi9GbGFnX29mX0NoYWQuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_6df454c6564d42e3a1547e166f21e77e.setContent(i_frame_1d6eff6990e8420f9c7071e6740de667);
        

        marker_4d020df72cf14b8dabb3246b2f280cce.bindPopup(popup_6df454c6564d42e3a1547e166f21e77e)
        ;

        
    
    
            marker_4d020df72cf14b8dabb3246b2f280cce.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_4a1000d538034ed283c75f470239a3ad = L.marker(
                [-26.71, -69.89],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a3bc599c6d794a23bb6168b22bdefcb7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4a1000d538034ed283c75f470239a3ad.setIcon(icon_a3bc599c6d794a23bb6168b22bdefcb7);
        
    
        var popup_a5cec985e0f54de5ad9c5d8af5b5813a = L.popup({"maxWidth": "100%"});

        
            var i_frame_898bfcb6541241b39bc0be0d2fab4635 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2hpbGUgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNhbnRpYWdvIGRlIENoaWxlCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENITAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENoaWxlYW7CoFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxODk1MjAzOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy83Lzc4L0ZsYWdfb2ZfQ2hpbGUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a5cec985e0f54de5ad9c5d8af5b5813a.setContent(i_frame_898bfcb6541241b39bc0be0d2fab4635);
        

        marker_4a1000d538034ed283c75f470239a3ad.bindPopup(popup_a5cec985e0f54de5ad9c5d8af5b5813a)
        ;

        
    
    
            marker_4a1000d538034ed283c75f470239a3ad.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_7b5a8bf245b446c19c4bce266e09206c = L.marker(
                [34.82, 104.15],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_96edd3d3894b4321a9b404ece4ca80af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7b5a8bf245b446c19c4bce266e09206c.setIcon(icon_96edd3d3894b4321a9b404ece4ca80af);
        
    
        var popup_57da4b81556c47a3be3e060c02675390 = L.popup({"maxWidth": "100%"});

        
            var i_frame_1e511d17e6ef4e758063d9b906a39e47 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ2hpbmEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJlaWppbmcKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQ0hOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gWXVhbiBSZW5taW5iaSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEzOTc3MTUwMDAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZi9mYS9GbGFnX29mX3RoZV9QZW9wbGUlMjdzX1JlcHVibGljX29mX0NoaW5hLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_57da4b81556c47a3be3e060c02675390.setContent(i_frame_1e511d17e6ef4e758063d9b906a39e47);
        

        marker_7b5a8bf245b446c19c4bce266e09206c.bindPopup(popup_57da4b81556c47a3be3e060c02675390)
        ;

        
    
    
            marker_7b5a8bf245b446c19c4bce266e09206c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_790b0f67e1464452ab784e1e5a5e16e2 = L.marker(
                [3.6, -73.57],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_90c280b45f0c42ca917d137103a6492c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_790b0f67e1464452ab784e1e5a5e16e2.setIcon(icon_90c280b45f0c42ca917d137103a6492c);
        
    
        var popup_e4fdcea801ab4d26b34886a9ca295db8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_d7b53ea1e15a4b6ca597fd6acd452405 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ29sb21iaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNhbnRhZgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBDT0wKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDb2xvbWJpYW7CoFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA1MDMzOTQ0Mwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8yLzIxL0ZsYWdfb2ZfQ29sb21iaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e4fdcea801ab4d26b34886a9ca295db8.setContent(i_frame_d7b53ea1e15a4b6ca597fd6acd452405);
        

        marker_790b0f67e1464452ab784e1e5a5e16e2.bindPopup(popup_e4fdcea801ab4d26b34886a9ca295db8)
        ;

        
    
    
            marker_790b0f67e1464452ab784e1e5a5e16e2.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_e9090b01ec8a480188909529472ac6f3 = L.marker(
                [-11.66, 43.26],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b3948a30ccc34b38aae981692f900b96 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e9090b01ec8a480188909529472ac6f3.setIcon(icon_b3948a30ccc34b38aae981692f900b96);
        
    
        var popup_61a42872c25848d78b14ca20dca860ce = L.popup({"maxWidth": "100%"});

        
            var i_frame_e8c037caf7d44bc9a012160b5de039e4 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ29tb3JvcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTW9yb25pCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENPTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENvbW9yb3MgRnJhbmMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA4NTA4ODYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOS85NC9GbGFnX29mX3RoZV9Db21vcm9zLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_61a42872c25848d78b14ca20dca860ce.setContent(i_frame_e8c037caf7d44bc9a012160b5de039e4);
        

        marker_e9090b01ec8a480188909529472ac6f3.bindPopup(popup_61a42872c25848d78b14ca20dca860ce)
        ;

        
    
    
            marker_e9090b01ec8a480188909529472ac6f3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6a1b8afbe927481cbd88ac4092efa294 = L.marker(
                [-0.73, 15.53],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b3f110e570ce4f10ac2284ec095e60a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6a1b8afbe927481cbd88ac4092efa294.setIcon(icon_b3f110e570ce4f10ac2284ec095e60a7);
        
    
        var popup_18edae097e5c4167aa14004be163521e = L.popup({"maxWidth": "100%"});

        
            var i_frame_5be52765dda34473977af3d8c68d5ece = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ29uZ28gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJyYXp6YXZpbGxlCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENPRwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENGQSBGcmFuYyBCRUFDIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTM4MDUwOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzkyL0ZsYWdfb2ZfdGhlX1JlcHVibGljX29mX3RoZV9Db25nby5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_18edae097e5c4167aa14004be163521e.setContent(i_frame_5be52765dda34473977af3d8c68d5ece);
        

        marker_6a1b8afbe927481cbd88ac4092efa294.bindPopup(popup_18edae097e5c4167aa14004be163521e)
        ;

        
    
    
            marker_6a1b8afbe927481cbd88ac4092efa294.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_06528dcbbdfa408d8b4b50b6602c8a54 = L.marker(
                [-2.57, 24.32],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_c2c886d96b4142b889009b3e36e5b27b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_06528dcbbdfa408d8b4b50b6602c8a54.setIcon(icon_c2c886d96b4142b889009b3e36e5b27b);
        
    
        var popup_e7a0164f0ee845ae918d3018b30c53d6 = L.popup({"maxWidth": "100%"});

        
            var i_frame_364ae20824a048238ee2c6ed43cbc848 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ29uZ28sIFRoZSBEZW1vY3JhdGljIFJlcHVibGljIG9mIHRoZSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gS2luc2hhc2EKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQ09ECjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRnJhbmNzIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gODY3OTA1NjcKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNi82Zi9GbGFnX29mX3RoZV9EZW1vY3JhdGljX1JlcHVibGljX29mX3RoZV9Db25nby5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e7a0164f0ee845ae918d3018b30c53d6.setContent(i_frame_364ae20824a048238ee2c6ed43cbc848);
        

        marker_06528dcbbdfa408d8b4b50b6602c8a54.bindPopup(popup_e7a0164f0ee845ae918d3018b30c53d6)
        ;

        
    
    
            marker_06528dcbbdfa408d8b4b50b6602c8a54.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_799f4eed7b03428ab8fdf12f98c2633f = L.marker(
                [10.45, -84.35],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_82be71806e2045d8a64941a828196f40 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_799f4eed7b03428ab8fdf12f98c2633f.setIcon(icon_82be71806e2045d8a64941a828196f40);
        
    
        var popup_28f2865a6769483f95d94b8641073af0 = L.popup({"maxWidth": "100%"});

        
            var i_frame_e2a4769f0b104421acae5c8d9051ef48 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ29zdGEgUmljYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gU2FuIEpvcwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBDUkkKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDb3N0YcKgUmljYW7CoENvbG9uIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTA0NzU2MQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9mL2YyL0ZsYWdfb2ZfQ29zdGFfUmljYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_28f2865a6769483f95d94b8641073af0.setContent(i_frame_e2a4769f0b104421acae5c8d9051ef48);
        

        marker_799f4eed7b03428ab8fdf12f98c2633f.bindPopup(popup_28f2865a6769483f95d94b8641073af0)
        ;

        
    
    
            marker_799f4eed7b03428ab8fdf12f98c2633f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6a5c725755004026bc3cae1dfdfd1d3a = L.marker(
                [45.14, 14.75],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e0599d87efb34ae38b88607f72b12a42 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6a5c725755004026bc3cae1dfdfd1d3a.setIcon(icon_e0599d87efb34ae38b88607f72b12a42);
        
    
        var popup_23fef36518d04c16a338c6b883867534 = L.popup({"maxWidth": "100%"});

        
            var i_frame_28f50c5441384eb691cada94ca9456e8 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ3JvYXRpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gWmFncmViCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEhSVgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENyb2F0aWFuIEt1bmEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0MDY3NTAwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzEvMWIvRmxhZ19vZl9Dcm9hdGlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_23fef36518d04c16a338c6b883867534.setContent(i_frame_28f50c5441384eb691cada94ca9456e8);
        

        marker_6a5c725755004026bc3cae1dfdfd1d3a.bindPopup(popup_23fef36518d04c16a338c6b883867534)
        ;

        
    
    
            marker_6a5c725755004026bc3cae1dfdfd1d3a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_61b1d94560fb45d596236a5eef9f46b1 = L.marker(
                [21.67, -79.02],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_49815c4ca84c4c1a903f79069dad5830 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_61b1d94560fb45d596236a5eef9f46b1.setIcon(icon_49815c4ca84c4c1a903f79069dad5830);
        
    
        var popup_97be699aa92b44ca826dd3557b9bf4be = L.popup({"maxWidth": "100%"});

        
            var i_frame_a3637a4bc00d424aac90dd1826f5a66a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ3ViYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTGEgSGFiYW5hCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENVQgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEN1YmFuIFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMTMzMzQ4Mwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9iL2JkL0ZsYWdfb2ZfQ3ViYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_97be699aa92b44ca826dd3557b9bf4be.setContent(i_frame_a3637a4bc00d424aac90dd1826f5a66a);
        

        marker_61b1d94560fb45d596236a5eef9f46b1.bindPopup(popup_97be699aa92b44ca826dd3557b9bf4be)
        ;

        
    
    
            marker_61b1d94560fb45d596236a5eef9f46b1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bd31a527c52448b69f2d64be1a6e33bc = L.marker(
                [35.05, 33.22],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_8bcf3e74f29748d1ad3d36014f5f2b10 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bd31a527c52448b69f2d64be1a6e33bc.setIcon(icon_8bcf3e74f29748d1ad3d36014f5f2b10);
        
    
        var popup_932eabe968804dc3806a24cfb01d8363 = L.popup({"maxWidth": "100%"});

        
            var i_frame_244b3ec2eb4b4801adb1ca2c71f5e5b0 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ3lwcnVzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBOaWNvc2lhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENZUAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEV1cm8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMTk4NTc1Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2QvZDQvRmxhZ19vZl9DeXBydXMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_932eabe968804dc3806a24cfb01d8363.setContent(i_frame_244b3ec2eb4b4801adb1ca2c71f5e5b0);
        

        marker_bd31a527c52448b69f2d64be1a6e33bc.bindPopup(popup_932eabe968804dc3806a24cfb01d8363)
        ;

        
    
    
            marker_bd31a527c52448b69f2d64be1a6e33bc.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b1401a4c9ebe4df7842681f8d26ea169 = L.marker(
                [49.67, 14.95],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9691bbfdaae64414ae6443c8d9f660cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b1401a4c9ebe4df7842681f8d26ea169.setIcon(icon_9691bbfdaae64414ae6443c8d9f660cb);
        
    
        var popup_ce01365d6bf348fcbb00ce624a1418f8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_5c594c40057142fab80c68fe3360124c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gQ3plY2ggUmVwdWJsaWMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFByYWhhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IENaRQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEN6ZWNoIEtvcnVuYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEwNjY5NzA5Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2MvY2IvRmxhZ19vZl90aGVfQ3plY2hfUmVwdWJsaWMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ce01365d6bf348fcbb00ce624a1418f8.setContent(i_frame_5c594c40057142fab80c68fe3360124c);
        

        marker_b1401a4c9ebe4df7842681f8d26ea169.bindPopup(popup_ce01365d6bf348fcbb00ce624a1418f8)
        ;

        
    
    
            marker_b1401a4c9ebe4df7842681f8d26ea169.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_76bcab1866fc4096bb95a4bfe5570776 = L.marker(
                [55.76, 10.32],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_c68b1875174e4e089208dbea7b9a70c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_76bcab1866fc4096bb95a4bfe5570776.setIcon(icon_c68b1875174e4e089208dbea7b9a70c3);
        
    
        var popup_e4fcb0257e7b40c2ae992a8f7d4b243f = L.popup({"maxWidth": "100%"});

        
            var i_frame_0d023f25246040b884e6dba7c0f58b6b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRGVubWFyayAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQ29wZW5oYWdlbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBETksKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBEYW5pc2jCoEtyb25lIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTgxODU1Mwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzljL0ZsYWdfb2ZfRGVubWFyay5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e4fcb0257e7b40c2ae992a8f7d4b243f.setContent(i_frame_0d023f25246040b884e6dba7c0f58b6b);
        

        marker_76bcab1866fc4096bb95a4bfe5570776.bindPopup(popup_e4fcb0257e7b40c2ae992a8f7d4b243f)
        ;

        
    
    
            marker_76bcab1866fc4096bb95a4bfe5570776.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d2555c965abf41c79f2277d6ef4ffe62 = L.marker(
                [11.75, 42.55],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b66800d24633493c9c3c4abe9639f162 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d2555c965abf41c79f2277d6ef4ffe62.setIcon(icon_b66800d24633493c9c3c4abe9639f162);
        
    
        var popup_420b250f566d41dea081fd00ad619036 = L.popup({"maxWidth": "100%"});

        
            var i_frame_c91086d2d8c140f8b654edee041887d4 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRGppYm91dGkgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IERqaWJvdXRpCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IERKSQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IERqaWJvdXRpIEZyYW5jIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gOTczNTYwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzMvMzQvRmxhZ19vZl9Eamlib3V0aS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_420b250f566d41dea081fd00ad619036.setContent(i_frame_c91086d2d8c140f8b654edee041887d4);
        

        marker_d2555c965abf41c79f2277d6ef4ffe62.bindPopup(popup_420b250f566d41dea081fd00ad619036)
        ;

        
    
    
            marker_d2555c965abf41c79f2277d6ef4ffe62.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_1cb81959fa2647e6a510be99c569a0fe = L.marker(
                [15.49, -61.37],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_97184804cf714f429dff94c91aaa7cdd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1cb81959fa2647e6a510be99c569a0fe.setIcon(icon_97184804cf714f429dff94c91aaa7cdd);
        
    
        var popup_0249dd8e88a0428388c7800ceecdfa6a = L.popup({"maxWidth": "100%"});

        
            var i_frame_47a8b535ba464736a452999273811f5d = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRG9taW5pY2EgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFJvc2VhdQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBETUEKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFYXN0IENhcmliYmVhbiBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA3MTgwOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9jL2M0L0ZsYWdfb2ZfRG9taW5pY2Euc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0249dd8e88a0428388c7800ceecdfa6a.setContent(i_frame_47a8b535ba464736a452999273811f5d);
        

        marker_1cb81959fa2647e6a510be99c569a0fe.bindPopup(popup_0249dd8e88a0428388c7800ceecdfa6a)
        ;

        
    
    
            marker_1cb81959fa2647e6a510be99c569a0fe.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_66f57f332e4f419582588112d5463f90 = L.marker(
                [18.99, -70.1],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e9d1b78e0b214a549b4f3139023038a6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_66f57f332e4f419582588112d5463f90.setIcon(icon_e9d1b78e0b214a549b4f3139023038a6);
        
    
        var popup_26a610a2f7ff436c88a70d1eabab9436 = L.popup({"maxWidth": "100%"});

        
            var i_frame_6175eb2943f146619aadddd1e6fb5692 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRG9taW5pY2FuIFJlcHVibGljIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBTYW50byBEb21pbmdvIGRlIEd1em0KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gRE9NCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRG9taW5pY2FuIFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMDczODk1OAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85LzlmL0ZsYWdfb2ZfdGhlX0RvbWluaWNhbl9SZXB1YmxpYy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_26a610a2f7ff436c88a70d1eabab9436.setContent(i_frame_6175eb2943f146619aadddd1e6fb5692);
        

        marker_66f57f332e4f419582588112d5463f90.bindPopup(popup_26a610a2f7ff436c88a70d1eabab9436)
        ;

        
    
    
            marker_66f57f332e4f419582588112d5463f90.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_19c1720f7c014547b51a1c09c28cd100 = L.marker(
                [-1.46, -78.22],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9cd57d5c0df0422c9d2a47095f52a430 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_19c1720f7c014547b51a1c09c28cd100.setIcon(icon_9cd57d5c0df0422c9d2a47095f52a430);
        
    
        var popup_20a1ca593d7f4d18a08c4e3a475db1ec = L.popup({"maxWidth": "100%"});

        
            var i_frame_80447e4f88c74a99904b22fcfb43247c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRWN1YWRvciAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUXVpdG8KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gRUNVCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRWN1YWRvciBTdWNyZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE3MzczNjYyCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2UvZTgvRmxhZ19vZl9FY3VhZG9yLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_20a1ca593d7f4d18a08c4e3a475db1ec.setContent(i_frame_80447e4f88c74a99904b22fcfb43247c);
        

        marker_19c1720f7c014547b51a1c09c28cd100.bindPopup(popup_20a1ca593d7f4d18a08c4e3a475db1ec)
        ;

        
    
    
            marker_19c1720f7c014547b51a1c09c28cd100.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_a0fd18fbe20449fcac6f76ae94c3c296 = L.marker(
                [26.96, 29.6],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_fd59369eb35e4088996ee60baf1bbc5c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a0fd18fbe20449fcac6f76ae94c3c296.setIcon(icon_fd59369eb35e4088996ee60baf1bbc5c);
        
    
        var popup_5cfe9bdfbc3d4ba18fb70dcd947eab14 = L.popup({"maxWidth": "100%"});

        
            var i_frame_a6d234d580d0455a87f1c505d6de3f27 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRWd5cHQgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IENhaXJvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEVHWQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEVneXB0aWFuIFBvdW5kIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTAwMzg4MDczCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZmUvRmxhZ19vZl9FZ3lwdC5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5cfe9bdfbc3d4ba18fb70dcd947eab14.setContent(i_frame_a6d234d580d0455a87f1c505d6de3f27);
        

        marker_a0fd18fbe20449fcac6f76ae94c3c296.bindPopup(popup_5cfe9bdfbc3d4ba18fb70dcd947eab14)
        ;

        
    
    
            marker_a0fd18fbe20449fcac6f76ae94c3c296.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_aa45863edf114fb08fff64cef5eaddb1 = L.marker(
                [13.69, -89.27],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_17e6e2fd20a046da8e91a65bc73aafb0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_aa45863edf114fb08fff64cef5eaddb1.setIcon(icon_17e6e2fd20a046da8e91a65bc73aafb0);
        
    
        var popup_5fb528706ac54096bb0a70850576f4d4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_411d2ef18b724cddb515bb4c03a7da8f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRWwgU2FsdmFkb3IgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNhbiBTYWx2YWRvcgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBTTFYKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFbCBTYWx2YWRvciBDb2xvbiAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDY0NTM1NTMKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zNC9GbGFnX29mX0VsX1NhbHZhZG9yLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5fb528706ac54096bb0a70850576f4d4.setContent(i_frame_411d2ef18b724cddb515bb4c03a7da8f);
        

        marker_aa45863edf114fb08fff64cef5eaddb1.bindPopup(popup_5fb528706ac54096bb0a70850576f4d4)
        ;

        
    
    
            marker_aa45863edf114fb08fff64cef5eaddb1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_49ddb8725b4d43c399a814bee0cc058e = L.marker(
                [1.74, 10.41],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3518612723154e2f970e59fff72f9335 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49ddb8725b4d43c399a814bee0cc058e.setIcon(icon_3518612723154e2f970e59fff72f9335);
        
    
        var popup_035ffac55963440b98e98a3f0e669049 = L.popup({"maxWidth": "100%"});

        
            var i_frame_f5909e157a84494d95545753d58306e7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRXF1YXRvcmlhbCBHdWluZWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE1hbGFibwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBHTlEKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDRkEgRnJhbmMgQkVBQyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEzNTU5ODYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zMS9GbGFnX29mX0VxdWF0b3JpYWxfR3VpbmVhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_035ffac55963440b98e98a3f0e669049.setContent(i_frame_f5909e157a84494d95545753d58306e7);
        

        marker_49ddb8725b4d43c399a814bee0cc058e.bindPopup(popup_035ffac55963440b98e98a3f0e669049)
        ;

        
    
    
            marker_49ddb8725b4d43c399a814bee0cc058e.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6783c29d8d0948fdabe6369f684ea044 = L.marker(
                [58.9, 25.79],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_aa0819057b2f49ae89a4b63b53de3397 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6783c29d8d0948fdabe6369f684ea044.setIcon(icon_aa0819057b2f49ae89a4b63b53de3397);
        
    
        var popup_ceda6aa086be427fab5c290db08ce270 = L.popup({"maxWidth": "100%"});

        
            var i_frame_0eb36d056eea4d5d9d27f956c603adea = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRXN0b25pYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVGFsbGlubgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBFU1QKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTMyNjU5MAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy84LzhmL0ZsYWdfb2ZfRXN0b25pYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ceda6aa086be427fab5c290db08ce270.setContent(i_frame_0eb36d056eea4d5d9d27f956c603adea);
        

        marker_6783c29d8d0948fdabe6369f684ea044.bindPopup(popup_ceda6aa086be427fab5c290db08ce270)
        ;

        
    
    
            marker_6783c29d8d0948fdabe6369f684ea044.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_508dda4b6faa49fead10c0d7844b1939 = L.marker(
                [8.51, 39.27],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_741e35bd3cae49debe86aeb2c17b5023 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_508dda4b6faa49fead10c0d7844b1939.setIcon(icon_741e35bd3cae49debe86aeb2c17b5023);
        
    
        var popup_bc71c38d6d2c42fe8fd49993a2a73302 = L.popup({"maxWidth": "100%"});

        
            var i_frame_1bef91e28b1549c0a43372dec3667f93 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRXRoaW9waWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEFkZGlzIEFiZWJhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEVUSAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEV0aGlvcGlhbiBCaXJyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTEyMDc4NzMwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzcvNzEvRmxhZ19vZl9FdGhpb3BpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_bc71c38d6d2c42fe8fd49993a2a73302.setContent(i_frame_1bef91e28b1549c0a43372dec3667f93);
        

        marker_508dda4b6faa49fead10c0d7844b1939.bindPopup(popup_bc71c38d6d2c42fe8fd49993a2a73302)
        ;

        
    
    
            marker_508dda4b6faa49fead10c0d7844b1939.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_3419b854c116460baebc2e64cdb328be = L.marker(
                [62.13, -7.04],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0a76aa0ba888423083496106824d0e92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3419b854c116460baebc2e64cdb328be.setIcon(icon_0a76aa0ba888423083496106824d0e92);
        
    
        var popup_9b3398389ee040508548b6f3d94aee9e = L.popup({"maxWidth": "100%"});

        
            var i_frame_fb554947208a4d22bbc8c73147980c7c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRmFyb2UgSXNsYW5kcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVMOzcnNoYXZuCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEZSTwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IERhbmlzaCBLcm9uZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDQ4Njc4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBuYW4gaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9b3398389ee040508548b6f3d94aee9e.setContent(i_frame_fb554947208a4d22bbc8c73147980c7c);
        

        marker_3419b854c116460baebc2e64cdb328be.bindPopup(popup_9b3398389ee040508548b6f3d94aee9e)
        ;

        
    
    
            marker_3419b854c116460baebc2e64cdb328be.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d210ee96e3624bf6be425c9a140a9787 = L.marker(
                [-17.72, 177.88],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_30924d608feb459093f7fb69cad77a82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d210ee96e3624bf6be425c9a140a9787.setIcon(icon_30924d608feb459093f7fb69cad77a82);
        
    
        var popup_3807dcf1fce943ac923214c38b96c0ee = L.popup({"maxWidth": "100%"});

        
            var i_frame_0eacfcc256254b26b0cb7e2c93e03a08 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRmlqaSBJc2xhbmRzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBTdXZhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEZKSQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEZpamkgRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gODg5OTUzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2IvYmEvRmxhZ19vZl9GaWppLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_3807dcf1fce943ac923214c38b96c0ee.setContent(i_frame_0eacfcc256254b26b0cb7e2c93e03a08);
        

        marker_d210ee96e3624bf6be425c9a140a9787.bindPopup(popup_3807dcf1fce943ac923214c38b96c0ee)
        ;

        
    
    
            marker_d210ee96e3624bf6be425c9a140a9787.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_75a86bd8c3744f41b559baa8d4d8aab6 = L.marker(
                [62.04, 25.83],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e7b3ecd975994cd6824848f3f8f29133 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75a86bd8c3744f41b559baa8d4d8aab6.setIcon(icon_e7b3ecd975994cd6824848f3f8f29133);
        
    
        var popup_0ecc74b088fb472081ccb7c220470b70 = L.popup({"maxWidth": "100%"});

        
            var i_frame_3a0d8933a365406dbcad6ee81e99e73e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRmlubGFuZCAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gSGVsc2lua2kgW0hlbHNpbmdmb3JzXQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBGSU4KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTUyMDMxNAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9iL2JjL0ZsYWdfb2ZfRmlubGFuZC5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0ecc74b088fb472081ccb7c220470b70.setContent(i_frame_3a0d8933a365406dbcad6ee81e99e73e);
        

        marker_75a86bd8c3744f41b559baa8d4d8aab6.bindPopup(popup_0ecc74b088fb472081ccb7c220470b70)
        ;

        
    
    
            marker_75a86bd8c3744f41b559baa8d4d8aab6.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_cb7bc90677d84ac1a94b11b5d54790dc = L.marker(
                [46.66, 2.17],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_faeb7eea5f83428d88b9beae17701c66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cb7bc90677d84ac1a94b11b5d54790dc.setIcon(icon_faeb7eea5f83428d88b9beae17701c66);
        
    
        var popup_1112838471934c80bda94c0181351c93 = L.popup({"maxWidth": "100%"});

        
            var i_frame_b20c4377ae844ef7b83b69c9fb773bec = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRnJhbmNlIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBQYXJpcwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBGUkEKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNjcwNTk4ODcKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2VuL2MvYzMvRmxhZ19vZl9GcmFuY2Uuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_1112838471934c80bda94c0181351c93.setContent(i_frame_b20c4377ae844ef7b83b69c9fb773bec);
        

        marker_cb7bc90677d84ac1a94b11b5d54790dc.bindPopup(popup_1112838471934c80bda94c0181351c93)
        ;

        
    
    
            marker_cb7bc90677d84ac1a94b11b5d54790dc.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_32aaa39c908d4e90b2458a7047cf4a67 = L.marker(
                [-17.54, -149.89],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_76eae7b530a2498caad3a3456cf7eb3c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_32aaa39c908d4e90b2458a7047cf4a67.setIcon(icon_76eae7b530a2498caad3a3456cf7eb3c);
        
    
        var popup_6fa860445b634f1d88658d6de521e181 = L.popup({"maxWidth": "100%"});

        
            var i_frame_087799ed97de42e4b1baa15ed83ca3ab = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gRnJlbmNoIFBvbHluZXNpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUGFwZWV0ZQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQWUYKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDRlAgRnJhbmMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyNzkyODcKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IG5hbiBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_6fa860445b634f1d88658d6de521e181.setContent(i_frame_087799ed97de42e4b1baa15ed83ca3ab);
        

        marker_32aaa39c908d4e90b2458a7047cf4a67.bindPopup(popup_6fa860445b634f1d88658d6de521e181)
        ;

        
    
    
            marker_32aaa39c908d4e90b2458a7047cf4a67.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_e019efdef5484b42a6c9dd311b58fb32 = L.marker(
                [-0.54, 11.8],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d0cda2c1408e45ee89aaa251914a0646 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e019efdef5484b42a6c9dd311b58fb32.setIcon(icon_d0cda2c1408e45ee89aaa251914a0646);
        
    
        var popup_114a39a655aa4c5d83a678feae35fe55 = L.popup({"maxWidth": "100%"});

        
            var i_frame_ab4353ddfb2f4233ae8bcd01f7dcbcca = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR2Fib24gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IExpYnJldmlsbGUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gR0FCCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQ0ZBIEZyYW5jIEJFQUMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyMTcyNTc5Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzAvMDQvRmxhZ19vZl9HYWJvbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_114a39a655aa4c5d83a678feae35fe55.setContent(i_frame_ab4353ddfb2f4233ae8bcd01f7dcbcca);
        

        marker_e019efdef5484b42a6c9dd311b58fb32.bindPopup(popup_114a39a655aa4c5d83a678feae35fe55)
        ;

        
    
    
            marker_e019efdef5484b42a6c9dd311b58fb32.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_1999dd86fd8048d783f6031fc5230e2a = L.marker(
                [13.47, -15.36],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7e604000a645410e9389ae1ac9ba6cc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1999dd86fd8048d783f6031fc5230e2a.setIcon(icon_7e604000a645410e9389ae1ac9ba6cc5);
        
    
        var popup_bad740d07b864101bca3edaa83bb7157 = L.popup({"maxWidth": "100%"});

        
            var i_frame_e910d6483cae49cfa0279851e7cdb38d = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR2FtYmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCYW5qdWwKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gR01CCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gR2FtYmlhbiBEYWxhc2kgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyMzQ3NzA2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzcvNzcvRmxhZ19vZl9UaGVfR2FtYmlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_bad740d07b864101bca3edaa83bb7157.setContent(i_frame_e910d6483cae49cfa0279851e7cdb38d);
        

        marker_1999dd86fd8048d783f6031fc5230e2a.bindPopup(popup_bad740d07b864101bca3edaa83bb7157)
        ;

        
    
    
            marker_1999dd86fd8048d783f6031fc5230e2a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_245c69a7b50b420db7323c1c6ef7d24d = L.marker(
                [42.2, 43.17],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_de4c71314c774354a7b18deaaf9af3bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_245c69a7b50b420db7323c1c6ef7d24d.setIcon(icon_de4c71314c774354a7b18deaaf9af3bb);
        
    
        var popup_953de5aed4c448bcbc782264b270d307 = L.popup({"maxWidth": "100%"});

        
            var i_frame_934f56c7ff6347feb6064179ff6de8ff = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR2VvcmdpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVGJpbGlzaQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBHRU8KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBHZW9yZ2lhbiBMYXJpIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzcyMDM4Mgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8wLzBmL0ZsYWdfb2ZfR2VvcmdpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_953de5aed4c448bcbc782264b270d307.setContent(i_frame_934f56c7ff6347feb6064179ff6de8ff);
        

        marker_245c69a7b50b420db7323c1c6ef7d24d.bindPopup(popup_953de5aed4c448bcbc782264b270d307)
        ;

        
    
    
            marker_245c69a7b50b420db7323c1c6ef7d24d.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d4e4cd6182a74da1850cfd404ffa4834 = L.marker(
                [51.19, 10.08],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_2b751d7a228848999bbcf05f6b072ba6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d4e4cd6182a74da1850cfd404ffa4834.setIcon(icon_2b751d7a228848999bbcf05f6b072ba6);
        
    
        var popup_f712f93292314f26bb5489d399277325 = L.popup({"maxWidth": "100%"});

        
            var i_frame_4239c176a619474b9eff776f7096d781 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR2VybWFueSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmVybGluCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IERFVQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEV1cm8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA4MzEzMjc5OQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvZW4vYi9iYS9GbGFnX29mX0dlcm1hbnkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_f712f93292314f26bb5489d399277325.setContent(i_frame_4239c176a619474b9eff776f7096d781);
        

        marker_d4e4cd6182a74da1850cfd404ffa4834.bindPopup(popup_f712f93292314f26bb5489d399277325)
        ;

        
    
    
            marker_d4e4cd6182a74da1850cfd404ffa4834.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_4b0cd9ce31f747cb8ea2c92a6605e1fc = L.marker(
                [7.97, -1.05],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_17870f1d02a540efa68c933940593a0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4b0cd9ce31f747cb8ea2c92a6605e1fc.setIcon(icon_17870f1d02a540efa68c933940593a0d);
        
    
        var popup_d8e9f55540fe4a7d8a1e0e3b74110fca = L.popup({"maxWidth": "100%"});

        
            var i_frame_61376ec8a3684a62ae6902eb39b6ce6b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR2hhbmEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEFjY3JhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdIQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEdoYW5haWFuIENlZGkgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzMDQxNzg1Ngo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8xLzE5L0ZsYWdfb2ZfR2hhbmEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d8e9f55540fe4a7d8a1e0e3b74110fca.setContent(i_frame_61376ec8a3684a62ae6902eb39b6ce6b);
        

        marker_4b0cd9ce31f747cb8ea2c92a6605e1fc.bindPopup(popup_d8e9f55540fe4a7d8a1e0e3b74110fca)
        ;

        
    
    
            marker_4b0cd9ce31f747cb8ea2c92a6605e1fc.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f03b1d31baff476996eb7de071f9cbc9 = L.marker(
                [36.14, -5.35],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_75cc51b24113493bb186580662c2b395 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f03b1d31baff476996eb7de071f9cbc9.setIcon(icon_75cc51b24113493bb186580662c2b395);
        
    
        var popup_d0eccbca2e9d40ab9ec97d943e8c89de = L.popup({"maxWidth": "100%"});

        
            var i_frame_09c459ac84484c7d8439a68ead3f77e7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR2licmFsdGFyIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBHaWJyYWx0YXIKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gR0lCCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gR2licmFsdGFyIFBvdW5kIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzM3MDEKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vY29tbW9ucy53aWtpbWVkaWEub3JnL3cvaW5kZXgucGhwP3RpdGxlPVNwZWNpYWw6U2VhcmNoJnNlYXJjaD1naWJyYWx0YXIrZmxhZyZmdWxsdGV4dD0xJm5zMD0xJm5zNj0xJm5zMTI9MSZuczE0PTEmbnMxMDA9MSZuczEwNj0xIy9tZWRpYS9GaWxlOkZsYWdfb2ZfdGhlX0dvdmVybm9yX29mX0dpYnJhbHRhci5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d0eccbca2e9d40ab9ec97d943e8c89de.setContent(i_frame_09c459ac84484c7d8439a68ead3f77e7);
        

        marker_f03b1d31baff476996eb7de071f9cbc9.bindPopup(popup_d0eccbca2e9d40ab9ec97d943e8c89de)
        ;

        
    
    
            marker_f03b1d31baff476996eb7de071f9cbc9.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_182b986d6e2949acba9fddfd92f4029d = L.marker(
                [39.55, 22.34],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d68657fbb9cb42c4ac610d38dd2e7aae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_182b986d6e2949acba9fddfd92f4029d.setIcon(icon_d68657fbb9cb42c4ac610d38dd2e7aae);
        
    
        var popup_a2551716a1c54710a65735f1f9d8ad91 = L.popup({"maxWidth": "100%"});

        
            var i_frame_3fb66a2370e34d728b07e7909ba7897e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3JlZWNlIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBBdGhlbmFpCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdSQwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEV1cm8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMDcxNjMyMgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy81LzVjL0ZsYWdfb2ZfR3JlZWNlLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a2551716a1c54710a65735f1f9d8ad91.setContent(i_frame_3fb66a2370e34d728b07e7909ba7897e);
        

        marker_182b986d6e2949acba9fddfd92f4029d.bindPopup(popup_a2551716a1c54710a65735f1f9d8ad91)
        ;

        
    
    
            marker_182b986d6e2949acba9fddfd92f4029d.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_513df3a860a8419fb330621d65412203 = L.marker(
                [66.17, -45.52],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e6840d508d2c446998ed62eaf233870f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_513df3a860a8419fb330621d65412203.setIcon(icon_e6840d508d2c446998ed62eaf233870f);
        
    
        var popup_2535b6790cfc40f1a601701d5733f651 = L.popup({"maxWidth": "100%"});

        
            var i_frame_58814501ea19431d8a6184758e1fb64c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3JlZW5sYW5kIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBOdXVrCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdSTAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IERhbmlzaCBLcm9uZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU2MjI1Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBuYW4gaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_2535b6790cfc40f1a601701d5733f651.setContent(i_frame_58814501ea19431d8a6184758e1fb64c);
        

        marker_513df3a860a8419fb330621d65412203.bindPopup(popup_2535b6790cfc40f1a601701d5733f651)
        ;

        
    
    
            marker_513df3a860a8419fb330621d65412203.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_8d453b98c5394080b5241c8eb53c74b1 = L.marker(
                [12.06, -61.71],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_632752543cdd4bada98867e61d387276 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d453b98c5394080b5241c8eb53c74b1.setIcon(icon_632752543cdd4bada98867e61d387276);
        
    
        var popup_e8d6278e1a974852acb39f31f867f321 = L.popup({"maxWidth": "100%"});

        
            var i_frame_d177423bdfae4de8be192be88998bd49 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3JlbmFkYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gU2FpbnQgR2VvcmdlJ3MKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gR1JECjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRWFzdCBDYXJyaWJlYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTEyMDAzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2IvYmMvRmxhZ19vZl9HcmVuYWRhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e8d6278e1a974852acb39f31f867f321.setContent(i_frame_d177423bdfae4de8be192be88998bd49);
        

        marker_8d453b98c5394080b5241c8eb53c74b1.bindPopup(popup_e8d6278e1a974852acb39f31f867f321)
        ;

        
    
    
            marker_8d453b98c5394080b5241c8eb53c74b1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_49edb8a899ca4cdf9e5c951fac123fa5 = L.marker(
                [13.44, 144.76],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7a36bb45629d4e6cb65aaa0ccac19068 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_49edb8a899ca4cdf9e5c951fac123fa5.setIcon(icon_7a36bb45629d4e6cb65aaa0ccac19068);
        
    
        var popup_3838ee015bde426ab590d6c0d53f8cd0 = L.popup({"maxWidth": "100%"});

        
            var i_frame_04acdf1ca85c48db82df59ccca5a389a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3VhbSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQWdhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdVTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE2NzI5NAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gbmFuIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_3838ee015bde426ab590d6c0d53f8cd0.setContent(i_frame_04acdf1ca85c48db82df59ccca5a389a);
        

        marker_49edb8a899ca4cdf9e5c951fac123fa5.bindPopup(popup_3838ee015bde426ab590d6c0d53f8cd0)
        ;

        
    
    
            marker_49edb8a899ca4cdf9e5c951fac123fa5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_27bf1f0b4c4347c589aa62eb259f2017 = L.marker(
                [15.71, -90.55],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_63d1a604dfaa442086185de955d094ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_27bf1f0b4c4347c589aa62eb259f2017.setIcon(icon_63d1a604dfaa442086185de955d094ab);
        
    
        var popup_079476f50fad4904bf33f1809746afa3 = L.popup({"maxWidth": "100%"});

        
            var i_frame_91c8d29cd20e449d8ad68f6cda14024f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3VhdGVtYWxhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDaXVkYWQgZGUgR3VhdGVtYWxhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdUTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEd1YXRlbWFsYW4gUXVldHphbCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE2NjA0MDI2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2UvZWMvRmxhZ19vZl9HdWF0ZW1hbGEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_079476f50fad4904bf33f1809746afa3.setContent(i_frame_91c8d29cd20e449d8ad68f6cda14024f);
        

        marker_27bf1f0b4c4347c589aa62eb259f2017.bindPopup(popup_079476f50fad4904bf33f1809746afa3)
        ;

        
    
    
            marker_27bf1f0b4c4347c589aa62eb259f2017.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_8d0745d6993e41e08dd51dd2efe05b66 = L.marker(
                [10.43, -10.82],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_cefaa3340f8148609b1e81f5d195b17d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d0745d6993e41e08dd51dd2efe05b66.setIcon(icon_cefaa3340f8148609b1e81f5d195b17d);
        
    
        var popup_c29534dafa4f4296bee77b34d2853624 = L.popup({"maxWidth": "100%"});

        
            var i_frame_f3496e8ba3f240a08e4c175d40c2cf6c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3VpbmVhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDb25ha3J5Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdJTgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEd1aW5lYSBGcmFuYyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEyNzcxMjQ2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2UvZWQvRmxhZ19vZl9HdWluZWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_c29534dafa4f4296bee77b34d2853624.setContent(i_frame_f3496e8ba3f240a08e4c175d40c2cf6c);
        

        marker_8d0745d6993e41e08dd51dd2efe05b66.bindPopup(popup_c29534dafa4f4296bee77b34d2853624)
        ;

        
    
    
            marker_8d0745d6993e41e08dd51dd2efe05b66.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_8f4ca9f0eb6b409d90f5149883ccab93 = L.marker(
                [12.12, -14.63],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_750790949d994fd6b57ed257b54d80e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f4ca9f0eb6b409d90f5149883ccab93.setIcon(icon_750790949d994fd6b57ed257b54d80e2);
        
    
        var popup_202bab738c8c4dbe85ecafb78225e31d = L.popup({"maxWidth": "100%"});

        
            var i_frame_7c59810232904303973f7ac61a66f350 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3VpbmVhLUJpc3NhdSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmlzc2F1Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdOQgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEd1aW5lYS1CaXNzYXUgUGVzbyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE5MjA5MjIKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMC8wMS9GbGFnX29mX0d1aW5lYS1CaXNzYXUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_202bab738c8c4dbe85ecafb78225e31d.setContent(i_frame_7c59810232904303973f7ac61a66f350);
        

        marker_8f4ca9f0eb6b409d90f5149883ccab93.bindPopup(popup_202bab738c8c4dbe85ecafb78225e31d)
        ;

        
    
    
            marker_8f4ca9f0eb6b409d90f5149883ccab93.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c882febd77c746d3abbfce123e98ca81 = L.marker(
                [4.77, -59.05],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_86918ad0140a4721a77ea41e7fcca8ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c882febd77c746d3abbfce123e98ca81.setIcon(icon_86918ad0140a4721a77ea41e7fcca8ab);
        
    
        var popup_c39f6f0d822741f3b54f408fc23541bb = L.popup({"maxWidth": "100%"});

        
            var i_frame_14bfdcf910e1487190cd191250a7e84f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gR3V5YW5hIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBHZW9yZ2V0b3duCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEdVWQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEd1eWFuYSBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA3ODI3NjYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOS85OS9GbGFnX29mX0d1eWFuYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_c39f6f0d822741f3b54f408fc23541bb.setContent(i_frame_14bfdcf910e1487190cd191250a7e84f);
        

        marker_c882febd77c746d3abbfce123e98ca81.bindPopup(popup_c39f6f0d822741f3b54f408fc23541bb)
        ;

        
    
    
            marker_c882febd77c746d3abbfce123e98ca81.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b271c4b71b3143d390460315c254e7a2 = L.marker(
                [18.68, -72.25],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f11570ca13bd4086b93d98f1275de495 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b271c4b71b3143d390460315c254e7a2.setIcon(icon_f11570ca13bd4086b93d98f1275de495);
        
    
        var popup_548e1752322442d8af9dacad20956dc7 = L.popup({"maxWidth": "100%"});

        
            var i_frame_1b4739d81adb4c1cbccfcf9b34242cdc = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSGFpdGkgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFBvcnQtYXUtUHJpbmNlCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEhUSQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEhhaXRpYW4gR291cmRlIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTEyNjMwNzcKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNS81Ni9GbGFnX29mX0hhaXRpLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_548e1752322442d8af9dacad20956dc7.setContent(i_frame_1b4739d81adb4c1cbccfcf9b34242cdc);
        

        marker_b271c4b71b3143d390460315c254e7a2.bindPopup(popup_548e1752322442d8af9dacad20956dc7)
        ;

        
    
    
            marker_b271c4b71b3143d390460315c254e7a2.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_71802b0debf14923842da29a5921d02f = L.marker(
                [14.77, -87.31],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7634af14a85f46e48cb8bb5a893bc4f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_71802b0debf14923842da29a5921d02f.setIcon(icon_7634af14a85f46e48cb8bb5a893bc4f4);
        
    
        var popup_d6e5c204f20a4122a13d0c6fcc75b340 = L.popup({"maxWidth": "100%"});

        
            var i_frame_eaf5505eb1754f28b2d1751395d2c1f1 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSG9uZHVyYXMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFRlZ3VjaWdhbHBhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEhORAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEhvbmR1cmFuIExlbXBpcmEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA5NzQ2MTE3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzgvODIvRmxhZ19vZl9Ib25kdXJhcy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d6e5c204f20a4122a13d0c6fcc75b340.setContent(i_frame_eaf5505eb1754f28b2d1751395d2c1f1);
        

        marker_71802b0debf14923842da29a5921d02f.bindPopup(popup_d6e5c204f20a4122a13d0c6fcc75b340)
        ;

        
    
    
            marker_71802b0debf14923842da29a5921d02f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_5be76ff0b87f47aca4ebec69af227bb2 = L.marker(
                [22.32, 114.17],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0ffe16c51b6341cd9c57fdc933a68d81 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5be76ff0b87f47aca4ebec69af227bb2.setIcon(icon_0ffe16c51b6341cd9c57fdc933a68d81);
        
    
        var popup_aa1bfcb146014be4a62ea17ebbd51b2e = L.popup({"maxWidth": "100%"});

        
            var i_frame_30c82d4f36cf4c8d915cb155fd1a2fe5 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSG9uZyBLb25nIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBWaWN0b3JpYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBIS0cKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBIb25nIEtvbmcgRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNzUwNzQwMAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gbmFuIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_aa1bfcb146014be4a62ea17ebbd51b2e.setContent(i_frame_30c82d4f36cf4c8d915cb155fd1a2fe5);
        

        marker_5be76ff0b87f47aca4ebec69af227bb2.bindPopup(popup_aa1bfcb146014be4a62ea17ebbd51b2e)
        ;

        
    
    
            marker_5be76ff0b87f47aca4ebec69af227bb2.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_5bc9fdb5b3e84e5c9de34599a887e3fe = L.marker(
                [47.03, 20.2],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b99d07dee40c457e8b52ddc1f69bba7f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5bc9fdb5b3e84e5c9de34599a887e3fe.setIcon(icon_b99d07dee40c457e8b52ddc1f69bba7f);
        
    
        var popup_50f5f71da3024c3ab6ae3e12366c30ac = L.popup({"maxWidth": "100%"});

        
            var i_frame_935e06dcabae49bf8d06a97efd0fe7d3 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSHVuZ2FyeSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQnVkYXBlc3QKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gSFVOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gSHVuZ2FyaWFuIEZvcmludCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDk3Njk5NDkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvYy9jMS9GbGFnX29mX0h1bmdhcnkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_50f5f71da3024c3ab6ae3e12366c30ac.setContent(i_frame_935e06dcabae49bf8d06a97efd0fe7d3);
        

        marker_5bc9fdb5b3e84e5c9de34599a887e3fe.bindPopup(popup_50f5f71da3024c3ab6ae3e12366c30ac)
        ;

        
    
    
            marker_5bc9fdb5b3e84e5c9de34599a887e3fe.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6d231370ba5646b786b5a641400646e3 = L.marker(
                [65.03, -18.82],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_41c21fda0c97444194ef037b85208e8c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6d231370ba5646b786b5a641400646e3.setIcon(icon_41c21fda0c97444194ef037b85208e8c);
        
    
        var popup_38cc9b1884e7416c92376551c040aba1 = L.popup({"maxWidth": "100%"});

        
            var i_frame_5c8cb9e1c43c419e8f0d567245799089 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSWNlbGFuZCAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUmV5a2phdgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBJU0wKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBJY2VsYW5kIEtyb25hIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzYxMzEzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2MvY2UvRmxhZ19vZl9JY2VsYW5kLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_38cc9b1884e7416c92376551c040aba1.setContent(i_frame_5c8cb9e1c43c419e8f0d567245799089);
        

        marker_6d231370ba5646b786b5a641400646e3.bindPopup(popup_38cc9b1884e7416c92376551c040aba1)
        ;

        
    
    
            marker_6d231370ba5646b786b5a641400646e3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_96ca4557e661486d8728d7dcf294c27a = L.marker(
                [22.66, 79.37],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_92e3a30d65d64e9d907bea87e7edefa8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_96ca4557e661486d8728d7dcf294c27a.setIcon(icon_92e3a30d65d64e9d907bea87e7edefa8);
        
    
        var popup_378d213976194b9799c817a06ec9e04b = L.popup({"maxWidth": "100%"});

        
            var i_frame_bd19193e75e046c190aa28ea8ccc3ca2 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSW5kaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE5ldyBEZWxoaQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBJTkQKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBJbmRpYW4gUnVwZWUgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMzY2NDE3NzU0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9lbi80LzQxL0ZsYWdfb2ZfSW5kaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_378d213976194b9799c817a06ec9e04b.setContent(i_frame_bd19193e75e046c190aa28ea8ccc3ca2);
        

        marker_96ca4557e661486d8728d7dcf294c27a.bindPopup(popup_378d213976194b9799c817a06ec9e04b)
        ;

        
    
    
            marker_96ca4557e661486d8728d7dcf294c27a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_790458dce1144a4ca4ea3be9c2db6498 = L.marker(
                [-4.07, 120.89],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7248e91e48bf40e894e00cfda39f88c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_790458dce1144a4ca4ea3be9c2db6498.setIcon(icon_7248e91e48bf40e894e00cfda39f88c9);
        
    
        var popup_340605c21cd04698be0c3f310957facd = L.popup({"maxWidth": "100%"});

        
            var i_frame_b0b3c5d4563346cb9ee96a7f78b81f4e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSW5kb25lc2lhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBKYWthcnRhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IElETgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEluZG9uZXNpYW4gUnVwaWFoIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjcwNjI1NTY4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzkvOWYvRmxhZ19vZl9JbmRvbmVzaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_340605c21cd04698be0c3f310957facd.setContent(i_frame_b0b3c5d4563346cb9ee96a7f78b81f4e);
        

        marker_790458dce1144a4ca4ea3be9c2db6498.bindPopup(popup_340605c21cd04698be0c3f310957facd)
        ;

        
    
    
            marker_790458dce1144a4ca4ea3be9c2db6498.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_177402dca97446ddb8cbfb0312fd88ed = L.marker(
                [32.15, 53.96],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f246b10e2358457394eafaa15dad0d55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_177402dca97446ddb8cbfb0312fd88ed.setIcon(icon_f246b10e2358457394eafaa15dad0d55);
        
    
        var popup_9a7565e51461494a863c52e7ecca264d = L.popup({"maxWidth": "100%"});

        
            var i_frame_3f96e971f39d44349dabcc4ff6531a9b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSXJhbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVGVoZXJhbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBJUk4KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBJcmFuaWFuIFJpYWwgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA4MjkxMzkwNgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9jL2NhL0ZsYWdfb2ZfSXJhbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9a7565e51461494a863c52e7ecca264d.setContent(i_frame_3f96e971f39d44349dabcc4ff6531a9b);
        

        marker_177402dca97446ddb8cbfb0312fd88ed.bindPopup(popup_9a7565e51461494a863c52e7ecca264d)
        ;

        
    
    
            marker_177402dca97446ddb8cbfb0312fd88ed.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_73c01eb926304ba68e4b82c8ade9cade = L.marker(
                [33.21, 42.77],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6c13e94ce3f84f2bbadd24a53716426a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_73c01eb926304ba68e4b82c8ade9cade.setIcon(icon_6c13e94ce3f84f2bbadd24a53716426a);
        
    
        var popup_349915517f3446e6b4e83c798471e924 = L.popup({"maxWidth": "100%"});

        
            var i_frame_a62a3bc00f4a4cab97c411240c591c4b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSXJhcSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmFnaGRhZAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBJUlEKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBJcmFxaSBEaW5hciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDM5MzA5NzgzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZjYvRmxhZ19vZl9JcmFxLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_349915517f3446e6b4e83c798471e924.setContent(i_frame_a62a3bc00f4a4cab97c411240c591c4b);
        

        marker_73c01eb926304ba68e4b82c8ade9cade.bindPopup(popup_349915517f3446e6b4e83c798471e924)
        ;

        
    
    
            marker_73c01eb926304ba68e4b82c8ade9cade.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_5910753343ba47cbb7ca573387b115e8 = L.marker(
                [53.0, -7.96],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6e6731a52feb4a2ab2d66b14ccb7db08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5910753343ba47cbb7ca573387b115e8.setIcon(icon_6e6731a52feb4a2ab2d66b14ccb7db08);
        
    
        var popup_5d381be506e04542ad0cc14a227e99d2 = L.popup({"maxWidth": "100%"});

        
            var i_frame_e202ca3a74344633ad61ecd914b5e44d = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSXJlbGFuZCAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gRHVibGluCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IElSTAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEV1cm8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0OTQxNDQ0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNDUvRmxhZ19vZl9JcmVsYW5kLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5d381be506e04542ad0cc14a227e99d2.setContent(i_frame_e202ca3a74344633ad61ecd914b5e44d);
        

        marker_5910753343ba47cbb7ca573387b115e8.bindPopup(popup_5d381be506e04542ad0cc14a227e99d2)
        ;

        
    
    
            marker_5910753343ba47cbb7ca573387b115e8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d57ec28e9125418389c5806db9703547 = L.marker(
                [31.03, 34.94],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3bc870a91b964c6693d743142cd504dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d57ec28e9125418389c5806db9703547.setIcon(icon_3bc870a91b964c6693d743142cd504dd);
        
    
        var popup_fef2260c498e4a36b4cd94409ada415f = L.popup({"maxWidth": "100%"});

        
            var i_frame_0771aee8872d477388e0cb646a821706 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSXNyYWVsIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBKZXJ1c2FsZW0KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gSVNSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gSXNyYWVsaSBOZXcgU2hla2VsIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gOTA1MzMwMAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9kL2Q0L0ZsYWdfb2ZfSXNyYWVsLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_fef2260c498e4a36b4cd94409ada415f.setContent(i_frame_0771aee8872d477388e0cb646a821706);
        

        marker_d57ec28e9125418389c5806db9703547.bindPopup(popup_fef2260c498e4a36b4cd94409ada415f)
        ;

        
    
    
            marker_d57ec28e9125418389c5806db9703547.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_e3d3ea3a2ee24f6b82b7fe5536492738 = L.marker(
                [43.12, 12.28],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_949c0ca1228249dd86efaeb2e1353466 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e3d3ea3a2ee24f6b82b7fe5536492738.setIcon(icon_949c0ca1228249dd86efaeb2e1353466);
        
    
        var popup_e9298b2f92a14d4a93da42110b66000f = L.popup({"maxWidth": "100%"});

        
            var i_frame_3449e43c4b91486b812800d37bc76f77 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSXRhbHkgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFJvbWEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gSVRBCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRXVybyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDYwMjk3Mzk2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9lbi8wLzAzL0ZsYWdfb2ZfSXRhbHkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e9298b2f92a14d4a93da42110b66000f.setContent(i_frame_3449e43c4b91486b812800d37bc76f77);
        

        marker_e3d3ea3a2ee24f6b82b7fe5536492738.bindPopup(popup_e9298b2f92a14d4a93da42110b66000f)
        ;

        
    
    
            marker_e3d3ea3a2ee24f6b82b7fe5536492738.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bb0f1332c8ca40b6acc92f1e0f86d99c = L.marker(
                [18.16, -77.36],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_2bc8526a4bd044539b6e636204889aa8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb0f1332c8ca40b6acc92f1e0f86d99c.setIcon(icon_2bc8526a4bd044539b6e636204889aa8);
        
    
        var popup_5a0799ab6fd1462dbf1b300b403a11bb = L.popup({"maxWidth": "100%"});

        
            var i_frame_50e1f43fd99145c5bd1504a39dcb5c2d = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSmFtYWljYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gS2luZ3N0b24KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gSkFNCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gSmFtYWljYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjk0ODI3OQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8wLzBhL0ZsYWdfb2ZfSmFtYWljYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5a0799ab6fd1462dbf1b300b403a11bb.setContent(i_frame_50e1f43fd99145c5bd1504a39dcb5c2d);
        

        marker_bb0f1332c8ca40b6acc92f1e0f86d99c.bindPopup(popup_5a0799ab6fd1462dbf1b300b403a11bb)
        ;

        
    
    
            marker_bb0f1332c8ca40b6acc92f1e0f86d99c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_ada21c78774e4dbebcf132537f739919 = L.marker(
                [36.82, 138.21],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4e44cca4d7644530987e94f1716244dc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ada21c78774e4dbebcf132537f739919.setIcon(icon_4e44cca4d7644530987e94f1716244dc);
        
    
        var popup_ec42d76c1dd640c2bb62ddcb1bde75de = L.popup({"maxWidth": "100%"});

        
            var i_frame_aaa35188a88f49368acf5f6892bab338 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSmFwYW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFRva3lvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEpQTgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEphcGFuZXNlIFllbiAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEyNjI2NDkzMQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvZW4vOS85ZS9GbGFnX29mX0phcGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ec42d76c1dd640c2bb62ddcb1bde75de.setContent(i_frame_aaa35188a88f49368acf5f6892bab338);
        

        marker_ada21c78774e4dbebcf132537f739919.bindPopup(popup_ec42d76c1dd640c2bb62ddcb1bde75de)
        ;

        
    
    
            marker_ada21c78774e4dbebcf132537f739919.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_3a094c869fa34193bafabd92d34b8c39 = L.marker(
                [31.84, 36.6],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_eefc85b6bb044a3ab52961068ded2db8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3a094c869fa34193bafabd92d34b8c39.setIcon(icon_eefc85b6bb044a3ab52961068ded2db8);
        
    
        var popup_65faa651f6c240b88b392718f1bf0084 = L.popup({"maxWidth": "100%"});

        
            var i_frame_fe249269f8ef4b0cb3f470b8a3710e38 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gSm9yZGFuIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBBbW1hbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBKT1IKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBKb3JkYW5pYW4gRGluYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMDEwMTY5NAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9jL2MwL0ZsYWdfb2ZfSm9yZGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_65faa651f6c240b88b392718f1bf0084.setContent(i_frame_fe249269f8ef4b0cb3f470b8a3710e38);
        

        marker_3a094c869fa34193bafabd92d34b8c39.bindPopup(popup_65faa651f6c240b88b392718f1bf0084)
        ;

        
    
    
            marker_3a094c869fa34193bafabd92d34b8c39.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_75079c1aa5984adba56728c7d8fd96b1 = L.marker(
                [47.97, 67.51],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7500418cfc6a42d2a3b8011a97b751b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75079c1aa5984adba56728c7d8fd96b1.setIcon(icon_7500418cfc6a42d2a3b8011a97b751b6);
        
    
        var popup_078d09221dfc425b9531e61af6c64e65 = L.popup({"maxWidth": "100%"});

        
            var i_frame_72463ac46a154f4f90ddaae2f38de926 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gS2F6YWtzdGFuIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBBc3RhbmEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gS0FaCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gS2F6YWtoc3RhbiBUZW5nZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE4NTEzOTMwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2QvZDMvRmxhZ19vZl9LYXpha2hzdGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_078d09221dfc425b9531e61af6c64e65.setContent(i_frame_72463ac46a154f4f90ddaae2f38de926);
        

        marker_75079c1aa5984adba56728c7d8fd96b1.bindPopup(popup_078d09221dfc425b9531e61af6c64e65)
        ;

        
    
    
            marker_75079c1aa5984adba56728c7d8fd96b1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bbcfce93798b40cfad5c2952023be7ec = L.marker(
                [1.03, 38.75],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_77c7cd3a5ed949a8bfe2780067ad56b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bbcfce93798b40cfad5c2952023be7ec.setIcon(icon_77c7cd3a5ed949a8bfe2780067ad56b6);
        
    
        var popup_e65b3e52060444cc8026a18b8604507d = L.popup({"maxWidth": "100%"});

        
            var i_frame_04f49f5a95644051a668a4cf883f2753 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gS2VueWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE5haXJvYmkKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gS0VOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gS2VueWFuIFNoaWxsaW5nIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTI1NzM5NzMKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNC80OS9GbGFnX29mX0tlbnlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e65b3e52060444cc8026a18b8604507d.setContent(i_frame_04f49f5a95644051a668a4cf883f2753);
        

        marker_bbcfce93798b40cfad5c2952023be7ec.bindPopup(popup_e65b3e52060444cc8026a18b8604507d)
        ;

        
    
    
            marker_bbcfce93798b40cfad5c2952023be7ec.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_0aff0fadd4564153b1da5faf530e52ad = L.marker(
                [1.33, 172.97],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_ec861721324c497aa2cbf648b85eb045 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0aff0fadd4564153b1da5faf530e52ad.setIcon(icon_ec861721324c497aa2cbf648b85eb045);
        
    
        var popup_03427c600e3243918ab97f265f35aa3e = L.popup({"maxWidth": "100%"});

        
            var i_frame_60e0b93a3c4649d38482f7d029efbe97 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gS2lyaWJhdGkgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJhaXJpa2kKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gS0lSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQXVzdHJhbGlhbiBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMTc2MDYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZC9kMy9GbGFnX29mX0tpcmliYXRpLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_03427c600e3243918ab97f265f35aa3e.setContent(i_frame_60e0b93a3c4649d38482f7d029efbe97);
        

        marker_0aff0fadd4564153b1da5faf530e52ad.bindPopup(popup_03427c600e3243918ab97f265f35aa3e)
        ;

        
    
    
            marker_0aff0fadd4564153b1da5faf530e52ad.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_4992201dd9724e67b9b69d418adf51e3 = L.marker(
                [42.69, 21.17],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f25d87ac2d624f14826910d39fdc8cfa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4992201dd9724e67b9b69d418adf51e3.setIcon(icon_f25d87ac2d624f14826910d39fdc8cfa);
        
    
        var popup_cf0731ae2c1a435a80f6f9bb8dc897d7 = L.popup({"maxWidth": "100%"});

        
            var i_frame_9582ca600be3480ba1c84c07be0feeb7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gS29zb3ZvIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBQcmlzdGluYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBYS1gKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjU2NjYxNjEKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMS8xZi9GbGFnX29mX0tvc292by5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_cf0731ae2c1a435a80f6f9bb8dc897d7.setContent(i_frame_9582ca600be3480ba1c84c07be0feeb7);
        

        marker_4992201dd9724e67b9b69d418adf51e3.bindPopup(popup_cf0731ae2c1a435a80f6f9bb8dc897d7)
        ;

        
    
    
            marker_4992201dd9724e67b9b69d418adf51e3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_3e752bf00166445fae6378915a7814aa = L.marker(
                [29.4, 47.94],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_c84e71dade524a5ab300489a4a9a88ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_3e752bf00166445fae6378915a7814aa.setIcon(icon_c84e71dade524a5ab300489a4a9a88ae);
        
    
        var popup_28e6317f24be416cb2d6b81e136240b4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_a1df296983524f21976c8a7d5a401b83 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gS3V3YWl0IAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBLdXdhaXQKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gS1dUCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gS3V3YWl0aSBEaW5hciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDUxNzA5MDk4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2EvYWEvRmxhZ19vZl9LdXdhaXQuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_28e6317f24be416cb2d6b81e136240b4.setContent(i_frame_a1df296983524f21976c8a7d5a401b83);
        

        marker_3e752bf00166445fae6378915a7814aa.bindPopup(popup_28e6317f24be416cb2d6b81e136240b4)
        ;

        
    
    
            marker_3e752bf00166445fae6378915a7814aa.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_33caadc3de9b4c49825d4c9fa718ec49 = L.marker(
                [41.83, 73.42],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_09096eba062b493f965a70f3e51c761c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_33caadc3de9b4c49825d4c9fa718ec49.setIcon(icon_09096eba062b493f965a70f3e51c761c);
        
    
        var popup_51a0f4dcf2d8462d91e58e889c1c0d79 = L.popup({"maxWidth": "100%"});

        
            var i_frame_ee13613073aa485bbd3fb0d5de41e159 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gS3lyZ3l6c3RhbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmlzaGtlawo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBLR1oKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBTb20gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxNzk0MjQ4Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2MvYzcvRmxhZ19vZl9LeXJneXpzdGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_51a0f4dcf2d8462d91e58e889c1c0d79.setContent(i_frame_ee13613073aa485bbd3fb0d5de41e159);
        

        marker_33caadc3de9b4c49825d4c9fa718ec49.bindPopup(popup_51a0f4dcf2d8462d91e58e889c1c0d79)
        ;

        
    
    
            marker_33caadc3de9b4c49825d4c9fa718ec49.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f77e06370355459795af4372c7bb420f = L.marker(
                [19.59, 102.43],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d8f4e71fd02548b69c443ef830341ddd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f77e06370355459795af4372c7bb420f.setIcon(icon_d8f4e71fd02548b69c443ef830341ddd);
        
    
        var popup_785b1e83f34a4a609e5e2edbde55ea66 = L.popup({"maxWidth": "100%"});

        
            var i_frame_79159e9765cf4b9fb8fc6759087dfc69 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGFvcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVmllbnRpYW5lCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExBTwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IExhbyBLaXAgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0MjA3MDgzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzUvNTYvRmxhZ19vZl9MYW9zLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_785b1e83f34a4a609e5e2edbde55ea66.setContent(i_frame_79159e9765cf4b9fb8fc6759087dfc69);
        

        marker_f77e06370355459795af4372c7bb420f.bindPopup(popup_785b1e83f34a4a609e5e2edbde55ea66)
        ;

        
    
    
            marker_f77e06370355459795af4372c7bb420f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_7fc93b420fe242b19d69e3ddb69c4b48 = L.marker(
                [57.12, 26.41],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_603c4038ccc2461cb39767cf5ebe9a76 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7fc93b420fe242b19d69e3ddb69c4b48.setIcon(icon_603c4038ccc2461cb39767cf5ebe9a76);
        
    
        var popup_b57cdaa3150f457fa0b4d2426f2d283f = L.popup({"maxWidth": "100%"});

        
            var i_frame_1f456bb5e9f24ad0b6537dd52841f6f5 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGF0dmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBSaWdhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExWQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IExhdHZpYW4gTGF0cyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDY0NTY5MDAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOC84NC9GbGFnX29mX0xhdHZpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_b57cdaa3150f457fa0b4d2426f2d283f.setContent(i_frame_1f456bb5e9f24ad0b6537dd52841f6f5);
        

        marker_7fc93b420fe242b19d69e3ddb69c4b48.bindPopup(popup_b57cdaa3150f457fa0b4d2426f2d283f)
        ;

        
    
    
            marker_7fc93b420fe242b19d69e3ddb69c4b48.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f38dff50252642b993ca0c10d78a0464 = L.marker(
                [34.1, 35.92],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_cc084d329a244210929320e5d7d69e53 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f38dff50252642b993ca0c10d78a0464.setIcon(icon_cc084d329a244210929320e5d7d69e53);
        
    
        var popup_8bddca0586044c2c8ee638628d432b02 = L.popup({"maxWidth": "100%"});

        
            var i_frame_144c729bf9bc43539b75aa435aa857f8 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGViYW5vbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmVpcnV0Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExCTgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IExlYmFuZXNlIFBvdW5kIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNzE2OTQ1NQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy81LzU5L0ZsYWdfb2ZfTGViYW5vbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_8bddca0586044c2c8ee638628d432b02.setContent(i_frame_144c729bf9bc43539b75aa435aa857f8);
        

        marker_f38dff50252642b993ca0c10d78a0464.bindPopup(popup_8bddca0586044c2c8ee638628d432b02)
        ;

        
    
    
            marker_f38dff50252642b993ca0c10d78a0464.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_e5c3b8567b094e8793a89e1d87c5e1b6 = L.marker(
                [-29.57, 28.13],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_8634e38413284d40a1529f21733d3b41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e5c3b8567b094e8793a89e1d87c5e1b6.setIcon(icon_8634e38413284d40a1529f21733d3b41);
        
    
        var popup_e00acb3ed06043dfb9ef02ad7ef09bd4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_5ef6dad3f6d447a794e237f48d5b8443 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGVzb3RobyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTWFzZXJ1Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExTTwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IExlc290aG8gTG90aSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE5MTI3ODkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNC80YS9GbGFnX29mX0xlc290aG8uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e00acb3ed06043dfb9ef02ad7ef09bd4.setContent(i_frame_5ef6dad3f6d447a794e237f48d5b8443);
        

        marker_e5c3b8567b094e8793a89e1d87c5e1b6.bindPopup(popup_e00acb3ed06043dfb9ef02ad7ef09bd4)
        ;

        
    
    
            marker_e5c3b8567b094e8793a89e1d87c5e1b6.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_4456c201671c46948761d2d38c98c942 = L.marker(
                [6.43, -9.36],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_82aec3618c1e430c920ff4ace382955a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4456c201671c46948761d2d38c98c942.setIcon(icon_82aec3618c1e430c920ff4ace382955a);
        
    
        var popup_0694cb4d77f94bb88f0a6561c90518ee = L.popup({"maxWidth": "100%"});

        
            var i_frame_40780c54e237476fae5d4e5738a277e6 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGliZXJpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTW9ucm92aWEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTEJSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTGliZXJpYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNjg1NTcxMwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9iL2I4L0ZsYWdfb2ZfTGliZXJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0694cb4d77f94bb88f0a6561c90518ee.setContent(i_frame_40780c54e237476fae5d4e5738a277e6);
        

        marker_4456c201671c46948761d2d38c98c942.bindPopup(popup_0694cb4d77f94bb88f0a6561c90518ee)
        ;

        
    
    
            marker_4456c201671c46948761d2d38c98c942.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_54df411b119c4463aad5de0edcef0f66 = L.marker(
                [27.27, 17.6],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_33731a0d07ea448bbce68b50fc006a09 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_54df411b119c4463aad5de0edcef0f66.setIcon(icon_33731a0d07ea448bbce68b50fc006a09);
        
    
        var popup_125489c60bf94c7cb2377f5c7a810d7f = L.popup({"maxWidth": "100%"});

        
            var i_frame_4dd8e382e5644261878263f0d06a3801 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGlieWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFRyaXBvbGkKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTEJZCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTGlieWFuIERpbmFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjEyNTI2OAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8wLzA1L0ZsYWdfb2ZfTGlieWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_125489c60bf94c7cb2377f5c7a810d7f.setContent(i_frame_4dd8e382e5644261878263f0d06a3801);
        

        marker_54df411b119c4463aad5de0edcef0f66.bindPopup(popup_125489c60bf94c7cb2377f5c7a810d7f)
        ;

        
    
    
            marker_54df411b119c4463aad5de0edcef0f66.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d48b78616b1041139a1515e907b02139 = L.marker(
                [47.14, 9.51],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f881aadfc9604cba840a5643697b7146 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d48b78616b1041139a1515e907b02139.setIcon(icon_f881aadfc9604cba840a5643697b7146);
        
    
        var popup_2f2938d310ba419f8030fd46fc2206d1 = L.popup({"maxWidth": "100%"});

        
            var i_frame_643b3bebb5a94d7f9c9176d91528b0cb = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGllY2h0ZW5zdGVpbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVmFkdXoKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTElFCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU3dpc3MgRnJhbmMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0OTM3Mzc0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNDcvRmxhZ19vZl9MaWVjaHRlbnN0ZWluLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_2f2938d310ba419f8030fd46fc2206d1.setContent(i_frame_643b3bebb5a94d7f9c9176d91528b0cb);
        

        marker_d48b78616b1041139a1515e907b02139.bindPopup(popup_2f2938d310ba419f8030fd46fc2206d1)
        ;

        
    
    
            marker_d48b78616b1041139a1515e907b02139.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_5d994348b9a442a5ad0e0c025b0ca793 = L.marker(
                [55.61, 23.73],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_97947dd2694a4e47bf8f69b7d89688ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5d994348b9a442a5ad0e0c025b0ca793.setIcon(icon_97947dd2694a4e47bf8f69b7d89688ce);
        
    
        var popup_0c72f8d6c55e4c4eb789d439145b7f07 = L.popup({"maxWidth": "100%"});

        
            var i_frame_8158a7a694684f4297e874db3950cebe = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTGl0aHVhbmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBWaWxuaXVzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExUVQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IExpdGh1YW5pYW4gTGl0YXMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA2Nzc3NDUyCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzEvMTEvRmxhZ19vZl9MaXRodWFuaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0c72f8d6c55e4c4eb789d439145b7f07.setContent(i_frame_8158a7a694684f4297e874db3950cebe);
        

        marker_5d994348b9a442a5ad0e0c025b0ca793.bindPopup(popup_0c72f8d6c55e4c4eb789d439145b7f07)
        ;

        
    
    
            marker_5d994348b9a442a5ad0e0c025b0ca793.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c4b25f1ae4b7489ca34779c364d2f7b5 = L.marker(
                [49.6, 6.18],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_601e0864708a4336a10fb0512ef27715 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c4b25f1ae4b7489ca34779c364d2f7b5.setIcon(icon_601e0864708a4336a10fb0512ef27715);
        
    
        var popup_4d24281b6a3c41f59e8a2f3354e3251d = L.popup({"maxWidth": "100%"});

        
            var i_frame_81debfd280544bbb8e9812d982174dc4 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTHV4ZW1ib3VyZyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTHV4ZW1ib3VyZyBbTHV4ZW1idXJnL0wKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTFVYCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRXVybyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDM4MDE5Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2QvZGEvRmxhZ19vZl9MdXhlbWJvdXJnLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_4d24281b6a3c41f59e8a2f3354e3251d.setContent(i_frame_81debfd280544bbb8e9812d982174dc4);
        

        marker_c4b25f1ae4b7489ca34779c364d2f7b5.bindPopup(popup_4d24281b6a3c41f59e8a2f3354e3251d)
        ;

        
    
    
            marker_c4b25f1ae4b7489ca34779c364d2f7b5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_467696b28bba4bc5ab396405854427d3 = L.marker(
                [22.19, 113.54],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_2251c4388e0c4528a14124d9e18583ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_467696b28bba4bc5ab396405854427d3.setIcon(icon_2251c4388e0c4528a14124d9e18583ea);
        
    
        var popup_bbd04b7cc872483a988816aacd240f35 = L.popup({"maxWidth": "100%"});

        
            var i_frame_7877a7f0abbd47b281eeb16e3bc9216f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFjYW8gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE1hY2FvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1BQwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE1hY2F1IFBhdGFjYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI3ODY4NDQKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IG5hbiBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_bbd04b7cc872483a988816aacd240f35.setContent(i_frame_7877a7f0abbd47b281eeb16e3bc9216f);
        

        marker_467696b28bba4bc5ab396405854427d3.bindPopup(popup_bbd04b7cc872483a988816aacd240f35)
        ;

        
    
    
            marker_467696b28bba4bc5ab396405854427d3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_69ac442a08a344d089b8a6170518782c = L.marker(
                [42.1, 21.4],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_14223bbaa2cf4d24ad3e7f6df18f2462 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69ac442a08a344d089b8a6170518782c.setIcon(icon_14223bbaa2cf4d24ad3e7f6df18f2462);
        
    
        var popup_5d3c57b0e7e64e4b9a4dcb1b3e9dd9a6 = L.popup({"maxWidth": "100%"});

        
            var i_frame_2fca1233d089437aaf61a3d7de3242e1 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFjZWRvbmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBTa29wamUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTUtECjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRGVuYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA2MTk4OTYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZi9mOC9GbGFnX29mX01hY2Vkb25pYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5d3c57b0e7e64e4b9a4dcb1b3e9dd9a6.setContent(i_frame_2fca1233d089437aaf61a3d7de3242e1);
        

        marker_69ac442a08a344d089b8a6170518782c.bindPopup(popup_5d3c57b0e7e64e4b9a4dcb1b3e9dd9a6)
        ;

        
    
    
            marker_69ac442a08a344d089b8a6170518782c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_8d2fd7e99517493c887df2ccc33df2a8 = L.marker(
                [-21.27, 46.22],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_fb11153fee93410b9cb06684a9667e52 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8d2fd7e99517493c887df2ccc33df2a8.setIcon(icon_fb11153fee93410b9cb06684a9667e52);
        
    
        var popup_fa2815f2acec403ab3ef92261233dc3b = L.popup({"maxWidth": "100%"});

        
            var i_frame_1a8870e636e1400890346e6482e3f385 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFkYWdhc2NhciAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQW50YW5hbmFyaXZvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1ERwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE1hbGFnYXN5wqBGcmFuYyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDY0MDQ0NQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9iL2JjL0ZsYWdfb2ZfTWFkYWdhc2Nhci5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_fa2815f2acec403ab3ef92261233dc3b.setContent(i_frame_1a8870e636e1400890346e6482e3f385);
        

        marker_8d2fd7e99517493c887df2ccc33df2a8.bindPopup(popup_fa2815f2acec403ab3ef92261233dc3b)
        ;

        
    
    
            marker_8d2fd7e99517493c887df2ccc33df2a8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_1c11fda921e348458e72dcab566eb2b5 = L.marker(
                [-13.35, 34.14],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d2c6796d121e4bbdbe2f7196eea6c65d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1c11fda921e348458e72dcab566eb2b5.setIcon(icon_d2c6796d121e4bbdbe2f7196eea6c65d);
        
    
        var popup_4d7df579e2984a598097e43c149121c6 = L.popup({"maxWidth": "100%"});

        
            var i_frame_ba874d99575b4951a21e914f6bc3261b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFsYXdpIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBMaWxvbmd3ZQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBNV0kKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBNYWxhd2kgS3dhY2hhIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjA4MzQ1OQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9kL2QxL0ZsYWdfb2ZfTWFsYXdpLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_4d7df579e2984a598097e43c149121c6.setContent(i_frame_ba874d99575b4951a21e914f6bc3261b);
        

        marker_1c11fda921e348458e72dcab566eb2b5.bindPopup(popup_4d7df579e2984a598097e43c149121c6)
        ;

        
    
    
            marker_1c11fda921e348458e72dcab566eb2b5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_51d347950d8e4714aeb5cec8bb8c4752 = L.marker(
                [3.57, 101.91],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7aa27da603fd4ab396c5875561ba14fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_51d347950d8e4714aeb5cec8bb8c4752.setIcon(icon_7aa27da603fd4ab396c5875561ba14fe);
        
    
        var popup_21bed713f53b430b9babad3242098674 = L.popup({"maxWidth": "100%"});

        
            var i_frame_1517901e589f46d0b62961733cde24f5 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFsYXlzaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEt1YWxhIEx1bXB1cgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBNWVMKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBNYWxheXNpYW4gUmluZ2dpdCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI2OTY5MzA3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzYvNjYvRmxhZ19vZl9NYWxheXNpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_21bed713f53b430b9babad3242098674.setContent(i_frame_1517901e589f46d0b62961733cde24f5);
        

        marker_51d347950d8e4714aeb5cec8bb8c4752.bindPopup(popup_21bed713f53b430b9babad3242098674)
        ;

        
    
    
            marker_51d347950d8e4714aeb5cec8bb8c4752.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_23d5c588e9e24f60bcb1bd177c8156a4 = L.marker(
                [-0.6, 73.18],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1db4f180d91c4b6db6e1d3eaa2bdc2c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23d5c588e9e24f60bcb1bd177c8156a4.setIcon(icon_1db4f180d91c4b6db6e1d3eaa2bdc2c4);
        
    
        var popup_77e0fae65ae846589ae1c7637ff85c77 = L.popup({"maxWidth": "100%"});

        
            var i_frame_beecdcc640144f3ba27f5061cb11ab5e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFsZGl2ZXMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE1hbGUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTURWCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTWFsZGl2ZSBSdWZpeWFhIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTg2Mjg3NDcKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMC8wZi9GbGFnX29mX01hbGRpdmVzLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_77e0fae65ae846589ae1c7637ff85c77.setContent(i_frame_beecdcc640144f3ba27f5061cb11ab5e);
        

        marker_23d5c588e9e24f60bcb1bd177c8156a4.bindPopup(popup_77e0fae65ae846589ae1c7637ff85c77)
        ;

        
    
    
            marker_23d5c588e9e24f60bcb1bd177c8156a4.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_be070e7b7af64c069e2888eb178e9810 = L.marker(
                [18.06, -1.43],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_5acb936e98ce4a72b40b14d8cc3835a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_be070e7b7af64c069e2888eb178e9810.setIcon(icon_5acb936e98ce4a72b40b14d8cc3835a0);
        
    
        var popup_0de2a74987ba47339a056c5fb2ca13ff = L.popup({"maxWidth": "100%"});

        
            var i_frame_5ec409636ef0454ba54b3033603256cf = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFsaSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQmFtYWtvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1MSQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENGQSBGcmFuYyBCQ0VBTyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDMxOTQ5Nzc3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzkvOTIvRmxhZ19vZl9NYWxpLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0de2a74987ba47339a056c5fb2ca13ff.setContent(i_frame_5ec409636ef0454ba54b3033603256cf);
        

        marker_be070e7b7af64c069e2888eb178e9810.bindPopup(popup_0de2a74987ba47339a056c5fb2ca13ff)
        ;

        
    
    
            marker_be070e7b7af64c069e2888eb178e9810.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f427ba64c4fb469aa956e37abaf3cccb = L.marker(
                [35.88, 14.44],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3023aa371ae74e3cae2fd42009eb0e22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f427ba64c4fb469aa956e37abaf3cccb.setIcon(icon_3023aa371ae74e3cae2fd42009eb0e22);
        
    
        var popup_a19ac9ecd39e4db9a95b4abb84faeec8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_12161870ceba45c1bf04421c955f2f20 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFsdGEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFZhbGxldHRhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1MVAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEV1cm8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA1MzA5NTMKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNy83My9GbGFnX29mX01hbHRhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a19ac9ecd39e4db9a95b4abb84faeec8.setContent(i_frame_12161870ceba45c1bf04421c955f2f20);
        

        marker_f427ba64c4fb469aa956e37abaf3cccb.bindPopup(popup_a19ac9ecd39e4db9a95b4abb84faeec8)
        ;

        
    
    
            marker_f427ba64c4fb469aa956e37abaf3cccb.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_98f2b793264f4f618f29f5f44c2b77c1 = L.marker(
                [7.27, 168.32],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1428c35281cf484e97359e7a5f6545de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_98f2b793264f4f618f29f5f44c2b77c1.setIcon(icon_1428c35281cf484e97359e7a5f6545de);
        
    
        var popup_e9f4f4ebcf0443e5ac16edf39c98bb28 = L.popup({"maxWidth": "100%"});

        
            var i_frame_43a850c5c3a148cb93422d1ca9335d20 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWFyc2hhbGwgSXNsYW5kcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gRGFsYXAtVWxpZ2EtRGFycml0Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1ITAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE5NjU4MDMxCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzIvMmUvRmxhZ19vZl90aGVfTWFyc2hhbGxfSXNsYW5kcy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e9f4f4ebcf0443e5ac16edf39c98bb28.setContent(i_frame_43a850c5c3a148cb93422d1ca9335d20);
        

        marker_98f2b793264f4f618f29f5f44c2b77c1.bindPopup(popup_e9f4f4ebcf0443e5ac16edf39c98bb28)
        ;

        
    
    
            marker_98f2b793264f4f618f29f5f44c2b77c1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f84cec055bef4bb3b682cec17621e014 = L.marker(
                [19.55, -11.17],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1627baa9b5ee4673990ff2ed3445f106 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f84cec055bef4bb3b682cec17621e014.setIcon(icon_1627baa9b5ee4673990ff2ed3445f106);
        
    
        var popup_e293052c83de49a3941a607451e7af9a = L.popup({"maxWidth": "100%"});

        
            var i_frame_fdee84f4c5b64979b27950443340987f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWF1cml0YW5pYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTm91YWtjaG90dAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBNUlQKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBNYXVyaXRhbmlhbiBPdWd1aXlhIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTAyNjUzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNDMvRmxhZ19vZl9NYXVyaXRhbmlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e293052c83de49a3941a607451e7af9a.setContent(i_frame_fdee84f4c5b64979b27950443340987f);
        

        marker_f84cec055bef4bb3b682cec17621e014.bindPopup(popup_e293052c83de49a3941a607451e7af9a)
        ;

        
    
    
            marker_f84cec055bef4bb3b682cec17621e014.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_24de1a4c790e4cfe9920e348a79242c6 = L.marker(
                [-20.08, 57.47],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_10c3fb046e554299ba4f06637940a857 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_24de1a4c790e4cfe9920e348a79242c6.setIcon(icon_10c3fb046e554299ba4f06637940a857);
        
    
        var popup_a9b7be20b6174fd9a13aa38c53ce9193 = L.popup({"maxWidth": "100%"});

        
            var i_frame_d77ecc08c16041b4831adf8e20642a08 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWF1cml0aXVzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBQb3J0LUxvdWlzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1VUwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE1hdXJpdGl1cyBSdXBlZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU4NzkxCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzcvNzcvRmxhZ19vZl9NYXVyaXRpdXMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a9b7be20b6174fd9a13aa38c53ce9193.setContent(i_frame_d77ecc08c16041b4831adf8e20642a08);
        

        marker_24de1a4c790e4cfe9920e348a79242c6.bindPopup(popup_a9b7be20b6174fd9a13aa38c53ce9193)
        ;

        
    
    
            marker_24de1a4c790e4cfe9920e348a79242c6.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_517c494c481f4304ad66d450d15d3ef8 = L.marker(
                [23.95, -102.24],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_22e4cc942bca44cd8c73e9b0815500da = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_517c494c481f4304ad66d450d15d3ef8.setIcon(icon_22e4cc942bca44cd8c73e9b0815500da);
        
    
        var popup_5a4d62019220439e810442bb32ed7569 = L.popup({"maxWidth": "100%"});

        
            var i_frame_6ad0b3a585334b3ab03a68fdfafd22c1 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWV4aWNvIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDaXVkYWQgZGUgTQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBNRVgKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBNZXhpY2FuIE51ZXZvIFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0NTI1Njk2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZmMvRmxhZ19vZl9NZXhpY28uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5a4d62019220439e810442bb32ed7569.setContent(i_frame_6ad0b3a585334b3ab03a68fdfafd22c1);
        

        marker_517c494c481f4304ad66d450d15d3ef8.bindPopup(popup_5a4d62019220439e810442bb32ed7569)
        ;

        
    
    
            marker_517c494c481f4304ad66d450d15d3ef8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_45f33c23f3114b63b698396851319c44 = L.marker(
                [7.02, 157.78],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e590d62d524b49e5a36a12b7075e49d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_45f33c23f3114b63b698396851319c44.setIcon(icon_e590d62d524b49e5a36a12b7075e49d6);
        
    
        var popup_aec819a1dd71406191eb32ae89713a11 = L.popup({"maxWidth": "100%"});

        
            var i_frame_5b84f437e81945e8a0a2d3cac2a1787b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTWljcm9uZXNpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUGFsaWtpcgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBGU00KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBVUyBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMjY1NzExCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2UvZTQvRmxhZ19vZl90aGVfRmVkZXJhdGVkX1N0YXRlc19vZl9NaWNyb25lc2lhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_aec819a1dd71406191eb32ae89713a11.setContent(i_frame_5b84f437e81945e8a0a2d3cac2a1787b);
        

        marker_45f33c23f3114b63b698396851319c44.bindPopup(popup_aec819a1dd71406191eb32ae89713a11)
        ;

        
    
    
            marker_45f33c23f3114b63b698396851319c44.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bb61e51f1e904b6b8bc0df2221ae866c = L.marker(
                [47.71, 28.35],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a895b99d030c4996b3b6634a890fd5f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb61e51f1e904b6b8bc0df2221ae866c.setIcon(icon_a895b99d030c4996b3b6634a890fd5f3);
        
    
        var popup_5201701cdf76468fb98a2b6bd298f664 = L.popup({"maxWidth": "100%"});

        
            var i_frame_b824627b3c92451dbaaead3ba5914525 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTW9sZG92YSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQ2hpc2luYXUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTURBCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTW9sZG92YW4gTGV1IAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTI3NTc1NTI5Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzIvMjcvRmxhZ19vZl9Nb2xkb3ZhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5201701cdf76468fb98a2b6bd298f664.setContent(i_frame_b824627b3c92451dbaaead3ba5914525);
        

        marker_bb61e51f1e904b6b8bc0df2221ae866c.bindPopup(popup_5201701cdf76468fb98a2b6bd298f664)
        ;

        
    
    
            marker_bb61e51f1e904b6b8bc0df2221ae866c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_8ef576500235493183b34925e8b0209a = L.marker(
                [46.87, 101.889],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4f7ddabf24924a9c9cc9d424a7c5e180 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8ef576500235493183b34925e8b0209a.setIcon(icon_4f7ddabf24924a9c9cc9d424a7c5e180);
        
    
        var popup_6aa3a082c96e41979b141488599428bf = L.popup({"maxWidth": "100%"});

        
            var i_frame_65ba9f0282ae44608a0e245fdfa806f1 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTW9uZ29saWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFVsYW4gQmF0b3IKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTU5HCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTW9uZ29saWFuIFR1Z3JpayAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDExMzgxNQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy80LzRjL0ZsYWdfb2ZfTW9uZ29saWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_6aa3a082c96e41979b141488599428bf.setContent(i_frame_65ba9f0282ae44608a0e245fdfa806f1);
        

        marker_8ef576500235493183b34925e8b0209a.bindPopup(popup_6aa3a082c96e41979b141488599428bf)
        ;

        
    
    
            marker_8ef576500235493183b34925e8b0209a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_ae41c55e53c448a1b7387c3a4ec85ff5 = L.marker(
                [31.95, -7.39],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b17d130e85af499d956f7c47c29b210a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ae41c55e53c448a1b7387c3a4ec85ff5.setIcon(icon_b17d130e85af499d956f7c47c29b210a);
        
    
        var popup_890d2322cac041a1b119ab81f0348a55 = L.popup({"maxWidth": "100%"});

        
            var i_frame_e560b63371eb405a9953818249303ff8 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTW9yb2NjbyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUmFiYXQKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTUFSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTW9yb2NjYW4gRGlyaGFtIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjY1NzYzNwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8yLzJjL0ZsYWdfb2ZfTW9yb2Njby5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_890d2322cac041a1b119ab81f0348a55.setContent(i_frame_e560b63371eb405a9953818249303ff8);
        

        marker_ae41c55e53c448a1b7387c3a4ec85ff5.bindPopup(popup_890d2322cac041a1b119ab81f0348a55)
        ;

        
    
    
            marker_ae41c55e53c448a1b7387c3a4ec85ff5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_1a248f8f11704c92aa23a38746775016 = L.marker(
                [-14.44, 39.76],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0529bdf438424e23b31e04caa641ee10 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1a248f8f11704c92aa23a38746775016.setIcon(icon_0529bdf438424e23b31e04caa641ee10);
        
    
        var popup_75cd19afc79a479cb32a07e149a8e573 = L.popup({"maxWidth": "100%"});

        
            var i_frame_8d4d7a1fe638412a8be28e310c66d601 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTW96YW1iaXF1ZSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTWFwdXRvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1PWgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE1vemFtYmlxdWUgTWV0aWNhbCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDMyMjUxNjcKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZC9kMC9GbGFnX29mX01vemFtYmlxdWUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_75cd19afc79a479cb32a07e149a8e573.setContent(i_frame_8d4d7a1fe638412a8be28e310c66d601);
        

        marker_1a248f8f11704c92aa23a38746775016.bindPopup(popup_75cd19afc79a479cb32a07e149a8e573)
        ;

        
    
    
            marker_1a248f8f11704c92aa23a38746775016.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c6ddce99000a4608ba0fc09d0a522ad2 = L.marker(
                [21.46, 96.39],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b60f8b2e9e174917ae6d1d6a1b405b60 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c6ddce99000a4608ba0fc09d0a522ad2.setIcon(icon_b60f8b2e9e174917ae6d1d6a1b405b60);
        
    
        var popup_b578a89495bc421593802ab4604e2f90 = L.popup({"maxWidth": "100%"});

        
            var i_frame_6d9f6c9906ce49b7ad59317752c9cd0c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTXlhbm1hciAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUmFuZ29vbiAoWWFuZ29uKQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBNTVIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBNeWFubWFyIEt5YXQgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzNjQ3MTc2OQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy84LzhjL0ZsYWdfb2ZfTXlhbm1hci5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_b578a89495bc421593802ab4604e2f90.setContent(i_frame_6d9f6c9906ce49b7ad59317752c9cd0c);
        

        marker_c6ddce99000a4608ba0fc09d0a522ad2.bindPopup(popup_b578a89495bc421593802ab4604e2f90)
        ;

        
    
    
            marker_c6ddce99000a4608ba0fc09d0a522ad2.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_5a94a5a5a0744fc08e794686cf1b27eb = L.marker(
                [-22.02, 17.84],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_084003eaddd54e9298009128293169cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_5a94a5a5a0744fc08e794686cf1b27eb.setIcon(icon_084003eaddd54e9298009128293169cb);
        
    
        var popup_506c5bbbc5e042f2a6755ed7ad5b70fb = L.popup({"maxWidth": "100%"});

        
            var i_frame_83b3169cf45e4d29849a9f47aa498c64 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmFtaWJpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gV2luZGhvZWsKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTkFNCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTmFtaWJpYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzAzNjYwMzYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMC8wMC9GbGFnX29mX05hbWliaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_506c5bbbc5e042f2a6755ed7ad5b70fb.setContent(i_frame_83b3169cf45e4d29849a9f47aa498c64);
        

        marker_5a94a5a5a0744fc08e794686cf1b27eb.bindPopup(popup_506c5bbbc5e042f2a6755ed7ad5b70fb)
        ;

        
    
    
            marker_5a94a5a5a0744fc08e794686cf1b27eb.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c32d1137f878434892c61fbf86e9b278 = L.marker(
                [-0.54, 166.92],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_22e78753d1504579b01ee8df3e540ce2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c32d1137f878434892c61fbf86e9b278.setIcon(icon_22e78753d1504579b01ee8df3e540ce2);
        
    
        var popup_01736a4a1e5942ac81d79e49d65033bd = L.popup({"maxWidth": "100%"});

        
            var i_frame_b8c76f1b6c6446d0801b3f87b7ad2ec9 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmF1cnUgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFlhcmVuCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE5SVQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEF1c3RyYWxpYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTQwNDU0MjAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zMC9GbGFnX29mX05hdXJ1LnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_01736a4a1e5942ac81d79e49d65033bd.setContent(i_frame_b8c76f1b6c6446d0801b3f87b7ad2ec9);
        

        marker_c32d1137f878434892c61fbf86e9b278.bindPopup(popup_01736a4a1e5942ac81d79e49d65033bd)
        ;

        
    
    
            marker_c32d1137f878434892c61fbf86e9b278.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_0f4089a35e864506abebcc01d52d0e2f = L.marker(
                [28.23, 83.96],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f60b745afdef4a55a36dfc878ef9381a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0f4089a35e864506abebcc01d52d0e2f.setIcon(icon_f60b745afdef4a55a36dfc878ef9381a);
        
    
        var popup_f1621cbad72c4db5833a5c9e73138ec9 = L.popup({"maxWidth": "100%"});

        
            var i_frame_dd16dd82676045c59ceda514069b21aa = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmVwYWwgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEthdGhtYW5kdQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBOUEwKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBOZXBhbGVzZSBSdXBlZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI0OTQ1MzAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOS85Yi9GbGFnX29mX05lcGFsLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_f1621cbad72c4db5833a5c9e73138ec9.setContent(i_frame_dd16dd82676045c59ceda514069b21aa);
        

        marker_0f4089a35e864506abebcc01d52d0e2f.bindPopup(popup_f1621cbad72c4db5833a5c9e73138ec9)
        ;

        
    
    
            marker_0f4089a35e864506abebcc01d52d0e2f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_86c5ce8cdef64af990de7fd2650a2ef4 = L.marker(
                [52.7, 5.69],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_30a2f62854ba496bb4cd788baa4e90cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_86c5ce8cdef64af990de7fd2650a2ef4.setIcon(icon_30a2f62854ba496bb4cd788baa4e90cc);
        
    
        var popup_b991900af893440cb1d8d62e24b3cf17 = L.popup({"maxWidth": "100%"});

        
            var i_frame_dbe420bc9233452582975974453e89d0 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmV0aGVybGFuZHMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEFtc3RlcmRhbQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBOTEQKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTI1ODEKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMi8yMC9GbGFnX29mX3RoZV9OZXRoZXJsYW5kcy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_b991900af893440cb1d8d62e24b3cf17.setContent(i_frame_dbe420bc9233452582975974453e89d0);
        

        marker_86c5ce8cdef64af990de7fd2650a2ef4.bindPopup(popup_b991900af893440cb1d8d62e24b3cf17)
        ;

        
    
    
            marker_86c5ce8cdef64af990de7fd2650a2ef4.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_714989f43446466b8abe708ce7355430 = L.marker(
                [-21.36, 165.35],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_46b1e6ca484a4c52b1149654f7dd5732 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_714989f43446466b8abe708ce7355430.setIcon(icon_46b1e6ca484a4c52b1149654f7dd5732);
        
    
        var popup_0d5b5c28f8b04db1810177e9cabaeb29 = L.popup({"maxWidth": "100%"});

        
            var i_frame_58b81f4416de4c58b701ae6da7c2f1e7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmV3IENhbGVkb25pYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTm91bQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBOQ0wKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDRlAgRnJhbmMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyODYwODcxMAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gbmFuIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0d5b5c28f8b04db1810177e9cabaeb29.setContent(i_frame_58b81f4416de4c58b701ae6da7c2f1e7);
        

        marker_714989f43446466b8abe708ce7355430.bindPopup(popup_0d5b5c28f8b04db1810177e9cabaeb29)
        ;

        
    
    
            marker_714989f43446466b8abe708ce7355430.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_09f1f943d65a446c8be8edc7c1208b35 = L.marker(
                [-42.56, 172.51],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3c95efd1625b411a8baeb03ade94f9ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_09f1f943d65a446c8be8edc7c1208b35.setIcon(icon_3c95efd1625b411a8baeb03ade94f9ee);
        
    
        var popup_3bab42469c904839a44dfdc357d0d680 = L.popup({"maxWidth": "100%"});

        
            var i_frame_d6fd38b5e30a4dfeb42613c2313a87af = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmV3IFplYWxhbmQgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFdlbGxpbmd0b24KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTlpMCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTmV3IFplYWxhbmQgRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTczMzI4NTAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zZS9GbGFnX29mX05ld19aZWFsYW5kLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_3bab42469c904839a44dfdc357d0d680.setContent(i_frame_d6fd38b5e30a4dfeb42613c2313a87af);
        

        marker_09f1f943d65a446c8be8edc7c1208b35.bindPopup(popup_3bab42469c904839a44dfdc357d0d680)
        ;

        
    
    
            marker_09f1f943d65a446c8be8edc7c1208b35.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f7c261ecc0bb4449adbbde4b71808310 = L.marker(
                [12.98, -85.04],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f3428a2f7ed84ef4ae62c46cf85c54de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f7c261ecc0bb4449adbbde4b71808310.setIcon(icon_f3428a2f7ed84ef4ae62c46cf85c54de);
        
    
        var popup_347e871651124245a469a55e5ada403e = L.popup({"maxWidth": "100%"});

        
            var i_frame_ba2d43af04f04ff78c244a63ed7d77ec = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmljYXJhZ3VhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBNYW5hZ3VhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE5JQwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE5pY2FyYWd1YW4gQ29yZG9iYSBPcm8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyODc4MDAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMS8xOS9GbGFnX29mX05pY2FyYWd1YS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_347e871651124245a469a55e5ada403e.setContent(i_frame_ba2d43af04f04ff78c244a63ed7d77ec);
        

        marker_f7c261ecc0bb4449adbbde4b71808310.bindPopup(popup_347e871651124245a469a55e5ada403e)
        ;

        
    
    
            marker_f7c261ecc0bb4449adbbde4b71808310.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_4863ea82a1f34630abe9b33973620e17 = L.marker(
                [17.58, 8.94],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1a0de6580bee49b185bab550123da2af = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_4863ea82a1f34630abe9b33973620e17.setIcon(icon_1a0de6580bee49b185bab550123da2af);
        
    
        var popup_d27bcf9aa9954247b4b0b0a3827ff875 = L.popup({"maxWidth": "100%"});

        
            var i_frame_7dfcbb85102f4d12943b81f9a8db2eb1 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmlnZXIgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE5pYW1leQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBORVIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBDRkEgRnJhbmMgQkNFQU8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0OTE3MDAwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZjQvRmxhZ19vZl9OaWdlci5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d27bcf9aa9954247b4b0b0a3827ff875.setContent(i_frame_7dfcbb85102f4d12943b81f9a8db2eb1);
        

        marker_4863ea82a1f34630abe9b33973620e17.bindPopup(popup_d27bcf9aa9954247b4b0b0a3827ff875)
        ;

        
    
    
            marker_4863ea82a1f34630abe9b33973620e17.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d927606e9bf94babb12a6ad363864cfd = L.marker(
                [9.55, 7.93],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_826f8d9573654916bbffdeeae1ddeb9d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d927606e9bf94babb12a6ad363864cfd.setIcon(icon_826f8d9573654916bbffdeeae1ddeb9d);
        
    
        var popup_9b617b5f77814dc7a23350a2a4fbe3dd = L.popup({"maxWidth": "100%"});

        
            var i_frame_c3209564bc2d47f18ca6ccc5e87a66d7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTmlnZXJpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQWJ1amEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gTkdBCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gTmlnZXJpYW4gTmFpcmEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA2NTQ1NTAyCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzcvNzkvRmxhZ19vZl9OaWdlcmlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9b617b5f77814dc7a23350a2a4fbe3dd.setContent(i_frame_c3209564bc2d47f18ca6ccc5e87a66d7);
        

        marker_d927606e9bf94babb12a6ad363864cfd.bindPopup(popup_9b617b5f77814dc7a23350a2a4fbe3dd)
        ;

        
    
    
            marker_d927606e9bf94babb12a6ad363864cfd.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9bb765e715074ac8afb8af74c4ff3c3f = L.marker(
                [39.32, 125.74],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7c700d1b2ae54dc2a66a7e8d5b79fda1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9bb765e715074ac8afb8af74c4ff3c3f.setIcon(icon_7c700d1b2ae54dc2a66a7e8d5b79fda1);
        
    
        var popup_bd843e37f0b048c5999a0efd2f1f8b8f = L.popup({"maxWidth": "100%"});

        
            var i_frame_558196b1b0d94bcea4eb9d527ba02ef7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTm9ydGggS29yZWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFB5b25neWFuZwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBLT1IKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBOb3J0aCBLb3JlYW4gV29uIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjMzMTA3MTUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNS81MS9GbGFnX29mX05vcnRoX0tvcmVhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_bd843e37f0b048c5999a0efd2f1f8b8f.setContent(i_frame_558196b1b0d94bcea4eb9d527ba02ef7);
        

        marker_9bb765e715074ac8afb8af74c4ff3c3f.bindPopup(popup_bd843e37f0b048c5999a0efd2f1f8b8f)
        ;

        
    
    
            marker_9bb765e715074ac8afb8af74c4ff3c3f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_69150322594045f8ba94a758f2fd7930 = L.marker(
                [15.27, 145.8],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a2377497edfc4073b7e265e970cce1f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_69150322594045f8ba94a758f2fd7930.setIcon(icon_a2377497edfc4073b7e265e970cce1f0);
        
    
        var popup_564e43ea449d45d7bdaaa45930db7eba = L.popup({"maxWidth": "100%"});

        
            var i_frame_9e144868a5b64656a0eda7fbe7e70fea = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTm9ydGhlcm4gTWFyaWFuYSBJc2xhbmRzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBHYXJhcGFuCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE1OUAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDIwMDk2MzU5OQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gbmFuIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_564e43ea449d45d7bdaaa45930db7eba.setContent(i_frame_9e144868a5b64656a0eda7fbe7e70fea);
        

        marker_69150322594045f8ba94a758f2fd7930.bindPopup(popup_564e43ea449d45d7bdaaa45930db7eba)
        ;

        
    
    
            marker_69150322594045f8ba94a758f2fd7930.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_65083cc5f12a470580ec0f1aafe85aeb = L.marker(
                [61.88, 9.57],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_115ef19f167948bfb1bbfa62ac3faf46 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_65083cc5f12a470580ec0f1aafe85aeb.setIcon(icon_115ef19f167948bfb1bbfa62ac3faf46);
        
    
        var popup_45f992f7348f4f5687a776a1787b753f = L.popup({"maxWidth": "100%"});

        
            var i_frame_7c23f4db8876442b8b2ce95fcfd887a0 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gTm9yd2F5IAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBPc2xvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE5PUgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE5vcndlZ2lhbiBLcm9uZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU3MjE2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2QvZDkvRmxhZ19vZl9Ob3J3YXkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_45f992f7348f4f5687a776a1787b753f.setContent(i_frame_7c23f4db8876442b8b2ce95fcfd887a0);
        

        marker_65083cc5f12a470580ec0f1aafe85aeb.bindPopup(popup_45f992f7348f4f5687a776a1787b753f)
        ;

        
    
    
            marker_65083cc5f12a470580ec0f1aafe85aeb.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_1e2c1f11f85d449cae78ff77d9ca50b5 = L.marker(
                [20.55, 56.09],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_dbaf9a47333d45159854912ac56fa2d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_1e2c1f11f85d449cae78ff77d9ca50b5.setIcon(icon_dbaf9a47333d45159854912ac56fa2d1);
        
    
        var popup_da187cc1f98249ff8fe86ff514fe8b93 = L.popup({"maxWidth": "100%"});

        
            var i_frame_7e1654543a854b5fa0e14ee078a2e53b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gT21hbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTWFzcWF0Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IE9NTgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IE9tYW5pIFJpYWwgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA1MzQ3ODk2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2QvZGQvRmxhZ19vZl9PbWFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_da187cc1f98249ff8fe86ff514fe8b93.setContent(i_frame_7e1654543a854b5fa0e14ee078a2e53b);
        

        marker_1e2c1f11f85d449cae78ff77d9ca50b5.bindPopup(popup_da187cc1f98249ff8fe86ff514fe8b93)
        ;

        
    
    
            marker_1e2c1f11f85d449cae78ff77d9ca50b5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f66c3a234d2c405fa6d4706e46970988 = L.marker(
                [29.91, 69.37],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3990857a6c9142f1aec437e265e80545 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f66c3a234d2c405fa6d4706e46970988.setIcon(icon_3990857a6c9142f1aec437e265e80545);
        
    
        var popup_da9f2c1ba89d46b782bf8adf0f4e6d09 = L.popup({"maxWidth": "100%"});

        
            var i_frame_b9e8b2d10c1345ca9b6b3da4f3df4e70 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGFraXN0YW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IElzbGFtYWJhZAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQQUsKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBQYWtpc3RhbiBSdXBlZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDQ5NzQ5ODYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zMi9GbGFnX29mX1Bha2lzdGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_da9f2c1ba89d46b782bf8adf0f4e6d09.setContent(i_frame_b9e8b2d10c1345ca9b6b3da4f3df4e70);
        

        marker_f66c3a234d2c405fa6d4706e46970988.bindPopup(popup_da9f2c1ba89d46b782bf8adf0f4e6d09)
        ;

        
    
    
            marker_f66c3a234d2c405fa6d4706e46970988.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_fcc4e074a22b452b979510818550e65c = L.marker(
                [7.58, 134.55],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_98b3e27c9275483fb43f7a879deebebb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fcc4e074a22b452b979510818550e65c.setIcon(icon_98b3e27c9275483fb43f7a879deebebb);
        
    
        var popup_dd8b67302a2041ed83200127ae9f5f86 = L.popup({"maxWidth": "100%"});

        
            var i_frame_2b3c7ebf7d78425e9cb5ce92f6f25d1c = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGFsYXUgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEtvcm9yCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFBMVwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDIxNjU2NTMxOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy80LzQ4L0ZsYWdfb2ZfUGFsYXUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_dd8b67302a2041ed83200127ae9f5f86.setContent(i_frame_2b3c7ebf7d78425e9cb5ce92f6f25d1c);
        

        marker_fcc4e074a22b452b979510818550e65c.bindPopup(popup_dd8b67302a2041ed83200127ae9f5f86)
        ;

        
    
    
            marker_fcc4e074a22b452b979510818550e65c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_6d1241edd1574e37a9cff38d00001b30 = L.marker(
                [8.57, -80.17],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_65a0e33ab9f745edbaffb442d7b430f9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_6d1241edd1574e37a9cff38d00001b30.setIcon(icon_65a0e33ab9f745edbaffb442d7b430f9);
        
    
        var popup_f170ba5ebd98429f9d08c294ae342c07 = L.popup({"maxWidth": "100%"});

        
            var i_frame_c4fa5193f06e41a7900cadc086cf5b48 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGFuYW1hIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDaXVkYWQgZGUgUGFuYW0KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gUEFOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gUGFuYW1hbmlhbiBCYWxib2EgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxODAwOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9hL2FiL0ZsYWdfb2ZfUGFuYW1hLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_f170ba5ebd98429f9d08c294ae342c07.setContent(i_frame_c4fa5193f06e41a7900cadc086cf5b48);
        

        marker_6d1241edd1574e37a9cff38d00001b30.bindPopup(popup_f170ba5ebd98429f9d08c294ae342c07)
        ;

        
    
    
            marker_6d1241edd1574e37a9cff38d00001b30.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_39bc9f7bed79493ea2fa7144c415bfa8 = L.marker(
                [-6.55, 144.21],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_824d9781303e44c4a19169120acde34a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_39bc9f7bed79493ea2fa7144c415bfa8.setIcon(icon_824d9781303e44c4a19169120acde34a);
        
    
        var popup_a413ff115f174a24baed7dc2edc01101 = L.popup({"maxWidth": "100%"});

        
            var i_frame_81abc445e60845419e12c6d073fbd05f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGFwdWEgTmV3IEd1aW5lYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUG9ydCBNb3Jlc2J5Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFBORwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFBhcHVhIE5ldyBHdWluZWEgS2luYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDQyNDY0MzkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZS9lMy9GbGFnX29mX1BhcHVhX05ld19HdWluZWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a413ff115f174a24baed7dc2edc01101.setContent(i_frame_81abc445e60845419e12c6d073fbd05f);
        

        marker_39bc9f7bed79493ea2fa7144c415bfa8.bindPopup(popup_a413ff115f174a24baed7dc2edc01101)
        ;

        
    
    
            marker_39bc9f7bed79493ea2fa7144c415bfa8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_229a80d2c40c488ab638cdc324066af1 = L.marker(
                [-23.24, -58.63],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_fec09095d02d4847993b369a5b3992cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_229a80d2c40c488ab638cdc324066af1.setIcon(icon_fec09095d02d4847993b369a5b3992cc);
        
    
        var popup_fbe327754fb84cfbaf89d8a7c69b44a8 = L.popup({"maxWidth": "100%"});

        
            var i_frame_e23e4f2c253d43d890d1739e38bcccbd = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGFyYWd1YXkgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEFzdW5jaQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQUlkKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBQYXJhZ3VheSBHdWFyYW5pIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gODc3NjEwOQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8yLzI3L0ZsYWdfb2ZfUGFyYWd1YXkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_fbe327754fb84cfbaf89d8a7c69b44a8.setContent(i_frame_e23e4f2c253d43d890d1739e38bcccbd);
        

        marker_229a80d2c40c488ab638cdc324066af1.bindPopup(popup_fbe327754fb84cfbaf89d8a7c69b44a8)
        ;

        
    
    
            marker_229a80d2c40c488ab638cdc324066af1.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b235856f422644a1be105772a8ca8865 = L.marker(
                [-10.57, -75.87100000000001],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a0eba744fcab47f8a3008963a42f40e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b235856f422644a1be105772a8ca8865.setIcon(icon_a0eba744fcab47f8a3008963a42f40e4);
        
    
        var popup_e05169ce667d409a9d6ffa821e7c15fc = L.popup({"maxWidth": "100%"});

        
            var i_frame_57e51331f69c4366b1fa8afda5ce4349 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGVydSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTGltYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQRVIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBQZXJ1dmlhbiBOdWV2byBTb2wgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA3MDQ0NjM2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2MvY2YvRmxhZ19vZl9QZXJ1LnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_e05169ce667d409a9d6ffa821e7c15fc.setContent(i_frame_57e51331f69c4366b1fa8afda5ce4349);
        

        marker_b235856f422644a1be105772a8ca8865.bindPopup(popup_e05169ce667d409a9d6ffa821e7c15fc)
        ;

        
    
    
            marker_b235856f422644a1be105772a8ca8865.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_04ea2530da91450f9a4b442ba52fea02 = L.marker(
                [12.37, 123.15799999999999],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_5dcab6a37fb2408bb14241eda62af9ba = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04ea2530da91450f9a4b442ba52fea02.setIcon(icon_5dcab6a37fb2408bb14241eda62af9ba);
        
    
        var popup_a32c5d61ae7c4b38ae137342411f4cfd = L.popup({"maxWidth": "100%"});

        
            var i_frame_0418e50fb95b4f48a32085f819920ab7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUGhpbGlwcGluZXMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE1hbmlsYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQSEwKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBQaGlsaXBwaW5lIFBlc28gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzMjUxMDQ1Mwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy85Lzk5L0ZsYWdfb2ZfdGhlX1BoaWxpcHBpbmVzLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a32c5d61ae7c4b38ae137342411f4cfd.setContent(i_frame_0418e50fb95b4f48a32085f819920ab7);
        

        marker_04ea2530da91450f9a4b442ba52fea02.bindPopup(popup_a32c5d61ae7c4b38ae137342411f4cfd)
        ;

        
    
    
            marker_04ea2530da91450f9a4b442ba52fea02.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2e57ed2660894ff8b0797a8d96f91620 = L.marker(
                [53.123000000000005, 19.45],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_ea85dedde2784b53837343994cc32a83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2e57ed2660894ff8b0797a8d96f91620.setIcon(icon_ea85dedde2784b53837343994cc32a83);
        
    
        var popup_72fc713fb3a54c649d9ae54cce385bec = L.popup({"maxWidth": "100%"});

        
            var i_frame_453844a7f001427c8f4263bcc49ed8bc = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUG9sYW5kIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBXYXJzemF3YQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQT0wKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBQb2xpc2ggWmxvdHkgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMDgxMTY2MTUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2VuLzEvMTIvRmxhZ19vZl9Qb2xhbmQuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_72fc713fb3a54c649d9ae54cce385bec.setContent(i_frame_453844a7f001427c8f4263bcc49ed8bc);
        

        marker_2e57ed2660894ff8b0797a8d96f91620.bindPopup(popup_72fc713fb3a54c649d9ae54cce385bec)
        ;

        
    
    
            marker_2e57ed2660894ff8b0797a8d96f91620.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_a3b887b385bd4ee78c1741b02ec972f3 = L.marker(
                [39.6, -8.88],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_5b5904d0b9be4678959fe6c487a25905 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a3b887b385bd4ee78c1741b02ec972f3.setIcon(icon_5b5904d0b9be4678959fe6c487a25905);
        
    
        var popup_f41d8e6e900b4a7caab2cc4678b47dc0 = L.popup({"maxWidth": "100%"});

        
            var i_frame_b84f650f5c4341c79f9110e0390c080d = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUG9ydHVnYWwgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IExpc2JvYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBQUlQKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMzc5NzA4NzQKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNS81Yy9GbGFnX29mX1BvcnR1Z2FsLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_f41d8e6e900b4a7caab2cc4678b47dc0.setContent(i_frame_b84f650f5c4341c79f9110e0390c080d);
        

        marker_a3b887b385bd4ee78c1741b02ec972f3.bindPopup(popup_f41d8e6e900b4a7caab2cc4678b47dc0)
        ;

        
    
    
            marker_a3b887b385bd4ee78c1741b02ec972f3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b0b6b5493f28439bada660219bb1bdfc = L.marker(
                [18.27, -66.67],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0bbb38abf07a495392f8d457c976a98a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0b6b5493f28439bada660219bb1bdfc.setIcon(icon_0bbb38abf07a495392f8d457c976a98a);
        
    
        var popup_dda0dd3df6b4423f815430ddf016e019 = L.popup({"maxWidth": "100%"});

        
            var i_frame_233eef6a1eca4db0be72efd4b9e19b42 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUHVlcnRvIFJpY28gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNhbiBKdWFuCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFBSSQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEwMjY5NDE3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBuYW4gaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_dda0dd3df6b4423f815430ddf016e019.setContent(i_frame_233eef6a1eca4db0be72efd4b9e19b42);
        

        marker_b0b6b5493f28439bada660219bb1bdfc.bindPopup(popup_dda0dd3df6b4423f815430ddf016e019)
        ;

        
    
    
            marker_b0b6b5493f28439bada660219bb1bdfc.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_a142e4f5c6da41cea4d49b8b65b7eab3 = L.marker(
                [25.06, 52.15],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0cbce820abd349f5a618046efeb80db6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a142e4f5c6da41cea4d49b8b65b7eab3.setIcon(icon_0cbce820abd349f5a618046efeb80db6);
        
    
        var popup_ee990dcc72cb415eba8da729903e0aa1 = L.popup({"maxWidth": "100%"});

        
            var i_frame_45e895b010bf47b9b8ee4498020b732e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUWF0YXIgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IERvaGEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gUUFUCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gUWF0YXJpIFJpYWwgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzMTkzNjk0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzYvNjUvRmxhZ19vZl9RYXRhci5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ee990dcc72cb415eba8da729903e0aa1.setContent(i_frame_45e895b010bf47b9b8ee4498020b732e);
        

        marker_a142e4f5c6da41cea4d49b8b65b7eab3.bindPopup(popup_ee990dcc72cb415eba8da729903e0aa1)
        ;

        
    
    
            marker_a142e4f5c6da41cea4d49b8b65b7eab3.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_23536c5116c448858a3758b1c102b80c = L.marker(
                [45.79, 24.69],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d6a0909535d04a22b223ae3ee370959f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_23536c5116c448858a3758b1c102b80c.setIcon(icon_d6a0909535d04a22b223ae3ee370959f);
        
    
        var popup_639878cf25d247788bce084bacbf3c18 = L.popup({"maxWidth": "100%"});

        
            var i_frame_3a738bd5a79346009395d8e4be9dd121 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUm9tYW5pYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gQnVjdXJlc3RpCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFJPVQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFJvbWFuaWFuIE5ldyBMZXUgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyODMyMDY3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzcvNzMvRmxhZ19vZl9Sb21hbmlhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_639878cf25d247788bce084bacbf3c18.setContent(i_frame_3a738bd5a79346009395d8e4be9dd121);
        

        marker_23536c5116c448858a3758b1c102b80c.bindPopup(popup_639878cf25d247788bce084bacbf3c18)
        ;

        
    
    
            marker_23536c5116c448858a3758b1c102b80c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_a7990f666a0544e49b55a2df9cc54596 = L.marker(
                [62.2, 99.6],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f0e1f912d0fc48c6b1ba15ff4c995559 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_a7990f666a0544e49b55a2df9cc54596.setIcon(icon_f0e1f912d0fc48c6b1ba15ff4c995559);
        
    
        var popup_d5c407aa60b04f359e9433eb9099ccdb = L.popup({"maxWidth": "100%"});

        
            var i_frame_5bee3d351976465392a59058f702daca = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUnVzc2lhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBNb3Njb3cKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gUlVTCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gUnVzc2lhbiBSdWJsZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE5MzU2NTQ0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9lbi9mL2YzL0ZsYWdfb2ZfUnVzc2lhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d5c407aa60b04f359e9433eb9099ccdb.setContent(i_frame_5bee3d351976465392a59058f702daca);
        

        marker_a7990f666a0544e49b55a2df9cc54596.bindPopup(popup_d5c407aa60b04f359e9433eb9099ccdb)
        ;

        
    
    
            marker_a7990f666a0544e49b55a2df9cc54596.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b8f80b21e212455f83c174401b21b91d = L.marker(
                [-1.99, 29.9],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_393b474a45ff438dbed6bb87af7b879a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b8f80b21e212455f83c174401b21b91d.setIcon(icon_393b474a45ff438dbed6bb87af7b879a);
        
    
        var popup_7d218d4b903549c1ad6b7d429b94083e = L.popup({"maxWidth": "100%"});

        
            var i_frame_96154d242b2b42009fbea421912cf1e6 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gUndhbmRhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBLaWdhbGkKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gUldBCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gUndhbmRhIEZyYW5jIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTQ0MzczNTM1Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzEvMTcvRmxhZ19vZl9Sd2FuZGEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_7d218d4b903549c1ad6b7d429b94083e.setContent(i_frame_96154d242b2b42009fbea421912cf1e6);
        

        marker_b8f80b21e212455f83c174401b21b91d.bindPopup(popup_7d218d4b903549c1ad6b7d429b94083e)
        ;

        
    
    
            marker_b8f80b21e212455f83c174401b21b91d.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_455e351a1d364a8a907b590b58623aaa = L.marker(
                [17.3, -62.73],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_44a46c1be9324263b166c4ecb1a9238d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_455e351a1d364a8a907b590b58623aaa.setIcon(icon_44a46c1be9324263b166c4ecb1a9238d);
        
    
        var popup_ad5cf6bfd3ae41ccb1e7e3f2dff54495 = L.popup({"maxWidth": "100%"});

        
            var i_frame_0aaa665ca34c4b7b9f6ca7084e9532e8 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2FpbnQgS2l0dHMgYW5kIE5ldmlzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCYXNzZXRlcnJlCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IEtOQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEVhc3QgQ2FyaWJiZWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEyNjI2OTUwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZmUvRmxhZ19vZl9TYWludF9LaXR0c19hbmRfTmV2aXMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ad5cf6bfd3ae41ccb1e7e3f2dff54495.setContent(i_frame_0aaa665ca34c4b7b9f6ca7084e9532e8);
        

        marker_455e351a1d364a8a907b590b58623aaa.bindPopup(popup_ad5cf6bfd3ae41ccb1e7e3f2dff54495)
        ;

        
    
    
            marker_455e351a1d364a8a907b590b58623aaa.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_90fb327531fd44de87827d3f076f8d6b = L.marker(
                [13.84, -61.0],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_abed341f8fa64fc6aa49922258fb135d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_90fb327531fd44de87827d3f076f8d6b.setIcon(icon_abed341f8fa64fc6aa49922258fb135d);
        
    
        var popup_73e5e1216e594ff688926b7a5d2aa4d4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_112078f568254aebb7e73dc515eb2593 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2FpbnQgTHVjaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IENhc3RyaWVzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExDQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEVhc3QgQ2FyaWJiZWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDUyODIzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzkvOWYvRmxhZ19vZl9TYWludF9MdWNpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_73e5e1216e594ff688926b7a5d2aa4d4.setContent(i_frame_112078f568254aebb7e73dc515eb2593);
        

        marker_90fb327531fd44de87827d3f076f8d6b.bindPopup(popup_73e5e1216e594ff688926b7a5d2aa4d4)
        ;

        
    
    
            marker_90fb327531fd44de87827d3f076f8d6b.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9f051b778ca448519bca0a55e8b2d532 = L.marker(
                [13.26, -61.2],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9a26e4a534e144eca7b213b51f82a324 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9f051b778ca448519bca0a55e8b2d532.setIcon(icon_9a26e4a534e144eca7b213b51f82a324);
        
    
        var popup_10be05bf53db4ca6ab3bdfe1458fbfd7 = L.popup({"maxWidth": "100%"});

        
            var i_frame_dd7874f5bf6249938aaf12f1940321d8 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2FpbnQgVmluY2VudCBhbmQgdGhlIEdyZW5hZGluZXMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEtpbmdzdG93bgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBWQ1QKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFYXN0IENhcmliYmVhbiBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxODI3OTAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNi82ZC9GbGFnX29mX1NhaW50X1ZpbmNlbnRfYW5kX3RoZV9HcmVuYWRpbmVzLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_10be05bf53db4ca6ab3bdfe1458fbfd7.setContent(i_frame_dd7874f5bf6249938aaf12f1940321d8);
        

        marker_9f051b778ca448519bca0a55e8b2d532.bindPopup(popup_10be05bf53db4ca6ab3bdfe1458fbfd7)
        ;

        
    
    
            marker_9f051b778ca448519bca0a55e8b2d532.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_85c243b3e3084a56aede45026b047c95 = L.marker(
                [-13.63, -172.46],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_17515579b1fd496cacab4030316f0da3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_85c243b3e3084a56aede45026b047c95.setIcon(icon_17515579b1fd496cacab4030316f0da3);
        
    
        var popup_649cc4871b3f4c49adc53b999d11ab51 = L.popup({"maxWidth": "100%"});

        
            var i_frame_347bcc2dc3914f10b8b2ba0ac06d1fbe = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2Ftb2EgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEFwaWEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gV1NNCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU2Ftb2FuIFRhbGEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMTA1ODkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMy8zMS9GbGFnX29mX1NhbW9hLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_649cc4871b3f4c49adc53b999d11ab51.setContent(i_frame_347bcc2dc3914f10b8b2ba0ac06d1fbe);
        

        marker_85c243b3e3084a56aede45026b047c95.bindPopup(popup_649cc4871b3f4c49adc53b999d11ab51)
        ;

        
    
    
            marker_85c243b3e3084a56aede45026b047c95.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f424639d580a4c35916972b032cb417d = L.marker(
                [43.93, 12.45],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_fa166b0388c540c1a5fa7640bff782d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f424639d580a4c35916972b032cb417d.setIcon(icon_fa166b0388c540c1a5fa7640bff782d6);
        
    
        var popup_6c81cc34702c45569b4753816758056c = L.popup({"maxWidth": "100%"});

        
            var i_frame_428ca848fd314eb0a80d067dd5e75c49 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2FuIE1hcmlubyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gU2FuIE1hcmlubwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBTTVIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTk3MDk3Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2IvYjEvRmxhZ19vZl9TYW5fTWFyaW5vLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_6c81cc34702c45569b4753816758056c.setContent(i_frame_428ca848fd314eb0a80d067dd5e75c49);
        

        marker_f424639d580a4c35916972b032cb417d.bindPopup(popup_6c81cc34702c45569b4753816758056c)
        ;

        
    
    
            marker_f424639d580a4c35916972b032cb417d.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b184ee3cdaed4f258b3187448d2033e5 = L.marker(
                [0.27, 6.63],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1c723d8bff624df398c016c19b4c4a29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b184ee3cdaed4f258b3187448d2033e5.setIcon(icon_1c723d8bff624df398c016c19b4c4a29);
        
    
        var popup_0837bca9c5a940039c0795ba8766c288 = L.popup({"maxWidth": "100%"});

        
            var i_frame_22496f2716114092a4a6899b5d2d59ed = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2FvIFRvbWUgYW5kIFByaW5jaXBlIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBOZXZlcwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBTVFAKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBEb2JyYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDMzODYwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNGYvRmxhZ19vZl9TYW9fVG9tZV9hbmRfUHJpbmNpcGUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0837bca9c5a940039c0795ba8766c288.setContent(i_frame_22496f2716114092a4a6899b5d2d59ed);
        

        marker_b184ee3cdaed4f258b3187448d2033e5.bindPopup(popup_0837bca9c5a940039c0795ba8766c288)
        ;

        
    
    
            marker_b184ee3cdaed4f258b3187448d2033e5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_ef65701cec6647e6ad497e50e06e00e2 = L.marker(
                [24.08, 45.69],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_2f889207ba1f4a91b7971de9954f5c6d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ef65701cec6647e6ad497e50e06e00e2.setIcon(icon_2f889207ba1f4a91b7971de9954f5c6d);
        
    
        var popup_9c38d910da5d44bc9af657ecc0ca3574 = L.popup({"maxWidth": "100%"});

        
            var i_frame_9f5d0d1dbc754052afdcd2e937b39b03 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2F1ZGkgQXJhYmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBSaXlhZGgKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU0FVCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU2F1ZGkgUml5YWwgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyMTUwNTYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMC8wZC9GbGFnX29mX1NhdWRpX0FyYWJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_9c38d910da5d44bc9af657ecc0ca3574.setContent(i_frame_9f5d0d1dbc754052afdcd2e937b39b03);
        

        marker_ef65701cec6647e6ad497e50e06e00e2.bindPopup(popup_9c38d910da5d44bc9af657ecc0ca3574)
        ;

        
    
    
            marker_ef65701cec6647e6ad497e50e06e00e2.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_cfc23373b4814f34ae3834fa6e394b97 = L.marker(
                [14.4, -14.39],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b147732f7009481cae1939502fee4b7e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cfc23373b4814f34ae3834fa6e394b97.setIcon(icon_b147732f7009481cae1939502fee4b7e);
        
    
        var popup_c9064dc6f1cd44dd948a7be8ee0d0e2f = L.popup({"maxWidth": "100%"});

        
            var i_frame_e7469c768f64448492fb71e0691922c9 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2VuZWdhbCAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gRGFrYXIKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU0VOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gQ0ZBwqBGcmFuY8KgQkNFQU8gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzNDI2ODUyOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9mL2ZkL0ZsYWdfb2ZfU2VuZWdhbC5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_c9064dc6f1cd44dd948a7be8ee0d0e2f.setContent(i_frame_e7469c768f64448492fb71e0691922c9);
        

        marker_cfc23373b4814f34ae3834fa6e394b97.bindPopup(popup_c9064dc6f1cd44dd948a7be8ee0d0e2f)
        ;

        
    
    
            marker_cfc23373b4814f34ae3834fa6e394b97.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_464873af989b4db6b074dc7d5d793cb8 = L.marker(
                [44.09, 20.65],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4c5768cb001d48e2a9bea2db534f8c94 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_464873af989b4db6b074dc7d5d793cb8.setIcon(icon_4c5768cb001d48e2a9bea2db534f8c94);
        
    
        var popup_89eaf29650744db8a5d68b17e26dff1d = L.popup({"maxWidth": "100%"});

        
            var i_frame_71802a4944a4445c978d9f2920a7db2a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2VyYmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBCZWxncmFkZQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBTUkIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBEaW5hciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE2Mjk2MzY0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zL2YvZmYvRmxhZ19vZl9TZXJiaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_89eaf29650744db8a5d68b17e26dff1d.setContent(i_frame_71802a4944a4445c978d9f2920a7db2a);
        

        marker_464873af989b4db6b074dc7d5d793cb8.bindPopup(popup_89eaf29650744db8a5d68b17e26dff1d)
        ;

        
    
    
            marker_464873af989b4db6b074dc7d5d793cb8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_12d886316c4c40f188b4427e6b041f90 = L.marker(
                [-4.6, 55.41],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_85d07999cee64e87be05d071cb8023b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_12d886316c4c40f188b4427e6b041f90.setIcon(icon_85d07999cee64e87be05d071cb8023b1);
        
    
        var popup_c26cf9b123604a229560329ca479f41a = L.popup({"maxWidth": "100%"});

        
            var i_frame_242144a2187347988fcf4535ad6db578 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2V5Y2hlbGxlcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVmljdG9yaWEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU1lDCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU2V5Y2hlbGxlcyBSdXBlZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDY5NDQ5NzUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZi9mYy9GbGFnX29mX1NleWNoZWxsZXMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_c26cf9b123604a229560329ca479f41a.setContent(i_frame_242144a2187347988fcf4535ad6db578);
        

        marker_12d886316c4c40f188b4427e6b041f90.bindPopup(popup_c26cf9b123604a229560329ca479f41a)
        ;

        
    
    
            marker_12d886316c4c40f188b4427e6b041f90.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2404815bbf3547fb9a2d3b07248f436a = L.marker(
                [8.57, -11.92],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9ce77864a40046e7b062f371adf7071b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2404815bbf3547fb9a2d3b07248f436a.setIcon(icon_9ce77864a40046e7b062f371adf7071b);
        
    
        var popup_56a0f84943b6433bb1308ef9715fa00f = L.popup({"maxWidth": "100%"});

        
            var i_frame_0f9c3eedbea345159135ab9c3dd881ee = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2llcnJhIExlb25lIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBGcmVldG93bgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBTTEUKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBTaWVycmEgTGVvbmUgTGVvbmUgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA5NzYyNQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8xLzE3L0ZsYWdfb2ZfU2llcnJhX0xlb25lLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_56a0f84943b6433bb1308ef9715fa00f.setContent(i_frame_0f9c3eedbea345159135ab9c3dd881ee);
        

        marker_2404815bbf3547fb9a2d3b07248f436a.bindPopup(popup_56a0f84943b6433bb1308ef9715fa00f)
        ;

        
    
    
            marker_2404815bbf3547fb9a2d3b07248f436a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9d0d778855b243459c50a132969d8010 = L.marker(
                [1.35, 103.85],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_37865f1cc13f4ffca64e9d54fd1e88fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9d0d778855b243459c50a132969d8010.setIcon(icon_37865f1cc13f4ffca64e9d54fd1e88fd);
        
    
        var popup_083e35df955b4ae9a2548b0e79cf112b = L.popup({"maxWidth": "100%"});

        
            var i_frame_e2200ee2196d4add9fa56471c170e14b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2luZ2Fwb3JlIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBTaW5nYXBvcmUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU0dQCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU2luZ2Fwb3JlIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDc4MTMyMTUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNC80OC9GbGFnX29mX1NpbmdhcG9yZS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_083e35df955b4ae9a2548b0e79cf112b.setContent(i_frame_e2200ee2196d4add9fa56471c170e14b);
        

        marker_9d0d778855b243459c50a132969d8010.bindPopup(popup_083e35df955b4ae9a2548b0e79cf112b)
        ;

        
    
    
            marker_9d0d778855b243459c50a132969d8010.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_01e5b1a99d424bc4bfdb92b38281303b = L.marker(
                [48.7, 19.23],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_41ba2a4ddcdf49ab93722200346e9db6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_01e5b1a99d424bc4bfdb92b38281303b.setIcon(icon_41ba2a4ddcdf49ab93722200346e9db6);
        
    
        var popup_422f0f3d292f4ddbad3d1880eb3bfc10 = L.popup({"maxWidth": "100%"});

        
            var i_frame_eade2deb7de749579963e907dec9c00b = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2xvdmFraWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJyYXRpc2xhdmEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU1ZLCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gRXVybyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU3MDM1NjkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZS9lNi9GbGFnX29mX1Nsb3Zha2lhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_422f0f3d292f4ddbad3d1880eb3bfc10.setContent(i_frame_eade2deb7de749579963e907dec9c00b);
        

        marker_01e5b1a99d424bc4bfdb92b38281303b.bindPopup(popup_422f0f3d292f4ddbad3d1880eb3bfc10)
        ;

        
    
    
            marker_01e5b1a99d424bc4bfdb92b38281303b.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_7bc5b6be7a494579b294c5f2ad204fba = L.marker(
                [46.108999999999995, 14.39],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_65269045bc78485da58ec321f970a64b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7bc5b6be7a494579b294c5f2ad204fba.setIcon(icon_65269045bc78485da58ec321f970a64b);
        
    
        var popup_2df3242f2d5b43c788031f4d9319f22d = L.popup({"maxWidth": "100%"});

        
            var i_frame_5215ea6041c24658b961c1ad8b591f2a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU2xvdmVuaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IExqdWJsamFuYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBTVk4KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNTQ1NDA3Mwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9mL2YwL0ZsYWdfb2ZfU2xvdmVuaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_2df3242f2d5b43c788031f4d9319f22d.setContent(i_frame_5215ea6041c24658b961c1ad8b591f2a);
        

        marker_7bc5b6be7a494579b294c5f2ad204fba.bindPopup(popup_2df3242f2d5b43c788031f4d9319f22d)
        ;

        
    
    
            marker_7bc5b6be7a494579b294c5f2ad204fba.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_e8d7b52c796d4ed59089630c65d80dfa = L.marker(
                [-9.63, 159.84],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_f477fc25bd7242da8d3d82f37b961e7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_e8d7b52c796d4ed59089630c65d80dfa.setIcon(icon_f477fc25bd7242da8d3d82f37b961e7d);
        
    
        var popup_6d4f9364ac334421ac62cc730fc3cdc4 = L.popup({"maxWidth": "100%"});

        
            var i_frame_7004586101774890a2d6859a25a262a8 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU29sb21vbiBJc2xhbmRzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBIb25pYXJhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFNMQgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFNvbG9tb24gSXNsYW5kcyBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAyMDg3OTQ2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzcvNzQvRmxhZ19vZl90aGVfU29sb21vbl9Jc2xhbmRzLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_6d4f9364ac334421ac62cc730fc3cdc4.setContent(i_frame_7004586101774890a2d6859a25a262a8);
        

        marker_e8d7b52c796d4ed59089630c65d80dfa.bindPopup(popup_6d4f9364ac334421ac62cc730fc3cdc4)
        ;

        
    
    
            marker_e8d7b52c796d4ed59089630c65d80dfa.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_41848634f2b04ea68fdb3c8de71814b8 = L.marker(
                [2.96, 44.63],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_5071b87ba3944a818e82ab91d9efc187 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_41848634f2b04ea68fdb3c8de71814b8.setIcon(icon_5071b87ba3944a818e82ab91d9efc187);
        
    
        var popup_44a9fae0df474846967847fa0714e03e = L.popup({"maxWidth": "100%"});

        
            var i_frame_3658bb37ba344f12be5444b430571e63 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU29tYWxpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTW9nYWRpc2h1Cjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFNPTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFNvbWFsaSBTaGlsbGluZyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDY2OTgyMwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9hL2EwL0ZsYWdfb2ZfU29tYWxpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_44a9fae0df474846967847fa0714e03e.setContent(i_frame_3658bb37ba344f12be5444b430571e63);
        

        marker_41848634f2b04ea68fdb3c8de71814b8.bindPopup(popup_44a9fae0df474846967847fa0714e03e)
        ;

        
    
    
            marker_41848634f2b04ea68fdb3c8de71814b8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_af81933c3fd148aa8eaf999e411451b6 = L.marker(
                [-30.56, 23.15],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a865ad5d950c42f4a05c2204ebcf9e5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_af81933c3fd148aa8eaf999e411451b6.setIcon(icon_a865ad5d950c42f4a05c2204ebcf9e5d);
        
    
        var popup_d65dc0b49bff4f1f9359d794756c68ae = L.popup({"maxWidth": "100%"});

        
            var i_frame_8679506992b04fd79a8b2e65ddc30f69 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU291dGggQWZyaWNhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBQcmV0b3JpYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBaQUYKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBTb3V0aCBBZnJpY2FuIFJhbmQgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxNTQ0MjkwNQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9hL2FmL0ZsYWdfb2ZfU291dGhfQWZyaWNhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_d65dc0b49bff4f1f9359d794756c68ae.setContent(i_frame_8679506992b04fd79a8b2e65ddc30f69);
        

        marker_af81933c3fd148aa8eaf999e411451b6.bindPopup(popup_d65dc0b49bff4f1f9359d794756c68ae)
        ;

        
    
    
            marker_af81933c3fd148aa8eaf999e411451b6.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bb44c93c65b347a4ba82c5d302c81075 = L.marker(
                [37.74, 127.04700000000001],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_db01fb25e10549cabafff844055e75ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bb44c93c65b347a4ba82c5d302c81075.setIcon(icon_db01fb25e10549cabafff844055e75ed);
        
    
        var popup_cd00abb8175849509532e7f53c873346 = L.popup({"maxWidth": "100%"});

        
            var i_frame_6d75fbe450364a84b32c78003b05c5f7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU291dGggS29yZWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNlb3VsCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFBSSwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IEtvcmVhbiBXb24gCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA1ODU1ODI3MAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8wLzA5L0ZsYWdfb2ZfU291dGhfS29yZWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_cd00abb8175849509532e7f53c873346.setContent(i_frame_6d75fbe450364a84b32c78003b05c5f7);
        

        marker_bb44c93c65b347a4ba82c5d302c81075.bindPopup(popup_cd00abb8175849509532e7f53c873346)
        ;

        
    
    
            marker_bb44c93c65b347a4ba82c5d302c81075.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_fa0f1a57c0854960915c1dd084c331ef = L.marker(
                [7.77, 29.69],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6ddea54e68d940ab99730e071a5a6684 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fa0f1a57c0854960915c1dd084c331ef.setIcon(icon_6ddea54e68d940ab99730e071a5a6684);
        
    
        var popup_aaf73b0b1b94453ebc6a47c458a7bb3c = L.popup({"maxWidth": "100%"});

        
            var i_frame_38f7722481fc44bab1fe569d90ebcb87 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU291dGggU3VkYW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEp1YmEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU1NECjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU291dGggU3VkYW4gUG91bmQgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMTA2MjExMwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy83LzdhL0ZsYWdfb2ZfU291dGhfU3VkYW4uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_aaf73b0b1b94453ebc6a47c458a7bb3c.setContent(i_frame_38f7722481fc44bab1fe569d90ebcb87);
        

        marker_fa0f1a57c0854960915c1dd084c331ef.bindPopup(popup_aaf73b0b1b94453ebc6a47c458a7bb3c)
        ;

        
    
    
            marker_fa0f1a57c0854960915c1dd084c331ef.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_fde82b1ca791493b83907cff1ca501d0 = L.marker(
                [39.54, -3.5439999999999996],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0c99db8249ed451c97a3590784afd4a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fde82b1ca791493b83907cff1ca501d0.setIcon(icon_0c99db8249ed451c97a3590784afd4a2);
        
    
        var popup_157dafb6b84c4ce3be1a6a089abe6498 = L.popup({"maxWidth": "100%"});

        
            var i_frame_eabb1966f2294d76a7bee917ac674d80 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3BhaW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE1hZHJpZAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBFU1AKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBFdXJvIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNDcwNzY3ODEKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2VuLzkvOWEvRmxhZ19vZl9TcGFpbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_157dafb6b84c4ce3be1a6a089abe6498.setContent(i_frame_eabb1966f2294d76a7bee917ac674d80);
        

        marker_fde82b1ca791493b83907cff1ca501d0.bindPopup(popup_157dafb6b84c4ce3be1a6a089abe6498)
        ;

        
    
    
            marker_fde82b1ca791493b83907cff1ca501d0.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b0f09576d3e64302a317053d28f0d73e = L.marker(
                [7.71, 80.43],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_c0ef5d567f874dcea3a6127e56b0df2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b0f09576d3e64302a317053d28f0d73e.setIcon(icon_c0ef5d567f874dcea3a6127e56b0df2a);
        
    
        var popup_ed8bdf2532824d0590edd0267cb3f505 = L.popup({"maxWidth": "100%"});

        
            var i_frame_b2893ca22d664862b4f0408a5cc8a38a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3JpIExhbmthIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDb2xvbWJvCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IExLQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFNyaSBMYW5rYSBSdXBlZSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDIxODAzMDAwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzEvMTEvRmxhZ19vZl9TcmlfTGFua2Euc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ed8bdf2532824d0590edd0267cb3f505.setContent(i_frame_b2893ca22d664862b4f0408a5cc8a38a);
        

        marker_b0f09576d3e64302a317053d28f0d73e.bindPopup(popup_ed8bdf2532824d0590edd0267cb3f505)
        ;

        
    
    
            marker_b0f09576d3e64302a317053d28f0d73e.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_04bc1601d25d4397812cffcf7fa222e5 = L.marker(
                [16.19, 29.99],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b754ab55c17c43258f8025beb00c59eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_04bc1601d25d4397812cffcf7fa222e5.setIcon(icon_b754ab55c17c43258f8025beb00c59eb);
        
    
        var popup_174a216a1fc4428c8363274c83af2eba = L.popup({"maxWidth": "100%"});

        
            var i_frame_5e2d884679be451c896fa8086545ab55 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3VkYW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEtoYXJ0dW0KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU0ROCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU3VkYW5lc2UgUG91bmQgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0MjgxMzIzOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8wLzAxL0ZsYWdfb2ZfU3VkYW4uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_174a216a1fc4428c8363274c83af2eba.setContent(i_frame_5e2d884679be451c896fa8086545ab55);
        

        marker_04bc1601d25d4397812cffcf7fa222e5.bindPopup(popup_174a216a1fc4428c8363274c83af2eba)
        ;

        
    
    
            marker_04bc1601d25d4397812cffcf7fa222e5.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c8d095c57ffc4dfc97a6694a2bb0a464 = L.marker(
                [3.58, -55.29],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_987b9fa6a6274f1f8a0ec73571bb4793 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c8d095c57ffc4dfc97a6694a2bb0a464.setIcon(icon_987b9fa6a6274f1f8a0ec73571bb4793);
        
    
        var popup_0a0e76ba4d8c497a92a24592ad38971f = L.popup({"maxWidth": "100%"});

        
            var i_frame_46c73f99291e464f8e30f2a391e7165d = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3VyaW5hbWUgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFBhcmFtYXJpYm8KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU1VSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU3VyaW5hbSBEb2xsYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU4MTM3Mgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy82LzYwL0ZsYWdfb2ZfU3VyaW5hbWUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0a0e76ba4d8c497a92a24592ad38971f.setContent(i_frame_46c73f99291e464f8e30f2a391e7165d);
        

        marker_c8d095c57ffc4dfc97a6694a2bb0a464.bindPopup(popup_0a0e76ba4d8c497a92a24592ad38971f)
        ;

        
    
    
            marker_c8d095c57ffc4dfc97a6694a2bb0a464.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2648e261e7df4049916839bf995537ad = L.marker(
                [62.86, 16.52],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_60a8270d0d4346dc9e57e166096924ed = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2648e261e7df4049916839bf995537ad.setIcon(icon_60a8270d0d4346dc9e57e166096924ed);
        
    
        var popup_38ccd9e463634019959b8aec26eac576 = L.popup({"maxWidth": "100%"});

        
            var i_frame_26bd15c4a70f41e1bd4810a39fbc1012 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3dlZGVuIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBTdG9ja2hvbG0KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gU1dFCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU3dlZGlzaCBLcm9uYSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEwMjg1NDUzCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9lbi80LzRjL0ZsYWdfb2ZfU3dlZGVuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_38ccd9e463634019959b8aec26eac576.setContent(i_frame_26bd15c4a70f41e1bd4810a39fbc1012);
        

        marker_2648e261e7df4049916839bf995537ad.bindPopup(popup_38ccd9e463634019959b8aec26eac576)
        ;

        
    
    
            marker_2648e261e7df4049916839bf995537ad.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_913325f50758420a9ea252490f4e394b = L.marker(
                [46.99, 7.41],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4af22e764acc45e59ba88e4b40445fc0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_913325f50758420a9ea252490f4e394b.setIcon(icon_4af22e764acc45e59ba88e4b40445fc0);
        
    
        var popup_c0cb090cc2dd4275a019e21f4340f985 = L.popup({"maxWidth": "100%"});

        
            var i_frame_b28a8a89e86e455c9678c80ee218c9d9 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3dpdHplcmxhbmQgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJlcm4KPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQ0hFCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gU3dpc3MgRnJhbmMgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA4NTc0ODMyCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzAvMDgvRmxhZ19vZl9Td2l0emVybGFuZF8lMjhQYW50b25lJTI5LnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_c0cb090cc2dd4275a019e21f4340f985.setContent(i_frame_b28a8a89e86e455c9678c80ee218c9d9);
        

        marker_913325f50758420a9ea252490f4e394b.bindPopup(popup_c0cb090cc2dd4275a019e21f4340f985)
        ;

        
    
    
            marker_913325f50758420a9ea252490f4e394b.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_93ae6093af26493b960082a745284c3b = L.marker(
                [35.06, 38.34],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_3821dfc57ca8459da6c887dc0f9d8f55 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_93ae6093af26493b960082a745284c3b.setIcon(icon_3821dfc57ca8459da6c887dc0f9d8f55);
        
    
        var popup_94e7cb1c1a414438821d41fbd3365761 = L.popup({"maxWidth": "100%"});

        
            var i_frame_390645c896534b87bba18463258fc159 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gU3lyaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IERhbWFzY3VzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFNZUgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFN5cmlhbiBQb3VuZCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDE3MDcwMTM1Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzUvNTMvRmxhZ19vZl9TeXJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_94e7cb1c1a414438821d41fbd3365761.setContent(i_frame_390645c896534b87bba18463258fc159);
        

        marker_93ae6093af26493b960082a745284c3b.bindPopup(popup_94e7cb1c1a414438821d41fbd3365761)
        ;

        
    
    
            marker_93ae6093af26493b960082a745284c3b.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_f69a61266a0f43f8bc6a876271cd621d = L.marker(
                [25.58, 121.28],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_861c0905540640bcb19e843b01416512 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_f69a61266a0f43f8bc6a876271cd621d.setIcon(icon_861c0905540640bcb19e843b01416512);
        
    
        var popup_a48084903bd3464c8aed5a61804da7b5 = L.popup({"maxWidth": "100%"});

        
            var i_frame_510d1fa1c32a4ce5bb63e74ae04ca146 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVGFpd2FuIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBUYWlwZWkKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gQ04tVFcKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBUYWl3YW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjM3NzM4NzYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNy83Mi9GbGFnX29mX3RoZV9SZXB1YmxpY19vZl9DaGluYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_a48084903bd3464c8aed5a61804da7b5.setContent(i_frame_510d1fa1c32a4ce5bb63e74ae04ca146);
        

        marker_f69a61266a0f43f8bc6a876271cd621d.bindPopup(popup_a48084903bd3464c8aed5a61804da7b5)
        ;

        
    
    
            marker_f69a61266a0f43f8bc6a876271cd621d.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_2983e4f83c2f4d08991936584fc53b89 = L.marker(
                [38.69, 71.4],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_9c6ec8353d674600bfb5e377ba97ac4f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_2983e4f83c2f4d08991936584fc53b89.setIcon(icon_9c6ec8353d674600bfb5e377ba97ac4f);
        
    
        var popup_f774b7160f7f4b36bf9e7e3513435828 = L.popup({"maxWidth": "100%"});

        
            var i_frame_a46bf56230114b27935f21552532f7b3 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVGFqaWtpc3RhbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gRHVzaGFuYmUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVEpLCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVGFqaWsgU29tb25pIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gOTMyMTAxOAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9kL2QwL0ZsYWdfb2ZfVGFqaWtpc3Rhbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_f774b7160f7f4b36bf9e7e3513435828.setContent(i_frame_a46bf56230114b27935f21552532f7b3);
        

        marker_2983e4f83c2f4d08991936584fc53b89.bindPopup(popup_f774b7160f7f4b36bf9e7e3513435828)
        ;

        
    
    
            marker_2983e4f83c2f4d08991936584fc53b89.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_75eb06556bbc4290a7463103bcd75c60 = L.marker(
                [-6.14, 33.71],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_4db8eb09859d4843b1fed453268feaac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_75eb06556bbc4290a7463103bcd75c60.setIcon(icon_4db8eb09859d4843b1fed453268feaac);
        
    
        var popup_14315fffd503423192ccf164b275968b = L.popup({"maxWidth": "100%"});

        
            var i_frame_4ea66cb8a40f465083f775f875a05930 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVGFuemFuaWEgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IERvZG9tYQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBUWkEKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBUYW56YW5pYW4gU2hpbGxpbmcgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA1ODAwNTQ2Mwo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy8zLzM4L0ZsYWdfb2ZfVGFuemFuaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_14315fffd503423192ccf164b275968b.setContent(i_frame_4ea66cb8a40f465083f775f875a05930);
        

        marker_75eb06556bbc4290a7463103bcd75c60.bindPopup(popup_14315fffd503423192ccf164b275968b)
        ;

        
    
    
            marker_75eb06556bbc4290a7463103bcd75c60.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_07583d1b54564a1cb890fbdbd4b43283 = L.marker(
                [15.52, 100.35],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_07eaaab39ebf4fb79c304d4e83816ae0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_07583d1b54564a1cb890fbdbd4b43283.setIcon(icon_07eaaab39ebf4fb79c304d4e83816ae0);
        
    
        var popup_aab5a184631040faa9fa5f07bdee9516 = L.popup({"maxWidth": "100%"});

        
            var i_frame_4aa319c4cd484dfaa5cefcb210c51752 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVGhhaWxhbmQgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEJhbmdrb2sKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVEhBCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVGhhaSBCYWh0IAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNjk2MjU1ODIKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvYS9hOS9GbGFnX29mX1RoYWlsYW5kLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_aab5a184631040faa9fa5f07bdee9516.setContent(i_frame_4aa319c4cd484dfaa5cefcb210c51752);
        

        marker_07583d1b54564a1cb890fbdbd4b43283.bindPopup(popup_aab5a184631040faa9fa5f07bdee9516)
        ;

        
    
    
            marker_07583d1b54564a1cb890fbdbd4b43283.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_ab48bb1da06c40968686af15ab1e175a = L.marker(
                [8.72, 1.08],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_71b4d2d1dffb4e06878c5ca90bee0e90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_ab48bb1da06c40968686af15ab1e175a.setIcon(icon_71b4d2d1dffb4e06878c5ca90bee0e90);
        
    
        var popup_fafa55eace71464ba4a5ac5d9d8b98ee = L.popup({"maxWidth": "100%"});

        
            var i_frame_3398209064e94d788b32f6637d8e317f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVG9nbyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTG9tCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFRHTwo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IENGQSBGcmFuYyBCQ0VBTyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDgwODIzNjYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNi82OC9GbGFnX29mX1RvZ28uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_fafa55eace71464ba4a5ac5d9d8b98ee.setContent(i_frame_3398209064e94d788b32f6637d8e317f);
        

        marker_ab48bb1da06c40968686af15ab1e175a.bindPopup(popup_fafa55eace71464ba4a5ac5d9d8b98ee)
        ;

        
    
    
            marker_ab48bb1da06c40968686af15ab1e175a.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bbe8da057d834db29bc11cd38373bfed = L.marker(
                [-21.16, -175.14],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e5cc42955cd5424388ffbf19324a2c6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bbe8da057d834db29bc11cd38373bfed.setIcon(icon_e5cc42955cd5424388ffbf19324a2c6b);
        
    
        var popup_8f292595ad2442af9ff3d2547257a737 = L.popup({"maxWidth": "100%"});

        
            var i_frame_42d39f66fa964c55b21341f6920a2c18 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVG9uZ2EgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IE51a3UnYWxvZmEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVE9OCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVG9uZ2FuIFBhJ2FuZ2EgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxMDQ0OTQKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOS85YS9GbGFnX29mX1RvbmdhLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_8f292595ad2442af9ff3d2547257a737.setContent(i_frame_42d39f66fa964c55b21341f6920a2c18);
        

        marker_bbe8da057d834db29bc11cd38373bfed.bindPopup(popup_8f292595ad2442af9ff3d2547257a737)
        ;

        
    
    
            marker_bbe8da057d834db29bc11cd38373bfed.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_532c2c5e45e54f538f499c4121364b91 = L.marker(
                [10.37, -61.23],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6ee1618418514af08e7f5606810b74e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_532c2c5e45e54f538f499c4121364b91.setIcon(icon_6ee1618418514af08e7f5606810b74e4);
        
    
        var popup_75a1f8614b4749acaf6960f1b637b547 = L.popup({"maxWidth": "100%"});

        
            var i_frame_aa917df8f76a4a339da220c81fe2d169 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVHJpbmlkYWQgYW5kIFRvYmFnbyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUG9ydC1vZi1TcGFpbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBUVE8KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBUcmluaWRhZCBhbmQgVG9iYWdvIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDEzOTQ5NzMKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvNi82NC9GbGFnX29mX1RyaW5pZGFkX2FuZF9Ub2JhZ28uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_75a1f8614b4749acaf6960f1b637b547.setContent(i_frame_aa917df8f76a4a339da220c81fe2d169);
        

        marker_532c2c5e45e54f538f499c4121364b91.bindPopup(popup_75a1f8614b4749acaf6960f1b637b547)
        ;

        
    
    
            marker_532c2c5e45e54f538f499c4121364b91.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c12022da0bf74853928af19f1d7e163c = L.marker(
                [34.2, 9.33],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d7ab2851f6284700ae83c9c8ec54144f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c12022da0bf74853928af19f1d7e163c.setIcon(icon_d7ab2851f6284700ae83c9c8ec54144f);
        
    
        var popup_cb2265fa4b1a46a696ce1dd4c081d7d7 = L.popup({"maxWidth": "100%"});

        
            var i_frame_d519f7018a964e128d1f13cb5b01d0e4 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVHVuaXNpYSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVHVuaXMKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVFVOCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVHVuaXNpYW4gRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTE2OTQ3MTkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvYy9jZS9GbGFnX29mX1R1bmlzaWEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_cb2265fa4b1a46a696ce1dd4c081d7d7.setContent(i_frame_d519f7018a964e128d1f13cb5b01d0e4);
        

        marker_c12022da0bf74853928af19f1d7e163c.bindPopup(popup_cb2265fa4b1a46a696ce1dd4c081d7d7)
        ;

        
    
    
            marker_c12022da0bf74853928af19f1d7e163c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_7ae89b518a2e4095a22ff652be246347 = L.marker(
                [38.96, 35.45],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_7276334779ea4ad6812f616f994cbbbb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7ae89b518a2e4095a22ff652be246347.setIcon(icon_7276334779ea4ad6812f616f994cbbbb);
        
    
        var popup_347bff4ddeca44eeadc8294a6a4bfc0c = L.popup({"maxWidth": "100%"});

        
            var i_frame_d5aebb0796d34bc091e559bbf1c26642 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVHVya2V5IAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBBbmthcmEKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVFVSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVHVya2lzaCBMaXJhIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gODM0Mjk2MTUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvYi9iNC9GbGFnX29mX1R1cmtleS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_347bff4ddeca44eeadc8294a6a4bfc0c.setContent(i_frame_d5aebb0796d34bc091e559bbf1c26642);
        

        marker_7ae89b518a2e4095a22ff652be246347.bindPopup(popup_347bff4ddeca44eeadc8294a6a4bfc0c)
        ;

        
    
    
            marker_7ae89b518a2e4095a22ff652be246347.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_7775fc3a6108462bb5419e36269d374f = L.marker(
                [39.03, 58.62],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_dc79710debe9488fb61599f535284255 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_7775fc3a6108462bb5419e36269d374f.setIcon(icon_dc79710debe9488fb61599f535284255);
        
    
        var popup_8d5e1aaa81be47e7a9ae7d6b04a620ee = L.popup({"maxWidth": "100%"});

        
            var i_frame_612e337e2ee648ca98f121212bcddee7 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVHVya21lbmlzdGFuIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBBc2hnYWJhdAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBUS00KPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBNYW5hdCAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDU5NDIwODkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMS8xYi9GbGFnX29mX1R1cmttZW5pc3Rhbi5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_8d5e1aaa81be47e7a9ae7d6b04a620ee.setContent(i_frame_612e337e2ee648ca98f121212bcddee7);
        

        marker_7775fc3a6108462bb5419e36269d374f.bindPopup(popup_8d5e1aaa81be47e7a9ae7d6b04a620ee)
        ;

        
    
    
            marker_7775fc3a6108462bb5419e36269d374f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_fe31466455e54e8292abf84f43ba5ae8 = L.marker(
                [21.84, -71.75],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_48f1ae154c334e809f0f41049c209ecf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_fe31466455e54e8292abf84f43ba5ae8.setIcon(icon_48f1ae154c334e809f0f41049c209ecf);
        
    
        var popup_edc532c8bdcf4202b78753cf8fcf8780 = L.popup({"maxWidth": "100%"});

        
            var i_frame_4f3fe7f5b4ad4af5a96351e83209dd7e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVHVya3MgYW5kIENhaWNvcyBJc2xhbmRzIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDb2NrYnVybiBUb3duCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFRDQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVTIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDM4MTkxCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzEvMWUvRmxhZ19vZl90aGVfVHVya2lzaF9SZXB1YmxpY19vZl9Ob3J0aGVybl9DeXBydXMuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_edc532c8bdcf4202b78753cf8fcf8780.setContent(i_frame_4f3fe7f5b4ad4af5a96351e83209dd7e);
        

        marker_fe31466455e54e8292abf84f43ba5ae8.bindPopup(popup_edc532c8bdcf4202b78753cf8fcf8780)
        ;

        
    
    
            marker_fe31466455e54e8292abf84f43ba5ae8.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_9068e8c62a0040ff805769fb1cd54eb4 = L.marker(
                [-8.47, 179.062],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_2f538bed83e44fba818ddfe6382d9b44 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_9068e8c62a0040ff805769fb1cd54eb4.setIcon(icon_2f538bed83e44fba818ddfe6382d9b44);
        
    
        var popup_22f47b94415a455eb79bd9d2f9d42d40 = L.popup({"maxWidth": "100%"});

        
            var i_frame_9feaf355d2904b379886d6519aa60c0f = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVHV2YWx1IAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBGdW5hZnV0aQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBUVVYKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBBdXN0cmFsaWFuIERvbGxhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDExNjQ2Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzMvMzgvRmxhZ19vZl9UdXZhbHUuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_22f47b94415a455eb79bd9d2f9d42d40.setContent(i_frame_9feaf355d2904b379886d6519aa60c0f);
        

        marker_9068e8c62a0040ff805769fb1cd54eb4.bindPopup(popup_22f47b94415a455eb79bd9d2f9d42d40)
        ;

        
    
    
            marker_9068e8c62a0040ff805769fb1cd54eb4.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_046616ead6b84d9dbf0fb81baa4d26d0 = L.marker(
                [1.72, 32.06],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_e9b679101ede4b48b5a9349d1870e20d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_046616ead6b84d9dbf0fb81baa4d26d0.setIcon(icon_e9b679101ede4b48b5a9349d1870e20d);
        
    
        var popup_7232d445d511401aa3bad0852f0976ba = L.popup({"maxWidth": "100%"});

        
            var i_frame_00c235835b9d4b73964e50a676e9166e = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVWdhbmRhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBLYW1wYWxhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFVHQQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFVnYW5kYSBTaGlsbGluZyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDQ0MjY5NTk0Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzQvNGUvRmxhZ19vZl9VZ2FuZGEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_7232d445d511401aa3bad0852f0976ba.setContent(i_frame_00c235835b9d4b73964e50a676e9166e);
        

        marker_046616ead6b84d9dbf0fb81baa4d26d0.bindPopup(popup_7232d445d511401aa3bad0852f0976ba)
        ;

        
    
    
            marker_046616ead6b84d9dbf0fb81baa4d26d0.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_c176fd4be6e24ba6942360903e4be6c2 = L.marker(
                [49.2, 30.3],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_ab80af42ed1540ca966e442d12eff3a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_c176fd4be6e24ba6942360903e4be6c2.setIcon(icon_ab80af42ed1540ca966e442d12eff3a0);
        
    
        var popup_1538166510ea447db200ffdcb2369348 = L.popup({"maxWidth": "100%"});

        
            var i_frame_dd3669dbb27b4ed7b00d70471d8308be = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVWtyYWluZSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gS3lpdgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBVS1IKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBVa3JhaW5lIEhyeXZuaWEgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiA0NDM4NTE1NQo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy80LzQ5L0ZsYWdfb2ZfVWtyYWluZS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_1538166510ea447db200ffdcb2369348.setContent(i_frame_dd3669dbb27b4ed7b00d70471d8308be);
        

        marker_c176fd4be6e24ba6942360903e4be6c2.bindPopup(popup_1538166510ea447db200ffdcb2369348)
        ;

        
    
    
            marker_c176fd4be6e24ba6942360903e4be6c2.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_965ee3c3636d42548ab5e81c6c50df7c = L.marker(
                [24.84, 53.84],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_d73cfc4307ef44cfa07dc1148a6aaf9a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_965ee3c3636d42548ab5e81c6c50df7c.setIcon(icon_d73cfc4307ef44cfa07dc1148a6aaf9a);
        
    
        var popup_80d69b40e5e44c6f87b164ea4f6e1b23 = L.popup({"maxWidth": "100%"});

        
            var i_frame_7f0010abbb9146eaabc364faebea04da = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVW5pdGVkIEFyYWIgRW1pcmF0ZXMgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEFidSBEaGFiaQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBBUkUKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBBcmFiIEVtaXJhdGVzIERpcmhhbSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDk3NzA1MjkKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvYy9jYi9GbGFnX29mX3RoZV9Vbml0ZWRfQXJhYl9FbWlyYXRlcy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_80d69b40e5e44c6f87b164ea4f6e1b23.setContent(i_frame_7f0010abbb9146eaabc364faebea04da);
        

        marker_965ee3c3636d42548ab5e81c6c50df7c.bindPopup(popup_80d69b40e5e44c6f87b164ea4f6e1b23)
        ;

        
    
    
            marker_965ee3c3636d42548ab5e81c6c50df7c.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d5908ab3f688451fac8bfec43e806f18 = L.marker(
                [54.9, -2.42],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1de44acc1bca43029f6d07bec7fd2b26 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d5908ab3f688451fac8bfec43e806f18.setIcon(icon_1de44acc1bca43029f6d07bec7fd2b26);
        
    
        var popup_26984e8440f24587b79f5f6ea1059dab = L.popup({"maxWidth": "100%"});

        
            var i_frame_536aa5a84dbe4fbab6eda49b43f45cca = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVW5pdGVkIEtpbmdkb20gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IExvbmRvbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBHQgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFBvdW5kIFN0ZXJsaW5nIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gNjY4MzQ0MDUKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2VuL2EvYWUvRmxhZ19vZl90aGVfVW5pdGVkX0tpbmdkb20uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_26984e8440f24587b79f5f6ea1059dab.setContent(i_frame_536aa5a84dbe4fbab6eda49b43f45cca);
        

        marker_d5908ab3f688451fac8bfec43e806f18.bindPopup(popup_26984e8440f24587b79f5f6ea1059dab)
        ;

        
    
    
            marker_d5908ab3f688451fac8bfec43e806f18.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_bf173e425df2496981f18950ab2ac482 = L.marker(
                [39.87, -102.26],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6fe28393dba14f0ca192b583d86349f8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_bf173e425df2496981f18950ab2ac482.setIcon(icon_6fe28393dba14f0ca192b583d86349f8);
        
    
        var popup_84bfab95f2f04a2fae185d77b93280f9 = L.popup({"maxWidth": "100%"});

        
            var i_frame_bb79ca436a8f4b4dae368fa79b1df950 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVW5pdGVkIFN0YXRlcyAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gV2FzaGluZ3Rvbgo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBVU0EKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBVUyBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAzMjgyMzk1MjMKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2VuL2EvYTQvRmxhZ19vZl90aGVfVW5pdGVkX1N0YXRlcy5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_84bfab95f2f04a2fae185d77b93280f9.setContent(i_frame_bb79ca436a8f4b4dae368fa79b1df950);
        

        marker_bf173e425df2496981f18950ab2ac482.bindPopup(popup_84bfab95f2f04a2fae185d77b93280f9)
        ;

        
    
    
            marker_bf173e425df2496981f18950ab2ac482.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_68eabbe2ad464e41827c0ef395631fcb = L.marker(
                [-32.86, -56.3],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a5673125637946dcba89b4a165f0b68c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_68eabbe2ad464e41827c0ef395631fcb.setIcon(icon_a5673125637946dcba89b4a165f0b68c);
        
    
        var popup_604a4277338f4640b0d22ae35991c391 = L.popup({"maxWidth": "100%"});

        
            var i_frame_83c14f51e29b4ee0b76488a1deffb614 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVXJ1Z3VheSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gTW9udGV2aWRlbwo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBVUlkKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBVcnVndWF5YW4gUGVzbyAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDM0NjE3MzQKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvZi9mZS9GbGFnX29mX1VydWd1YXkuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_604a4277338f4640b0d22ae35991c391.setContent(i_frame_83c14f51e29b4ee0b76488a1deffb614);
        

        marker_68eabbe2ad464e41827c0ef395631fcb.bindPopup(popup_604a4277338f4640b0d22ae35991c391)
        ;

        
    
    
            marker_68eabbe2ad464e41827c0ef395631fcb.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_eae736dae6b24c9b8132d2f970636270 = L.marker(
                [42.11, 63.81],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_6eabbc2ceed74666a2aae2317e58e8b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_eae736dae6b24c9b8132d2f970636270.setIcon(icon_6eabbc2ceed74666a2aae2317e58e8b6);
        
    
        var popup_5ecc8245680445a69aba036c6f82636d = L.popup({"maxWidth": "100%"});

        
            var i_frame_00b0dcf6f85c4757b28b09576f04911a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVXpiZWtpc3RhbiAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gVG9za2VudAo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBVWkIKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBVemJla2lzdGFuIFN1bSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDMzNTgwNjUwCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzgvODQvRmxhZ19vZl9VemJla2lzdGFuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_5ecc8245680445a69aba036c6f82636d.setContent(i_frame_00b0dcf6f85c4757b28b09576f04911a);
        

        marker_eae736dae6b24c9b8132d2f970636270.bindPopup(popup_5ecc8245680445a69aba036c6f82636d)
        ;

        
    
    
            marker_eae736dae6b24c9b8132d2f970636270.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_8f6b3c916a374e028a37bce13b7c97a7 = L.marker(
                [-15.12, 166.79],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_1843b726fe0c444596d45aedba8d53ca = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_8f6b3c916a374e028a37bce13b7c97a7.setIcon(icon_1843b726fe0c444596d45aedba8d53ca);
        
    
        var popup_0f23e18a88524b26b071baabb61c4a04 = L.popup({"maxWidth": "100%"});

        
            var i_frame_0a5246eaf014476a95fc5abd40d78572 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVmFudWF0dSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gUG9ydC1WaWxhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFZVVAo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFZhbnVhdHUgVmF0dSAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI5OTg4Mgo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy9iL2JjL0ZsYWdfb2ZfVmFudWF0dS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_0f23e18a88524b26b071baabb61c4a04.setContent(i_frame_0a5246eaf014476a95fc5abd40d78572);
        

        marker_8f6b3c916a374e028a37bce13b7c97a7.bindPopup(popup_0f23e18a88524b26b071baabb61c4a04)
        ;

        
    
    
            marker_8f6b3c916a374e028a37bce13b7c97a7.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_b5f21f0224ce40c293e5deab7737b890 = L.marker(
                [7.58, -65.5],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_b501c0b000234309b343eb8aa853524e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_b5f21f0224ce40c293e5deab7737b890.setIcon(icon_b501c0b000234309b343eb8aa853524e);
        
    
        var popup_09ce23072ca84e9093bfc756784c7099 = L.popup({"maxWidth": "100%"});

        
            var i_frame_597a7c84fa484b4988c9ab80fd9b171a = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVmVuZXp1ZWxhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBDYXJhY2FzCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFZFTgo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFZlbmV6dWVsYW4gQm9saXZhciAKPGJyPiA8Yj5Qb3B1bGF0aW9uOiA8L2I+IDI4NTE1ODI5Cjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBodHRwczovL3VwbG9hZC53aWtpbWVkaWEub3JnL3dpa2lwZWRpYS9jb21tb25zLzAvMDYvRmxhZ19vZl9WZW5lenVlbGEuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_09ce23072ca84e9093bfc756784c7099.setContent(i_frame_597a7c84fa484b4988c9ab80fd9b171a);
        

        marker_b5f21f0224ce40c293e5deab7737b890.bindPopup(popup_09ce23072ca84e9093bfc756784c7099)
        ;

        
    
    
            marker_b5f21f0224ce40c293e5deab7737b890.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_0897b3b237fa4f559902216ec0e88983 = L.marker(
                [14.5, 107.88],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_74a62542f494464cab4236235aff9694 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_0897b3b237fa4f559902216ec0e88983.setIcon(icon_74a62542f494464cab4236235aff9694);
        
    
        var popup_aaab2b4263124cb7aba95892cd01055a = L.popup({"maxWidth": "100%"});

        
            var i_frame_c9ef1e502274434dbd825cc2e6c78bb1 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVmlldG5hbSAKIDxicj4gPGI+IENhcGl0YWw6IDwvYj4gSGFub2kKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVk5NCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVmlldG5hbWVzZSBEb25nIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gOTY0NjIxMDYKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMi8yMS9GbGFnX29mX1ZpZXRuYW0uc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_aaab2b4263124cb7aba95892cd01055a.setContent(i_frame_c9ef1e502274434dbd825cc2e6c78bb1);
        

        marker_0897b3b237fa4f559902216ec0e88983.bindPopup(popup_aaab2b4263124cb7aba95892cd01055a)
        ;

        
    
    
            marker_0897b3b237fa4f559902216ec0e88983.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_15fa47d8502347a4a71deac95ec2cc3e = L.marker(
                [17.74, -64.74],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_0d6a9066eb7c48cf9804520e7fa4658f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_15fa47d8502347a4a71deac95ec2cc3e.setIcon(icon_0d6a9066eb7c48cf9804520e7fa4658f);
        
    
        var popup_80e23fc1d2ca44d89082d516c36843aa = L.popup({"maxWidth": "100%"});

        
            var i_frame_96b29bba4e3a460abc41bed0d6b11616 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gVmlyZ2luIElzbGFuZHMsIFUuUy4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IENoYXJsb3R0ZSBBbWFsaWUKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gVklSCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gVVMgRG9sbGFyIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTA2NjMxCjxicj48Yj4gRmxhZzogPC9iPiA8YnI+PGltZyBzcmMgPSBuYW4gaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_80e23fc1d2ca44d89082d516c36843aa.setContent(i_frame_96b29bba4e3a460abc41bed0d6b11616);
        

        marker_15fa47d8502347a4a71deac95ec2cc3e.bindPopup(popup_80e23fc1d2ca44d89082d516c36843aa)
        ;

        
    
    
            marker_15fa47d8502347a4a71deac95ec2cc3e.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_cf044669da004ffb9036dde64f4cf82f = L.marker(
                [16.15, 47.95],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_a62d005477ef4ca7b2c017ce800cbfab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_cf044669da004ffb9036dde64f4cf82f.setIcon(icon_a62d005477ef4ca7b2c017ce800cbfab);
        
    
        var popup_6b6c452cd60448eaaf0216f6eef38ad7 = L.popup({"maxWidth": "100%"});

        
            var i_frame_3c382dfc76af40c1aed3ed0a545ab8d6 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gWWVtZW4gCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IFNhbmFhCjxicj4gPGI+Q291bnRyeSBDb2RlOiA8L2I+IFlFTQo8YnI+IDxiPkN1cnJlbmN5OiA8L2I+IFllbWVuaSBSaWFsIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMjkxNjE5MjIKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvOC84OS9GbGFnX29mX1llbWVuLnN2ZyBoZWlnaHQ9MTAwICB3aWR0aD0yMzUgYWx0PSJTb3JyeSEgTWFwIG5vdCBhdmFpbGFibGUiPg==" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_6b6c452cd60448eaaf0216f6eef38ad7.setContent(i_frame_3c382dfc76af40c1aed3ed0a545ab8d6);
        

        marker_cf044669da004ffb9036dde64f4cf82f.bindPopup(popup_6b6c452cd60448eaaf0216f6eef38ad7)
        ;

        
    
    
            marker_cf044669da004ffb9036dde64f4cf82f.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_77a112c1f23b4b7aa10db4cd569444bd = L.marker(
                [-13.66, 27.5],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_08c5321ca9a7490ab02e9f6c8aba2333 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_77a112c1f23b4b7aa10db4cd569444bd.setIcon(icon_08c5321ca9a7490ab02e9f6c8aba2333);
        
    
        var popup_ad10c07be3d941769542b752a2e2d8e0 = L.popup({"maxWidth": "100%"});

        
            var i_frame_da0a8a8ce2144f88924e7f96ae8feeef = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gWmFtYmlhIAogPGJyPiA8Yj4gQ2FwaXRhbDogPC9iPiBMdXNha2EKPGJyPiA8Yj5Db3VudHJ5IENvZGU6IDwvYj4gWk1CCjxicj4gPGI+Q3VycmVuY3k6IDwvYj4gWmFtYmlhbsKgS3dhY2hhIAo8YnI+IDxiPlBvcHVsYXRpb246IDwvYj4gMTc4NjEwMzAKPGJyPjxiPiBGbGFnOiA8L2I+IDxicj48aW1nIHNyYyA9IGh0dHBzOi8vdXBsb2FkLndpa2ltZWRpYS5vcmcvd2lraXBlZGlhL2NvbW1vbnMvMC8wNi9GbGFnX29mX1phbWJpYS5zdmcgaGVpZ2h0PTEwMCAgd2lkdGg9MjM1IGFsdD0iU29ycnkhIE1hcCBub3QgYXZhaWxhYmxlIj4=" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_ad10c07be3d941769542b752a2e2d8e0.setContent(i_frame_da0a8a8ce2144f88924e7f96ae8feeef);
        

        marker_77a112c1f23b4b7aa10db4cd569444bd.bindPopup(popup_ad10c07be3d941769542b752a2e2d8e0)
        ;

        
    
    
            marker_77a112c1f23b4b7aa10db4cd569444bd.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
    
            var marker_d8eb8c0c1ba84fa5add482d14e939e2e = L.marker(
                [-18.49, 28.36],
                {}
            ).addTo(feature_group_d439deadb24742239fe2c65be8e9a555);
        
    
            var icon_2a387f02f458476c8d708da3c960aff9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-0", "icon": "info-sign", "iconColor": "white", "markerColor": "blue", "prefix": "glyphicon"}
            );
            marker_d8eb8c0c1ba84fa5add482d14e939e2e.setIcon(icon_2a387f02f458476c8d708da3c960aff9);
        
    
        var popup_b166ee3031ed4c0ca71d36900a1f5093 = L.popup({"maxWidth": "100%"});

        
            var i_frame_4eab2d368cb3410fa29b2e179e615836 = $(`<iframe src="data:text/html;charset=utf-8;base64,CiAgICA8Yj5Db3VudHJ5IE5hbWU6IDwvYj4gWmltYmFid2UgCiA8YnI+IDxiPiBDYXBpdGFsOiA8L2I+IEhhcmFyZQo8YnI+IDxiPkNvdW50cnkgQ29kZTogPC9iPiBaV0UKPGJyPiA8Yj5DdXJyZW5jeTogPC9iPiBaaW1iYWJ3ZSBEb2xsYXIgCjxicj4gPGI+UG9wdWxhdGlvbjogPC9iPiAxNDY0NTQ2OAo8YnI+PGI+IEZsYWc6IDwvYj4gPGJyPjxpbWcgc3JjID0gaHR0cHM6Ly91cGxvYWQud2lraW1lZGlhLm9yZy93aWtpcGVkaWEvY29tbW9ucy82LzZhL0ZsYWdfb2ZfWmltYmFid2Uuc3ZnIGhlaWdodD0xMDAgIHdpZHRoPTIzNSBhbHQ9IlNvcnJ5ISBNYXAgbm90IGF2YWlsYWJsZSI+" width="250" style="border:none !important;" height="235"></iframe>`)[0];
            popup_b166ee3031ed4c0ca71d36900a1f5093.setContent(i_frame_4eab2d368cb3410fa29b2e179e615836);
        

        marker_d8eb8c0c1ba84fa5add482d14e939e2e.bindPopup(popup_b166ee3031ed4c0ca71d36900a1f5093)
        ;

        
    
    
            marker_d8eb8c0c1ba84fa5add482d14e939e2e.bindTooltip(
                `<div>
                     Click for more Info
                 </div>`,
                {"sticky": true}
            );
        
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