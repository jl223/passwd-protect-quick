<?php 
	include('passwd-protect.php'); 

	/* 
		Here's where you configure the authentication. The `salt` is just a random, arbitrary string.
		It's used to securely hash the password. Just so long as it doesn't change... It's actually not
		neccesary in this version as the password is just plain text, but in the future if the script is updated it may be useful.
	*/
	$pwp = new Password_Protect(array(
		'password' => 'test', /* This is the password! ie. `test` */
		'salt' => 'some random string',
	)); 

	if (isset($_POST['password'])) {
		$pwp->login($_POST['password']);
	}

	if (!$pwp->is_logged_in()):
		$pwp->render_login_form();
		return;
	else:
?>

This is the example page. <a href="?logout">Logout</a>

<?php endif; ?>