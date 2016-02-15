<?php echo resultBlock($errors,$successes); ?>
<form class="form-signin" name="newLostPass" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h2 class="mainTitle">Resend Activation</h2>
    <center>
        <input type="text" name="username" class="form-control resendBox" placeholder="Account username (eg. Tommy)" required autofocus>
        <input type="text" name="email" class="form-control resendBox" placeholder="Account email (eg. tommy@gmail.com)" required autofocus>
        <button class="btn btn-primary" type="submit" value="Submit" class="submit">Resend Activation</button>
    </center>
    <p class="resendText">
        <a href="login.php">return to login</a>
    </p>
</form>

</body>
</html>