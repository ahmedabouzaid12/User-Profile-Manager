<?php

include '../core/functions.php';
include '../core/validation.php';

session_start();
$errors = [];

if (checkRequestMethod("POST") && checkPostInput('name')) {

    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    if (!requiredVal($name)) {
        $errors[] = "Name is required";
    } elseif (!minVal($name, 3)) {
        $errors[] = "Name must be greater than 3 characters";
    } elseif (!maxVal($name, 25)) {
        $errors[] = "Name must be at most 25 characters";
    }

    if (!requiredVal($email)) {
        $errors[] = "Email is required";
    } elseif (!emailVal($email)) {
        $errors[] = "Invalid email format";
    }


    if (!requiredVal($password)) {
        $errors[] = "Password is required";
    } elseif (!minVal($password, 8)) {
        $errors[] = "Password must be at least 8 characters";
    }


    if (empty($errors)) {
        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fputcsv($users_file, $data);
        //redirect
        $_SESSION['auth'] = [$name, $email];
        redirect("../index.php");
        die();
    } else {
        $_SESSION['errors'] = $errors;

        redirect("../Auth/register.php");
        die();
    }
} else {

    redirect("../error/404.php");
}
