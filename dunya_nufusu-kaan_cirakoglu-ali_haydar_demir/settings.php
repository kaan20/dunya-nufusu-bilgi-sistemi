<?php

$siteBasligi = "dünya nüfusu";
$favicon = "img/investment.png";

function ustSidebar(){
	
	$ustSidebar = '	
	<div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-globe"></i> <span>dünya nüfüsu</span></a>
    </div>
	';
	
	echo $ustSidebar;	
}

$sidebarKisaIsim = "dünya nüfüsu";


function makeSafe($text, $mysql=false) {

    if(get_magic_quotes_gpc()) {
        $text = stripslashes($text);
    }
    if($mysql) {
        $text = mysql_real_escape_string($text);
    } else {
        $text = addslashes($text);
    }
    return trim($text);
}


?>