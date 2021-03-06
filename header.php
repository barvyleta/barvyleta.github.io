<?php
    session_start();
?><!DOCTYPE html>

<html>
<head>
    <title>Kensington Gardens Hillsboro HOA</title>
    <meta name="viewport" content="width=device-width, height=device-height" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush|Archivo" />
    <link rel="stylesheet" type="text/css" href="style-desktop.css?v<?php include_once 'last-update.php';?>">
</head>
    
<header>
    <h1><a href="index.php">Kensington Gardens</a></h1>
    <p>Trouble logging in?<br/>
    <a href="mailto:webmaster@kensingtongardenshillsboro.com">E-mail the webmaster</a></p>

        <?php
        if (isset($_SESSION['u_id'])) { ?>
            <div class="login-wrapper">
                <form action="includes/logout.inc.php" method="POST">
                    <button class="nav-button" type="submit" name="submit">Logout</button>
                </form>
            </div>
            <div id="hide-buttons" class="buttons">
                <a class="nav-button" href="index.php">Home</a>
                <?php if(isset($_SESSION['u_confirm'])) {?>
                    <a class="nav-button" href="downloads.php">Downloads</a>
                <?php }?>
            </div>
        <?php } else { ?>
            <div class="login-wrapper">
                <form action="includes/login.inc.php" method="POST">
                    <input type="text" name="login" placeholder="Username/E-mail" />
                    <input type="password" name="pwd" placeholder="Password" />
                    <button class="nav-button" type="submit" name="submit">Login</button>
                    <a class="nav-button" href="signup.php">Register</a>
                </form>
            </div>
        <?php }?>
</header>