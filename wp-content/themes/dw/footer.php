    </main>
    <footer>
        <p>© <?= get_bloginfo('name'); ?></p>
        <h1><?= get_bloginfo('name'); ?></h1>
        <p><?= get_bloginfo('description'); ?></p>
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => 'nav']); ?>
    </footer>
</body>
</html>