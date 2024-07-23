<?php

$image = get_sub_field('image');
$logo = get_sub_field('logo');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$text = get_sub_field('text');
$image2 = get_sub_field('image_center');
$link = get_sub_field('link');
$rid = get_row_index();


?>

<section id="section<?= $rid;?>" class="img-text-bg">
    <div class="content-width">
        <div class="bg">
            <img src="<?= get_template_directory_uri();?>/img/bg-2.jpg" alt="">
        </div>
        <div class="wrap">

            <?php if($logo):?>
                <div class="icon-wrap">
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                </div>
            <?php endif;?>

            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
            <?php endif;?>

            <div class="text">
                <?php if($subtitle):?>
                    <h6 class="label"><?= $subtitle;?></h6>
                <?php endif;?>

                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>

                <div class="text-wrap">

                    <?php if($image2):?>
                        <div class="img-wrap">
                            <img src="<?= $image2['url'];?>" alt="<?= $image2['alt'];?>">
                        </div>
                    <?php endif;?>

                    <?php if($text):?>
                        <p><?= $text;?></p>
                    <?php endif;?>

                    <?php if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>

                        <div class="btn-wrap">
                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn-arrow"><?= esc_html($link_title); ?> <img src="<?= get_template_directory_uri();?>/img/arrow-1.svg" alt=""></a>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>


    </div>
</section>
