<?php

$bg = get_sub_field('background_image__color');
$image = get_sub_field('background');
$title = get_sub_field('title');
$text = get_sub_field('text');
$form = get_sub_field('form');
$insta = get_sub_field('instagram_shortcode');
$rid = get_row_index();

?>

<section id="section<?= $rid;?>" class="join<?= !$bg?' join-blue':'';?>">
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
            <?= !$bg?'<div class="wrap">':'';?>

                <?php if($insta){
                    echo do_shortcode(''.$insta.'');
                }?>

            <?= !$bg?'</div>':'';?>
        </div>
    </div>
</section>
