<?php the_header(
    'Register', 
    '', 
    'login-register', 
    [
        ['robots', 'nofollow, noindex']
]) ?>

<div class="container">
    <div class="login__inner">
        <h1 class="title">Create New Account</h1>
        <form class="form" method="post">
            <?php
            if(isset($context['error_message']))
                the_alert($context['error_message']);
            ?>
            <label for="field_username">Username <span>*</span></label>
            <div class="input">
                <input type="text" name="username" id="field_username" required>
            </div>

            <label for="field_email">E-mail <span>*</span></label>
            <div class="input">
                <input type="email" name="email" id="field_email" required>
            </div>

            <label for="field_password">Password <span>*</span></label>
            <div class="input">
                <input type="password" name="password" id="field_password" required>
            </div>

            <label for="field_repeat_password">Repeat password <span>*</span></label>
            <div class="input">
                <input type="password" name="repeat" id="field_repeat_password" required>
            </div>

            <label for="field_fname">First Name</label>
            <div class="input">
                <input type="text" name="fname" id="field_fname">
            </div>

            <label for="field_lname">Last Name</label>
            <div class="input">
                <input type="text" name="lname" id="field_lname">
            </div>

            <div class="terms-checkbox">
                <input id="terms_agree" type="checkbox" required>
                <label for="terms_agree">I Agree to the <a class="hover-anim terms-link" href="<?php the_permalink('index:terms') ?>">Terms & Conditions</a></label>
            </div>
           

            <?php
                if(isset($context['error_form']))
                    $context['error_form']->display_error();
                ?>

            <div class="login-choice">
                <span></span>
                <button class="btn btn-primary hover-anim" type="submit">Create an account</button>
            </div>
        </form>

        <hr>

        <div class="login-text__notice">
            <h2 class="title">Do you already have an account?</h2>
            <p>Log in to your account to continue browsing our catalogue of recepies. </p>

            <a href="<?php the_permalink('users:login') ?>" class="btn btn-primary hover-anim">
                Login
            </a>
        </div>
    </div>
    
</div>

<?php the_footer() ?>