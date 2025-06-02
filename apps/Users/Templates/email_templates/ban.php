<?php the_email_header($preheader) ?>

<p>Hello <?php echo $username ?>,</p>

<p>We’re reaching out to let you know that your account on FridgeBites has been suspended due to a violation of our community guidelines.</p>

<p>The ban is effective immediately and prevents access to your account and all associated services.</p>

<p><b>Reason:</b> <?php echo $model->field_reason ?></p>

<p><b>End date:</b> <?php echo $model->field_end_at ?></p>

<p>We take community safety seriously and appreciate your understanding.</p>

<p>Best regards,<br>The LycoReco Team</p>

<?php the_email_footer() ?>