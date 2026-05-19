<?php
session_start();
$_SESSION['id'] = 10;
$_SESSION['name'] = 'Yamada';
$_SESSION['mail'] = 'yamada@co.jp';

print_r($_SESSION);


?>