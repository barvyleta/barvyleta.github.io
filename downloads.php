<?php
    include_once "header.php"
?>
<body>
<?php
    if(isset($_SESSION['u_id']) && isset($_SESSION['u_confirm'])) {?>

        <div class="bumper-login"></div>
        <div id="downloads" class="anchor"></div>
        <div class="reg-div">
            <h3>Downloads</h3><br>

            <div class="split-col left">
                <dl>
                    <dt>Financial Docs</dt>
                    <dd><a target="_blank" href="../data/HOA-reserve-study-2017.pdf">2017 Reserve Study</a></dd>

                </dl>
            </div>
            <div class="split-col left">
                <dl>
                    <dt>Meeting Minutes</dt>
                    <dd><a target="_blank" href="../data/HOA-meeting-minutes_Dec-2016.pdf">December 2016 Meeting Minutes</a></dd>
                </dl>
            </div>
            <div class="split-col left">
                <dl>
                    <dt>Misc</dt>
                    <dd><a target="_blank" href="../data/HOA-arch-approval-form.pdf">ARC Approval Form</a></dd>
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