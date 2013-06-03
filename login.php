<?php 
	/* This is the example login page. This will be rendered if the user isn't logged in. Feel free to change! */
?>
<style type="text/css">
	.login {
		width: 350px;
		height: 170px;
		background: #eee;
		border: 1px solid #DDD;
		font-family: Arial;
		font-size: 13px;
		margin: 0 auto;
		padding: 20px;
		margin-top: 20px;
		font-weight: 100;
		color: #333;
	}

	h2 {
		font-weight: 100;
		margin-top: 0;
	}

	input[type="password"] {
		padding: 3px 5px 3px 5px;
		border: 1px solid #DDD;
		font-family: Helvetica, Arial;
		font-size: 14px;
	}

	button {
		width: 100px;
		margin: 0 auto;
	}
</style>
<div class="login">
	<h2>Password Protected Stream</h2>
	<form action="" method="post">
		<?php if (isset($_GET['login_error'])): ?><div class="error">That password is incorrect.</div> <?php endif; ?>
		Enter the password: <input type="password" name="password" /><br />
		<button type="submit">Sign in</button>
	</form>
</div>