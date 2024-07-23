<?php

$cats = get_terms(['taxonomy'=>'product_cat', 'hide_empty'=>false, 'exclude' => 15]);
$i=1;

$image = get_sub_field('icon');
$text = get_sub_field('text');

?>

<div class="nav-block">
    <div class="content-width">
        <div class="nav-menu-wrap">
            <?php if($cats):?>
                <ul class="et_pb_side_nav ">
                    <?php foreach($cats as $cat):?>
                        <li class="side_nav_item"><a href="#product<?= $i;?>"><span class="img-wrap"><img src="<?= get_template_directory_uri();?>/img/icon-5.svg" alt=""></span><?= $cat->name;?></a></li>
                    <?php $i++; endforeach; $i=1;?>

                </ul>
            <?php endif;?>
        </div>
        <div class="content-wrap">
            <section class="product-head">
                <div class="title-wrap">
                    <?php if($image):?>
                        <div class="icon-wrap">
                            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                        </div>
                    <?php endif;?>

                    <?= $text;?>

                </div>
            </section>

            <?php foreach($cats as $cat):
                $prods = new WP_Query([
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'product_cat',
                            'field' => 'id',
                            'terms' => $cat->term_id
                        ]
                    ]
                ]);

                $count = $prods->found_posts;
                ?>
                <section id="product<?= $i;?>" class="product product-<?= $i;?>">
                    <div class="title">
                        <p><?= $count;?> items</p>
                        <h2><?= $cat->name;?></h2>
                    </div>
                    <div class="slider-wrap">
                        <div class="nav-wrap">
                            <div class="swiper-button-next next-<?= $i;?> arrow"></div>
                            <div class="swiper-button-prev prev-<?= $i;?> arrow"></div>
                            <div class="link-wrap">
                                <a href="<?= get_term_link($cat->term_id);?>">View all</a>
                            </div>
                        </div>
                        <div class="swiper product-slider-<?= $i;?>  product-slider">
                            <div class="swiper-wrapper">
                                <?php while($prods->have_posts()): $prods->the_post();

                                    wc_get_template_part( 'content', 'product' );

                                endwhile;

                                wp_reset_postdata();?>

                            </div>
                        </div>
                    </div>
                </section>
            <?php $i++; endforeach;?>
        </div>
    </div>
</div>