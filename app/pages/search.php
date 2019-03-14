<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bardin</title>
    <meta name="description" content="Каталог песен">
    <link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/var.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/offer.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/search-media.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <header class="header" id = "header">
        <?php require_once "../php-script/header.php";?>
        <?php require_once "../php-script/offer.php";?>
        <div class = "utp">
            <h1>Выбери песню</h1>
            <p>По душе</p>
        </div>
        <div class="control">
            <form class = "wrap-control" action="search.php" method="post">
                <div class = "btn-ru"><button class = "btn" name = "search-ru" >Открыть русский песенник</button></div>
                <div class = "btn-en"><button class = "btn" name = "search-en" >Открыть иностранный песенник</button></div>
                <div class = "field"><input class = "field-search" type="text" name = "search" id = "search" placeholder = "Какую песню вы ищите ?" ></div>
                <div class="toggle toggle-name">
                    <label>
                        <input class = "toggle-input" type="checkbox" name="toggle-name" id="toggle-name">
                        <span class = "toggle-box" ></span>
                        Искать только по названиям
                    </label>
                </div>
                <div class="toggle togle-autor">
                    <label>
                        <input class = "toggle-input" type="checkbox" name="toggle-autor" id="toggle-autor">
                        <span class = "toggle-box" ></span>
                        Искать только по исполнителям
                    </label>
                </div>
                <div class="btn-search"><button class="btn" type="submit" >Поиск</button></div>
            </form>
        </div>
    </header>
    <section class="search" id = "search">
        
    </section>
</body>
</html>