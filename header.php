<!--
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body style="padding:0;margin:0">
    
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="nav-login">

            </div>
        </div>
    </nav>
</header>-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~KENSINGTON GARDENS HOA HEADER BELOW~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php
    session_start();
?><!DOCTYPE html>

<html>
<head>
    <title>Kensington Gardens Hillsboro HOA</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush|Archivo" />
    <link rel="stylesheet" type="text/css" href="style-desktop.css?v=<?php echo time();?>" />
</head>
    
<header>
    <h1><a href="index.php">Kensington Gardens</a></h1>

        <?php
        if (isset($_SESSION['u_id'])) { ?>
            <div class="login-wrapper">
                <form action="includes/logout.inc.php" method="POST">
                    <button class="nav-button" type="submit" name="submit">Logout</button>
                </form>
            </div>
            <div class="buttons">
                <a class="nav-button" href="index.php">Home</a>
                <a class="nav-button" href="downloads.php">Downloads</a>
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
    <div class="last-update"><p>Site last updated:<br>Sept. 20, 2017</p></div>
</header>