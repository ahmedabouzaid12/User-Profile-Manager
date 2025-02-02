<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP PROJECT</title>
</head>

<body>

    <body>
        <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent" color-on-scroll="500">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button"
                        data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">AZ</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom"
                                href="https://twitter.com/" target="">
                                <i class="fa fa-twitter"></i>
                                <p class="hidden-lg-up">Twitter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom"
                                href="https://www.facebook.com/" target="">
                                <i class="fa fa-facebook-square"></i>
                                <p class="hidden-lg-up">Facebook</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                                href="https://www.instagram.com/" target="">
                                <i class="fa fa-instagram"></i>
                                <p class="hidden-lg-up">Instagram</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom"
                                href="https://www.github.com/" target="">
                                <i class="fa fa-github"></i>
                                <p class="hidden-lg-up">GitHub</p>
                            </a>
                        </li>
                        <?php if(!isset($_SESSION['auth'])): ?>
                        
                        <li class="nav-item">
                            <a href="./Auth/login.php" target="" class="btn btn-danger btn-round">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="./Auth/register.php" target="" class="btn btn-danger btn-round">Register</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                        <a href="./profile.php" target="" class="btn btn-danger btn-round">Profile</a>
                        </li>
                        <?php endif;?>
                        <?php if(isset($_SESSION['auth'])): ?>
                        <li class="nav-item">
                            <a href="./Auth/logout.php" target="" class="btn btn-danger btn-round">Logout</a>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>