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
                        <div class="swiper-slide">
                            <figure>
                                <a href="#"><img src="img/img-2-2.png" alt=""></a>
                            </figure>
                            <div class="text">
                                <h6><a href="#">Strawberry Runtz</a></h6>
                                <p>The sweet and earthy smell of Strawberry Runtz fills the air, inducing euphoric, creative, and happy effects.</p>
                                <a href="#"><img src="img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#"><img src="img/img-2-3.png" alt=""></a>
                            </figure>
                            <div class="text">
                                <h6><a href="#">Cadillac Rainbows</a></h6>
                                <p>The fruity, gassy aroma of Cadillac Rainbows invites a wave of hunger, euphoria, and relaxation.</p>
                                <a href="#"><img src="img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#"><img src="img/img-2-1.png" alt=""></a>
                            </figure>
                            <div class="text">
                                <h6><a href="#">Bananaconda #4</a></h6>
                                <p>The fruity, creamy, earthy scent of Bananaconda #4 brings about a blissful blend of happiness, energy, and relaxation.</p>
                                <a href="#"><img src="img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#"><img src="img/img-2-2.png" alt=""></a>
                            </figure>
                            <div class="text">
                                <h6><a href="#"></a></h6>
                                <p>The sweet and earthy smell of Strawberry Runtz fills the air, inducing euphoric, creative, and happy effects.</p>
                                <a href="#"><img src="img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#"><img src="img/img-2-3.png" alt=""></a>
                            </figure>
                            <div class="text">
                                <h6><a href="#">Cadillac Rainbows</a></h6>
                                <p>The fruity, gassy aroma of Cadillac Rainbows invites a wave of hunger, euphoria, and relaxation.</p>
                                <a href="#"><img src="img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>

    </div>
</section>
