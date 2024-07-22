<?php

$rid = get_row_index();

?>

<section id="section<?= $rid;?>"  class="section-map">
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/bg-4.jpg" alt="">
    </div>
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <h6 class="label">Location</h6>
                <h2>Find a location near you</h2>
            </div>
            <div class="form-wrap">
                <form action="#" class="form-search">
                    <label for="search"></label>
                    <input type="search" id="search" name="search" placeholder="zip-code">
                    <button type="submit" class="btn-white">Search</button>
                </form>
            </div>
        </div>

        <div class="content-map">
            <img src="<?= get_template_directory_uri();?>/img/map.jpg" alt="">
        </div>
        <div class="map-info">
            <div class="item">
                <h6>DETROIT</h6>
                <p>15440 E 8 Mile Rd,
                    Detroit, MI 48205</p>
                <p><a href="tel:+3132718201">(313) 271-8201</a></p>
                <ul>
                    <li>Hours</li>
                    <li>M-F: 9am-6am</li>
                    <li>Sat: 9am-6am</li>
                    <li>Sun: Closed</li>
                </ul>
            </div>
            <div class="item">
                <h6>ferndale</h6>
                <p>1461 E 8 Mile Rd,
                    Ferndale, MI 48220</p>
                <p><a href="tel:+2484390950">(248) 439-0950</a></p>
                <ul>
                    <li>Hours</li>
                    <li>M-F: 9am-6am</li>
                    <li>Sat: 9am-6am</li>
                    <li>Sun: Closed</li>
                </ul>
            </div>
            <div class="item">
                <h6>hamtramck</h6>
                <p>2673 E Caniff St,
                    Hamtramck, MI 48212</p>
                <p><a href="tel:+3138555504">(313) 855-5504</a></p>
                <ul>
                    <li>Hours</li>
                    <li>M-F: 9am-6am</li>
                    <li>Sat: 9am-6am</li>
                    <li>Sun: Closed</li>
                </ul>
            </div>
        </div>
    </div>
</section>
