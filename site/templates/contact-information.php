<?php include('./_head.php'); // include header markup ?>

<div class='contact-wrapper'>
    <div class='contact-info'>
        <h3>
            <?php echo $page->Contact_Name; ?>
        </h3>
        <h3>
            <?php echo $page->email; ?>
        </h3>
        <h5>
            <?php echo $datetime->date('M j, Y g:i a', $page->created); ?>
        </h5>
    </div>
    <br>
    <div class='email-subject'>
        <h3>
            <?php echo $page->Email_Subject; ?>
        </h3>
    </div>
    <div class='email-body'>
        <h3>
            <?php echo $page->body; ?>
        </h3>
    </div>
</div>

<?php include('./_foot.php'); // include footer markup ?>