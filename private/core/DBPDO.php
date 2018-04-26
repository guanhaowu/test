<?php
//    DB settings in init.php
function connect(){
    try{
		
		$dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_DBNAME;
		$options = 
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		];
		
        $DB_con = new PDO($dsn,DB_USERNAME,DB_PASSWORD,$options);
        echo "<pre>connected</pre>";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function db_result($sql){
	try{
		$result = $DB_con->prepare($sql);
		$result = $result->fetchAll();
		return $result;
	}
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

function db_read($sql,$data = array([])){
	try{
		db_result($sql);
		foreach ($result as $row){
			echo $row[$data1]." ".$row[$data2]." ".$row[$data3]." ".$row[$data4]. "<br>";
		}
	}
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>
