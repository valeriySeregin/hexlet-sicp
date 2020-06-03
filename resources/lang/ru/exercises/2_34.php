<?php

return [
    'title' => "Схема Горнера",
    'description' => [
        '1' =>
        "Вычисление многочлена с переменной x при данном значении x можно сформулировать в виде накопления. Мы вычисляем многочлен",
        '2' =>
        "по известному алгоритму, называемому схема Горнера (Horner’s rule), которое переписывает формулу в виде",
        '3' =>
        "Другими словами, мы начинаем с aₙ, умножаем его на x, и так далее, пока не достигнем a₀. " .
        "Заполните пропуски в следующей заготовке так, чтобы получить процедуру, которая вычисляет многочлены по схеме Горнера. " .
        "Предполагается, что коэффициенты многочлена представлены в виде последовательности, от a₀ до aₙ.",
        '4' =>
        "Например, чтобы вычислить 1 + 3x + 5x³ + x⁵ в точке x = 2, нужно ввести"
    ]
];
