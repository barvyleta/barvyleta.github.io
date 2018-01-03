<?php
    include_once 'header.php';
?>

<body>    
    <div class="bumper"></div>
    <div class="reg-div no-login" style="margin-top: 10vw">
        <h3>Register Username with Kensington Gardens</h3>
        <h4>Registration can take up to 24 hours to access all content</h4>
        <form class="signup-form" action="/includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail address">
            <input type="text" name="login" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input class="regbot" type="text" name="fax" value=""  tabindex="-1" autocomplete="off">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
        <?php
            if ($_SERVER['QUERY_STRING'] === 'signup=empty') {
                echo "<div class='reg-error reg-div'><h4>Please fill all fields to register.</h4></div>";
            } else if ($_SERVER['QUERY_STRING'] === 'signup=email') {
                echo "<div class='reg-error reg-div'><h4>Please enter a valid E-mail address.</h4></div>";
            } else if ($_SERVER['QUERY_STRING'] === 'signup=usertaken') {
                echo "<div class='reg-error reg-div'><h4>Username already taken - please choose another username.</h4></div>";
            } else if ($_SERVER['QUERY_STRING'] === 'signup=success') {
                echo "<div class='reg-error reg-div'><h4>User successfully registered!</h4></div>";
            }
        ?>
<?php
    include_once 'footer.php';
?>