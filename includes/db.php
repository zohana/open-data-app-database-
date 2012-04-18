<?php /*?>*small description://gets an environment variable we created in the .htaccess file
*
*@package
*@copyright 2012 Priyanka Gite
*@author Priyanka Gitet <zohana28@yahoo.com>
*@link https://github.com/zohana/open-data-app-database-
*@link http://ottawa-museums.phpfogapp.com/
*@license New BSD Licence
*@version 1.0.0<?php */?>





<?php


//this is the best way to keep the user names and passwords out of public GitHub repository
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$dsn = stripslashes(getenv('DB_DSN'));

//opens a connection to the database and stores it in a variable
$db = new PDO($dsn, $user, $pass);

//makes sure we talk to the database in the UTF-8, so we can support more than just english
$db->exec('SET NAMES utf-8');