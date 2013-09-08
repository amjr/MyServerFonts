<?php
/******* CARREGA O DIRETÓRIO ROOT *******/
/****************************************/
function dirRoot(){
	$arrUrl = explode('/',$_SERVER['SCRIPT_FILENAME']);
	$num = count($arrUrl);
	$lim = $num-1;
	
	$url = '';
	for($i=0;$i<$lim;$i++){
		$url .= $arrUrl[$i];
		
		$a = $i+1;
		if($a != $lim){ $url .= '/';}
	}
	
	return  $url;
}

/******* CARREGA O DIRETÓRIO HOST *******/
/****************************************/
function dirHost(){
	$pageURL = 'http';
	
	if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on"){$pageURL .= "s";}
	
	$pageURL .= "://";
	
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
	}else{
		$pageURL .= $_SERVER["SERVER_NAME"];
	}
	
	$arrUrl = explode('/',$_SERVER['SCRIPT_NAME']);
	$num = count($arrUrl);
	$lim = $num-1;
	
	$url = '';
	
	for($i=0;$i<$lim;$i++){
		$url .= $arrUrl[$i];
		
		$a = $i+1;
		if($a != $lim){ $url .= '/';}
	}
	
	return $pageURL . $url;
}

/******* DESCOBRE O NAVEGADOR *******/
/************************************/
function browser(){
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	
	if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
		$browser_version=$matched[1];
		$browser = 'IE';
	} elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
		$browser_version=$matched[1];
		$browser = 'OPERA';
	} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
		$browser_version=$matched[1];
		$browser = 'FIREFOX';
	} elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
		$browser_version=$matched[1];
		$browser = 'CHROME';
	} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
		$browser_version=$matched[1];
		$browser = 'SAFARI';
	} else {
		// browser not recognized!
		$browser_version = 0;
		$browser= 'OTHER';
	}
	
	return $browser;
}
?>