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
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/menu-media.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../libs/magnific-popup/magnific-popup.css">
</head>
<body>
    <header class = "header" id = "header">
        <!-- Подключаем меню !-->
        <?php require_once "../php-script/header.php";?>
        <!-- Первая строка social,logo,phone !-->
        <?php require_once "../php-script/offer.php";?>
        <!-- УТП !-->
        <section style="text-align: center;font-size: 25px;">
            <h1>Меню</h1>
        </section>
    </header>
    <!-- Скрипт php создание адресов для вывода фотографий !-->
    <?php require_once "../php-script/menu-pix.php";?>
    <!-- Главная секция !-->
    <!--
    <main class = "main" id = "main">
        <h1>Меню</h1>
        <div class="wrap-main">
            <div class="wrap-button">
                <button class="btn bat0"></button>
                <button class="btn bat1"></button>
                <button class="btn bat2"></button>
                <button class="btn bat3"></button>
                <button class="btn bat4"></button>
            </div>
            <div class="wrap-content">
                <div class="wrap-bat0-grid">
                    <?php for ($i = 0; $i < count($files_kitchen); $i++) {?>
                        <img src="<?=$dir_kitchen."/".$files_kitchen[$i]?>" alt="Меню страница 0">
                    <?php } ?>
                </div>
                <div class="wrap-bat1-grid">
                    <?php for ($i = 0; $i < count($files_wine); $i++) {?>
                    <img src="<?=$dir_wine."/".$files_wine[$i]?>" alt="Меню страница 1">
                    <?php } ?>
                </div>
                <div class="wrap-bat2-grid">
                    <?php for ($i = 0; $i < count($files_soft); $i++) {?>
                    <img src="<?=$dir_soft."/".$files_soft[$i]?>" alt="Меню страница 2">
                    <?php } ?>
                </div>
                <div class="wrap-bat3-grid">
                    <?php for ($i = 0; $i < count($files_business); $i++) {?>
                    <img src="<?=$dir_business."/".$files_business[$i]?>" alt="Меню страница 3">
                    <?php } ?>
                </div>
                <div class="wrap-bat4-grid">
                    <?php for ($i = 0; $i < count($files_hookah); $i++) {?>
                    <img src="<?=$dir_hookah."/".$files_hookah[$i]?>" alt="Меню страница 3">
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    !-->
    <!-- Footer !-->
    <?php require_once "../php-script/footer.php";?>
     <!--script !-->
    <script src="../libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="../js/menu.js"></script>
</body>
</html>