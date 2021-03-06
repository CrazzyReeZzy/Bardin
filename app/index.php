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
        <h2>Акции</h2>
        <div class="wrap-stock-grid">
            <div class="stock-item-grid" style="background-image: url(img/main/stock/autumn.jpg)"><span class = "front">При заказе 4 шотов пятый в подарок</span><span class = "back">Подробное описание</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/main/stock/drink.jpg)"><span class = "front">Скидка на бар 25% с вс по чт, кроме пива</span><span class = "back">Подробное описание</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/main/stock/spark.jpg)"><span class = "front">Скидка на кальян 25% с воскресенья по четверг</span><span class = "back">Подробное описание</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/main/stock/vodka.jpg)"><span class = "front">При заказе бутылки водки* селедочка в подарок</span><span class = "back">Подробное описание</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/main/stock/wine.jpg)"><span class = "front">При заказе бутылки вина* сырное вссорти в подарок</span><span class = "back">Подробное описание</span></div>
	  	    <div class="stock-item-grid" style="background-image: url(img/main/stock/dessert.jpg)"><span class = "front">Скидка 25% на меню кухни с вс по вт</span><span class = "back">Подробное описание</span></div>
        </div>
    </section>
    <!-- События !-->
    <section class = "events">
        <h2>События</h2>
        <div class = "wrap-events">
            <div class="wrap-events-item">
                <div class="events-item">
                    <p> <b>Далеко-далеко</b> за, словесными горами в стране гласных и согласных живут рыбные тексты. 
                        Вдали, не за текст большой себя над они он! Даль пояс своих злых лучше языком
                        реторический парадигматическая первую маленькая запятых океана. Переулка скатился,
                        подпоясал пор свой путь но взгляд рыбными, предупреждал ipsum свою за, использовало
                        всемогущая первую грамматики. Ее, раз.
                    </p>
                    <hr>
                </div>
                <div class="events-item">
                    <p> <b>Далеко-далеко</b> за, словесными горами в стране гласных и согласных живут рыбные тексты. 
                        Вдали, не за текст большой себя над они он! Даль пояс своих злых лучше языком
                        реторический парадигматическая первую маленькая запятых океана. Переулка скатился,
                        подпоясал пор свой путь но взгляд рыбными, предупреждал ipsum свою за, использовало
                        всемогущая первую грамматики. Ее, раз.
                    </p>
                    <hr>
                </div>
                <div class="events-item">
                    <p> <b>Далеко-далеко</b> за, словесными горами в стране гласных и согласных живут рыбные тексты. 
                        Вдали, не за текст большой себя над они он! Даль пояс своих злых лучше языком
                        реторический парадигматическая первую маленькая запятых океана. Переулка скатился,
                        подпоясал пор свой путь но взгляд рыбными, предупреждал ipsum свою за, использовало
                        всемогущая первую грамматики. Ее, раз.
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!--Ваше мероприятие !-->
    <section class = "party">
        <h2>Ваше мероприятие</h2>
        <div class="wrap-party-grid">
            <div class="party-item">
                <h3>Дни рождения</h3>
                <p>День рождения – долгожданный семейный праздник,
                    который приносит множество приятных минут,
                    из которых складываются лучшие воспоминания.
                    И этот день лучше провести с близкими и любимыми людьми,
                    в большой и дружной семье караоке бар «БардIN». 
                    Мы дарим вам скидку 15% на ваш праздник. 
                    День рождение в БардIN это: * Безлимитное караоке для вас и ваших гостей. 
                    * Возможность принести свой торт. * Танцы и ведущий с личными поздравлениями.
                    Подробности и предварительное бронирование по телефону +7 (343) 213-40-20
                </p>
            </div>
            <div class="party-item">
                <h3>Чтобы банкет удался, главное — правильно выбрать место</h3>
                <p>Если вы ищете место в Екатеринбурге для провидения корпоративов и банкетов,
                    «БардIN» станет для вас настоящей находкой. Найти идеальное место для большой компании не так просто.
                    Одному не подходит кухня, другому — вместительность зала, третьего не устраивает шоу программа. 
                    Чтобы урегулировать все разногласия, задуматься о выборе кафе или ресторана нужно заранее.
                    Караоке бар «БардIN» - это идеальное место для вас, понравится каждому.
                </p>
            </div>
            <div class="party-item">
                <h3>Мальчишники и Девишники</h3>
                <p>Весёлый мальчишник и девичник – это отличная возможность немного расслабиться 
                    перед свадьбой и прекрасный повод собрать самых близких
                    и отрывных ребят (девчонок) напоследок холостой жизни. 
                    Караоке бар «БардIN» организует и с удовольствием проведет этот день с вами
                    Для вас подарок скидка 15%. Все подробности может узнать, позвонив нам по нашему телефону,
                    либо написать нам в сообщество. Ждем вас! 
                    Необходимо предварительное бронирование по телефону +7 (343) 213-40-20
                </p>
            </div>
            <div class="party-item">
                <h3>Незабываемый корпоратив в ресторане Екатеренбурга</h3>
                <p>Создание феерии праздника — дело тонкое. 
                    Именно те нюансы, которые на первый взгляд кажутся незначительными, делают банкет запоминающимся.
                    Мы предлагаем Вас скидку в 15%! Все подробности может узнать, позвонив нам по нашему телефону, 
                    либо написать нам в сообщество. Ждем вас! Необходимо предварительное бронирование по телефону +7 (343) 213-40-20
                </p>
            </div>
        </div>
    </section>
    <!-- Кнопка перехода в меню !-->
    <section class = "go-to-menu">
        <a href="pages/menu.php">Посмотрите наше меню</a>
    </section>
    <!-- Footer !-->
    <?php require_once "php-script/footer.php";?>
</body>
    <!--script !-->
    <script src="libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
</html>