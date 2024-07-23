<?php

$image = get_sub_field('background');
$title = get_sub_field('title');
$text = get_sub_field('text');
$form = get_sub_field('form');
$rid = get_row_index();

?>

<section id="section<?= $rid;?>" class="contact">
    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        </div>
    <?php endif;?>
    <div class="content-width">
        <div class="content">

            <?php if($title):?>
                <h1><?= $title;?></h1>
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
    </div>
</section>
