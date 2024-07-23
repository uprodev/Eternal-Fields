<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$slider = get_sub_field('slider');
$rid = get_row_index();

?>

<section id="section<?= $rid;?>" class="title-slider">
    <div class="content-width">
        <div class="title-wrap">
            <?php if($title):?>
                <h2><?= $title;?></h2>
            <?php endif;?>

            <?php if($text):?>
                <p><?= $text;?></p>
            <?php endif;?>
        </div>

        <?php if($slider):?>
            <div class="nav-wrap">
                <div class="swiper-button-next strains-next"></div>
                <div class="swiper-button-prev strains-prev"></div>
            </div>
            <div class="slider-wrap">
                <div class="swiper strains-slider">
                    <div class="swiper-wrapper">

                        <?php foreach($slider as $sli):
                            $img = $sli['image'];
                            $text = $sli['description'];
                            $link = $sli['link'];
                            if( $link ) {
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            }
                        ?>
                            <div class="swiper-slide">
                                <figure>
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>"></a>
                                </figure>
                                <div class="text">
                                    <h6><a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><?= esc_html($link_title); ?></a></h6>
                                    <?php if($text):?>
                                        <p><?= $text;?></p>
                                    <?php endif;?>
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><img src="<?= get_template_directory_uri();?>/img/icon-2.svg" alt=""></a>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div>
                </div>
            </div>
        <?php endif;?>

    </div>
</section>
