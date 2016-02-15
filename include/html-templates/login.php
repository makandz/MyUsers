<?php echo resultBlock($errors,$successes); ?>
<form name="login" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<h2 class="mainTitle">Login to your account</h2>
	<center>
		<input type="text" name="username" class="loginUsername form-control" placeholder="Username (eg. Tommy123)" required autofocus>
		<input type="password" name="password" class="loginPassword form-control" placeholder="Password (eg. password123)" required>
		<button class="btn btn-primary" type="submit" value="Login" class="submit">Sign in</button>
	</center>
	<p class="loginText">
		<a href="register.php">don't have an account?</a> - 
		<a href="resend-activation.php">resend activation email</a>
	</p>
</form>

</body>
</html>