<?php
echo "Read/Edit Database Data";
connect();

$username = "admin";
$sql = "SELECT username FROM users WHERE username = $username";

//db_result($sql);

?>