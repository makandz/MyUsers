<?php
echo "<h2 class='mainTitle'>Admin pages</h2>";
echo "
<div class='panel panel-danger adminconPanel'>
	<div class='panel-heading'>Admin page settings</div>
	<div class='panel-body'>
		<table style='font-weight: none;'>
			<tr>
				<th><u>Page ID:</u> &nbsp;&nbsp;</th>
				<th><u>Page Link:</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th><u>Page Access:</u> </th>
			</tr>";
			foreach ($dbpages as $page){ echo "
				<tr>
					<th>".$page['id']."</th></strong>
					<th><a href ='admin_page.php?id=".$page['id']."'>".$page['page']."</a></th><th>";
				if($page['private'] == 0){
					echo "Public";
				} else {
					echo "Private";	
				} echo "</th>";
			} echo "
			</tr>
		</table>
		<input type='button' class='btn btn-primary adminpagesButton' value='To edit user information, please click on the username.' disabled>
	</div>
</div>

</body>
</html>"; ?>