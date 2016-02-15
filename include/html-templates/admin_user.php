<?php
echo "<h2 class='mainTitle'>Admin users</h2>";
echo resultBlock($errors,$successes);
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin user settings</div>
	<div class='panel-body'>
		<form name='adminUser' action='".$_SERVER['PHP_SELF']."?id=".$userId."' method='post'>
			<h3 class='adminuserTitle'>User Information</h3>
			<hr>
			<label class='adminuserInfo'>User ID:</label>
			".$userdetails['id']."<br>
			<label class='adminuserInfo'>Username:</label>
			".$userdetails['user_name']."<br>
			<label class='adminuserInfo'>Display Name:</label>
			<input type='text' name='display' value='".$userdetails['display_name']."' class='form-control adminuserBox'>
			<label class='adminuserInfo'>Email:</label>
			<input type='text' name='email' value='".$userdetails['email']."' class='form-control adminuserBox'>
			<label class='adminuserInfo'>Active:&nbsp;</label>";
			if ($userdetails['active'] == '1'){
				echo "Yes";	
			} else {
				echo "No
				<label>Activate:</label>
				<input type='checkbox' name='activate' id='activate' value='activate'>";
			}
			echo "<br>
			<label class='adminuserInfo'>Title:</label>
			<input type='text' name='title' value='".$userdetails['title']."' class='form-control adminuserBox'>
			<label class='adminuserInfo'>Sign Up:</label>
			".date("j M, Y", $userdetails['sign_up_stamp'])."<br>
			<label>Last Sign In:&nbsp;</label>";
			if ($userdetails['last_sign_in_stamp'] == '0'){
				echo "Never";	
			} else {
				echo date("j M, Y", $userdetails['last_sign_in_stamp']);
			} echo "<br>
			<label class='adminuserInfo'>Delete user:&nbsp;</label>
			<input type='checkbox' name='delete[".$userdetails['id']."]' id='delete[".$userdetails['id']."]' value='".$userdetails['id']."'><br>
			<label class='adminuserInfo'>&nbsp;</label>
			<input type='submit' value='Update User Information' class='btn btn-success adminuserButton' />
			<hr>
			<h3 class='adminuserTitle2'>User Permission Level</h3>
			<hr>
			<p>Remove Permission:";
			foreach ($permissionData as $v1) {
				if(isset($userPermission[$v1['id']])){
					echo "<br><input type='checkbox' name='removePermission[".$v1['id']."]' id='removePermission[".$v1['id']."]' value='".$v1['id']."'> ".$v1['name'];
				}
			}
			echo "</p><p>Add Permission:";
			foreach ($permissionData as $v1) {
				if(!isset($userPermission[$v1['id']])){
					echo "<br><input type='checkbox' name='addPermission[".$v1['id']."]' id='addPermission[".$v1['id']."]' value='".$v1['id']."'> ".$v1['name'];
				}
			} echo"
			</p>
			<input type='submit' value='Update User Information' class='btn btn-success adminuserButton' />
		</form>
	</div>
</div>

</body>
</html>"; ?>