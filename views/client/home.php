<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Website_Nike/configs/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Website_Nike/models/SlidershowModel.php';

$slidershowModel = new SlidershowModel();
$slides = $slidershowModel->getAll();
?>
<div id="slider">
    <div class="slides">
        <?php if (!empty($slides)): ?>
            <?php foreach ($slides as $slide): ?>
                <img class="slide" src="<?= BASE_URL . $slide['image'] ?>" alt="image">
            <?php endforeach; ?>
        <?php else: ?>
            <p>Chưa có slider nào.</p>
        <?php endif; ?>
        <a class="prev" onclick="prevSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>
    </div>
</div>

<main>
    <section class="content-section">
        <div class="Latest-section">
            <h3>The Latest</h3>
            <div class="new-list">
                <div class="new-item" data-aos="fade-right">
                    <img src="./images/New-section1.jpg" height="500" width="400" />
                    <div class="new-item-info">
                        <h3 class="new-item-title">Nothing Beats The C1TY</h3>
                        <a class="new-nav-btn" href="index.php?action=product_page">Shop Now</a>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-down">
                    <img src="./images/New-section3.jpg" height="500" width="400" />
                    <div class="new-item-info">
                        <h3 class="new-item-title">Time</h3>
                        <a class="new-nav-btn" href="index.php?action=product_page">Shop Now</a>
                    </div>
                </div>
                <div class="new-item" data-aos="fade-left">
                    <img src="./images/New-section2.jpg" height="500" width="400" />
                    <div class="new-item-info">
                        <h3 class="new-item-title">Quality</h3>
                        <a class="new-nav-btn" href="index.php?action=product_page">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-section">
        <div class="more-info">
            <div class="title-info" data-aos="fade-down-right">
                <h2>About Us</h2>
                <p>
                    Welcome to NFA - Nike Fashion Authentic , your ultimate destination for authentic and trendy Nike
                    sneakers.
                    We are committed to providing you with a seamless shopping experience, offering top-quality
                    products,
                    innovative designs, and unmatched comfort for every lifestyle. Explore our latest collections and
                    step into
                    a world of style and performance with Nike!
                </p>
            </div>
            <div class="images-info" data-aos="fade-up-left">
                <img src="./images/more-item1.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="special-offers">
        <div class="offers-row">
            <div class="offer-item">
                <div class="offer-icon">
                    <span><i class="fa-solid fa-truck"></i></span>
                    <div class="offer-info">
                        <h4>Giao Hàng Siêu Tốc</h4>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-icon">
                    <span><i class="fa-solid fa-gift"></i></span>
                    <div class="offer-info">
                        <h4>Ưu Đãi Cực Khủng</h4>
                    </div>
                </div>
            </div>
            <div class="offer-item">
                <div class="offer-icon">
                    <span><i class="fa-solid fa-thumbs-up"></i></span>
                    <div class="offer-info">
                        <h4>Chất Lượng - Uy Tín</h4>
                    </div>
                </div>
            </div>
    </section>
</main>
<script src="/script/slider.js"></script>
<script>
    $(document).ready(function() {
        loadSlider(); 
    });
</script>
    