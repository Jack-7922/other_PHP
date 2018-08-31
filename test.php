<?php
echo md5("password");
echo "<br/>";
echo sha1("password");
echo "<br>";
echo crypt("password");
echo "<br />";
$hash = password_hash("password", PASSWORD_BCRYPT);
echo $hash;
echo "br />";
$x = "password";
if (password_verify($x, $hash)) {
	echo "OK";
}
?>