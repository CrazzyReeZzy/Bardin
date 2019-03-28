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
            <form class = "wrap-control" action="search.php" method="POST">
                <div class = "field"><input class = "field-search" type="text" name = "search" id = "search" 
                    placeholder = "Какую песню вы ищите ?" required  value = "<?php
                    if (isset( $_POST['search-ru']) || isset( $_POST['search-en'] ) ){ echo ""; }
                    else {echo trim ($_POST['search'] , " \t\n\r\0\x0B" );} ?>"
                    maxlength="50" ></div>
                <div class="btn-search"><button class="btn" type="submit" >Поиск</button></div>
                <div class = "btn-ru"><button class = "btn" name = "search-ru" formnovalidate >Открыть русский песенник</button></div>
                <div class = "btn-en"><button class = "btn" name = "search-en" formnovalidate >Открыть иностранный песенник</button></div>
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
            </form>
        </div>
    </header>
    <section class="search" id = "search">
        <!-- Подключусь к базе данных !-->
        <?php include "../php-script/connection.php"; ?>
        <!-- Основной скрипт вывода информации !-->
        <?php
            // Cоздам необходимые переменные
            $codepade = mysqli_set_charset($connection,"utf-8"); // Кодировка
            $search = $_POST['search']; // Значение поиска
            $autor = $search; // Продублировал переменную для поиска по авторам.
            // Создаю первые запросы
            $count = mysqli_query($connection, "SELECT * FROM `tbl_name` WHERE `name` LIKE '%$search%'  OR  `autor` LIKE '%$autor%' LIMIT 50 ");
            // Для поиска по русским песням перехожу к другой кодировке
            //$search = iconv("UTF-8","Windows-1251",$search);
			//$autor = iconv("UTF-8","Windows-1251",$autor);
            $count1 = mysqli_query($connection, "SELECT * FROM `table 2` WHERE `name` LIKE '%$search%'  OR  `autor` LIKE '%$autor%' LIMIT 50 ");
            // Проверим была ли найдена хоты бы одна строчка
            if ((mysqli_num_rows($count) == 0 ) & (mysqli_num_rows($count1) == 0 ) ) {
                echo '<br>Нет результатов!'; // Если ничего не было найдено , выведем нет результатов
            }
            // Обработаем взаимодействие при нажатии на кнопки открыть русский / иностранный песенник
            // name = "search-ru" - Открыть русский песенник | name = "search-en" - Открыть иностранный песенник
            // Проверим была ли нажата кнопка, для этого создадим переменные
            $searchenls = isset($_POST['search-en'] ); // isset возвращает значение false или true
            $searchruls = isset($_POST['search-ru'] );
            // Если нажали на - открыть русский песенник
            if( isset( $_POST['search-ru'] ) ){
                $count = mysqli_query($connection, "SELECT * FROM `tbl_name` WHERE `name` = '   '  AND  `autor`= '  '   ");
				$count1 = mysqli_query($connection, "SELECT * FROM `table 2` WHERE `name` LIKE '%'  OR  `autor` LIKE '%'  ");
            }
            // Если нажали на - открыть иностранный песенник
            if( isset( $_POST['search-en'] ) ){
                $count1 = mysqli_query($connection, "SELECT * FROM `tbl_name` WHERE `name`= '   '  AND  `autor`= '  ' ");
				$count = mysqli_query($connection, "SELECT * FROM `tbl_name` WHERE `name` LIKE '%'  OR  `autor` LIKE '%' ");
            }
            //Обработаем взаимодействие с переключателями
            // name="toggle-name" - Искать только по названиям
            // name="toggle-autor - Искачать только по исполнителям
            $search_name=$_POST['toggle-name'];
            $search_autor=$_POST['toggle-autor'];
            // Если ищют только по названиям
            if ($search_name==true){
                $count = mysqli_query($connection, "SELECT * FROM `tbl_name` WHERE `name` LIKE '%$search%' LIMIT 50 ");
                $count1 = mysqli_query($connection, "SELECT * FROM `table 2` WHERE `name` LIKE '%$search%' LIMIT 50 ");
            }
            // Если ищут только по исполнителям
            if ($search_autor==true){
                $count = mysqli_query($connection, "SELECT * FROM `tbl_name` WHERE `autor` LIKE '%$search%' LIMIT 50");
                $count1 = mysqli_query($connection, "SELECT * FROM `table 2` WHERE `autor` LIKE '%$search%' LIMIT 50");
            }
            // Если оба чек-бокса выбраны то - проигнорируем
            if ($search_autor==true & $search_name==true){
                ;
            }
        ?>
        <!-- Создадим первую строчку таблицы !-->
        <table class = "wrap-search">
            <tr class = "fist-string">
                <th>Номер</th>
                <th>Название</th>
                <th>Автор</th>
            </tr>
            <!-- Оставшийся скприпт для вывода информации !-->
            <?php
                // Проверим, если это первая загрузка страницы, выведем "Самые популярные песни"
                if ($search == '' & $autor == '' &  ( !$searchruls == true & !$searchenls == true )){
                    ?> <h2 style="text-align: center; margin-top : 0px; padding-top: 0px;"><?php echo "";?></h2> <!-- Для вывода заголовка "Самые популяные песни" нужно будет написать еще один класс !-->
                    <?php
                    $count__first = mysqli_query($connection,
                    " SELECT * FROM `table 2` WHERE `nomer`= '36079' 
                    OR `nomer`= '1099' 
                    OR `nomer`= '38443' 
                    OR `nomer`= '44602' 
                    OR `nomer`= '49857' 
                    OR `nomer`= '39741' 
                    OR `nomer`= '44512' 
                    OR `nomer`= '1816' 
                    OR `nomer`= '44725' 
                    OR `nomer`= '44825' ");
                    while ($name__first =  mysqli_fetch_assoc($count__first)){
                        // Сменю кодировку для вывода
                        //$name__first['nomer'] = iconv("Windows-1251","UTF-8",$name__first['nomer']);
						//$name__first['name'] = iconv("Windows-1251","UTF-8",$name__first['name']);
                        //$name__first['autor'] = iconv("Windows-1251","UTF-8",$name__first['autor']);
                        // Вывожу
                        echo '<tr>';
						echo '<th>'. $name__first ['nomer']  . '</th>';
						echo '<th>'. $name__first ['name']  . '</th>';
						echo '<th>'. $name__first ['autor']  . '</th>';
						echo '</tr>';
                    }
                }
                else{
                    // Вывожу en запросы
                    while ($name =  mysqli_fetch_assoc($count)) {
                        echo '<tr>';
                        echo '<th>'. $name['nomer']  . '</th>';
                        echo '<th>'. $name['name']  . '</th>';
                        echo '<th>'. $name['autor']  . '</th>';
                        echo '</tr>';
                    }
                    //Вывожу ru запросы
                    while ($name1 =  mysqli_fetch_assoc($count1)) {
                        //$name1['nomer'] = iconv("Windows-1251","UTF-8",$name1['nomer']);
                        //$name1['name'] = iconv("Windows-1251","UTF-8",$name1['name']);
                        //$name1['autor'] = iconv("Windows-1251","UTF-8",$name1['autor']);
                        echo '<tr>';
                        echo '<th>'. $name1['nomer']  . '</th>';
                        echo '<th>'. $name1['name']  . '</th>';
                        echo '<th>'. $name1['autor']  . '</th>';
                        echo '</tr>';
                    }
                }
            ?>
        </table>

    </section>
</body>
<?php mysqli_close($connection);  ?>
</html>