<form action="" method="post">
  <label for="first">Ввведите первый операнд:<br>
    <input id="first" type="text" name="first"><br><br>
  </label>
  <label for="second">Ввведите второй операнд:<br>
    <input id="second" type="text" name="second"><br><br>
  </label>
  <select name="select" id="">
    <option value="">выберите действие</option>
    <option name="add">сложить</option>
    <option name="difference">вычесть</option>
    <option name="mult">умножить</option>
    <option name="divide">разделить</option>
  </select><br><br>
  <input type="submit" value="Посчитать">
</form>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fistNumber = (int)$_POST['first'];
    $secondNumber = (int)$_POST['second'];
    $select = $_POST['select'];

    echo calculation($select, $fistNumber, $secondNumber);
};

function calculation($string, $one, $two)
{
    switch ($string) {
        case "сложить":
            $three = $one + $two;
            return "Результат: $one + $two = $three";
            break;
        case "вычесть":
            $three = $one - $two;
            return "Результат: $one - $two = $three";
            break;
        case "умножить":
            $three = $one * $two;
            return "Результат: $one * $two = $three";
            break;
        case "разделить":
            if ($two == 0) {
                return "Результат: на ноль делить нельзя";
            }
            $three = $one / $two;
            return "Результат: $one / $two = $three";
            break;
        case 0:
            return 'Результат: действие не выбрано';
            break;
    }
}

;