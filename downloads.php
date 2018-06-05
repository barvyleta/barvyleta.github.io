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

                <dl style="clear: both;">
                    <dt><a target="_blank" href="../data/HOA-docs/Kensington-Gardens-HOA-Bylaws-and-CCRs.pdf">Bylaws and CC&Rs</a></dt>
                </dl>
            <br>
            <br>
            
            <div class="split-col left">
                <dl>
                    <dt>Financial Docs</dt>
                    <dd><a target="_blank" href="../data/HOA-docs/Finance/Kensington-Gardens-HOA-Finance-2017.pdf">HOA 2017 Finance Report</a></dd>
                    <dd><a target="_blank" href="../data/HOA-docs/Finance/HOA-reserve-study-2017.pdf">2017 Reserve Study</a></dd>

                </dl>
            </div>
            
            <div class="split-col left">
                <dl>
                    <dt>Meeting Minutes</dt>
                    <dd><a target="_blank" href="../data/Meeting-minutes/HOA-Minutes_Jan-2018.pdf">January 2018</a></dd>
                    <dd><a target="_blank" href="../data/Meeting-minutes/HOA-Minutes_June-2017.pdf">June 2017</a></dd>
                    <dd><a target="_blank" href="../data/Meeting-minutes/HOA-Minutes_Dec-2016.pdf">December 2016</a></dd>
                </dl>
            </div>

            <div class="split-col left">
                <dl>
                    <dt>Newsletters</dt>
                    <dd><a target="_blank" href="../data/Newsletters/Newsletter_Spr2018.pdf">Spring 2018</a></dd>
                </dl>
            </div>

            <div class="split-col left">
                <dl>
                    <dt>Misc</dt>
                    <dd><a target="_blank" href="../data/HOA-docs/HOA-arch-approval-form.pdf">ARC Approval Form</a></dd>
                    <dd><a target="_blank" href="../data/Misc/Emergency-Shutoff.pdf">Emergency Utility Shutoff Tips</a></dd>
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