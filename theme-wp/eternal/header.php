<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500;900&display=swap" rel="stylesheet">

		<?php wp_head();?>
</head>

<body <?php body_class() ?>>

<header>
    <div class="top-line">
        <div class="content-width">
            <div class="logo-wrap">

                <?php $logo = get_field('logo', 'options');?>
                <a href="<?= get_home_url();?>">
                    <?php if($logo):?>
                        <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                    <?php endif;?>
                </a>

            </div>
            <nav class="top-menu">
                <ul>
                    <li ><a href="#">PRODUCTS</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">WHERE TO BUY</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>