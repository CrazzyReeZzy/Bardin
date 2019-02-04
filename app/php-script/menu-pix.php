
<?php // Для Меню кухни.
function excess_kitchen($files_kitchen) {
    $result = array();
    for ($i = 0; $i < count($files_kitchen); $i++) {
        if ($files_kitchen[$i] != "." && $files_kitchen[$i] != "..") $result[] = $files_kitchen[$i];
    }
    return $result;
  }
$dir_kitchen = "../img/menu/kitchen/"; // Путь к директории, в которой лежат изображения
$files_kitchen = scandir($dir_kitchen); // Получаем список файлов из этой директории
$files_kitchen = excess_kitchen($files_kitchen); // Удаляем лишние файлы
?>

<?php // Для винной карты wine list
function excess_wine($files_wine) {
    $result_wine = array();
    for ($i = 0; $i < count($files_wine); $i++) {
        if ($files_wine[$i] != "." && $files_wine[$i] != "..") $result_wine[] = $files_wine[$i];
    }
    return $result_wine;
  }
$dir_wine = "../img/menu/Wine list/"; // Путь к директории, в которой лежат изображения
$files_wine = scandir($dir_wine); // Получаем список файлов из этой директории
$files_wine = excess_wine($files_wine); // Удаляем лишние файлы
?>

<?php // для безлкогольных напитков Soft drink
function excess_soft($files_soft) {
    $result_soft = array();
    for ($i = 0; $i < count($files_soft); $i++) {
        if ($files_soft[$i] != "." && $files_soft[$i] != "..") $result_soft[] = $files_soft[$i];
    }
    return $result_soft;
  }
$dir_soft = "../img/menu/Soft drink/"; // Путь к директории, в которой лежат изображения
$files_soft = scandir($dir_soft); // Получаем список файлов из этой директории
$files_soft = excess_soft($files_soft); // Удаляем лишние файлы
?>

<?php // для бизнес ланчей business lunch
function excess_business($files_business) {
    $result_business = array();
    for ($i = 0; $i < count($files_business); $i++) {
        if ($files_business[$i] != "." && $files_business[$i] != "..") $result_business[] = $files_business[$i];
    }
    return $result_business;
  }
$dir_business = "../img/menu/business lunch/"; // Путь к директории, в которой лежат изображения
$files_business = scandir($dir_business); // Получаем список файлов из этой директории
$files_business = excess_soft($files_business); // Удаляем лишние файлы
?>

<?php // для бизнес ланчей hookah
function excess_hookah($files_hookah) {
    $result_hookah = array();
    for ($i = 0; $i < count($files_hookah); $i++) {
        if ($files_hookah[$i] != "." && $files_hookah[$i] != "..") $result_hookah[] = $files_hookah[$i];
    }
    return $result_hookah;
  }
$dir_hookah = "../img/menu/hookah/"; // Путь к директории, в которой лежат изображения
$files_hookah = scandir($dir_hookah); // Получаем список файлов из этой директории
$files_hookah = excess_soft($files_hookah); // Удаляем лишние файлы
?>