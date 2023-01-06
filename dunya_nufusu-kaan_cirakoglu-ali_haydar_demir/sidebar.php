<?php

function sidebar(){
	
	$sidebar = '
	
		<nav id="solmenunav" >
            <ul id="solmenunavul">
                <li id="solmenunavul1">
                    <a href="Map1.php" id="linka1">Ülkelere Göre Dünya Nufusu</a>
                </li>
                <li id="solmenunavul2" >
                    <a href="solmenunavul2.php" id="linka2">Dogum  Istatistikleri</a>
                </li>
                <li id="solmenunavul3" >
                  <a href="foodandwater.php" id="linka3">Su Kaynakları</a>
                </li>
                <li id="solmenunavul4">
                  <a href="ErkekKadin.php" id="linka4">Kadin ve Erkek Ölüm Oranlari</a>
                </li>
                <li id="solmenunavul5">
                  <a href="aclik.php" id="linka5">Açlik</a>
                </li>
                <li id="solmenunavul6">
                  <a href="gida.php" id="linka6">Gida</a>
                </li>

            </ul>
        </nav>
		
	';
	
	echo $sidebar;
	
}

function adminSidebar(){
	
	$adminSidebar = '
	            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Admin Paneli</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Anasayfa </a></li>
                  
                  <li><a href="admin-kullanicilar.php"><i class="fa fa-location-arrow"></i> Kullanıcıları Listele </a></li>
                  <li><a href="admin-kullanicilar-log.php"><i class="fa fa-location-arrow"></i> Kullanıcı Logları </a></li>
                  <li><a href="logout.php"><i class="fa fa-power-off"></i> Çıkış </a></li>
                </ul>
              </div>
            </div>
	';
	
	echo $adminSidebar;
	
}


?>