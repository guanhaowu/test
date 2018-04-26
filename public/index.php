<?php
include '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'test' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'init.php';
$view->render('home','index');
?>
	<script style="javascript">
		var a = document.getElementById("menuItem1");
		a.className += " activeLink";

	</script>
