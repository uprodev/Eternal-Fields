<?php

$bg = get_field('background_image__color', 'options');
$image = get_field('image_join', 'options');
$title = get_field('title_join', 'options');
$text = get_field('text_join', 'options');
$form = get_field('form_join', 'options');
$insta = get_field('instagram_shortcode', 'options');

?>

<section class="join<?= !$bg?' join-blue':'';?>">
    <?php if($bg):
        if($image):?>
            <div class="bg">
                <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
            </div>
        <?php endif;
    endif;?>
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
            <?php if(!$bg):
                if($image):?>
                    <div class="bg">
                        <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                    </div>
                <?php endif;
            endif;?>
            <div class="wrap">
                <?php if($insta){
                    echo do_shortcode(''.$insta.'');
                }?>
            </div>
        </div>
    </div>
</section>
