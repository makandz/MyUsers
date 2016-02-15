<?php
if (!securePage($_SERVER['PHP_SELF'])){die();}
//Links for logged in user
if(isUserLoggedIn()) { echo "
	<nav class='navbar navbar-default mainNavbar'>
		<div class='container-fluid'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-2'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='http://$websiteUrl'>".$websiteName."</a>
			</div>
			<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-2'>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='account.php'>Account home</a></li>
					<li><a href='user_settings.php'>User settings</a></li>
					<li><a href='logout.php'>Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>";
	//Links for permission level 2 (default admin)
	if ($loggedInUser->checkPermission(array(2))){ echo "
	<div>
		<a href='admin_configuration.php' class='menuAdmin'>admin configuration</a> - 
		<a href='admin_users.php'>admin users</a> - 
		<a href='admin_permissions.php'>admin permissions</a> - 
		<a href='admin_pages.php'>admin pages</a> -
		<a href='admin_plugins.php'>admin plugins</a>
	</div>
	<p class='menuWelcome'>Welcome back <strong>$loggedInUser->displayname</strong> (<u>$loggedInUser->title</u>)</p>
	<hr>";
	}
	//For users that aren't logged in
	} else { echo "
	<nav class='navbar navbar-inverse mainNavbar'>
		<div class='container-fluid'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-2'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='http://$websiteUrl'>".$websiteName."</a>
			</div>
			<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-2'>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='login.php'>Login</a></li>
					<li><a href='register.php'>Register</a></li>
				</ul>
			</div>
		</div>
	</nav>"; 
} ?>