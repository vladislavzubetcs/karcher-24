<?php include(ROOT . '/views/layouts/header.php'); ?>

    <section class="technique">
        <?php if(isset($slug)):?>
            <!-- <div class="admin-controls">
                <button type="submit" form="technique-edit-form"" class="admin-control" href="/technique/create">Изменить</button>
            </div> -->

            <h1 data-aos="fade-right">Изменение <?=$technique_item['name']?> <span>Karcher</span></h1>
        <?php else:?>
            <!-- <div class="admin-controls">
                <button type="submit" form="technique-edit-form"" class="admin-control" href="/technique/create">Добавить</button>
            </div> -->

            <h1 data-aos="fade-right">Добавление техники <span>Karcher</span></h1>
        <?php endif;?>

        <div class="content" id="technique-edit">
            <form class="form" method="POST" action="" id="technique-edit-form" enctype="multipart/form-data">
                <p>Проблемы:</p>

                <?php if(isset($slug) && is_array($technique_item['problems']) && count($technique_item['problems']) > 0):?>
                <div class="problems-group">
                    <?php foreach($technique_item['problems'] as $id => $problem):?>
                        <div class="problem">
                            <input type="text" name="problems[]" id="<?=$id?>" placeholder="Введите проблему" value="<?=$problem?>" required>
                            <a href="#" class="problem-delete-btn" problem-id="<?=$id?>"><img src="/template/img/cross.svg"></a>
                        </div>
                    <?php endforeach;?>
                </div>
                <?php else:?>
                    <div class="problems-group">
                        <div class="problem" problem-id="0">
                            <input type="text" name="problems[]" placeholder="Введите проблему" required>
                            <a href="#" class="problem-delete-btn" onclick="deleteProblemInput(0)"><img src="/template/img/cross.svg"></a>
                        </div>
                    </div>
                <?php endif;?>

                <a href="#" class="problem-add-input">+ Добавить проблему</a>

                <div class="form-group">
                    <label for="name">Наименование техники</label>
                    <input type="text" name="name" id="name" placeholder="Введите наименование техники" value="<?php if(isset($slug)) echo $technique_item['name'];?>" required>
                </div>

                <div class="form-group">
                    <label for="image">Изображение техники</label>
                    <input type="file" name="image" id="image">
                </div>

                <?php if(isset($slug)):?>
                    <button type="submit" class="primary-button">Изменить</button>
                <?php else:?>
                    <button type="submit" class="primary-button">Добавить</button>
                <?php endif;?>
            </form>
        </div>
    </section>

<?php include(ROOT . '/views/layouts/footer.php'); ?>

<script type="text/javascript" src="/template/js/admin.js"></script>