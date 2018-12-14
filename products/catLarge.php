<?php

$html = <<<php

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>gallery</title>
  <style>
    #pictureWrapper {
      display: flex;
      justify-content: center;
    }
    p {
      text-align: center;
      font-weight: 900;
    }        
    form {
    text-align: center;
    }
  </style>
</head>
<body>
<section>
  <div id="pictureWrapper">
  forPictures
  </div>
</section>
</body>
</html>

php;

include('../connect.php');
include('../feedback.php');

$getStr = $_GET['id'];
$sql = "SELECT id, altName, LargeJpgFileName, counter FROM images WHERE id=$getStr";
$res = mysqli_query(connect(), $sql);

define('DIR_IMG', '../image');

while ($row = mysqli_fetch_assoc($res)) {

        $str = "<div><p>Цена: " . $row['counter'] . "$</p><img src = " . DIR_IMG . "/" . $row['LargeJpgFileName']
            . " width = '400' height= '200px' alt = " . $row['altName'] . "></div>";

}

$html = str_replace('forPictures', $str, $html);
echo $html;

echo showFeedBacks();

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 06.12.2018
 * Time: 14:32
 */