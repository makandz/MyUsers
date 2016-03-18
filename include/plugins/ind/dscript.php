<p id="dscriptInformation" style="margin-bottom: 0px;">Loading..</p>
<script src="include/plugins/inc/dscript/dScript.js"></script>
<script>
	var dScript_API_Split = di.split(dScript_API, ";");
	di.html("dscriptInformation", "<b>dScript information </b>| Version: " + dScript_API_Split[0] + " - Build: " + dScript_API_Split[1] + " - Base: " + dScript_API_Split[2]);
</script>