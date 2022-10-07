<?php
session_start();
$errors = [];
$emails = ['lucas@barraille.com', 'contact@barraille.com', 'help@barraille.com'];

if (!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = '<div class="Formu_errors1">You have not provided your name.</div>';
}

if (!array_key_exists('email', $_POST) || $_POST['email'] == '') {
    $errors['email'] = '<div class="Formu_errors2">You have not entered a valid email.</div>';
}

if (!array_key_exists('service', $_POST) || !isset($emails[$_POST['service']])) {
    $errors['service'] = '<div class="Formu_errors3">The service you are requesting does not exist.</div>';
}

if (!array_key_exists('body', $_POST) || $_POST['body'] == '') {
    $errors['body'] = '<div class="Formu_errors4">You have not entered the subject of your message.</div>';
}

if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = '<div class="Formu_errors5">You have not entered your message.</div>';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
} else {
    $_SESSION['success'] = 1;
    $headers = 'FROM:' . $_POST['email'];
    mail($emails[$_POST['service']], 'Formulaire de contact de ' . $_POST['name'], $_POST['message'], $headers);
    header('Location: index.php');
}

var_dump($errors);
die();
