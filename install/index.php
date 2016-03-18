<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<title>Choose database information - MyUsers Installer</title>
	<link href='http://bootswatch.com/united/bootstrap.min.css' rel='stylesheet' type='text/css' />
	<script src='https://code.jquery.com/jquery-2.2.0.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<style>
	.mainNavbar {
		border-radius: 0;
	}
	.mainPanel {
		width: 50%;
		margin-left: 25%;
	}
	.mainLabel {
		margin-top: 10px;
	}
	.mainButton {
		margin-top: 10px;
		width: 100%;
	}
	</style>
</head>
<body>
	<nav class='navbar navbar-default mainNavbar'>
		<div class='container-fluid'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-2'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
				<a class='navbar-brand' href='../index.php'>MyUsers</a>
			</div>
			<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-2'>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='index.php'>Choose database</a></li>
					<li><a href='install.php'>Start installer</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class='panel panel-success mainPanel'>
		<div class='panel-heading'>Choose database settings</div>
		<div class='panel-body'>
			<form action="install.php" method="post">
				<label>Database host:</label>
				<input type="text" class="form-control" placeholder="Where database is hosted (eg. localhost)" name="host">
				<label class="mainLabel">Database name:</label>
				<input type="text" class="form-control" placeholder="Name of the database (eg. myusers)" name="name">
				<label class="mainLabel">Database user:</label>
				<input type="text" class="form-control" placeholder="User of the database (eg. tommy)" name="user">
				<label class="mainLabel">Database password:</label>
				<input type="password" class="form-control" placeholder="Password of database user (eg. password123)" name="pass">
				<label class="mainLabel">Database table prefix:</label>
				<input type="text" class="form-control" placeholder="Prefix of the database tables (eg. mu_)" name="prefix" value="mu_">
				<input type="submit" class="btn btn-success mainButton" value="Next step">
			</form>
		</div>
	</div>
</body>
</html>