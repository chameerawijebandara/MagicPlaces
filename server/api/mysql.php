<?php

/*
 *@Author : Diunuge Buddhika Wijesinghe
 *@Application : MagicMap Android Application
 *@Date : 10-05-2015
 *@Company : Nandimith Inc.
 */

/*
 * Following code will execute query on the database and return result set
 */
	if(!empty($_GET)){
		
        // include db connect class
        require_once __DIR__ . '/database/db_connect.php';

        //connect to the database
		$db_con = new DB_CONNECT();
		$db = $db_con->connect();
		
		//$type = $_GET['type'];		
        $sql=$_GET['sql'];
		
		//$sql="SELECT * FROM wp_users";
		//print($type);
        //print($sql);
		
		/*
		if($type=='select')
		{
			$result = $con->query($sql);
		}
		else if($type=='insert')
		{
			$result = $con->query($sql);
		}
		else{
			print("Wrong type!");
		}
		*/
		if(!$result = $db->query($sql)){
			die('There was an error running the query [' . $db->error . ']');
		}
		
		//echo(json_encode($result));
		
		while($row = $result->fetch_assoc()){
			echo(json_encode($row));
			echo '</br>';
		}
	}
?>       