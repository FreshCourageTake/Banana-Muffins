<?php

if($input->post->senderName && $input->post->senderEmail &&
    $input->post->emailSubject && $input->post->emailBody) {

    // create a new Page instance
    $p = new \ProcessWire\Page();

    // set the template and parent (required)
    $p->template = $templates->get("contact-information");
    $p->parent = $pages->get("/form-submissions/");

    // populate the page's fields with sanitized data
    // the page will sanitize it's own data, but this way no assumptions are made
    $p->title = $sanitizer->text($input->post->senderName);
    $p->Contact_Name = $sanitizer->text($input->post->senderName);
    $p->email = $sanitizer->email($input->post->senderEmail);
    $p->Email_Subject = $sanitizer->textarea($input->post->emailSubject);
    $p->body = $sanitizer->textarea($input->post->emailBody);

    // PW2 requires a unique name field for pages with the same parent
    // make the name unique by combining the current timestamp with title
    $p->name = $sanitizer->pageName(time() . $p->title);

    if($p->title && $p->Contact_Name && $p->email && $p->Email_Subject && $p->body) {
        // our required fields are populated, so save the page
        // you might want to email it here too
        $p->save();

        //smtptestemail5@gmail.com
        //smtptest1

        // $to needs to be set to the receiving email address
        $to = "andrewsgarver@gmail.com";
        // $from needs to be set to the email that's being used as smtp sender
        $from = "smtptestemail5@gmail.com";
        $subject = $p->Email_Subject;
        $body = "From: " . $p->email . "\n\n" .
            $p->body;

        echo \ProcessWire\wiremail($to, $from, $subject, $body);

    } else {
        // they missed a required field
        $res->error = true;
        $res->title = $p->title;
        $res->Contact_Name = $p->Contact_Name;
        $res->email = $p->email;
        $res->Email_Subject = $p->Email_Subject;
        $res->body = $p->body;

        header('Content-Type: application/json');
        $resJSON = json_encode($res);
        echo $resJSON;
    }

} else {
    echo "Failed to send email: Form was not submitted";
}

?>