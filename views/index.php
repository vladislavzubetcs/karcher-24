<?php include(ROOT . '/views/layouts/header.php'); ?>

    <header class="header">
        <div class="container">
            <div class="info" data-aos="fade-right">
                <div class="header-contacts">
                    <a href="tel:+375293551000">+375 29 355 1000</a>
                    <a href="tg:+375293551000" class="contact-with-icon"><img src="/template/img/telegram.svg"> Связь с нами в Telegram</a>
                    <a href="viber://chat?number=375293551000" class="contact-with-icon"><img src="/template/img/viber.svg"> Связь с нами в Viber</a>
                </div>
                <div class="header-title">
                    <h1>Ремонт техники <span>Karcher</span></h1>
                    <p>Ремонт всей линейки Karcher: автомоек, парогенераторов, пылесосов, поломоечных машин. Оставьте заявку на сайте, и мы свяжемся с вами в течение 5 минут.</p>
        
                    <a href="#contact_us" scroll-href=".contact_us" class="primary-button scroller">Оставить заявку</a>
                </div>
            </div>
    
            <div class="slider">
                <div class="slider-item active">
                    <img src="/template/img/slide-1.jpg">
                </div>
                <div class="slider-item ">
                    <img src="/template/img/slide-2.jpg">
                </div>
                <div class="slider-item ">
                    <img src="/template/img/slide-3.jpg">
                </div>
                <div class="slider-item ">
                    <img src="/template/img/slide-4.jpg">
                </div>
                <div class="slider-item">
                    <img src="/template/img/slide-5.jpg">
                </div>
                <div class="slider-item">
                    <img src="/template/img/slide-6.jpg">
                </div>
            </div>
        </div>
        
    </header>

    <section class="repair">
        <h1 data-aos="fade-right">Ремонт всей линейки техники <span>Karcher</span></h1>

        <div class="content">
            <?php foreach($technique as $item):?>
                <a href="/technique/<?=$item['slug']?>">
                    <div class="single-block" data-aos="zoom-in">
                        <div class="image">
                            <img src="/uploads/<?=$item['image']?>">
                        </div>
                        <p><?=$item['name']?></p>
                        <span>Перейти</span>
                    </div>
                </a>
            <?php endforeach;?>

            <?php if(User::checkLogin()):?>
                <a href="/technique/create" class="admin">
                    <div class="single-block" data-aos="zoom-in">
                        <div class="image">
                            <img src="/template/img/plus.svg">
                        </div>
                        <p>Добавить</p>
                    </div>
                </a>
            <?php endif;?>
        </div>
    </section>

    <section class="advantage" data-aos="zoom-in-up">
        <h1>Почему выбирают нас?</h1>

        <div class="content">
            <div class="single-block" data-aos="flip-up">
                <div class="icon">
                    <img src="/template/img/zoom.svg">
                </div>
                <p>Бесплатная диагностика</p>
            </div>
            <div class="single-block" data-aos="flip-up">
                <div class="icon">
                    <img src="/template/img/shield.svg">
                </div>
                <p>Гарантия от 6 месяцев</p>
            </div>
            <div class="single-block" data-aos="flip-up">
                <div class="icon">
                    <img src="/template/img/time_big.svg">
                </div>
                <p>Выезд к заказчику в день обращения</p>
            </div>
        </div>
    </section>

    <section class="contact_us">
        <div class="container">
            <h1 data-aos="flip-left">Оформление заявки</h1>

            <form class="form" method="POST" id="sendContactUs">
                <div class="form-group" data-aos="zoom-in">
                    <label for="name">Имя</label>
                    <input type="text" name="name" id="name" placeholder="Введите ваше имя" required>
                </div>
                <div class="form-group" data-aos="zoom-in">
                    <label for="tel">Номер телефона</label>
                    <input type="tel" name="tel" id="tel" placeholder="+375 (__) ___-__-__" required>
                </div>

                <button type="submit" class="primary-button" data-aos="zoom-in">Отправить</button>

                <label class="form-group checkbox policy" data-aos="zoom-in">Заполняя форму, <a class="modal-open-btn" modal-id="policy" href="#">соглашаюсь</a> на обработку персональных данных.
                    <input type="checkbox" name="accept" class="checkbox-policy" required>
                    <span class="checkmark"></span>
                </label>
            </form>
        </div>
    </section>

    <div class="modal" id="policy">
        <div class="modal-container">
            <div class="modal-header">
                <a class="modal-close-btn" modal-id="policy" href="#"></a>
            </div>
            <div class="modal-body">
                <h1>Политика в отношении обработки персональных данных</h1>
                    <p>Мы (далее - 'Сайт Karcher-24', 'Мы' или 'Наш') со всей серьезностью относимся к защите персональных данных. В настоящей политике перечислены основания и методы сбора, а также цели использования персональных данных и предоставлена информация о правах личности. Мы можем использовать предоставленные нам персональные данные в целях, указанных в настоящем документе, или для любых других целей, указанных во время передачи персональных данных на сайт Karcher-24.   

Под персональными данными понимается любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу. Мы обрабатываем персональные данные для различных целей, в зависимости от цели, могут применяться различные методы сбора, юридические основания для обработки, использования, раскрытия и хранения.

Для целей сбора и использования персональных данных мы хотим сохранить прозрачность в отношении оснований и методов обработки персональных данных.

Мы очень серьезно относимся к безопасности данных, которые храним. Мы соблюдаем признанные международные стандарты безопасности, а наша система управления информационной безопасностью для конфиденциальных данных клиентов подлежит независимой сертификации и соответствует требованиям ISO / IEC 27001: 2013. Мы внедрили систему политик, процедур и тренингов по защите данных, их конфиденциальности и безопасности, и регулярно проверяем предпринятые меры на их пригодность для обеспечения безопасности данных.</p>
            </div>
            <div class="modal-footer">
                <label class="form-group checkbox policy">Принимаю соглашение на обработку персональных данных.
                    <input type="checkbox" class="checkbox-policy">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>

<?php include(ROOT . '/views/layouts/footer.php'); ?>