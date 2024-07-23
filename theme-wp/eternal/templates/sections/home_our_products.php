<?php

$items = get_sub_field('items');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$text = get_sub_field('text');
$bottom_title = get_sub_field('bottom_title');
$rid = get_row_index();

?>

<section id="section<?= $rid;?>" class="item-4x">
    <div class="bg"><img src="<?= get_template_directory_uri();?>/img/bg-3.png" alt=""></div>
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <?php if($subtitle):?>
                    <h6 class="label"><?= $subtitle;?></h6>
                <?php endif;?>

                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
            </div>
            <?php if($text):?>
                <div class="text-title">
                    <p><?= $text;?></p>
                </div>
            <?php endif;?>

            <?php if($bottom_title):?>
                <div class="bottom-title">
                    <h2><?= $bottom_title;?></h2>
                </div>
            <?php endif;?>
        </div>

        <?php if($items): $i=1;?>
            <div class="content">
                <?php foreach($items as $item):
                    $img = $item['image'];
                    $text = $item['text'];
                    $link = $item['link'];

                    if( $link ){
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    }
                        ?>

                    <div class="item">
                        <div class="number"><span><?= $i;?></span></div>
                        <?php if($img):?>
                            <figure>
                                <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>"></a>
                            </figure>
                        <?php endif;?>
                        <div class="text">
                            <h6><a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a></h6>
                            <?php if($text):?>
                                <p><?= $text;?></p>
                            <?php endif;?>
                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><img src="<?= get_template_directory_uri();?>/img/arrow-blue.svg" alt=""></a>
                        </div>
                    </div>
                <?php $i++; endforeach;?>
            </div>
        <?php endif;?>

    </div>
</section>
