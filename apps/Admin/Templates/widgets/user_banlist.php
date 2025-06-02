<div class="admin-block">
    <div class="admin-block__title">Banlist</div>
    <div class="admin-block__content">
        <div class="admin-block__table">
            <?php if (!empty($banlist)): ?>
                <?php foreach ($banlist as $ban): ?>
                    <div class="row">
                        <div class="column"><a href="<?php the_permalink('admin:ban', [$ban->get_id()]) ?>"><?php echo $ban->field_reason ?></a></div>

                        <?php if($ban->is_active()): ?>
                        Active
                        <?php else: ?>
                        Inactive
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="nothing">Banlist empty</div>
            <?php endif ?>
        </div>
        <div class="btn-control">
            <a href="<?php the_permalink('admin:banlist', [$user->get_id()]) ?>" class="btn">Show all</a>
            <a href="<?php the_permalink('admin:ban-new', [$user->get_id()]) ?>" class="btn btn-primary">New ban</a>
        </div>
    </div>
</div>