<?php

require_once 'includes/db.php';
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
	<h1>Ottawa Museums</h1>
	
	<a href="admin/index.php">Admin Login</a>
	
	<ul>
		<?php foreach ($results as $museums) : ?>
				<li>
        	<a href="single.php?id=<?php echo $museums['id']; ?>"><?php echo $museums['name']; ?></a>
        </li>
		<?php endforeach; ?>
	</ul>
    
</body>
</html>