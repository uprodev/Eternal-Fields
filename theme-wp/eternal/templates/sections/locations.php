<?php

$rid = get_row_index();

$map = get_field('map_shortcode', 'options');
$title = get_field('title_loc', 'options');
$subtitle = get_field('subtitle_loc', 'options');
$locations = get_field('locations', 'options');

?>

<section id="section<?= $rid;?>"  class="section-map">
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/bg-4.jpg" alt="">
    </div>
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <?php if($subtitle):?>
                    <h6 class="label"><?= $subtitle;?></h6>
                <?php endif;?>
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
            </div>
            <div class="form-wrap">
<!--                <form action="#" class="form-search">-->
<!--                    <label for="search"></label>-->
<!--                    <input type="search" id="search" name="search" placeholder="zip-code">-->
<!--                    <button type="submit" class="btn-white">Search</button>-->
<!--                </form>-->
            </div>
        </div>

        <?php if($map):?>
            <div class="content-map">
                <?= do_shortcode(''.$map.'');?>
            </div>
        <?php endif;?>

        <?php if($locations):?>
            <div class="map-info">
                <?php foreach($locations as $loc):?>
                    <div class="item">

                        <?= $loc['name']?'<h6>'.$loc['name'].'</h6>':'';?>

                        <?= $loc['address']?'<p>'.$loc['address'].'</p>':'';?>

                        <?= $loc['phone']?'<p><a href="tel:+'.phone_clear($loc['phone']).'">'.$loc['phone'].'</a></p>':'';?>

                        <?php if($loc['horaries']):?>
                            <ul>
                                <?php foreach($loc['horaries'] as $hr):?>
                                    <li><?= $hr['item'];?></li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>

                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>

    </div>
</section>
