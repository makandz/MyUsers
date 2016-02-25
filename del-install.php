<?php
/* PLEASE DONT TOUCH THIS FILE IF YOU HAVENT INSTALLED MYUSERS */

 // When the directory is not empty:
 function rrmdir($dir) {
   if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
       }
     }
     reset($objects);
     rmdir($dir);
   }
 }

 

 rrmdir('install');
?>
<center>
<h1>Success. Welcome to myUsers.</h1>
<hr>
<p>You will be redirected in <span id="counter">20</span> second(s).</p>
<br>Dont worry. Double redirect will be produced to delete install folder and this archive.
<br> Not redirected? <a href="del-2.php">Click here</a> <br>
<hr>
<b><h3>NOTE: PLEASE MAKE SURE TO CHECK IF THE INSTALL FOLDER HAS BEEN DELETED OR NOT. IF YOU ARE RUNNING ON LINUX PLEASE CHECK THE PERMISSIONS, OR DO IT MANUALLY. (deleting manually the folder.)</h3></b>
</center>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'del-2.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

