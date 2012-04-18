<?php /*?>*
*small description: //A small utility file for us to create an admin user
*
*@package
*@copyright 2012 Priyanka Gite
*@author Priyanka Gitet <zohana28@yahoo.com>
*@link https://github.com/zohana/open-data-app-database-
*@link http://ottawa-museums.phpfogapp.com/
*@license New BSD Licence
*@version 1.0.0
<?php */?>


<?php



//THIS FILE SHOULD NEVER BE PUBLICLY ACCESSIBLE.


require_once 'includes/db.php';
require_once 'includes/users.php';

$email ='bradlet@algonquincollege.com';
$password= 'password';

user_create($db, $email,$password);
