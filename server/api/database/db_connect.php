<?php

/*
 *@Author : Diunuge Buddhika Wijesinghe
 *@Application : MagicMap Android Application
 *@Date : 10-05-2015
 *@Company : Nandimith Inc.
 */

/**
 * A class file to connect to database
 */
class DB_CONNECT {

    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }

    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once __DIR__ . '/db_config.php';

        // Connecting to mysql database
        $con = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        // returing connection cursor
        //return $con;
		return $con;
    }

    /**
     * Function to close db connection
     */
                            
    function close() {
        // closing db connection
		//mysql_close();
		//if($con!=null)
		//	mysql_close($con);
    }

}

?>  