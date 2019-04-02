<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bardin</title>
    <meta name="description" content="contacts">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/offer.css">
    <link rel="stylesheet" href="../css/contacts.css">
    <link rel="stylesheet" href="../css/contacts-media.css">
    <link rel="stylesheet" href="../libs/slick/slick.css">
    <link rel="stylesheet" href="../libs/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <header class = "header" id = "header">
        <?php require_once "../php-script/header.php";?>
        <?php require_once "../php-script/offer.php";?>
        <div class="utp">
            <h1>Контакты</h1>
            <p></p>
        </div>
        <section class = "map">
        <div class="contact">
            <p>г.Екатеринбург
                ул.Академика Бардина 37,2 этаж.<br><br>
                Телефон: 213-40-20<br><br>
                Часы работы:<br><br>
                вс по чт с 12-00 до 4-00<br>
                пт и сб с 12-00 до 6-00
            </p>
        </div>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acd4ed0890ff5e43a901f215135d96f27d83a253029113316ef12fb46393ddd09&amp;width=100%&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>
    </header>
    <!-- Footer !-->
    <?php require_once "../php-script/footer.php";?>   
</body>
    <!--script !-->
    <script src="../libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="../libs/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="../libs/slick/slick.min.js"></script>
    <script src="../js/slider-gallery.js"></script>
</html>