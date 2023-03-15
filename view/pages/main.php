<?php
$data = $slider_controller->get_all("slider");
var_dump($data);
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
                    <?php foreach ($data as $slide):?>
                    <div class="swiper-slide">
                        <div class="left">
                            <img src="<?=$slide["image"] ?>" alt="">
                        </div>
                        <div class="right">
                            <h1><?=$slide["title"]?></h1>
                            <a href="<?=$slide["link_href"]?>"><?=$slide["link_text"]?></a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>

                <!-- If we need navigation buttons -->


            </div>
        </div>
    </div>
</section>