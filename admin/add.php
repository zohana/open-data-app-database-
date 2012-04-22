<?php /*?>*
*small description:to add data.
*
*@package
*@copyright 2012 Priyanka Gite
*@author Priyanka Gitet <zohana28@yahoo.com>
*@link https://github.com/zohana/open-data-app-database-
*@link http://ottawa-museums.phpfogapp.com/
*@license New BSD Licence
*@version 1.0.0
<?php */?>

<!--for validation we need php,as to chk if ryt data is inputted inside the text field-->

<?php include '../includes/theme-top.php';?>

<?php
require_once '../includes/db.php';
$errors = array();

$name = filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
$longitude = filter_input(INPUT_POST,'longitude',FILTER_SANITIZE_STRING);
$latitude = filter_input(INPUT_POST,'latitude',FILTER_SANITIZE_STRING);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($name)){
		$errors['name'] = true;
	}
	
	if(empty($longitude)){
		$errors['longitude']=true;
	}
	
	if(empty($latitude)){
		$errors['latitude']=true;
	}
	
	if(empty($errors)){
	    require_once '../includes/db.php';
		
		$sql = $db->prepare('
		   INSERT INTO museums(name,longitude,latitude)
		   VALUES(:name, :longitude, :latitude)
		   ');
		$sql->bindValue(':name', $name,PDO::PARAM_STR);
		$sql->bindValue(':longitude', $longitude, PDO::PARAM_STR);
		$sql->bindValue(':latitude', $latitude, PDO::PARAM_STR);
		//$sql->bindValue(':id', $id,PDO::PARAM_INT);
		$sql->execute();
		
		header('Location:index.php');
		exit;
	}
}

?>




<body>
    <div class = "signin">  
        <form method= "post" action="add.php">
          <div>
             <label for="name"> Name<?php if (isset($errors['name'])):?> <strong>is required</strong><?php endif;?></label>
             <input id = "name" name="name" value="<?php echo $name; ?>"required>
          </div>
          <div>
             <label for="longitude">Longitude<?php if (isset($errors['longitude'])):?> <strong>is required</strong><?php endif;?></label>
             <input id = "longitude" name="longitude" value="<?php echo $longitude; ?>" required>
          </div>
           <div>
             <label for="latitude">latitude<?php if (isset($errors['latitude'])):?> <strong>is required</strong><?php endif;?></label>
             <input id = "latitude" name="latitude" value="<?php echo $latitude; ?>" required>
          </div>
             <button type="submit">Add</button>
        </form>
   </div>
 
 <a class="sin" href = "/admin/index.php">Admin Page</a>         

<?php

include '../includes/theme-bottom.php';

?>
