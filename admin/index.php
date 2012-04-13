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

<div class="sign">
	<a class="sin" href = "sign-out.php">Sign Out</a>
</div>
<div class="admin-box">
  <ul class="ul1">
    
        <?php foreach ($results as $museums) :?> 
		<a href ="../single.php?id=<?php echo $museums['id'];?>"><?php echo $museums['name'] ; ?></a> 
        &bull;
        <div class="edit-stuff">
           <li> <a class="over1" href ="delete.php?id=<?php echo $museums['id'];?>">Delete</a>
            <a class="over1" href ="edit.php?id=<?php echo $museums['id'];?>">Edit</a>
            <a class="over1" href ="add.php?id=<?php echo $museums['id'];?>">Add</a>
            </li>
       	</div>
        
        <?php endforeach; ?>
    </ul>
</div>
          
<?php

include '../includes/theme-bottom.php';

?>
