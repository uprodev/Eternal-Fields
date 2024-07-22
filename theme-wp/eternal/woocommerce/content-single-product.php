<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$description = wpautop($product->get_description());
$cat = get_the_terms(get_the_ID(), 'product_cat');

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

                <?php woocommerce_template_single_title();?>
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
