<?php /*?>*
*small description:lets administrator sign-out
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

require_once '../includes/users.php';

user_sign_out();

header('Location: sign-in.php');