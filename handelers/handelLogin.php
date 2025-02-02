<?php
session_start();

include '../core/functions.php';
include '../core/validation.php';

$errors = [];

if (checkRequestMethod("POST") && checkPostInput('email') && checkPostInput('password')) {

    // Sanitize inputs
    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }
    // Validate email
    if (!requiredVal($email)) {
        $errors[] = "Email is required";
    } elseif (!emailVal($email)) {
        $errors[] = "Invalid email format";
    }

    // Validate password
    if (!requiredVal($password)) {
        $errors[] = "Password is required";
    }

    if (empty($errors)) {
        // Read users.csv and validate credentials
        $users_file = fopen("../data/users.csv", "r");
        $found = false;

        while (($user = fgetcsv($users_file)) !== false) {
            if ($user[1] === $email && $user[2] === sha1($password)) {
                $_SESSION['auth'] = [$user[0], $user[1]]; // Save name and email to session
                $found = true;
                break;
            }
        }

        fclose($users_file);

        if ($found) {
            redirect("../index.php");
            die();
        } else {
            $errors[] = "Invalid email or password";
        }
    }

    $_SESSION['errors'] = $errors;
    redirect("../Auth/login.php");
    die();
}else {

    redirect("../error/404.php");
}
?>