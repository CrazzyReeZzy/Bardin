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
            <div><img src="img/main/slider/slide_one.jpg" alt="Караоке бар - блюда"
				style="height: 250px; width: 100%;"></div>
			<div><img src="img/main/slider/slide_two.jpg"  alt="Караоке бар - алкоголь" ></div>
			<div><img src="img/main/slider/slide_three.jpeg"  alt="Караоке бар - блюда" ></div>
			<div><img src="img/main/slider/slide_four.jpg"  alt="Караоке бар - В Екатеренбурге" ></div>
			<div><img src="img/main/slider/slide_five.jpg" alt="Караоке бар - В Екатеренбурге" ></div>
        </div>
    </section>
</body>
    <!--script !-->
    <script src="libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
</html>