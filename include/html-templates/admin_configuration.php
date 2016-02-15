<?php
echo "<h2 class='mainTitle'>Admin configuration</h2>";
echo resultBlock($errors,$successes);
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin configuration settings</div>
	<div class='panel-body'>
		<form name='adminConfiguration' action='".$_SERVER['PHP_SELF']."' method='post'>
			<label>Website Name:</label>
			<input type='text' name='settings[".$settings['website_name']['id']."]' value='".$websiteName."' class='form-control adminconBox'>
			<label>Website URL:</label>
			<input type='text' name='settings[".$settings['website_url']['id']."]' value='".$websiteUrl."' class='form-control adminconBox'>
			<label>Email:</label>
			<input type='text' name='settings[".$settings['email']['id']."]' value='".$emailAddress."' class='form-control adminconBox'>
			<label>Activation Threshold:</label>
			<input type='text' name='settings[".$settings['resend_activation_threshold']['id']."]' value='".$resend_activation_threshold."' class='form-control adminconBox'>
			<label>Language:</label>
			<select name='settings[".$settings['language']['id']."]' class='form-control adminconBox'>";
				foreach ($languages as $optLang){
					if ($optLang == $language){
						echo "<option value='".$optLang."' selected>$optLang</option>";
					} else {
						echo "<option value='".$optLang."'>$optLang</option>";
					}
				} echo "
			</select>
			<label>Email Activation:</label>
			<select name='settings[".$settings['activation']['id']."]' class='form-control adminconBox'>";
				if ($emailActivation == "true"){ echo "
					<option value='true' selected>True</option>
					<option value='false'>False</option>
				</select>";
				} else { echo "
					<option value='true'>True</option>
					<option value='false' selected>False</option>
				</select>";
				} echo "
			<label>Template:</label>
			<select name='settings[".$settings['template']['id']."]' class='form-control adminconBox'>";
			foreach ($templates as $temp){
				if ($temp == $template){
					echo "<option value='".$temp."' selected>$temp</option>";
				} else {
					echo "<option value='".$temp."'>$temp</option>";
				}
			} echo "
			</select>
			<input type='submit' name='Submit' value='Publish Changes' class='btn btn-primary adminconButton'>
		</form>
	</div>
</div>

</body>
</html>"; ?>