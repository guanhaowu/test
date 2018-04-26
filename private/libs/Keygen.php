<?php
function hyphenate($keys) {
    return implode("-", str_split($keys, 5));
}
function keygen()
{
    $key = '';
    $inputs = array_merge(range(0,9),range('A','Z'));

    for($i=0; $i<15; $i++) {
        $key .= $inputs{mt_rand(0,35)};
    }
	$nKey = hyphenate($key);
    return $nKey;
}
?>
