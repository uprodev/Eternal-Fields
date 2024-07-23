<?php

$image = get_sub_field('background');
$items = get_sub_field('items');
$video_link = get_sub_field('video_link');
$video_poster = get_sub_field('video_poster');

?>

<section class="about">
    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        </div>
    <?php endif;?>
    <div class="content-width">
        <?php if($items):
            $p=1;
            foreach ($items as $item):?>

                <div class="item item-<?= $p;?>">

                    <?php if($p%2!=0):?>
                        <?php if($item['text']):?>
                            <div class="title">
                                <?= $item['text'];?>
                            </div>
                        <?php endif;?>
                        <?php if($item['image']):?>
                            <figure>
                                <img src="<?= $item['image']['url'];?>" alt="<?= $item['image']['alt'];?>">
                            </figure>
                        <?php endif;?>
                    <?php else:?>
                        <?php if($item['image']):?>
                            <figure>
                                <img src="<?= $item['image']['url'];?>" alt="<?= $item['image']['alt'];?>">
                            </figure>
                        <?php endif;?>
                        <?php if($item['text']):?>
                            <div class="text">
                                <?= $item['text'];?>
                            </div>
                        <?php endif;?>
                    <?php endif;?>

                </div>

            <?php $p++; endforeach;

        endif;?>

        <?php if($video_link):?>
            <div class="video-wrap">
                <a data-fancybox href="<?= $video_link;?>">
                    <?php if($video_poster):?>
                        <span class="bg-video">
                            <img src="<?= $video_poster['url'];?>" alt="<?= $video_poster['alt'];?>">
                        </span>
                    <?php endif;?>
                    <span class="play">
                        <img src="<?= get_template_directory_uri();?>/img/icon-8.svg" alt="">
                    </span>
                </a>
            </div>
        <?php endif;?>
    </div>
</section>
