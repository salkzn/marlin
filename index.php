<?php
//Блок 1
//Основы синтаксиса
//Примеры решения задач
//Задание 1
echo "<h4>Примеры решения задач </br>Lesson 1 </h4>";
$var = "hello";
echo $var[0];
echo $var[1];
echo $var[4];

//Задание 2
echo "<h4>Lesson 2 </h4>";
$second = 60;
$hours = 2;
$res = $hours * ($second * 60);
echo "Количество секунд в $hours часах равна $res";

//Задание 3
echo "<h4>Lesson 3 </h4>";
$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;

//Задачи для решения
//echo "</br></br>";
echo "<h4>Работа с переменными</h4>";
$a = 3;
echo "Переменная а равна: $a</br></br>";

$a = 10;
$b = 2;
$resSum = $a + $b;
$resRazn = $a - $b;
$resProizv = $a * $b;
$resDelen = $a / $b;
echo "Переменная а равна: $a</br>Переменная b равна: $b</br>Их сумма: $resSum</br>Их разность: $resRazn</br>
Их произведение: $resProizv</br>Их частное: $resDelen";

echo "</br></br>";
$c = 15;
$d = 2;
$result = $c + $d;
echo $result;
echo "</br></br>";

$a=10;
$b=2;
$c=5;
echo $a + $b + $c;
echo "</br></br>";

$a=17;
$b=2;
$c= $a - $b;
$d = 7;
$result = $c + $d;
echo $result;
echo "</br></br>";

$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;
?>

<?php

//Блок 1
//Основы работы с массивами на PHP
echo "</br></br>";

?>
<?php

//Блок 1
//Основы работы с массивами на PHP
/*echo "</br></br>";
$arr=['a', 'b', 'c'];
var_dump($arr);

echo "</br></br>";
echo $arr[0];
echo $arr[1];
echo $arr[2];

echo "</br></br>";
$arr=['a', 'b', 'c', 'd'];
echo "$arr[0] + $arr[1], $arr[2] + $arr[3]";

echo "</br></br>";
$arr=[2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result;*/

/*echo "</br></br>";
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;*/

/*echo "</br></br>";
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo  $arr['c'].'</br>';
echo  $arr['a'] + $arr['b'] + $arr['c'];*/

/*$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo  $arr['Петя'].'</br>';
echo  $arr['Коля'];*/

/*$arr = [1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
echo $arr[1];
$day = $arr[3];
echo $day;*/

/*$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr['cms'][0].', '.$arr['cms'][2].', '.$arr['colors']['green'].', '.$arr['colors']['red'];*/

/*$arr = [
    'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en'=>[1=>'mo', 'tu', 'we', 'fe', 'fr', 'sa', 'so']
];
$lang = 'ru';
$day = 4;
echo $arr[$lang][$day];
echo $arr['ru'][0].', '.$arr['en'][2];*/

?>




