<?php
//echo($_COOKIE['EAIT_WEB']);
print_r($_SESSION);
unset($_COOKIE['EAIT_WEB']);
setcookie("EAIT_WEB", "", time() - 3600);
echo($_COOKIE['EAIT_WEB']);

header("Location: https://api.uqcloud.net/logout");