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
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/menu-media.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <!-- Подключаем меню !-->
    <?php require_once "../php-script/header.php";?>
    <!-- Главная секция !-->
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
            <div class="wrap-content"></div>
        </div>
    </main>
    <!-- Footer !-->
    <?php require_once "../php-script/footer.php";?>
</body>
</html>