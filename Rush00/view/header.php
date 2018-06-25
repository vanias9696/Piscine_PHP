<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>42_shop</title>
    <link rel="stylesheet" type="text/css" href="/view/header_styles.css">
	<link rel="stylesheet" type="text/css" href="/view/template_style.css">
    <link rel="stylesheet" type="text/css" href="/view/login_form_styles.css">
    <link rel="stylesheet" type="text/css" href="/view/signup_form_style.css">
	<link rel="stylesheet" type="text/css" href="/view/admin_form_style.css">
	<link rel="stylesheet" type="text/css" href="/view/basket_style.css">
	<link rel="stylesheet" type="text/css" href="/view/endshoping_style.css">
</head>
<body>
<navigation>
<nav id="start-navigation">
<div class="navigation">
    <nav class="st_navigation">
        <div class="nav-container">
            <a href="index">
            <img style="width:120px; height: 40px" src="view/images/42.png">
            </a>

            <div class="authorization-button">
            <?php
            if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
            ?>
                <a href="logout">
                    <button class="log-out-button">LOG OUT</button>
                </a>
				<a href="admin">
					<button class="admin-button">Admin</button>
				</a>

                <?php
                }
                else {
                ?>
                    <a href="login">
                        <button class="login-buuton">LOG IN</button>
                    </a>
                    <a href="signup">
                        <button class="sign-up-button">SIGN UP</button>
                    </a>

                <?php
                }
                ?>


            </div>
            <div class="basket">
                <a href="basket">
                   <img class="basket-img" src="view/images/basket.png">
                </a>
            </div>
        </div>
    </nav>
</div>
</nav>
</navigation>

