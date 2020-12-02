<?php

$keys = array('TESTKEY',); 
$sub = $_GET["key"];
if (in_array($sub,$keys,TRUE))
print('~ True ~');
}
else
{
print ($_SERVER['REMOTE_ADDR']);
}
?>