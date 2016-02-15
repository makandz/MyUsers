<?php
echo "<h2 class='mainTitle'>Admin permissions</h2>";
echo resultBlock($errors,$successes);
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin permission settings</div>
	<div class='panel-body'>
		<form name='adminPermissions' action='".$_SERVER['PHP_SELF']."' method='post'>
			<table class='admin'>
				<tr>
					<th>Delete: &nbsp;&nbsp;&nbsp;</th>
					<th>Permission Name: </th>
				</tr>";
				foreach ($permissionData as $v1) { echo "
					<tr>
						<td><input type='checkbox' name='delete[".$v1['id']."]' id='delete[".$v1['id']."]' value='".$v1['id']."'></td>
						<td><a href='admin_permission.php?id=".$v1['id']."'>".$v1['name']."</a></td>
					</tr>";
				} echo "
			</table>
			<input type='button' class='btn btn-primary adminusersDButton' value='To edit group information, please click on the name.' disabled>
			<input type='submit' name='Submit' value='Delete selected group(s)' class='btn btn-warning adminusersButton'>
			<hr>
			<label>Create new permission group:</label>
			<input type='text' name='newPermission' class='form-control'>                      
			<input type='submit' name='Submit' value='Update all settings' class='btn btn-success adminpermsButton'>
		</form>
	</div>
</div>

</body>
</html>"; ?>