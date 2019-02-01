<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bardin</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="libs/slick/slick.css">
    <link rel="stylesheet" href="libs/slick/slick-theme.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <!-- Подключаем меню !-->
    <?php require_once "php-script/header.php";?>
    <!-- Первая строка social,logo,phone !-->
    <section class = "offer">
        <div class="wrap-offer">
            <div class="social">
                <a href="https://vk.com/karaokebardin_ekb" class = "social__vk"></a>
                <a href="https://instagram.com/karaokebardin_ekb" class = "social__instagram"></a>
            </div>
            <div class="wrap-logo">
                <picture>
                    <source srcset="img/main/logo-sl.png" class="logo-sl"
                     media="(max-width: 800px)" >
					<img src="img/main/logo-il.png" alt="Golden" class="logo">
				</picture>
            </div>
            <div class="phone">
                <svg class = "phone__icon"></svg>
                <p>213-40-20<br>
                karaokebard@yandex.ru
                </p>
            </div>
        </div>
    </section>
    <!-- Слайдер !-->
    <section class = "slider">
        <div class="wrap-slider">
            <div><img src="img/main/slider/slide_one.jpg" alt="Караоке бар - блюда"></div>
			<div><img src="img/main/slider/slide_two.jpg"  alt="Караоке бар - алкоголь" ></div>
			<div><img src="img/main/slider/slide_three.jpg"  alt="Караоке бар - блюда" ></div>
			<div><img src="img/main/slider/slide_four.jpg"  alt="Караоке бар - В Екатеренбурге" ></div>
			<div><img src="img/main/slider/slide_five.jpg" alt="Караоке бар - В Екатеренбурге" ></div>
        </div>
    </section>
    <!-- Акции !-->
    <section class = "stock">
        <h1>Акции</h1>
        <p class = "stock-titel">Самые лучшие предложения для вас</p>
        <div class="wrap-card">
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/stock/icon1.png);"></span>
            <span class="card__content">
                <p>Скидка 25% на меню кухни с воскресенья по вторник</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/stock/icon2.png);"></span>
            <span class="card__content">
                <p>Скидка на бар 25% с воскресенья по четверг, кроме пива.</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/stock/icon3.png);"></span>
            <span class="card__content">
                <p>Скидка на кальян 25% с воскресенья по четверг.</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/stock/icon4.png);"></span>
            <span class="card__content">
                <p>При заказе 4 шотов ягермейстера пятый шот в подарок.</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/stock/icon5.png);"></span>
            <span class="card__content">
                <p>При заказе бутылки вина*, сырное ассорти в подарок.</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/stock/icon6.png);"></span>
            <span class="card__content">
                <p>При заказе бутылки водки*, селедочка с картофилем в подарок.</p>
            </span>
            </a>
        </div>
        <p style="text-align : center; margin-top: 50px;">*уточняйте подробности у официанта или пo тел. 213-40-20</p>
    </section>
    <!-- Специальные предложения !-->
    <section class = "special-offers">
        <h1>Специальные предложения</h1>
        <p class = "special-offers-titel">Самые лучшие предложения для вас</p>
        <div class="wrap-card">
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/special-offers/sp1.png);"></span>
            <span class="card__content">
                <p>Дни рождения</p>
                <p class = "content-preview">День рождения – долгожданный семейный праздник, который приносит множество приятных минут,из которых складываются лучшие воспоминания...</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/special-offers/sp2.png);"></span>
            <span class="card__content">
                <p>Банкеты</p>
                <p class = "content-preview">Если вы ищете место в Екатеринбурге для провидения корпоративов и банкетов, «БардIN» станет для вас настоящей находкой.Найти идеальное место...</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/special-offers/sp3.png);"></span>
            <span class="card__content">
                <p>Мальчишники и Девишники</p>
                <p class = "content-preview">Дети- цветы жизни и поэтому для них нужно все организовывать только на высшем уровне.Караоке бар «БардIN» организует, и с удовольствием...</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/special-offers/sp4.png);"></span>
            <span class="card__content">
                <p>Детские праздники</p>
                <p class = "content-preview">Весёлый мальчишник и девичник – это отличная возможность немного расслабиться перед свадьбой и прекрасный повод собрать самых близких...</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/special-offers/sp5.png);"></span>
            <span class="card__content">
                <p>Выпускные</p>
                <p class = "content-preview">Создание феерии праздника — дело тонкое. Именно те нюансы, которые на первый взгляд кажутся незначительными, делают банкет запоминающимся...</p>
            </span>
            </a>
            <a href="#" class = "wrap-card__card">
            <span class="card__img" style="background-image: url(img/main/special-offers/sp6.png);"></span>
            <span class="card__content">
                <p>Новогодняя ночь</p>
                <p class = "content-preview">Создание феерии праздника — дело тонкое. Именно те нюансы, которые на первый взгляд кажутся незначительными, делают банкет запоминающимся... </p>
            </span>
            </a>
        </div>
    </section>
    <!-- Footer !-->
    <?php require_once "php-script/footer.php";?>
</body>
    <!--script !-->
    <script src="libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
</html>