<!DOCTYPE html>
<html>
<body>
<?php
// these values are usualy filled by a form
        $subject = "mail mofo";
        $message = "You've got mail mofo";
        $email = "dinges@post.nl"; // sender mail address use your own!

        // Recipient email address
        $to = 'net24pveltman@net24pveltman.gc-webhosting.nl';
        
        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo '<p class="success">Your message has been sent successfully!</p>';
        } else{
            echo '<p class="error">Unable to send email. Please try again!</p>';
        }

    ?>
</body>
</html> 