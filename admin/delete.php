<?php /*?>*
*small description: Delete data.
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

require_once '../includes/db.php';
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if(empty($id)){
	 header('Location:index.php');
	 exit;
}

require_once '../includes/db.php';

$sql = $db->prepare('
     DELETE FROM museums
	 WHERE id=:id
	 LIMIT 1
');

$sql->bindValue(':id',$id,PDO::PARAM_INT);

$sql->execute();

header('Location:index.php');
exit;