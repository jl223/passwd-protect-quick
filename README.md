passwd-protect-quick
====================

Ben & Elliot - 
I've included a `page.php` example page. This is the password protected page (ie. where the stream will be). 
The `login.php` page's markup can be changed as much as you want to see fit :)

Add this code to the `page.php` file, as demo'd:-

```
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

Welcome!
<!-- Your player goes here! -->

<?php endif; ?>
```


You can configure the password in the `page.php` file's `Password_Protect` instantiation like so:-
```
$pwp = new Password_Protect(array(
  	'password' => 'test', /* This is the password! ie. `test` */
	'salt' => 'some random string',
)); 
```

Whack `passwd-protect.php` in whichever directory your `page.php` and `login.php` file will be.
Download here: https://github.com/jonlambert/passwd-protect-quick/archive/master.zip
