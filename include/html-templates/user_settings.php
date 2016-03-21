<?php echo resultBlock($errors,$successes); ?>
<form name="updateAccount" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h2 class="mainTitle">User Settings</h2>
    <center>
        <input type="password" name="password" class="form-control usettingsBox" placeholder="Current account password (eg. password123)" required>
        <input type="email" name="email" class="form-control usettingsBox" placeholder="Email account (eg. tommy@gmail.com)" value="<?php echo "$loggedInUser->email" ?>" required>
        <input type="password" name="passwordc" class="form-control usettingsBox" placeholder="New account password (eg. password124)" required>
        <input type="password" name="passwordcheck" class="form-control usettingsBox" placeholder="Confirm account password (eg. password124)" required>
        <button class="btn btn-primary" type="submit" value="Update" class="submit">Confirm Changes</button>
    </center>
</form>
</body>
</html>
