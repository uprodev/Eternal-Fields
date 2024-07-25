<?php
/**
 * Instagram Feed Footer Template
 * Adds pagination and html for errors and resized images
 *
 * @version 6.0 Instagram Feed Pro by Smash Balloon
 *
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$follow_btn_style   = SB_Instagram_Display_Elements::get_follow_styles( $settings ); // style="background: rgb();color: rgb();"  already escaped
$follow_btn_classes = strpos( $follow_btn_style, 'background' ) !== false ? ' sbi_custom' : '';
$show_follow_button = $settings['showfollow'];
$follow_button_text = __( $settings['followtext'], 'instagram-feed' );

$load_btn_style   = SB_Instagram_Display_Elements::get_load_button_styles( $settings ); // style="background: rgb();color: rgb();"  already escaped
$load_btn_classes = strpos( $load_btn_style, 'background' ) !== false ? ' sbi_custom' : '';
$load_button_text = __( $settings['buttontext'], 'instagram-feed' );

$footer_attributes   = SB_Instagram_Display_Elements::get_footer_attributes( $settings );

$insta_title = get_field('instagram_title', 'options');

?>

<?php if($insta_title):?>
    <h2><?= $insta_title;?></h2>
<?php endif;?>

<div class="btn-wrap">

	<a class="btn-arrow" <?php echo SB_Instagram_Display_Elements::get_header_link( $settings, $first_username ) ?> target="_blank" rel="nofollow noopener">
        <?php echo esc_html( $follow_button_text ); ?>  <img src="<?= get_template_directory_uri();?>/img/arrow-1.svg" alt="">
    </a>
</div>
