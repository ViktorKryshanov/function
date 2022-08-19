<?php
echo '<pre>';
$textStorage = [ 
	0 => [
		'title' => 'ГОЛ', 
		'text' => 'зенит забил гол'
	], 
	1 => [
		'title' => 'пас', 
		'text' => 'спартак отдал пас'
	]
];
print_r($textStorage);
// функция add для добавления нового поста (заголовка и текста) в массив.
// title - заголовок нового поста
// text - текст нового поста
// textStorage - массив с постами (передается по ссылке)
function add ($title, $text, &$textStorage) {
	$textStorage[] = [
		'title' => $title,
		'text' => $text
	];
}
add ('удар', 'хороший удар', $textStorage);
add ('удар2', 'хороший удар2', $textStorage);
print_r($textStorage);
// функция для удаления поста из массива
// key - ключ поста, который необходимо удалить
// textStorage - массив с постами (передается по ссылке)
// возвращать true в случае, если такой номер (индекс) существует, и false, если такого номера (индекса) в массиве не оказалось. 
function remove ($key, &$textStorage) {
	if ($textStorage[$key]) {
		unset ($textStorage[$key]);
		return true;
	} else {
		return false;
	}
}
var_dump(remove (0, $textStorage));
var_dump(remove (5, $textStorage));
print_r($textStorage);

// Суть функции редактирования состоит в том, что мы должны иметь возможность обновить текст или заголовок выбранного элемента массива.
// key - ключ поста, который необходимо обновить
// title - новый заголовок
// text - новый текст
// textStorage - массив с постами (передается по ссылке)
// Пусть функция возвращает true, если текст с нужным индексом существует, и false, если вдруг такого текста в массиве не оказалось.
function edit ($key, $title, $text, &$textStorage) {
	if ($textStorage[$key]) {
		$textStorage[$key] = [
			'title' => $title,
			'text' => $text
		];
		return true;
	} else {
		return false;
	}
}
var_dump(edit (1, 'бомба', 'атомная бомба', $textStorage));
print_r($textStorage);
var_dump(edit (7, 'бомба1', 'атомная бомба1', $textStorage));
print_r($textStorage);

