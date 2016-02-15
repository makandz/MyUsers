<head>
	<link href="include/plugins/inc/footer_me_files/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h3 class='footermeTitle'>FooterMe! Settings</h3>
	<label>Footer HTML Code (leave blank for none)</label>
	<input type="text" class="form-control" id="footermeTextbox">
	<a href="#" class="btn btn-success footermeButton" id="footermeButton" onclick="footerUpdate()">Update plugin settings</a>
	<br><p class="footermePar">You can use PHP, HTML, JavaScript, and almost any language you want in the footer! Just paste in what you want to show in the footer of every page (excluding admin plugin pages) and it will show.</p>
	<script>
	function footerUpdate() {
		document.location = "admin_plugin.php?shw=../inc/footer_me_files/change.php" + "&write=" + document.getElementById('footermeTextbox').value;
	}
	</script>
</body>
</html>