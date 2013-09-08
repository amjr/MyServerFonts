<?php

function conectarBD($bd, $usr, $psw, $host = 'localhost')
{
	$strBD = 'mysql:host=' . $host . ';dbname=' . $bd;
	
	try{
		$conn = new PDO($strBD, $usr, $psw);
		return array('status'=>'on','msg'=>'Conexão realizada com sucesso','conn'=>$conn);
	}catch (PDOException $e){
		return array('status'=>'off','msg'=>"Erro: ".$e,'conn'=>'');
	}
}