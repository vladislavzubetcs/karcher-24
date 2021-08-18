<?php include(ROOT . '/views/layouts/header.php'); ?>

    <section class="technique">
        <?php if(User::checkLogin()):?>
            <div class="admin-controls">
                <a class="admin-control" href="/technique/edit/<?=$slug?>">Изменить</a>
                <a class="admin-control" href="/technique/delete/<?=$slug?>">Удалить</a>
            </div>
        <?php endif;?>

        <h1 data-aos="fade-right">Ремонт <?=$technique_item['name']?> <span>Karcher</span></h1>

        <div class="content">
            <form class="form" method="POST" id="sendProblem">
                <input type="text" name="technique" value="<?=$technique_item['name']?>" hidden>

                <?php if(is_array($technique_item['problems']) && count($technique_item['problems']) > 0):?>
                    <p>Опишите вашу проблему:</p>

                    <div class="checkbox-group">
                        <?php foreach($technique_item['problems'] as $problem):?>
                            <label class="form-group checkbox"><?=$problem?>
                                <input type="checkbox" name="problems[]" value="<?=$problem?>">
                                <span class="checkmark"></span>
                            </label>
                        <?php endforeach;?>
                    </div>

                    <div class="form-group text-area">
                        <label for="other-problem">Другая проблема:</label>
                        <textarea id="other-problem" name="problems[]" placeholder="Опишите вашу проблему..."></textarea>
                    </div>
                <?php else:?>
                    <div class="form-group text-area form-margin-top">
                        <label for="other-problem">Описание проблемы:</label>
                        <textarea id="other-problem" name="problems[]" placeholder="Опишите вашу проблему..."></textarea>
                    </div>
                <?php endif;?>

                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" name="name" id="name" placeholder="Введите ваше имя" required>
                </div>

                <div class="form-group">
                    <label for="tel">Номер телефона</label>
                    <input type="tel" name="tel" id="tel" placeholder="+375 (__) ___-__-__" required>
                </div>

                <button type="submit" class="primary-button">Отправить</button>
            </form>
            <div class="image">
                <img src="/uploads/<?=$technique_item['image']?>" alt="<?=$technique_item['name']?>">
            </div>
        </div>
    </section>

<?php include(ROOT . '/views/layouts/footer.php'); ?>