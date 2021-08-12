    <?php if(isset($related_posts) && count($related_posts) > 0):?><section class="popular-blog-section">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-12 popular-blog-header">
                    <h1 class="popular-blog-title">Популярные новости</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php foreach($related_posts as $related_post):?><div class="col-12 col-md-6 col-xl-4 popular-blog-single">
                            <a href="/posts/get/<?=$related_post['slug']?>" class="popular-container">
                                <div class="popular-image">
                                    <div class="image set-bg" data-setbg="<?=$related_post['image_path']?>"></div>
                                </div>
        
                                <div class="content">
                                    <h1><?=$related_post['excerpt']?></h1>
                                    <span><?=$related_post['created_at']?></span>
                                </div>
                            </a>
                        </div><?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section><?php endif;?>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="icon-arrow-up"></i></a>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4 footer-column">
                    <h1>Связь с нами</h1>
                    <ul>
                        <li>
                            <a href="mailto:kostyukovichi_raipo@mogops.by" class="">
                                <span class="mr-2 icon-envelope-open-o"></span>
                                <span>kostyukovichi_raipo@mogops.by</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+375224523867" class="">
                                <span class="mr-2 icon-phone"></span>
                                <span>+375 (22) 452-38-67</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/kostyukovichi_raipo/" target="_blank" class="">
                                <span class="mr-2 icon-instagram"></span>
                                <span>kostyukovichi_raipo</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://213.184.248.129:22690/" target="_blank" class="">
                                <span class="mr-2 icon-link"></span>
                                <span>Интернет-витрина</span>
                            </a>
                        </li>
                        <li class="mt-4">
                            Время работы: 8:30 - 17:30
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-xl-4 footer-column">
                    <h1>Навигация</h1>
                    <ul>
                        <li>
                            <a href="/" class="">Главная</a>
                        </li>
                        <li>
                            <a href="/services" class="">Услуги</a>
                        </li>
                        <li>
                            <a href="/contacts" class="">Контакты</a>
                        </li>
                        <li>
                            <a href="/about" class="">О нас</a>
                        </li>
                        <li>
                            <a href="/message" class="">Электронное обращение</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-xl-4 footer-column">
                    <h1>Информация</h1>
                    <ul>
                        <li>
                            <a href="https://docs.google.com/viewer?url=http://<?=$_SERVER['HTTP_HOST']?>/downloads/schedule.docx" class="">
                                <span class="mr-2 icon-file"></span>
                                <span>График обращения граждан и юр. лиц</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://docs.google.com/viewer?url=http://<?=$_SERVER['HTTP_HOST']?>/downloads/listadminprocedures.docx" class="">
                                <span class="mr-2 icon-file"></span>
                                <span>Перечень админ. процедур</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-12 col-md-6 col-xl-3 footer-column">
                    <h1>Подписка на рассылку</h1>
                    <p>Подписавшись на рассылку, Вы будете получать уведомления о новых новостях на нашем сайте.</p>
                    <form id="subscribe" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="sub_email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Подписаться</button>
                            </div>
                        </div>
                    </form>
                </div> -->
            </div>
            <div class="copy">
                &copy; Вычислительный центр Белкоопсоюза
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"
        integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/plugins/piexif.min.js"
        integrity="sha512-rOFfpB1/58CtdhJdLV7Z9r4XcPv46dOngI3bAxgK8SUZEFjVtW4rG7BUu+3L5PxHMh3s52kpE65Cl29skN9rRw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/plugins/sortable.min.js"
        integrity="sha512-ELgdXEUQM5x+vB2mycmnSCsiDZWQYXKwlzh9+p+Hff4f5LA+uf0w2pOp3j7UAuSAajxfEzmYZNOOLQuiotrt9Q=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/fileinput.min.js"
        integrity="sha512-1FvXwt9wkKd29ilILHy0zei6ScE5vdEKqZ6BSW+gmM7mfqC4T4256OmUfFzl1FkaNS3FUQ/Kdzrrs8SD83bCZA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/themes/fa/theme.min.js"
        integrity="sha512-9NtFMK4nplvuDEXEUvongRXw+gbBZQiUfUdlb9an0NDvizgTZ3IoomrlSAsDrFaMHbpB+I7aD1vw6ZOoMDkxCQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/js/locales/ru.min.js"
        integrity="sha512-e5juJJfziAk/ls6bXt79jUjeUp86Y2/Vs9ReQYREmIE/bw9Q8jnzmcYQvvMecS4u1svirRVSKeDHsrmU6dsipg=="
        crossorigin="anonymous"></script>
    <script src="/template/js/dist/jquery.preloadinator.min.js"></script>
    <script src="/template/js/dist/owl.carousel.min.js"></script>
    <script src="/template/js/main.js"></script>
</body>
</html>