<?php
    include_once 'header.php';
?>

<body>
<?php

    if (isset($_SESSION['u_id'])) {?>
    <div class="bumper"></div>
        <div id="recent" class="anchor"></div>
            <div class="reg-div">
                <div id="hide-small" class="small-col">
                    <img class="left" src="img/beaver.jpg">
                </div>
                <div class="big-col right">
                    <h3><b>Next HOA Meeting:</b></h3>
                    <h4 style="margin:5px 0px 0px 20px">Monday December 11, 2017 Room 119A, Century High School</h4>

                    <br>

                    <dl>
                        <dt><u><b>From the last HOA meeting:</b></u></dt>
                        <dd>-Voted for broadening ARC-allowed colors and light-fixtures</dd>
                        <dd>-Discussed Century High band practice hours</dd>
                        <dd>-Discussed Century Blvd landscaping at Kensington</dd>
                        <dd>-<a href=#none>Minutes</a> from last meeting (Coming soon)</dd>
                        <dd>-Board is in contact with Hillsboro Parks and Recreation regarding flooding and beaver presence in green space</dd>
                    </dl>
                </div>
            </div>

            <div id="board-arc" class="anchor"></div>
            <div id="hide" class="reg-div">
                <div class="big-col">
                    <h3>Board Members</h3><br>
                    <h4 class="indent">Teresa Mahoney - Board President<br>
                    Jennifer Thomas</h4><br>
                    <h3>Architectural Committee</h3><br>
                    <h4 class="indent">Jennifer Thomas</h4>
                </div>
            </div>

        <?php if($_SESSION['u_confirm'] === 1) {?>
            <div id="financial" class="anchor"></div>
            <div class="reg-div">
                <h3>Financial Summaries</h3>
            </div>
        <?php }?>
    
            <div id="cc&rs" class="anchor"></div>
            <div id="hide" class="reg-div">
                <h3>CC&R Information</h3>
            </div>

            <div id="downloads" class="anchor"></div>
            <div class="reg-div">
                <h3>Downloads</h3><br>
                <h4 class="indent">CC&R documents, bulletins, meeting minutes, etc.</h4><br>
                <h4 class="indent">Click <a href="downloads.php">here</a> --- (Must be logged in to download!)</h4>
                <!--<h4 class="indent">(Coming Soon)</h4>-->
            </div>
            <div id="contact" class="anchor"></div>
            <div class="reg-div">
                <h3><b>Contact</b></h3>
                <br>
                <h4 class="indent">HOA E-mail: <a href="mailto:contact@kensingtongardenshillsboro.com">contact@kensingtongardenshillsboro.com</a><br><br>
                Mailing address:<br>
                    <address style="margin-top:5px">Kensington Gardens HOA<br>
                    P.O. Box 5426<br>
                    Beaverton, OR 97006</address><br>

                Connect with us on <a href="https://www.nextdoor.com">NextDoor!</a></h4>
            </div>
    
<?php } else {?>
    <div class="bumper"></div>
    <div class="reg-div no-login">
        <h2>Welcome to the Kensington Gardens HOA Homepage!</h2>
        <p>Please sign in above, or register an account to access neighborhood information</p>
    </div>
<?php }?>
<?php
    include 'footer.php';
?>
    <!--
This is styling to center the div when not logged in:
style=""
-->