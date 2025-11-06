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
        addition();
        break;
    case '3':
        break;
    case '4':
        divide();
        break;
    case '5':
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

function divide(){
    if ($num1 == null && $num2 == null && $num !=2) {
        echo "Введите правильные числа (пункт 1)\n";
        return;
    }
    $result = $num1 / $num2;
    echo "Результат деления: {$num1} / {$num2} = {$result}\n";
function addition(){
    if ($num1 == null && $num2 == null) {
        echo "Сначала введите числа (пункт 1)\n";
        return;
    }
    $result = $num1 + $num2;
    echo "Результат сложения: {$num1} + {$num2} = {$result}\n";
}
?>