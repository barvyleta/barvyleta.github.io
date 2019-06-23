<?php
    include_once 'header.php';
?>

<body>
<?php

    if (isset($_SESSION['u_id'])) {?>
    <div class="bumper-login"></div>
    <div class="reg-div">
        <div id="hide-small" class="small-col">
            <img class="left" src="img/rocks.jpg">
        </div>
        <div class="big-col right">
            <h3><b>Next HOA Meeting:</b></h3>
            <h4 style="margin:5px 0px 0px 20px"><del>Monday June 24, 2019 Room 119A, Century High School @ 7 PM</del>
                <br>Monday July 29, 2019 Room 119A, Century High School @ 7 PM
            </h4>

            <br>

            <dl>
                <dt><u><b>From the last HOA meeting:</b></u></dt>
                <dd>-Moving forward the HOA will not be advertising a group garage sale prior to the annual block party, but if families wish to have one they may</dd>
                <dd>-The HOA will be tightening compliance with the CC&Rs for any homes being rented out moving forward - homeowners using their property as a rental space will be required to sign a document from the HOA stating they will be responsible for ensuring landscaping, parking, and garbage standards are enforced</dd>
                <dd>-Thank you to homeowners for being vigilant in reporting and sharing suspicious activity caught on security cameras with the rest of the neighborhood</dd>
            </dl>
        </div>
    </div>
    
    <div class="reg-div">
        <div class="big-col">
            <h3>Newsletter</h3>
            <br>
            <dl>
                <dd>The neighborhood garage sale this year saw a lot of traffic - a total of 51 people driving by between 8 AM and 3 PM.</dd>
                <dd>The highest concentration of people this year came between 10:30 AM and 1 PM - 24 people in two-and-a-half hours!</dd>
                <br>
                <dd>Mark your calendar: Our next block party will be held on Saturday, August 10, 2019!</dd>
                <hr>
                <dd>There have been instances of residents' garage doors being opened without their knowledge.</dd>
                <dd><a target="_blank" href="https://www.corporatetravelsafety.com/safety-tips/how-thieves-break-into-homes-by-the-garage-door/">Here</a> are some tips to help secure your garage door!</dd>
                <hr>
                <dd>It can be hard to keep track of whether we're on a recycling or yard debris pickup week. Click <a target="_blank" href="https://www.co.washington.or.us/HHS/SWR/index.cfm">here</a> to check with the City of Hillsboro to confirm our neighborhood's collection calendar!</dd>
            </dl>
            <h4 class="indent"></h4>
            <br>
            <h4 class="indent"></h4>
        </div>
    </div>

    <div class="reg-div">
        <h3>Downloads</h3>
        <br>
        <?php if(isset($_SESSION['u_confirm'])) {?>
            <h4 class="indent"><a href="downloads.php">CC&Rs, bulletins, meeting minutes, etc.</a></h4>
            <br>
        <?php } else {?>
            <h4 class="indent">Downloads will be available once your account information has been reviewed</h4>
        <?php }?>
    </div>

    <div class="reg-div">
        <h3><b>Contact</b></h3>
        <br>
        <h4 class="indent">HOA E-mail: <a href="mailto:contact@kensingtongardenshillsboro.com">contact@kensingtongardenshillsboro.com</a>
        <br>
        <br>
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