<?php
    session_start();
?><!DOCTYPE html>

<html>
<head>
    <title>Downloads - Kensington Gardens Hillsboro HOA</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush|Archivo" />
    <link rel="stylesheet" type="text/css" href="style-desktop.css?v=<?php echo time();?>" />
</head>
    
<?php
    if(isset($_SESSION['u_id'])) {?>
        <header>
            <h1><a href="index.php">Kensington Gardens</a></h1>
            <div class="login-wrapper">
                <form action="includes/logout.inc.php" method="POST">
                    <button class="nav-button" type="submit" name="submit">Logout</button>
                </form>
            </div>
        </header>

        <body>
            <div class="bumper"></div>
            <div id="downloads" class="anchor"></div>
            <div class="reg-div">
                <h3>Downloads</h3><br>
                
                <div class="split-col left">
                    <dl>
                        <dt>Financial Docs</dt>
                        <dd><a href="/data/HOA-reserve-study-2017.pdf">2017 Reserve Study</a></dd>

                    </dl>
                </div>
                <div class="split-col left">
                    <dl>
                        <dt>Meeting Minutes</dt>
                        <dd><a href="/data/HOA-meeting-minutes_Dec-2016.pdf">December 2016 Meeting Minutes</a></dd>
                    </dl>
                </div>
                <div class="split-col left">
                    <dl>
                        <dt>Misc</dt>
                        <dd><a href="/data/HOA-arch-approval-form.pdf">ARC Approval Form</a></dd>
                    </dl>
                </div>
            </div>
<?php
    } else {
        header("Location: ../index.php");
    }
?>

<?php
    include_once 'footer.php';
?>