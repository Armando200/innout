<?php

function requirevalidSession() {
    $user = $_SESSION['user'];
    if(!isset($user)) {
        header('location: login.php');
        exit();
    }
}