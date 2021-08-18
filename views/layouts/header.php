<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vladislav Zubetcs & Polina Shimanovich">
    <meta name="description" content="Karcher-24 Беларусь">

    <title>Karcher-24 Беларусь</title>

    <!-- <link href="img/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="img/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="img/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="img/ico/favicon.png" rel="shortcut icon"> -->

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/template/css/main.min.css?ver=1.4">
</head>

<body>

    <div class="nav">
        <div class="container">

            <div class="logo">
                <a href="/">Karcher-24</a>
            </div>
            
            <div class="nav-trigger">
                <a id="nav-trigger-btn" href="#"></a>
            </div>

            <div class="nav-wrapper">
                <ul class="nav-links">
                    <li class="nav-item">
                        <a href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about">О компании</a>
                    </li>
    
                    <li class="nav-item <?php if(is_array($technique) && count($technique) > 0) echo 'drop-down';?>">
                        <a href="/technique">Ремонт</a>
    
                        <?php if(is_array($technique) && count($technique) > 0):?>
                            <ul class="menu">
                                <?php foreach($technique as $item):?>
                                    <li class="item">
                                        <a href="/technique/<?=$item['slug']?>"><?=$item['name']?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </li>
    
                    <li class="nav-item">
                        <a href="#contacts" class="scroller" scroll-href=".contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>