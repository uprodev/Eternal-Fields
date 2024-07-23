<?php

$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$text = get_sub_field('text');
$icon = get_sub_field('icon');
$rid = get_row_index();

?>

<section id="section<?= $rid;?>" class="title-bg-text">
    <div class="content-width">
        <div class="title-wrap">
            <div class="bg">
                <img src="<?= get_template_directory_uri();?>/img/bg-5.jpg" alt="">
            </div>
            <div class="wrap">

                <?php if($subtitle):?>
                    <h2><?= $subtitle;?></h2>
                <?php endif;?>

                <?php if($title):?>
                    <h2 class="border"><?= $title;?></h2>
                <?php endif;?>

            </div>
        </div>
        <div class="text">

            <?php if($icon):?>
                <div class="icon-wrap">
                    <img src="<?= $icon['url'];?>" alt="<?= $icon['alt'];?>">
                </div>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
            <?php endif;?>
        </div>
    </div>
</section>
