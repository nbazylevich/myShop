<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="style/st.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Часы "Муми-тролли"',
            'price' => '600p',
            'path' => 'images/IMG_8464.jpg'
        ],
        [
            'id' => 1,
            'name' => 'Часы "Слоны"',
            'price' => '600p',
            'path' => 'images/IMG_8421.jpg'
        ],
        [
            'id' => 1,
            'name' => 'Часы "Божья коровка"',
            'price' => '600р',
            'path' => 'images/IMG_8419.jpg'
        ]
    ];


    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        echo 'а тут у нас будет страница с открытым товаром';
    }
    ?>

</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                nbazylevich@gmail.com
            </div>
<!--            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>-->
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Санкт-Петербург
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php/?page=shop">Магазин</a>
        </div>

<!--        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>-->

<!--        <div id="copyrights">&copy; Brand</div>-->
    </div>
</footer>

</body>
</html>
