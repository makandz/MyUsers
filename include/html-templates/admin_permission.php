<?php
echo "<h2 class='mainTitle'>Admin permissions</h2>";
echo resultBlock($errors,$successes); 
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin permission settings</div>
	<div class='panel-body'>
		<form name='adminPermission' action='".$_SERVER['PHP_SELF']."?id=".$permissionId."' method='post'>
			<h3 class='adminpermTitle'>Permission Information</h3>
			<hr>
			<label>Permission ID:</label>
			".$permissionDetails['id']."<br>
			<label>Permission Name:</label>
			<input type='text' name='name' value='".$permissionDetails['name']."' class='form-control adminpermBox'>
			<label>Delete Permission:</label>
			<input type='checkbox' name='delete[".$permissionDetails['id']."]' id='delete[".$permissionDetails['id']."]' value='".$permissionDetails['id']."'>
			<br><input type='submit' value='Update all settings' class='btn btn-warning adminpermButton'>
			<hr>
			<h3 class='adminpermTitle2'>Permission Membership</h3>
			<hr>
			<label>Remove members: </label>";
			foreach ($userData as $v1) {
				if(isset($permissionUsers[$v1['id']])){echo "
					<br><input type='checkbox' name='removePermission[".$v1['id']."]' id='removePermission[".$v1['id']."]' value='".$v1['id']."'> ".$v1['display_name'];
				}
			} echo"<br>
			<label class='adminpermAddMember'>Add members:</label>";
			foreach ($userData as $v1) {
				if(!isset($permissionUsers[$v1['id']])){echo "
					<br><input type='checkbox' name='addPermission[".$v1['id']."]' id='addPermission[".$v1['id']."]' value='".$v1['id']."'> ".$v1['display_name'];
				}
			} echo"
			<br><input type='submit' value='Update all settings' class='btn btn-danger adminpermButton'>
			<hr>
			<h3>Permission Access</h3>
			<hr>
			<label>Public Access Files:</label>";
			foreach ($pageData as $v1) {
				if($v1['private'] != 1){echo "
					<br>".$v1['page'];
				}
			} echo"<br>
			<label class='adminpermLabel'>File Permissions</label><br>
			<p class='adminpermP'><u>Remove File Access:</u></p><br>";
			foreach ($pageData as $v1) {
				if(isset($pagePermissions[$v1['id']]) AND $v1['private'] == 1){ echo "
					<br><input type='checkbox' name='removePage[".$v1['id']."]' id='removePage[".$v1['id']."]' value='".$v1['id']."'> ".$v1['page'];
				}
			} echo"
			<p class='adminpermP2'><u>Add Access:</u></p>";
			foreach ($pageData as $v1) {
				if(!isset($pagePermissions[$v1['id']]) AND $v1['private'] == 1){
					echo "<br><input type='checkbox' name='addPage[".$v1['id']."]' id='addPage[".$v1['id']."]' value='".$v1['id']."'> ".$v1['page'];
				}
			} echo"
			<br><input type='submit' value='Update all settings' class='btn btn-success adminpermButton'>
		</form>
	</div>
</div>

</body>
</html>"; ?>