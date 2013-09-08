<?php
	header("Content-Type: text/css");
	include("funcoes.php");
	
	// recupera a string completa para formar o array
	$arr = isset($_REQUEST['arr'])?$_REQUEST['arr']:'';
	
	$browser = browser();// define o navegador
	$dir = dirHost();// define o diretório
	$fontCSS = "";// inicia a variável $fontCSS
	
	if(!empty($arr)){
		// explode a string retornada com pipe ("|"), cada item representa uma família de fonte
		$grupos = explode("|",$arr);
		
		// separa os grupos para definir as famílias de fontes
		foreach($grupos as $grupo){
			//separa o nome da família dos tipos das fontes explodindo a string delimitada pelo símbolo "-"
			$familiaArr = explode("-",$grupo);
			
			// define o nome da família da fonte
			$familia = !empty($familiaArr[0])?$familiaArr[0]:0;
			
			// define as fontes que serão utilizadas explodindo a string separadas por vírgula
			$fontes = isset($familiaArr[1])?explode(",",$familiaArr[1]):"";
			
			if(!empty($fontes)){
				// percorre os array das fontes
				foreach($fontes as $font){	
					$fontCSS .= "@font-face {\n";
					$fontCSS .= "  font-family: '" . $font . "';\n";	
					$fontCSS .= "  font-style: normal;\n";
					$fontCSS .= "  font-weight: normal;\n";
					
					switch($browser){
						// padrão do INTERNET EXPLORER						
						case "IE":
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/" . $font . "/" . $font . ".eot');\n";
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".eot') format('embedded-opentype'),\n";
							$fontCSS .= "  url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".woff') format('woff');";
						break;
						
						// padrão para OPERA
						case "OPERA":
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".woff') format('woff');\n";
						break;
						
						// padrão para FIREFOX
						case "FIREFOX":
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".woff') format('woff');\n";
						break;
						
						// padrão para CHROME
						case "CHROME":
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".woff') format('woff');\n";
						break;
						
						// padrão para SAFARI
						case "SAFARI":
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".ttf') format('truetype');\n";
						break;
						
						// padrão para OUTROS
						case "OTHER":
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".eot');\n";
							$fontCSS .= "  src: url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".eot?#iefix') format('embedded-opentype'),\n";
							$fontCSS .= "  url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".woff') format('woff'),\n";
							$fontCSS .= "  url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".ttf') format('truetype'),\n";
							$fontCSS .= "  url('" . $dir . "/fonts/" . $familia . "/"  . $font . "/" . $font . ".svg#" . $font . "') format('svg');\n";
						break;
					}
					
					$fontCSS .= "}\n";
				}
				
				echo $fontCSS;
			}
		}
	}else{
		echo "ERRO!!!";
	}
?>