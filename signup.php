<?php
    include_once 'header.php';
?>

<body>    
    <div class="bumper"></div>
    <div class="reg-div no-login" style="margin-top: 22vh">
        <h3>Register Username with Kensington Gardens</h3>
        <h4>Registration can take up to 24 hours to access all content</h4>
        <form class="signup-form" action="/includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First Name">
            <input type="text" name="last" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail address">
            <input type="text" name="login" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input class="regbot" type="text" name="fax" value=""  tabindex="-1" autocomplete="off">
            <br><br>
            <h4>Terms of use for the Kensington Gardens HOA website:</h4>
            <div id="termsbox">
                <input type="checkbox" name="confirm1">
                <h5>I agree that the above login information will solely be used by the homeowner(s) of the property associated with the name provided.</h5>
            </div>
            <br><br>
            <div id="termsbox">
                <input type="checkbox" name="confirm2">
                <h5>I agree that I will not share this login information with any outside parties aside from other homeowners of the property associated with the name provided.</h5>
            </div>
            <br>
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
            }  else if ($_SERVER['QUERY_STRING'] === 'signup=noagree') {
                echo "<div class='reg-error reg-div'><h4>You must agree to these terms to register!</h4></div>";
            } else if ($_SERVER['QUERY_STRING'] === 'signup=success') {
                echo "<div class='reg-error reg-div'><h4>User successfully registered!</h4></div>";
            }
        ?>
<?php
    include_once 'footer.php';
?>