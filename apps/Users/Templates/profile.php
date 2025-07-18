<?php 
require_once APPS_PATH . '/Users/components.php';

the_header(
    get_the_safe(CURRENT_USER->field_username), 
    'View and manage your personal information, update account settings, and track your activity on the Profile page. Customize your preferences and keep your details up-to-date easily.', 
    'profile', 
    [
        ['robots', 'nofollow, noindex']
    ]);

?>

<div class="container">
    

    <h1 class="title account-title">Account information</h1>

    <div class="account-block">
        <h2 class="title">Contact information</h2>
        <table>
            <tr>
                <td>Username:</td>
                <td><?php the_safe(CURRENT_USER->field_username) ?></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><?php the_safe(CURRENT_USER->field_fname ?? 'None') ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php the_safe(CURRENT_USER->field_lname ?? 'None') ?></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td><?php echo CURRENT_USER->get_role() ?></td>
            </tr>
        </table>
        <div class="change-user-btns">
            <a href="<?php the_permalink('users:edit-info') ?>" class="btn btn-secondary hover-anim">Edit info</a>
        </div>
    </div>

    <div class="account-block">
        <h2 class="title">Security</h2>
        <table>
            <tr>
                <td>E-mail:</td>
                <td><?php the_safe(CURRENT_USER->field_email) ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>**********</td>
            </tr>
        </table>
        <div class="change-user-btns">
            <a href="<?php the_permalink('users:edit-password') ?>" class="btn btn-secondary hover-anim">Change password</a>
            <a href="<?php the_permalink('users:edit-email') ?>" class="btn btn btn-secondary hover-anim">Change e-mail</a>
        </div>
    </div>
    <div class="account-btn-control">
        <a href="<?php the_permalink('users:logout') ?>" class="btn btn-primary hover-anim">Logout</a>

        <?php if(CURRENT_USER->field_is_admin): ?>
        <a href="<?php the_permalink('admin:home') ?>" class="btn btn-primary hover-anim">Admin panel</a>
        <?php endif ?>
    </div>
</div>

<?php the_footer() ?>