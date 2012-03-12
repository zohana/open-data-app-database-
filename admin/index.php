<?php

require_once '../includes/db.php';
//var_dump($db);

//->exec() allows us to perform SQL and not expect results
//->query()allows us to perform SQL and expect results
$results = $db->query('SELECT id,name,longitude,latitude
                       FROM museums 
					   ORDER BY name ASC'
					  );

?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Ottawa Museums</title>
</head>
<body>


  <ul>
     <?php 
      /*foreach ($results as $dino) {
		echo '<li>'. $dino['dino_name'].'<li>';  
	  }*/
     ?>
 
        <?php foreach ($results as $museums) :?> 
		<li><a href="../single.php?id=<?php echo $museums['id'];?>"><?php echo $museums['name'] ; ?></a> 
        &bull;
        <a href ="delete.php?id=<?php echo $museums['id'];?>">Delete</a>
        <a href ="edit.php?id=<?php echo $museums['id'];?>">Edit</a>
        <a href ="add.php?id=<?php echo $museums['id'];?>">Add</a>
       
        </li>
        <?php endforeach; ?>
    </ul>
          
          


</body>
</html>