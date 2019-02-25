<?php

//set page
$action = isset($_GET['action']) ? trim($_GET['action']) : '';

//handle page
switch($action) {
    case 'info':
		phpinfo();
		die;
}

?>