<body>
<h2 class="mainTitle">Admin plugins</h2>
<div class="panel panel-danger accountPanel">
	<div class="panel-heading">Installed plugins</div>
	<div class="panel-body">
		<?php 
		$plugin_directory = "include/plugins/inf/";
		$plugins = glob($plugin_directory . "*.php");
		foreach ($plugins as $plugin){
			$row[$plugin] = $plugin;
		}
		foreach ($row as $pluginCatch){
			include($pluginCatch);
			echo "<p><b>";
			if ($p_set === "") {
				echo "$p_nam</b> (v$p_ver) <u>[$p_dev]</u> - <i>$p_des</i>";
			} else {
				echo "<a href='admin_plugin.php?shw=$p_set'>$p_nam</a></b> (v$p_ver) <u>[$p_dev]</u> - <i>$p_des</i>";
			}
			if ($p_com === "10") {
				echo "</p>";
			} else {
				echo " <b style='color: red;'>[NOT UPDATED]</b></p>";
			}
		} 
		?>
		<a class="btn btn-primary pluginButton" disabled>If a plugin has settings, click on the name to view/change them.</a>
	</div>
</div>