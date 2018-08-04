<?php include('./_head.php'); // include header markup ?>

<div id='connect' class='row connect'>
    <div class='col-md-6 connect-blurb'>
        <?php
            echo $pages->get("/")->Connect_Blurb;
        ?>
    </div>
    <div class='col-md-6 connect-form'>
        <form id='emailForm'>
            <div class='row' style='margin-bottom: 40px'>
                <div class='col-sm-6'>
                    <input type='text' id='senderName' class='fat-input' placeholder='NAME'/>
                </div>
                <div class='col-sm-6'>
                    <input type='email' id='senderEmail' class='fat-input' placeholder='EMAIL'/>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'>
                    <input type='text' id='emailSubject' class='fat-input' placeholder='SUBJECT'/>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'>
                    <textarea id='emailBody' class='fat-textarea' rows='2'></textarea>
                </div>
            </div>
            <?php
                echo "<img src='{$pages->get("/")->Submit_Image->url}' class='submit-button' onclick='submitForm()'/>";
            ?>
        </form>
        <h1 id="emailSent" class="email-sent">Email Sent!</h1>
        <p id="emailFailed" class="email-failed">Our servers are having some issues right now. Please try again later, or email Heidi directly at hferrell@hfrealtor.com</p>
    </div>
</div>

<?php include('./_foot.php'); // include footer markup ?>