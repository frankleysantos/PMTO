<?php 
$username="";
$password="";
 
        try{
                $PDO = new PDO( 'mysql:host=host;dbname=banco',$username,$password);
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


