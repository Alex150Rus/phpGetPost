<ul>
  <li><a href="?page=1">Задание1 (форма-калькулятор)</a></li>
  <li><a href="?page=2">Задание2 (калькулятор-кнопочный)</a></li>
  <li><a href="?page=3">Каталог товаров. Можно перейти на отдельный товар, где можно добавить и
    просмотреть отзывы</a></li>
</ul>

<?php

include('connect.php');

switch ($_GET['page']) {
    case 1:
        include('1.php');
        break;
    case 2:
        include('2.php');
        break;
    case 3:
        include('products.php');
        break;
};

?>