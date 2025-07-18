<?php the_header(
    'Login', 
    '', 
    'login-register', 
    [
        ['robots', 'nofollow, noindex']
]) ?>

<div class="container">
    <div class="login__inner">
        <h1 class="title">Welcome to FridgeBites</h1>
        <form class="form" method="post">
        <?php
            if(isset($context['error_message']))
                the_alert($context['error_message']);
            ?>
            
            <label for="field_username">Username</label>
            <div class="input">
                <input type="text" name="username" id="field_username" required>
            </div>

            <label for="field_password">Password</label>
            <div class="input">
                <input type="password" name="password" id="field_password" required>
            </div>

            <div class="login-choice">
                <a href="<?php the_permalink('users:forgot') ?>" class="hover-anim">Forgot password?</a>
                <button class="btn btn-primary hover-anim" type="submit">Login</button>
            </div>
        </form>

        <hr>

        <div class="login-text__notice">
            <h2 class="title">You don't have account?</h2>
            <p>Register now to get the best and newest recipes! </p>

            <a href="<?php the_permalink('users:register') ?>" class="btn btn-primary hover-anim">
                Register
            </a>
        </div>
    </div>
    
</div>

<?php the_footer() ?>