<?php
    include_once 'header.php';
?>

<body>
<?php

    if (isset($_SESSION['u_id'])) {?>
    <div class="bumper-login"></div>
    <div class="reg-div">
        <div id="hide-small" class="small-col">
            <img class="left" src="img/snow.jpg">
        </div>
        <div class="big-col right">
            <h3><b>Next HOA Meeting:</b></h3>
            <h4 style="margin:5px 0px 0px 20px">Monday June 4, 2018 Room 119A, Century High School @ 7 PM</h4>

            <br>

            <dl>
                <dt><u><b>From the last HOA meeting:</b></u></dt>
                <dd>-Discussed emergency information in event of Cascadia Subduction Zone quake</dd>
                <dd>-Discussed restarting Neighborhood Watch</dd>
                <dd>-Discussed safety issues in neighborhood (garage break-ins, reported illegal activity)</dd>
                <dd>-<a href="/downloads.php">Minutes</a> from last meeting</dd>
            </dl>
        </div>
    </div>
    
    <div class="reg-div">
        <div class="big-col">
            <h3>Newsletter</h3>
            <br>
            <dl>
                <dd>There have been instances of residents' garage doors being opened without their knowledge.</dd>
                <dd><a target="_blank" href="https://www.corporatetravelsafety.com/safety-tips/how-thieves-break-into-homes-by-the-garage-door/">Here</a> are some tips to help secure your garage door!</dd>
            </dl>
            <h4 class="indent"></h4>
            <br>
            <h4 class="indent"></h4>
        </div>
    </div>

    <div id="hide" class="reg-div">
        <div class="big-col">
            <h3>Board Members</h3>
            <br>
            <h4 class="indent">Teresa Mahoney - Board President<br>
            Jennifer Thomas</h4><br>
            <h3>Architectural Committee</h3><br>
            <h4 class="indent">Jennifer Thomas</h4>
        </div>
    </div>

    <div class="reg-div">
        <h3>Downloads</h3>
        <br>
        <?php if(isset($_SESSION['u_confirm'])) {?>
            <h4 class="indent">CC&Rs, bulletins, meeting minutes, etc.</h4>
            <br>
            <h4 class="indent">Click <a href="downloads.php">here</a></h4>
        <?php } else {?>
            <h4 class="indent">Downloads will be available once your account information has been reviewed</h4>
        <?php }?>
    </div>

    <div class="reg-div">
        <h3><b>Contact</b></h3>
        <br>
        <h4 class="indent">HOA E-mail: <a href="mailto:contact@kensingtongardenshillsboro.com">contact@kensingtongardenshillsboro.com</a><br><br>
        Mailing address:<br>
            <address style="margin-top:10px" class="indent">Kensington Gardens HOA<br>
            P.O. Box 5426<br>
            Beaverton, OR 97006</address><br>

        Connect with us on <a href="https://www.nextdoor.com">NextDoor!</a></h4>
    </div>
    
<?php } else {?>
    <div class="bumper-logout"></div>
    <div class="reg-div no-login">
        <h2>Welcome to the Kensington Gardens HOA Homepage!</h2>
        <p>Please sign in above, or register an account to access neighborhood information</p>
    </div>
<?php }?>
<?php
    include 'footer.php';
?>