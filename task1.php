<?php
/**
 *	Задача 1. PHP
 *	Написать функцию на PHP, которая вернет для заданного массива c числами $haystack,
 *	номер элемента массива, наиболее близкий к переданному значению $needle.
 *	Для равноудалённых элементов выбор не принципиален.
 *	А) Массив имеет произвольные значения
 *	Б) Значения элементов массива расположены по возрастающей
 */

// Решение A
$haystack = array(9, 2, 1, 6, 5);
$needle = 3;

$result_key = NULL;
$result_diff = NULL;
foreach ($haystack as $key => $value) {
	$diff = abs($value - $needle);
	if (is_null($result_key) || $result_diff > $diff) {
		$result_key = $key;
		$result_diff = $diff;
	}
}
// вывод $result_key;
print '<pre>';
print 'РЕШЕНИЕ A)' . PHP_EOL;
print '$haystack = ';
print_r($haystack);
print '$needle = ';
print_r($needle);
print PHP_EOL . '$result_key = ' . $result_key . PHP_EOL;
print  PHP_EOL . '-----------------------------' . PHP_EOL . PHP_EOL;

// Решение Б
// отличается только тем, что не проходим весь массив целиком (наличием break;)
$haystack = array(1, 2, 5, 6, 9);
$needle = 4;

$result_key = NULL;
$result_diff = NULL;
foreach ($haystack as $key => $value) {
	$diff = abs($value - $needle);
	if (is_null($result_key) || $result_diff > $diff) {
		$result_key = $key;
		$result_diff = $diff;
	} else {
		break;
	}
}
// вывод $result_key;
print 'РЕШЕНИЕ B)' . PHP_EOL;
print '$haystack = ';
print_r($haystack);
print '$needle = ';
print_r($needle);
print PHP_EOL . '$result_key = ' . $result_key . PHP_EOL;