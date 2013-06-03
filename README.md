passwd-protect-quick
====================

Ben & Elliot - 
I've included a `page.php` example page. This is the password protected page (ie. where the stream will be). 
The `login.php` page's markup can be changed as much as you want to see fit :)

You can configure the password in the `page.php` file's `Password_Protect` instantiation like so:-
```
$pwp = new Password_Protect(array(
  	'password' => 'test', /* This is the password! ie. `test` */
	'salt' => 'some random string',
)); 
```

Whack `passwd-protect.php` in whichever directory your `page.php` and `login.php` file will be.
Download here: https://github.com/jonlambert/passwd-protect-quick/archive/master.zip
