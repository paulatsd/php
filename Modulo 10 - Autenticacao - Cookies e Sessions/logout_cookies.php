<?php

// Remover os cookies
setcookie("user_login");
setcookie("user_pass");
header("Location: login.php");
