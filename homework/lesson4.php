<?php
# Задания-№1:

$age = 0; // Возраст

// Условия №1: Возраст не может быть отритцательным.
if ($age <= 0) {
    echo "Возраст не может быть отритцательным или равен к 0.";
}
// Условия №2: Если возраст меньше 18, то "Доступ запрещен".
else if ($age < 18) {
    echo "Доступ запрещен";
}
// Условия №3: Если возраст от 18 до 65 — "Доступ разрешен".
else if (($age >= 18) && ($age < 65)) {
    echo "Доступ разрешен";
}
// Условия №4: Если возраст больше 65 — "Пользователь пожилой".
else if ($age >= 65) {
    echo "Пользователь пожилой";
}

echo "<br>"; // Новая строка

# Задания-№2:

$score = 50; // Оценка

// Условия №1: Оценка не может быть отрицательной!
if ($score < 0) {
    echo "Оценка не может быть отрицательной!";
}
// Условия №2: Менее 50 — "Неудовлетворительно".
else if ($score < 50) {
    echo "Неудовлетворительно.";
}
// Условия №3: От 50 до 69 — "Удовлетворительно".
else if ($score < 70) {
    echo "Удовлетворительно.";
}
// Условия №4: От 70 до 89 — "Хорошо".
else if ($score < 90) {
    echo "Хорошо.";
}
// Условия №5: От 90 до 100 — "Отлично".
else if ($score <= 100) {
    echo "Отлично.";
} else {
    echo "Максимальное и минимальное значение баллов в диапазоне от 0 до 100.";
}

echo "<br>"; // Новая строка 

# Задания-№3:

$number = 3; // Число который мы будем проверять.

// Способ №1:
echo "Указанный вами число: " . $number . " ";                    // В PHP тернарный оператор используется для сокращенного написания условных выражений. Он имеет следующий синтаксис:
echo ($number % 2 == 0) ? "-четное число." : "-нечетное число."; // условие ? выражение_если_истина : выражение_если_ложь;

echo "<br>"; // Новая строка

// Способ №2:

if ($number % 2 == 0) {
    echo "Указанный вами число: " . $number . " -четное число.";
} else {
    echo "Указанный вами число: " . $number . " -нечетное число.";
}

echo "<br>"; // Новая строка 

# Задания-№4:

$daynumber = 4; // Число дней 

switch ($daynumber) {
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    case 7:
        echo "Воскресенье"; // sadasdasda
        break;
    default:
        echo "Некорректное значение";
}

echo "<br>"; // Новая строка 

# Задания-№5:



