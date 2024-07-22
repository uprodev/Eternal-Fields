<?php

$id = get_the_ID();

?>

<?php if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>


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


