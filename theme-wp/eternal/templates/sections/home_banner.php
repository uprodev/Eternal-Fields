<?php

$image = get_sub_field('image');
$title = get_sub_field('title');
$text = get_sub_field('text');
$title_bottom = get_sub_field('title_bottom');
$scroll = get_sub_field('scroll_down_text');
$rotate_logo = get_sub_field('rotate_logo');

?>

<section class="home-banner">

    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        </div>
    <?php endif;?>

    <div class="content-width">
        <div class="content">

            <?php if($title):?>
                <div class="title-wrap">
                    <h1><?= $title;?></h1>
                </div>
            <?php endif;?>

            <?php if($text):?>
                <div class="text">
                    <p><?= $text;?></p>
                </div>
            <?php endif;?>

            <?php if($title_bottom):?>
                <div class="bottom-title">
                    <h2><?= $title_bottom;?></h2>
                </div>
            <?php endif;?>

        </div>
        <div class="bottom-scroll">
            <a href="#section2" class="scroll"><?= $scroll?$scroll:__('Scroll down', 'eternal');?></a>
        </div>

        <?php if($rotate_logo):?>
            <div class="icon-wrap">
                <img src="<?= $rotate_logo['url'];?>" alt="<?= $rotate_logo['alt'];?>">
            </div>
        <?php endif;?>
    </div>

</section>
