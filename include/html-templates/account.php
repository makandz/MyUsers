<body>
<h2 class="mainTitle">Your account information</h2>
<p class="accountDesc">Welcome to MyUsers! This is the default <strong>account.php</strong>. This is the page a user would get once they have signed up and got there account activated. You cannot delete this page (if you don't know what you are changing.) because without this a user would not be able to see the introduction page when they login. Below are some of the PHP variables you can call using PHP on your custom account page. These are called from the SQL Database, commands can be found in the <strong>funcs.php</strong> file found in the models folder.</p>
<div class="panel panel-primary accountPanel">
	<div class="panel-heading">Some user information</div>
	<div class="panel-body mainPanelBody">
		<p><strong>Basic Information:</strong></p>
		<p>Email: <?php echo "$loggedInUser->email" ?></p>
		<p>Username: <?php echo "$loggedInUser->username" ?></p>
		<p>Display Name: <?php echo "$loggedInUser->displayname" ?></p>
		<p>User Title: <?php echo "$loggedInUser->title" ?></p>
		<p>Registered Date: <?php echo date("M d, Y", $loggedInUser->signupTimeStamp()); ?></p>
		<p><strong>Advanced Information:</strong></p>
		<p>User Admin: <?php if ($loggedInUser->checkPermission(array(2))){ echo "True"; }else{ echo "False"; } ?></p>
		<p>User ID: <?php echo "$loggedInUser->user_id" ?></p>
		<p><a href="#pw_hash" id="p_hash_p" onclick="showHash();">Show Password Hash</a></p> 
		<p id="p_hash" style="display: none;">Password Hash: <?php echo "$loggedInUser->hash_pw" ?></p>
	</div>
</div>


</body>
</html>

<!--$loggedInUser->displayname-->