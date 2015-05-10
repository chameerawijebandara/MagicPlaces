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
		$db = new DB_CONNECT();
		$con = $db->connect();
		
		//$type = $_GET['type'];		
        $sql=$_GET['sql'];
		
		//$sql="SELECT * FROM wp_users";
		print($type);
        print($sql);
		
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
		$result = $con->query($sql);
		echo(json_encode($result));
	}
?>       