<!--Should be running from signup.inc.php
        -Meant to send a notification to webmaster@kensingtongardenshillsboro.com
        to signal a new user for verification
            -Failing somewhere along the line   
                -Not sending?
                -How to verify?
-->

<?php
    include_once "dbh.inc.php";

    $query = mysqli_real_escape_string($conn, "SELECT * FROM users WHERE user_confirmed=false");
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck >= 1) {
        //There are unconfirmed users - send E-mail to check DB
        mail("webmaster@kensingtongardenshillsboro.com", "New User Registered", "New user(s) joined Kensington Gardens Hillsboro. Confirm identities in database.");
    }
?>