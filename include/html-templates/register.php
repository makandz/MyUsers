<?php echo resultBlock($errors,$successes); ?>
<form name="newUser" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h2 class="mainTitle">Register your new account</h2>
    <center>
        <input type="text" name="username" class="form-control registerBox" placeholder="Username (eg. Tommy123)" required autofocus>
        <input type="text" name="displayname" class="form-control registerBox" placeholder="Display Name (eg. Tommy)" required>
        <input type="password" name="password" class="form-control registerBox" placeholder="Password (eg. password123)" required>
        <input type="password" name="passwordc" class="form-control registerBox" placeholder="Confirm Password (eg. password123)" required>
        <input type="email" name="email" class="form-control registerBox" placeholder="Email Address (eg. tommy@gmail.com)" required>
        <img src="models/captcha.php" class="registerSecurity"> 
        <input type="text" name="captcha" class="form-control registerSecurityBox" placeholder="<- Enter Security Code (eg. 4e2k3)" required><br>
        <button class="btn btn-primary" type="submit" value="Register">Register Account</button><br>
    </center>
    <p class="registerText">
        <a href="login.php">login instead</a> - 
        <a href="resend-activation.php">resend activation email</a>
    </p>
</form>

</body>
</html>