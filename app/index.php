<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bardin</title>
    <meta name="description" content="bardin">
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
    <link rel="stylesheet" href="css/main-media.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header class = "header" id = "header">
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
        <!-- УТП !-->
        <section class = "utp">
            <h1>Караоке бар в Екатеренбурге</h1>
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
    </header>
    <!-- О нас !-->
    <section class = "about" id = "about">
        <div class="wrap-about">
            <h2>О нас</h2>
            <div class="content-about-grid">
                <div class="text-content-about">
                <p>Бард IN - это большая и дружная семья,
                появившиеся один год назад, но уже набравшая
                большую популярность среди жителей Екатеринбурга.
                Вы спросите почему Бар IN? Потому что, все гости,
                которые приходят к нам и поют у нас, являются Бардами,
                они поют не связками, а душой. Поэтому Бард IN,- бард внутри.
                Мы предлагаем первоклассную европейскую и азербайджанскую кухню.
                Также, у нас большая винная карта и более 50 алкогольных и безалкогольных коктелей.
                В нашем каталоге огромный выбор иностранных и русских хитов. Более 50 000 песен.
                База ежемесячно обновляется.А, также, у нас есть вкуснейшие и очень дымные паровые
                коктейли с огромным выбором вкусов.Так же мы предлагаем для вас огромный зал,
                VIP комната и банкетный зал до 20 человек с отдельным входом. 
                Бард IN - идеально подходит для проведения банкетов, корпоративов, 
                детских праздников, празднований дней рождений и просто отдохнуть телом и душой!
                </p>
                </div>
                <div class="pic-content-about"></div>
            </div>
        </div>
    </section>
    <!-- Акции !-->
    <section class = "stock">
        <div class="wrap-stock-grid">
            <div class="stock-item-grid" style="background-image: url(img/1.jpg)"><span>Cooll Glasses</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/2.jpg)"><span>Cooll MacBook</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/3.jpg)"><span>Cooll iMac</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/4.jpg)"><span>Cooll Hacking</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/5.jpg)"><span>Cooll Bull Shit</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/6.jpg)"><span>Cooll WorkSpace</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/7.jpg)"><span>Cooll NoteBook</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/8.jpg)"><span>Cooll Code</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/9.jpg)"><span>Cooll Timer</span></div>
        </div>
    </section>
    <!-- Специальные предложения !-->
    <!-- Footer !-->
    <?php require_once "php-script/footer.php";?>
</body>
    <!--script !-->
    <script src="libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
</html>