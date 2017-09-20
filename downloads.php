<?php
    include_once "header.php"
?>
<body>
<?php
    if(isset($_SESSION['u_id'])) {?>


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