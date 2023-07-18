<?php
$data = $slider_controller->slider_sort($slider_controller->get_all("slider"));
$categories = $category_controller->get_all();
$products = $product_controller->get_all();

$all_products = array();
foreach ($products as $product) {
    $all_products[$product['cat_id']][] = $product;
}
 //echo "<pre>";
// print_r($all_products);
//var_dump($categories);
?>
<section class="main_slider">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="container">
        <div class="main_slider__content">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($data as $slide): ?>
                        <div class="swiper-slide">
                            <div class="left">
                                <img src="<?= $slide["image"] ?>" alt="">
                            </div>
                            <div class="right">
                                <h1><?= $slide["title"] ?></h1>
                                <a href="<?= $slide["link_href"] ?>"><?= $slide["link_text"] ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- If we need navigation buttons -->

            </div>
        </div>
    </div>
</section>

<section class="best-seller">
    <div class="container">
        <h2>Best Seller Items</h2>
        <div class="cards">
            <div class="items">

                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
            </div>
            <div class="items bottom-line">
                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
                <div class="item">
                    <div class="offers">
                        <div class="hot">Hot</div>
                        <div class="discount">-5%</div>
                    </div>

                    <img id="product-image" src="<?= assets("img/best_seller/perfume.png") ?>" alt="">

                    <div class="features">
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                        <button>
                            <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                        </button>
                    </div>
                    <p>Metal Vintage Pendant</p>
                    <span>$79.00</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="week">
    <div class="cover"></div>
    <div class="container">
        <div class="week-content">
            <div class="card">
                <div class="left">
                    <img src="<?= assets("img/week/couch.png") ?>" alt="">
                </div>
                <div class="right">
                    <div class="deal">DEAL OF THE WEEK</div>
                    <strong>from
                        <span>$99.99</span>
                    </strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget hendrerit odio, non ultrices
                        lorem.
                        Donec vel vestibulum eros. Curabitur fringilla arcu varius.
                    </p>
                    <button>SHOP NOW</button>
                    <div class="items">
                        <a href="" class="item">
                            <img src="<?= assets("img/week/clock.png") ?>" alt="">
                        </a>
                        <a href="" class="item">
                            <img src="<?= assets("img/week/clock.png") ?>" alt="">
                        </a>
                        <a href="" class="item">
                            <img src="<?= assets("img/week/clock.png") ?>" alt="">
                        </a>
                        <a href="" class="item">
                            <img src="<?= assets("img/week/clock.png") ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="categories">

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- Slider main container -->
    <div class="container">
        <h5>Trending categories</h5>
        <div class="all-categories">
            <!-- Additional required wrapper -->

            <div class="swiper-wrapper">

                <!-- Slides -->
                <?php foreach ($categories as $category): ?>
                    <div id="<?=$category["name"]?>" class="swiper-slide category">

                        <img src="<?= $category["image"] ?>" alt="">
                        <p><?= $category["name"] ?></p>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>

<section class="best-seller products">
    <div class="container">
        <h2>Best Seller Items</h2>
        <?php $j = 0; foreach ($all_products as $product): ?>
            <div id="product-<?=$categories[$j]["name"]?>" class="cards <?= $j==0 ? "" : "hide"; $j++;?>" >
                <div class="items">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="item ">
                            <div class="offers">
                                <div class="hot">Hot</div>
                                <div class="discount">-5%</div>
                            </div>

                            <img class="product-image" src="<?= $product[$i]["image"] ?>" alt="">

                            <div class="features">
                                <button>
                                    <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                                </button>
                                <button>
                                    <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                                </button>
                                <button>
                                    <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                                </button>
                            </div>
                            <p><?= $product[$i]["name"] ?></p>
                            <span><?= $product[$i]["price"] ?></span>
                        </div>
                    <?php endfor; ?>
                </div>


                <div class="items bottom-line">
                    <?php for ($i = 4; $i < 7; $i++): ?>
                        <div class="item">
                            <div class="offers">
                                <div class="hot">Hot</div>
                                <div class="discount">-5%</div>
                            </div>

                            <img class="product-image" src="<?= $product[$i]["image"] ?>" alt="">

                            <div class="features">
                                <button>
                                    <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                                </button>
                                <button>
                                    <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                                </button>
                                <button>
                                    <img src="<?= assets("img/best_seller/reload.png") ?>" alt="">
                                </button>
                            </div>
                            <p><?= $product[$i]["name"] ?></p>
                            <span><?= $product[$i]["price"] ?></span>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>



