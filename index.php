<?php
echo "Дубовик Глеб 9ПО-32"
displayMenu();
$num1;
$num2;

$choice = readline();
switch ($choice) {
    case '1':
        inputNumbers();
        break;
    case '2':
        break;
    case '3':
        break;
    case '4':
        break;
    case '5':
        exponentiation();
        break;
    default:
        echo "Неверный выбор. Попробуйте снова.\n";
}

function displayMenu() {
    echo "КАЛЬКУЛЯТОР\n";
    echo "1. Ввести два числа\n";
    echo "2. Выполнить сложение\n";
    echo "3. Выполнить вычитание\n";
    echo "4. Выполнить деление\n";
    echo "5. Возвести число в степень\n";
    echo "Выберите пункт меню: ";
}   

function exponentiation(){
    if ($num1 == 0 && $num2 == 0) {
        echo "Сначала введите числа (пункт 1)\n";
        return;
    }
    $result = pow($num1, $num2);
    echo "Результат возведения в степень: {$num1} ^ {$num2} = {$result}\n";
}

?>