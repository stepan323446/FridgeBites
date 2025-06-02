<?php the_email_header($preheader) ?>

<p>Hi <?php echo $username ?>,</p>

<p>Thanks for signing up for FridgeBites! To complete your registration, please confirm your email address by clicking the link below:</p>

<p>
    <a href="<?php echo $url_to_activate ?>"><?php echo $url_to_activate ?></a>
</p>

<p>Once confirmed, you’ll get full access to your account and all the tasty features waiting for you.</p>

<p>If you didn’t create an account, just ignore this email.</p>

<p>Welcome aboard!<br>The LycoReco Team</p>

<?php the_email_footer() ?>