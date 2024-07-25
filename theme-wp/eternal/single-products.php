<?php

get_header();

$description = wpautop(get_the_content());

$cat = get_the_terms(get_the_ID(), 'category_product');

$text = get_field('composition');
$img = get_field('second_image');
$label = get_field('label');
$label_text = get_field('label_text');

?>

    <section class="product-info">
        <div class="content-width">
            <div class="bg">
                <img src="<?= get_template_directory_uri();?>/img/bg-2.jpg" alt="">
            </div>
            <div class="wrap-all">
                <figure>
                    <img src="<?php the_post_thumbnail_url();?>" alt="<?= strip_tags(get_the_title());?>">
                </figure>
                <div class="text">

                    <?php if($label):?>
                        <div class="icon-info">
                            <p>I <img src="<?= get_template_directory_uri();?>/img/icon-7.svg" alt=""></p>
                            <span><?= $label_text;?></span>
                        </div>
                    <?php endif;?>

                    <?php if($cat):?>
                        <h6 class="label"><?= $cat[0]->name;?></h6>
                    <?php endif;?>

                    <h1><?php the_title();?></h1>
                    <div class="item">
                        <?php if($img):?>
                            <div class="img-wrap">
                                <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                            </div>
                        <?php endif;?>

                        <?php if($description):?>

                            <div class="wrap">
                                <?= $description;?>
                            </div>

                        <?php endif;?>

                    </div>

                    <?= $text;?>

                </div>
            </div>
        </div>
    </section>

<?php

get_template_part('parts/map');

get_template_part('parts/join');

get_footer();

