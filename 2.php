<form action="" method="post">
  <label for="first">Ввведите первый операнд:<br>
    <input id="first" type="text" name="first"><br><br>
  </label>
  <button name="add">+</button>
  <button name="diff">-</button>
  <button name="divide">/</button>
  <button name="mult">*</button><br><br>
  <label for="second">Ввведите второй операнд:<br>
    <input id="second" type="text" name="second"><br><br>
  </label>
</form>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fistNumber = (int)$_POST['first'];
    $secondNumber = (int)$_POST['second'];

    echo calculation($_POST, $fistNumber, $secondNumber);
};

function calculation($string, $one, $two)
{
    switch ($string) {
        case array_key_exists('add', $_POST):
            $three = $one + $two;
            return "Результат: $one + $two = $three";
            break;
        case array_key_exists('diff', $_POST):
            $three = $one - $two;
            return "Результат: $one - $two = $three";
            break;
        case array_key_exists('mult', $_POST):
            $three = $one * $two;
            return "Результат: $one * $two = $three";
            break;
        case array_key_exists('divide', $_POST):
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

function operation () {

}

;