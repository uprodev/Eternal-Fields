<?php

$id = get_the_ID();

?>

<?php if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>

<section class="home-banner">
    <div class="bg">
        <img src="img/bg-1.jpg" alt="">
    </div>
    <div class="content-width">
        <div class="content">
            <div class="title-wrap">
                <h1>Welcome to Eternal Fields</h1>
            </div>
            <div class="text">
                <p>At Eternal Fields, we're dedicated to unlocking the ancient wonders of cannabis, meticulously cultivated to enhance your well-being and inspire your spirit. Our commitment to purity, sustainability, and innovation guides every step from seed to sale.</p>
            </div>
            <div class="bottom-title">
                <h2>Discover Nature's Finest Cannabis</h2>
            </div>
        </div>
        <div class="bottom-scroll">
            <a href="#section1" class="scroll">Scroll down</a>
        </div>
        <div class="icon-wrap">
            <img src="img/icon-1.svg" alt="">
        </div>
    </div>

</section>


<section id="section1" class="title-slider">
    <div class="content-width">
        <div class="title-wrap">
            <h2>Our Strains</h2>
            <p>Explore handpicked strains and embrace the quality you deserve. From invigorating sativas to soothing indicas and balanced hybrids, there's something special for every moment.</p>
        </div>
        <div class="nav-wrap">
            <div class="swiper-button-next strains-next"></div>
            <div class="swiper-button-prev strains-prev"></div>
        </div>
        <div class="slider-wrap">
            <div class="swiper strains-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <a href="#"><img src="img/img-2-1.png" alt=""></a>
                        </figure>
                        <div class="text">
                            <h6><a href="#">Bananaconda #4</a></h6>
                            <p>The fruity, creamy, earthy scent of Bananaconda #4 brings about a blissful blend of happiness, energy, and relaxation.</p>
                            <a href="#"><img src="img/icon-2.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#"><img src="img/img-2-2.png" alt=""></a>
                        </figure>
                        <div class="text">
                            <h6><a href="#">Strawberry Runtz</a></h6>
                            <p>The sweet and earthy smell of Strawberry Runtz fills the air, inducing euphoric, creative, and happy effects.</p>
                            <a href="#"><img src="img/icon-2.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#"><img src="img/img-2-3.png" alt=""></a>
                        </figure>
                        <div class="text">
                            <h6><a href="#">Cadillac Rainbows</a></h6>
                            <p>The fruity, gassy aroma of Cadillac Rainbows invites a wave of hunger, euphoria, and relaxation.</p>
                            <a href="#"><img src="img/icon-2.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#"><img src="img/img-2-1.png" alt=""></a>
                        </figure>
                        <div class="text">
                            <h6><a href="#">Bananaconda #4</a></h6>
                            <p>The fruity, creamy, earthy scent of Bananaconda #4 brings about a blissful blend of happiness, energy, and relaxation.</p>
                            <a href="#"><img src="img/icon-2.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#"><img src="img/img-2-2.png" alt=""></a>
                        </figure>
                        <div class="text">
                            <h6><a href="#"></a></h6>
                            <p>The sweet and earthy smell of Strawberry Runtz fills the air, inducing euphoric, creative, and happy effects.</p>
                            <a href="#"><img src="img/icon-2.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#"><img src="img/img-2-3.png" alt=""></a>
                        </figure>
                        <div class="text">
                            <h6><a href="#">Cadillac Rainbows</a></h6>
                            <p>The fruity, gassy aroma of Cadillac Rainbows invites a wave of hunger, euphoria, and relaxation.</p>
                            <a href="#"><img src="img/icon-2.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="img-text-bg">
    <div class="content-width">
        <div class="bg">
            <img src="img/bg-2.jpg" alt="">
        </div>
        <div class="wrap">
            <div class="icon-wrap">
                <img src="img/icon-3.svg" alt="">
            </div>
            <figure>
                <img src="img/img-3.jpg" alt="">
            </figure>
            <div class="text">
                <h6 class="label">STRAIN OF THE MONTH</h6>
                <h2>SHERB CREAM PIE</h2>
                <div class="text-wrap">
                    <div class="img-wrap">
                        <img src="img/img-4.png" alt="">
                    </div>
                    <p>Sherb Cream Pie's tropical, sweet, and gassy aroma evokes bliss while providing pain relief and a comforting body high.</p>
                    <div class="btn-wrap">
                        <a href="#" class="btn-arrow">Strain of the month <img src="img/arrow-1.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="item-4x">
    <div class="bg"><img src="img/bg-3.png" alt=""></div>
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <h6 class="label">our products</h6>
                <h2>Crafted with Care</h2>
            </div>
            <div class="text-title">
                <p>Our diverse range of cannabis products is designed to cater to your unique preferences and needs. From traditional flower to innovative edibles and everything in between, experience the purity and potency of Eternal Fields.</p>
            </div>
            <div class="bottom-title">
                <h2>Consumed with Joy</h2>
            </div>
        </div>
        <div class="content">
            <div class="item">
                <div class="number"><span>1</span></div>
                <figure>
                    <a href="#"><img src="img/img-5.png" alt=""></a>
                </figure>
                <div class="text">
                    <h6><a href="#">Flower</a></h6>
                    <p>Experience the natural beauty and aroma of our meticulously curated strains.</p>
                    <a href="#"><img src="img/arrow-blue.svg" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="number"><span>2</span></div>
                <figure>
                    <a href="#"><img src="img/img-5.png" alt=""></a>
                </figure>
                <div class="text">
                    <h6><a href="#">pre-rolls</a></h6>
                    <p>Enjoy our amazing flower rolled for your pleasure.</p>
                    <a href="#"><img src="img/arrow-blue.svg" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="number"><span>3</span></div>
                <figure>
                    <a href="#"><img src="img/img-5.png" alt=""></a>
                </figure>
                <div class="text">
                    <h6><a href="#">Edibles</a></h6>
                    <p>Delight in our delicious, chef-crafted cannabis-infused treats.</p>
                    <a href="#"><img src="img/arrow-blue.svg" alt=""></a>
                </div>
            </div>
            <div class="item">
                <div class="number"><span>4</span></div>
                <figure>
                    <a href="#"><img src="img/img-5.png" alt=""></a>
                </figure>
                <div class="text">
                    <h6><a href="#">concentrates</a></h6>
                    <p>Discover the potent and pure expressions of cannabis through our concentrates.</p>
                    <a href="#"><img src="img/arrow-blue.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-map">
    <div class="bg">
        <img src="img/bg-4.jpg" alt="">
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
            <img src="img/map.jpg" alt="">
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

