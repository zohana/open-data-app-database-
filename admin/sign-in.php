<?php /*?>*
*small description: sign-in authentication for the administrator.
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

if(user_is_signed_in()){ 
	header('Location: index.php');
	exit;
}

$errors = array();
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST,'password',FILTER_UNSAFE_RAW);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['email'] = true;
	}
	
	if(empty($password)){
		$errors['password'] = true;
	}
	
	if(empty($errors)){
		$user = user_get($db, $email);
		
		if(!empty($user)){
			if(passwords_match($password, $user['password'])){
				user_sign_in($user['id']);
				header('Location: index.php');
				exit;
			} else{
				$errors['password-no-match'] = true;
			}
			
		}else{
			$errors['user-non-existent'] = true;
		}
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Sign In</title>
</head>

<body>
	<form method="post" action="sign-in.php">
    	<div>
        	<label for="email">E-mail Adress</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
        	<label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Sign In</button>
     </form>
 <a class="sin" href = "../index.php">Home</a>           
</body>
</html>