<?php
unlink('del-install.php');

?>
<center>
<h1>All should be working fine! :)</h1>
<hr>
<p>You will be redirected in <span id="counter">15</span> second(s).</p>
<br>Welcome to MyUsers! To get your account as ADMIN you need to register first. [First registered]
<br> Not redirected? <a href="index.php">Click here</a> <br>
<hr>
<b><h3>NOTE: PLEASE MAKE SURE TO CHECK IF THE INSTALL FOLDER HAS BEEN DELETED OR NOT. IF YOU ARE RUNNING ON LINUX PLEASE CHECK THE PERMISSIONS, OR DO IT MANUALLY. (deleting manually the folder.)</h3></b>
</center>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<!-- my users, commit/pull request  by skyleter -->
