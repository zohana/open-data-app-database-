<?php /*?>*
*small description:administrator page.
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
require_once '../includes/users.php';


if(!user_is_signed_in()){
	header('Location: sign-in.php');
	exit;
}
//var_dump($db);

//->exec() allows us to perform SQL and not expect results
//->query()allows us to perform SQL and expect results
$results = $db->query('SELECT id,name,longitude,latitude
                       FROM museums 
					   ORDER BY name ASC'
					  );
include '../includes/theme-top.php';
?>


	<a class="sin" href = "sign-out.php">Sign Out</a>

<div class="admin-box">

	<a id="over1" href ="add.php?id=<?php echo $museums['id'];?>">Add the name of Museum to the List.</a>
      <ul class="ul1">
        
            <?php foreach ($results as $museums) :?> 
            <a id="over1" href ="../single.php?id=<?php echo $museums['id'];?>"><?php echo $museums['name'] ; ?></a> 
            &bull;
            <div class="edit-stuff">
               <li> <a id="over1" href ="delete.php?id=<?php echo $museums['id'];?>">Delete</a>
                <a id="over1" href ="edit.php?id=<?php echo $museums['id'];?>">Edit</a>
                
                </li>
            </div>
        
        <?php endforeach; ?>
   	 </ul>
</div>
          
<?php

include '../includes/theme-bottom.php';

?>