<section class="title-bg-text">
    <div class="content-width">
        <div class="title-wrap">
            <div class="bg">
                <img src="img/bg-5.jpg" alt="">
            </div>
            <div class="wrap">
                <h2>Eternal Partnerships</h2>
                <h2 class="border">Together, Cultivating Excellence</h2>
            </div>
        </div>
        <div class="text">
            <div class="icon-wrap">
                <img src="img/icon-4.svg" alt="">
            </div>
            <p>We believe in the power of collaboration to elevate the cannabis experience. Eternal Fields proudly partners with leading experts, from innovative growers and processors to renowned chefs, ensuring that every product is a testament to our shared commitment to excellence.</p>
        </div>
    </div>
</section>

<section class="join">
    <div class="bg">
        <img src="img/bg-6.jpg" alt="">
    </div>
    <div class="content-width">
        <div class="form-wrap">
            <h6 class="label">Join Our Community</h6>
            <p>Subscribe to our newsletter for the latest on specials, new products, and exclusive events.</p>
            <form action="#" class="form-default">
                <div class="input-wrap">
                    <label for="name"></label>
                    <input type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="input-wrap">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="input-wrap-submit">
                    <button type="submit" class="btn-white">submit</button>
                </div>
            </form>
        </div>
        <div class="title-wrap">
            <div class="img-wrap">
                <img src="img/img-6-1.jpg" alt="">
                <img src="img/img-6-2.jpg" alt="">
                <img src="img/img-6-3.jpg" alt="">
            </div>
            <h2>Stay Informed and Inspired</h2>
            <div class="btn-wrap">
                <a href="#" class="btn-arrow">check our insta <img src="img/arrow-1.svg" alt=""></a>
            </div>
        </div>
    </div>
</section>
