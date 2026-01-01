<?php
$password = 'Admin@123';
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;
echo "<br>Length: " . strlen($hash);
echo "<br>Verify test: ";
var_dump(password_verify($password, $hash));
