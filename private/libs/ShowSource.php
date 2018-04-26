<?php
function getSource($file){
	$file = htmlentities(highlight_string(file_get_contents($file)));
	return $file;
}
function ShowSource($file){
	echo "<pre>";	
	getSource($file);
	echo "</pre>";
}
?>