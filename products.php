<?php

$sql = 'SELECT id, altName, MiniFileName, LargeFileName, counter FROM images';
$res = mysqli_query(connect(), $sql);

define('DIR_IMG', 'image');
define('DIR_PRODUCT', 'products');

while ($row = mysqli_fetch_assoc($res)) {
    $getStr = DIR_PRODUCT . "/" . "{$row['LargeFileName']}?id={$row['id']}";
    $str .= "<div><a href= " . $getStr . " target = '_blank'><img id = " . $row['id'] . " src = " . DIR_IMG . "/"
        . $row['MiniFileName'] . " width = '150px' height = '100px'  alt = " . $row['altName']
        . "></a><p>{$row['altName']}</p><p>Цена: " . $row['counter'] . "$</p></div>";
}

echo $str;
