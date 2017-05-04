<?php

	try{
		$PDO = new PDO( "mysql:host=".getenv(BDHOST).";dbname=".getenv(BDNAME),getenv(BDUSER),getenv(BDPASS));
	}
	catch ( PDOException $e ){
		echo 'Erro ao conectar com o MySQL: '.$e->getMessage();
	}

	$sql = "SELECT * FROM funcionarios LIMIT 1";
	$result = $PDO->query($sql);
	$rows = $result->fetchAll();
	
	print_r($rows);

	$sql = "DESCRIBE funcionarios";
	$result = $PDO->query($sql);
	$rows = $result->fetchAll();
	
	print_r($rows);

?>
