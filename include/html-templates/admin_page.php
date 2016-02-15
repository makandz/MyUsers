<?php
echo "<h2 class='mainTitle'>Admin users</h2>";
echo resultBlock($errors,$successes);
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin user settings</div>
	<div class='panel-body'>
		<form name='adminPage' action='".$_SERVER['PHP_SELF']."?id=".$pageId."' method='post'>
			<input type='hidden' name='process' value='1'>
			<h3 class='adminpageTitle'>Page Information</h3>
			<hr>
			<label>Page ID:</label>
			".$pageDetails['id']."<br>
			<label>Page Name:</label>
			".$pageDetails['page']."<br>
			<label class='adminpageLabel'>Make Private:</label>";
			if ($pageDetails['private'] == 1){
				echo "<input type='checkbox' name='private' id='private' value='Yes' checked>";
			} else {
				echo "<input type='checkbox' name='private' id='private' value='Yes'>";	
			} echo "
			<input type='submit' value='Update all settings' class='btn btn-success adminpageButton'>
			<hr>
			<h3>Page Access</h3>
			<hr>
			<label class='adminpageLabel2'>Remove Access:</label><br>";
			foreach ($permissionData as $v1) {
				if(isset($pagePermissions[$v1['id']])){
					echo "<input type='checkbox' name='removePermission[".$v1['id']."]' id='removePermission[".$v1['id']."]' value='".$v1['id']."'> ".$v1['name']."<br>";
				}
			} echo"
			<label class='adminpageLabel3'>Add Access:</label><br>";
			foreach ($permissionData as $v1) {
				if(!isset($pagePermissions[$v1['id']])){
					echo "<input type='checkbox' name='addPermission[".$v1['id']."]' id='addPermission[".$v1['id']."]' value='".$v1['id']."'> ".$v1['name']."<br>";
				}
			} echo"
			<input type='submit' value='Update all settings' class='btn btn-warning adminpageButton'>
		</form>
	</div>
</div>

</body>
</html>"; 
?>