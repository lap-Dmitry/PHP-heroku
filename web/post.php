<?php

session_start();

function clean(string $value): string {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    return  $value;
}

if (!empty($_POST)) {
    $name = clean($_POST['name']);
    $_SESSION['name'] = $name;
    header('Location: index.php');
}
