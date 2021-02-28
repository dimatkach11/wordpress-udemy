<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar')) : ?>
        <h3>Sidebar</h3>
        <ul>
            <?php dynamic_sidebar('sidebar'); ?>
        </ul>
    <?php else: ?>
        <h5>Sidebar</h5>

        <h6>Your sidebar is empty.</h6>
    <?php endif; ?>
</aside>
