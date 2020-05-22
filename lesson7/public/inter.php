<?php
require_once __DIR__ . '/../config/main.php';
require ENGINE_DIR . 'base.php';
require ENGINE_DIR . 'db.php';
require ENGINE_DIR . 'user_inter.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = post('password');
    $user = getUserByLogin($login);
    if ($user && $user['password'] == getHash($password)) {
        $_SESSION['user_id'] = $user['id_user'];
        echo "Добро пожаловать ", $user['name_user'];
    }
    else {
        echo "go away";
    }
    exit;
}

include VIEWS_DIR . "form_inter.php";

?>