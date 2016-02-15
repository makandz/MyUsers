<?php
echo "<h2 class='mainTitle'>Admin users</h2>";
echo resultBlock($errors,$successes);
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin user settings</div>
	<div class='panel-body'>
		<form name='adminUsers' action='".$_SERVER['PHP_SELF']."' method='post'>
			<table class='admin'>
				<tr>
					<th>Delete: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Display Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Title: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
					<th>Last Sign In</th>
				</tr>";
				foreach ($userData as $v1) { echo "
					<tr>
						<td>
							<input type='checkbox' name='delete[".$v1['id']."]' id='delete[".$v1['id']."]' value='".$v1['id']."'>
						</td>
						<td>
							<a href='admin_user.php?id=".$v1['id']."'>".$v1['user_name']."</a>
						</td>
						<td>".$v1['display_name']."</td>
						<td>".$v1['title']."</td>
						<td>";
							if ($v1['last_sign_in_stamp'] == '0'){
								echo "Never";	
							} else {
								echo date("j M, Y", $v1['last_sign_in_stamp']);
							} echo "
						</td>
					</tr>";
				} echo "
			</table>
			<input type='button' class='btn btn-primary adminusersDButton' value='To edit user information, please click on the username.' disabled>
			<input type='submit' name='Submit' value='Delete selected user(s)' class='btn btn-danger adminusersButton'>
		</form>
	</div>
</div>

</body>
</html>"; ?>