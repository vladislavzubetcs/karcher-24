<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vladislav Zubetcs">
    <meta name="description" content="Костюковичское райпо Могилевского областного союза потребительских обществ">
    <meta name="keywords" content="белкоопсоюз, бкс, костюковичи, магазин, новости, услуги">
    <title>Костюковичское райпо Могилевского областного союза потребительских обществ</title>
    <link href="/template/img/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="/template/img/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/template/img/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/template/img/ico/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/template/css/main.min.css?v=1.0">
    <link rel="stylesheet" href="/template/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/template/css/dist/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.5/css/fileinput.min.css"
        integrity="sha512-A/XiYKl0I56Nxg43kogQlAnLUbGRVGcT3J2Ni9b73+blF89rmMJ6qL9iHhPR/vDOsjcylhEoiQfzHzGHS+K/lQ=="
        crossorigin="anonymous" />
</head>
<body>
    <div class="preloader js-preloader flex-center">
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="mailto:kostyukovichi_raipo@mogops.by" class=""><span class="mr-2 icon-envelope-open-o"></span> <span
                            class="d-none d-md-inline-block">kostyukovichi_raipo@mogops.by</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="tel:+375224523867" class=""><span class="mr-2 icon-phone"></span> <span
                            class="d-none d-md-inline-block">+375 (22) 452-38-67</span></a>
                    <div class="float-right">
                        <span>Время работы: 08:00 - 17:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="site-logo">
                    <a href="/">
                        <img src="/template/img/logo.png">
                        <span>Костюковичское райпо Могилевского областного союза потребительских обществ</span>
                    </a>
                </div>
                <div class="col-12">
                    <nav class="site-navigation text-right ml-auto" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            <li><a href="/" class="nav-link <?=isActive('index|index.php')?>">Главная</a></li>
                            <li><a href="/services" class="nav-link <?=isActive('services')?>">Услуги</a></li>
                            <li><a href="/contacts" class="nav-link <?=isActive('contacts')?>">Конакты</a></li>
                            <li class="has-children">
                                <a href="/about" class="nav-link <?=isActive('about|message')?>">О нас</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="/message" class="nav-link">Электронное обращение</a></li>
                                    <li>
                                        <a href="https://docs.google.com/viewer?url=http://<?=$_SERVER['HTTP_HOST']?>/downloads/schedule.docx" class="">
                                            <span class="mr-1 icon-file"></span>
                                            <span>График обращения граждан и юр. лиц</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://docs.google.com/viewer?url=http://<?=$_SERVER['HTTP_HOST']?>/downloads/listadminprocedures.docx" class="">
                                            <span class="mr-1 icon-file"></span>
                                            <span>Перечень админ. процедур</span>
                                        </a>
                                    </li>
                                    <!-- <li class="has-children">
                                        <a href="#">Информация</a>
                                        <ul class="dropdown">
                                            <li>
                                                
                                            </li>
                                            <li>
                                                
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                        class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </header>