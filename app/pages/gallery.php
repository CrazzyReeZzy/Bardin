<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bardin</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/offer.css">
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="stylesheet" href="../css/gallery-media.css">
    <link rel="stylesheet" href="../libs/slick/slick.css">
    <link rel="stylesheet" href="../libs/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../libs/magnific-popup/magnific-popup.css">
</head>
<body>
    <header class = "header" id = "header">
        <?php require_once "../php-script/header.php";?>
        <?php require_once "../php-script/offer.php";?>
        <div class="utp">
            <h1>Фотогалерея</h1>
            <p>Посмотрите наши фотографии</p>
        </div>
    </header>
    <!-- Подключусь к базе данных !-->
    <?php include "../php-script/connection.php"; ?>
    <section class = "gallery">
        <div class="wrap-gallery">
            <?php require_once "../php-script/gallery-pix.php";?>
            <!--
            <div class="slide-card">
                <div class = "description">
                    <p class = "name">23 февраля</p>
                    <p class = "date">10.10.2018</p>
                    <a href="album.php?name=8marta">Открыть альбом</a>
                </div>
                <div class="slide">
                    <div><img src="../img/gallery/March 8/01.jpg" alt=""></div>
                    <div><img src="../img/gallery/March 8/02.jpg" alt=""></div>
                    <div><img src="../img/gallery/March 8/03.jpg" alt=""></div>
                    <div><img src="../img/gallery/March 8/04.jpg" alt=""></div>
                    <div><img src="../img/gallery/March 8/05.jpg" alt=""></div>
                    <div><img src="../img/gallery/March 8/06.jpg" alt=""></div>
                </div>
            </div>
            !-->

            <!-- Для мобильных устройств !-->
            <?php include "../php-script/connection.php"; ?>
            <?php require_once "../php-script/gallery-pix-mobi.php";?>
            <!--
            <div class="foto-card">
                <div class = "description">
                    <p class = "name">23 февраля</p>
                    <p class = "date">10.10.2018</p>
                    <a href="album.php?name=Dishes">Открыть альбом</a>
                </div>
                <div class="foto">
                    <img src="../img/gallery/March 8/01.jpg" alt="">
                </div>
            </div>
        </div>!-->
    </section>
    <!-- Footer !-->
    <?php require_once "../php-script/footer.php";?>   
</body>
    <!--script !-->
    <script src="../libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="../libs/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="../libs/slick/slick.min.js"></script>
    <script src="../js/slider-gallery.js"></script>
    <script>
            $('.slide').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Загрузка изображения #%curr%...',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                },
            disableOn: function() {
                if( $(window).width() < 600 ) {
                    return false;
                }
                    return true;
                }
            });
    </script>
</html>