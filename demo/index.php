<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyServerFont</title>
<link href="../css/Lucida-LucidaBrightItalic,LucidaBrightRegular|Square721-Square721BTRoman|Futura-FuturaBkBTBook" rel="stylesheet" type="text/css" />
<style type="text/css">
body{
	line-height:18px;
	font-size:20px;	
}
h1,h2,h3{
	font-family:'Square721BTRoman';
}
p,ul{
	font-family:'LucidaBrightRegular';
	font-size:18px;
}
</style>
</head>

<body>
	<h1>Bem vindo ao MyServerFont</h1>
	<p>O MyServerFont é uma pequena aplicação que permite a configuração de um servidor de fontes que podem ser utilizadas via @font-face nos moldes do Google Fonts.</p>
    <p>Fácil de configurar, basta instalá-lo em um domínio qualquer e chamar CSS das fontes como no exemplo abaixo:</p>
    <p><strong>http://nomedodominio.com.br/css/Lucida-LucidaBrightRegular,ImpactRegular</strong></p>
    <p>O símbolo pipe ou barra vertical ("|") serve para separar caso seja necessário carregar mais de uma fonte ao mesmo tempo no projeto!</p>
    <p>Automaticamente o sistema identifica qual é o navegador, carregando apenas os arquivos com as extensões necessárias para funcionamento do @font-face.</p>
    <h2>Configurações:</h2>
    <p>As fontes obrigatoriamente devem ficar dentro do diretório FONTS, sendo que os nomes dos arquivos internos devem possuir o mesmo nome da pasta da fonte que os contem com excessão do arquivo <strong>stylesheet.css</strong>, por exemplo:</p>
    <p>Para a pasta da fonte <strong>ImpactRegular</strong> fica:</p>
    <ul>
    	<li><strong>Pasta: </strong>ImpactRegular <br /><br /></li>
    	<li><strong>Arquivos obrigatórios:</strong>
        	<ul>
        		<li>ImpactRegular.eot - arquivo utilizado pelos IEs</li>
        		<li>ImpactRegular.woff - arquivo utilizado pelo Firefox, Chrome e Opera</li>
        		<li>ImpactRegular.ttf - arquivo utilizado pelo Safari</li>
        		<li>ImpactRegular.svg - arquivo utilizado por Iphone e Ipads<br /><br /></li>
        	</ul>
        </li>
        
    	<li><strong>Arquivos opcionais (apenas para visualização da fonte):</strong>
        	<ul>
        		<li>ImpactRegular.html</li>
        		<li>stylesheet.css</li>
        	</ul>
        </li>
    </ul>
<p>
</body>
</html>