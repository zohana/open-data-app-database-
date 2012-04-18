<?php /*?>*
*small description: Track how many times u've viewed this page for this session.
*
*@package
*@copyright 2012 Priyanka Gite
*@author Priyanka Gitet <zohana28@yahoo.com>
*@link https://github.com/zohana/open-data-app-database-
*@link http://ottawa-museums.phpfogapp.com/
*@license New BSD Licence
*@version 1.0.0
<?php */?>



<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Views</title>
</head>
<body>
<?php

//

//Turn on sessions
session_start();

//Session information is stored in the $_SESSION super global
$_SESSION['page-view'] +=1;

?>

<strong>You've visited this page <?php echo $_SESSION['page-view'];?>times.</strong>

</body>
</html>