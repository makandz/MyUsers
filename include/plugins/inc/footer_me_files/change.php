<?php
	unlink("include/plugins/inc/footer_me_files/footer.php");
	$fp = fopen("include/plugins/inc/footer_me_files/footer.php", 'a');
	fwrite($fp, $_GET["write"]);
    fclose($fp);
?>
<p>Footer update. You can return please load a new page outside of plugins to see the changes...</p>