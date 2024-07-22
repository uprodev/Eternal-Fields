<?php

$image = get_sub_field('image');
$title = get_sub_field('title');
$text = get_sub_field('text');
$form = get_sub_field('form');

?>

<section class="join">
    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        </div>
    <?php endif;?>
    <div class="content-width">
        <div class="form-wrap">
            <?php if($title):?>
                <h6 class="label"><?= $title;?></h6>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
            <?php endif;?>

            <?php if($form):?>
                <div class="form-default">
                    <?= do_shortcode('[contact-form-7 id="'.$form.'"]');?>
                </div>
            <?php endif;?>

        </div>
        <div class="title-wrap">
            <div class="img-wrap">
                <img src="<?= get_template_directory_uri();?>/img/img-6-1.jpg" alt="">
                <img src="<?= get_template_directory_uri();?>/img/img-6-2.jpg" alt="">
                <img src="<?= get_template_directory_uri();?>/img/img-6-3.jpg" alt="">
            </div>
            <h2>Stay Informed and Inspired</h2>
            <div class="btn-wrap">
                <a href="#" class="btn-arrow">check our insta <img src="<?= get_template_directory_uri();?>/img/arrow-1.svg" alt=""></a>
            </div>
        </div>
    </div>
</section>
