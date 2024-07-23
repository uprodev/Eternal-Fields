<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$img = get_field('card_image');
$short = wpautop($product->get_short_description());

?>
<div class="swiper-slide">
    <figure>
        <a href="<?php the_permalink();?>"><img src="<?= $img?$img['url']:get_the_post_thumbnail_url();?>" alt="<?= strip_tags(get_the_title());?>"></a>
    </figure>
    <div class="text">
        <h6><a href="<?php the_permalink();?>"><?= strip_tags(get_the_title());?></a></h6>
        <?= $short?$short:wpautop(get_the_excerpt());?>
        <a href="<?php the_permalink();?>"><img src="<?= get_template_directory_uri();?>/img/icon-2.svg" alt=""></a>
    </div>
</div>