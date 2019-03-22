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
    <link rel="stylesheet" href="../css/album.css">
    <link rel="stylesheet" href="../css/album-media.css">
    <link rel="stylesheet" href="../libs/slick/slick.css">
    <link rel="stylesheet" href="../libs/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../libs/magnific-popup/magnific-popup.css">
</head>
<body>
    <!-- Подключусь к базе данных !-->
    <?php include "../php-script/connection.php"; ?>
    <?php 
        $currentname = $_GET['name'];
        $listname = mysqli_query($connection, "SELECT * FROM `gallery` WHERE `name` = '$currentname' ");
        $titel = mysqli_query($connection, "SELECT * FROM `gallery` WHERE `name` = '$currentname' ");
    ?>
    <header class = "header" id = "header">
        <?php require_once "../php-script/header.php";?>
        <?php require_once "../php-script/offer.php";?>
        <div class="utp">
            <h1>Альбом</h1>
            <p><?php while ( $tit =  mysqli_fetch_assoc($titel) ) { echo $tit['rus_name'];} ?></p>
        </div>
    </header>
    <section class = "album">
        <div class="wrap-album">
            <?php
                function excess($files) {
                    $result = array();
                    for ($i = 0; $i < count($files); $i++) {
                        if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
                    }
                    return $result;
                }
            while ( $link =  mysqli_fetch_assoc($listname) ) { $dir = "../img/gallery/" . $link['link'] . "/";}
            $files = scandir($dir); // Получаем список файлов из этой директории
            $files = excess($files); // Удаляем лишние файлы
            ?>
            <?php for ($i = 0; $i < count($files); $i++) { ?>
                <div class="card">
                    <a class = "item" href = "<?=$dir."/".$files[$i]?>"><img src="<?=$dir.$files[$i]?>" alt="Фотография"/></a>
                </div>
            <?php } ?>
        </div>
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
            $('.card').magnificPopup({
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