<?php

$img = get_field('card_image');
$short = wpautop(get_the_excerpt());

$sel = get_field('image_line');
$class = '';
if($sel == 'Symbol left - behind image'){
    $class = 'after-left';
}elseif($sel == 'Symbol right - behind image'){
    $class = 'after-right';
}elseif($sel == 'Symbol left - in front of image'){
    $class = 'before-left';
}elseif($sel == 'Symbol right - in front of image'){
    $class = 'before-right';
}else{
    $class = '';
}

?>
<div class="swiper-slide">
    <figure class="<?= $class;?>">
        <a href="<?php the_permalink();?>"><img src="<?= $img?$img['url']:get_the_post_thumbnail_url();?>" alt="<?= strip_tags(get_the_title());?>"></a>
    </figure>
    <div class="text">
        <h6><a href="<?php the_permalink();?>"><?= strip_tags(get_the_title());?></a></h6>
        <?= $short;?>
        <a href="<?php the_permalink();?>"><img src="<?= get_template_directory_uri();?>/img/icon-2.svg" alt=""></a>
    </div>
</div>