<?php include(ROOT . '/views/layouts/header.php'); ?>

    <section class="hero-section mt-5">
        <div class="container">
            <div class="hs-slider owl-carousel col-12">
                <div class="hs-item set-bg" data-setbg="/template/img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <h1>Костюковичское райпо Могилевского областного союза потребительских обществ</h1>
                                <div class="hc-info">
                                    <button id="scrollable" data-scroll-to=".blog-section" class="btn btn-primary">К новостям</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-item set-bg" data-setbg="/template/img/hero/hero-2.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <span>Instagram</span>
                                <h1>Следите за нами в Instagram</h1>
                                <div class="hc-info">
                                    <a href="https://www.instagram.com/kostyukovichi_raipo/" target="_blank" class="btn btn-success">Перейти</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-item set-bg" data-setbg="/template/img/hero/hero-3.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <span>Интернет-витрина</span>
                                <h1>Осуществляем продажу техники, мебели и других товаров на нашей интернет-витрине!</h1>
                                <div class="hc-info">
                                    <a href="http://213.184.248.129:22690/" target="_blank" class="btn btn-secondary">Перейти</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if(User::checkLogin()):?><section class="admin-controls-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="/posts/add" class="">
                                <span class="mr-1 icon-plus"></span>
                                <span>Добавить новость</span>
                            </a>
                        </li>
                        <li>
                            <a href="/exit" class="">
                                <span>Выйти</span>
                            </a>
                        </li>
                    </ul>    
                </div>    
            </div>
        </div>
    </section><?php endif;?>
    <?php if(isset($posts) && count($posts) > 0):?><section class="blog-section mt-5">
        <div class="container">
            <div class="row">
                <?php foreach($posts as $post):?><div class="col-12 col-md-6 col-xl-4 single-blog" data-aos="fade-down">
                    <a href="/posts/get/<?=$post['slug']?>" class="blog-container">
                        <div class="blog-image">
                            <div class="image set-bg" data-setbg="<?=$post['image_path']?>"></div>
                        </div>

                        <div class="content">
                            <h1><?=$post['excerpt']?></h1>
                            <span><?=$post['created_at']?></span>
                        </div>
                    </a>
                </div><?php endforeach;?>
                <div class="col-12 mt-5 mb-5" data-aos="fade-down">
                    <nav>
                        <ul class="pagination flex-wrap d-flex justify-content-center">
                            <?=$pagination->get()?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><?php endif;?>

<?php include(ROOT . '/views/layouts/footer.php'); ?>