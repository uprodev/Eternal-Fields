
</main>

<footer>
    <div class="content-width">
        <div class="logo-wrap">
            <?php $logo = get_field('footer_logo', 'options');?>
            <a href="<?= get_home_url();?>">
                <?php if($logo):?>
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                <?php endif;?>
            </a>
        </div>
        <nav class="top-menu">
            <?php wp_nav_menu([
                'theme_location' => 'foot-menu',
                'container' => false,
                'menu_class' => '',
            ]);?>
        </nav>

        <?php $copy = get_field('copyright_text', 'options');

        if($copy):?>
            <div class="bottom">
                <p><?= $copy;?></p>
            </div>
        <?php endif;?>
    </div>
</footer>



  <?php wp_footer(); ?>
	</body>
</html>
