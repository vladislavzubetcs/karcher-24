<?php include(ROOT . '/views/layouts/header.php'); ?>

    <section class="repair repair-page">
        <h1 data-aos="fade-right">Ремонт всей линейки техники <span>Karcher</span></h1>

        <div class="content">
            <?php foreach($technique_all as $item):?>
                <a href="/technique/<?=$item['slug']?>">
                    <div class="single-block" data-aos="zoom-in">
                        <div class="image">
                            <img src="/uploads/<?=$item['image']?>">
                        </div>
                        <p><?=$item['name']?></p>
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

<?php include(ROOT . '/views/layouts/footer.php'); ?>