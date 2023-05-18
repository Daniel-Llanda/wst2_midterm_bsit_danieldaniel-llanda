<?php
require '../class/class.accounts.php';
require '../class/class.message.php';
$accounts = new accounts;
$message = new message;
if ($_GET['ind'] == 'register') {
    $accounts->register();
}
if ($_GET['ind'] == 'login') {
    $accounts->login();
}
?>