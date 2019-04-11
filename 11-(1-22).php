<!-- Задачи по учебнику Златопольского.
https://drive.google.com/file/d/0B6696ckkWj_zV1NsUHoxQzhOX1k/view?fbclid=IwAR2xqfLhiPuglwhqxZgugnO1VjqgrOqii7JK8AI-o5OYVsDWYxsGeFofxgk

Страницы 48-50 включительно
11.1 - 11.22
 -->
<!-- --------------------------------------------------- -->
<?php
echo 'ДЗ№3: Нагний А.:'.'<br/>'; /**/
echo 'Часть 1 из 2. Решение задач 11.1 - 11.22.'.'<br/>'; /**/
echo 'Источник: https://drive.google.com/file/d/0B6696ckkWj_zV1NsUHoxQzhOX1k/view?fbclid=IwAR2xqfLhiPuglwhqxZgugnO1VjqgrOqii7JK8AI-o5OYVsDWYxsGeFofxgk'.'<br/>'; 
echo '<br/>'; 
?>
<!-- --------------------------------------------------- -->
<html lang="en">
<body>
<table border="1">
<?php
	echo '<b>'.'11.1. '.'</b>'.'Заполнить массив из восьми элементов следующими значениями: первый элемент массива равен 37, второй — 0, третий — 50, четвертый — 46, пятый — 34, шестой — 46, седьмой — 0, восьмой —13.'.'<br/>';
	$arr =[
		0 => 37,
		1 => 0,
		2 => 50,
		3 => 46,
		4 => 34,
		5 => 46,
		6 => 0,
		7 => 13,		
	];
	foreach ($arr as $key => $element) {
		?>
		<tr>
		<td width="50" align="center"><?php echo $key?></td>
		<td width="50" align="center"><?php echo $element?></td>
	</tr>
	<?php
}
?> 
	</table>	
</body>
</html>

<?php
echo '<b>'.'11.2. '.'</b>'.'Заполнить массив из десяти элементов значениями, вводимыми с клавиатуры в ходе выполнения программы.'.'<br/>';
?>
<!DOCTYPE html>
<html lang="ru">
<body>
	<table border="1">
		<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
			<input type="text" name="0" required placeholder="ввод" size="5">
			<input type="text" name="1" required placeholder="ввод" size="5">
			<input type="text" name="2" required placeholder="ввод" size="5">
			<input type="text" name="3" required placeholder="ввод" size="5">
			<input type="text" name="4" required placeholder="ввод" size="5">
			<input type="text" name="5" required placeholder="ввод" size="5">
			<input type="text" name="6" required placeholder="ввод" size="5">
			<input type="text" name="7" required placeholder="ввод" size="5">
			<input type="text" name="8" required placeholder="ввод" size="5">
			<input type="text" name="9" required placeholder="ввод" size="5">
			<input type="submit" value="Далее">
		</form>
<?php
	$array = [
		0 => $_GET['0'],
		1 => $_GET['1'],
		2 => $_GET['2'],
		3 => $_GET['3'],
		4 => $_GET['4'],
		5 => $_GET['5'],
		6 => $_GET['6'],
		7 => $_GET['7'],
		8 => $_GET['8'],
		9 => $_GET['9'],
	];
	foreach ($array as $k => $el) {?>
		<tr>
			<td width="50" align="center"><?php echo $k?></td>
			<td width="50" align="center"><?php echo $el?></td>
		</tr>
	<?php
	}
	?> 
	</table>	
</body>
</html>

<?php
echo '<b>'.'11.3.'.'</b>'.'Заполнить массив из пятнадцати элементов случайным образом:'.'<br/>';
?>
<!DOCTYPE html>
<html lang="ru">
<body>
	<table border="1">
<?php
	echo '<tr style="display: flex; align-items: flex-start;"><td width="20%">'.'а) вещ. знач., лежащими в диапазоне от 0 до 1;'.'<br/>';
	for($i = 0; $i < 15; $i++) {
		$arra[$i] = rand(0,10)/10;
	}
	echo '<pre>';
	print_r($arra);
	/*$arra = [];
	while (count($arra) < 15) {
		$x = rand(0,10)/10;//этот вариант нашел в сети. но с rand(0,10)/10 не работает
		while (in_array($x, $arra) ){  
			$x = rand(0,10)/10;
		}
		$arra[] = $x;
	}*/
	echo '</td><td width="20%">'.'б) вещ. знач. х (22 <= х < 23);'.'<br/>';
	for($i = 0; $i < 15; $i++) {
		$arr[$i] = rand(220,229)/10;
	}
	//первый вариант вывода
	echo '<pre>';
	print_r($arr);
	echo '</td><td width="20%">'.'в) вещественными значениями х (0 <= х < 10);'.'<br/>';
	for($i = 0; $i < 15; $i++) {
		$arr[$i] = rand(0,9);
	}
	echo '<pre>';
	print_r($arr);

	echo '</td><td width="20%">'.'г) вещественными значениями х (-50 <= х < 50);'.'<br/>';
	for($i = 0; $i < 15; $i++) {
		$arr[$i] = rand(-50,49);
	}
	echo '<pre>';
	print_r($arr);
	echo '</td><td width="20%">'.'д) целыми значениями, лежащими в диапазоне от 0 до 10 включительно.'.'<br/>';
	for($i = 0; $i < 15; $i++) {
		$arr[$i] = rand(0,10);
	}
	echo '<pre>';
	print_r($arr);
	
	echo '</td></tr>';
	?>
		</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="ru">
<body>
	<table border="1">
<?php
echo '<tr style="display: flex; align-items: flex-start;"><td width="25%">';
echo '<b>'.'11.4.'.'</b>'.'Массив предназначен для хранения значений ростов двенадцати человек. С помощью датчика случайных чисел заполнить массив целыми значениями, лежащими в диапазоне от 163 до 190 включительно.'.'<br/>';

	for ($i=0; $i < 12; $i++) { 
			$group[$i] = rand(163,190);
		}
	echo '<pre>';
	print_r($group);

echo '</td><td width="25%">';

echo '<b>'.'11.5.'.'</b>'.'Массив предназначен для хранения значений весов двадцати человек. С помощью датчика случайных чисел заполнить массив целыми значениями, лежащими в диапазоне от 50 до 100 включительно.'.'<br/>';

	for ($i=0; $i < 20; $i++) { 
			$group[$i] = rand(150,100);
		}
	echo '<pre>';
	print_r($group);

	echo '</td><td width="25%">';

	echo '<b>'.'11.6.'.'</b>'.'Заполнить массив из двенадцати элементов так, как показано на рис. 11.1.'.'<br/>';

	for ($i=0; $i < 12; $i++) { 
			$group[$i] = $i+1;
		}
	echo '<pre>';
	print_r($group);

	echo '</td><td width="25%">';

	echo '<b>'.'11.7.'.'</b>'.'Заполнить массив из двадцати элементов так, как представлено на рис. 11.2.'.'<br/>';

	for ($i=0; $i < 20; $i++) { 
			$group[$i] = 20-$i;
		}
	echo '<pre>';
	print_r($group);
	echo '</td></tr>';

	echo '<tr><td>';
	echo '<b>'.'11.8.'.'</b>'.'Заполнить массив из восьми элементов таким образом, чтобы значения элементов при просмотре массива слева направо образовывали: 
а) убывающую последовательность; б) возрастающую последовательность. Варианты, представленные в задачах 11.6 и 11.7, не использовать.'.'<br/>';
	
	for ($i=0; $i < 8; $i++) { 
		$ar[$i] = rand(1,8);
	}
	print_r($ar);
	echo '<br/>';
	asort($ar);
	echo '<pre> а) '.print_r($ar).'</pre>';
	
	arsort($ar);
	echo '<pre> б) '.print_r($ar).'</pre>';
	//почему появляется единичка?
	echo '</td></tr>';
?>
	</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="ru">
<body>
	<table border="1">

<?php
echo '<b>'.'11.9.'.'</b>'.'Заполнить массив: 
а) десятью первыми членами арифметической прогрессии с известным первым членом прогрессии а и ее разностью р;
б) двадцатью первыми членами геометрической прогрессии с известным первым членом прогрессии а и ее знаменателем z;
в) двенадцатью первыми членами последовательности Фибоначчи (последовательности, в которой первые два члена равны 1, а каждый следующий равен сумме двух предыдущих).'.'<br/>';
echo '<tr style="display: flex; align-items: flex-start;"><td width="33.3%">';	
	$a = 7; 
	$p = 5; 
	echo 'а) Первый: '.$a.', Разность: '.$p.'<br/>';
	
	for ($i=1; $i < 10; $i++) { 
		$ar1[0] = $a;
		$ar1[$i] = $ar1[$i-1] + $p;
	}
	echo '<pre>';
	print_r($ar1);
	echo '<br/>';
echo '</td><td width="33.3%">';
	$a = 1000000; 
	$z = 2; 
	echo 'б) Первый: '.$a.', Знаменатель: '.$z.'<br/>';
	
	for ($i = 1; $i < 20; $i++) { 
		$ar2[0] = $a;
		$ar2[$i] = $ar2[$i-1] / $z;
	}
	echo '<pre>';
	print_r($ar2);
	echo '<br/>';
echo '</td><td width="33.3%">';
	$a = 1; 
	$b = 1; 
	echo 'в) Первый: '.$a.', Второй: '.$b.'<br/>';
	
		$ar3[0] = $a;
		$ar3[1] = $b;
	for ($i = 2; $i < 12; $i++) { 
		$ar3[$i] = $ar3[$i-2] + $ar3[$i-1];
	}
	echo '<pre>';
	print_r($ar3);
	echo '<br/>';
echo '</td></tr>';
?>
	</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="ru">
<body>
	<table border="1">
<?php
echo '<tr style="display: flex; align-items: flex-start;"><td width ="50%">';

	echo '<b>'.'11.10.'.'</b>'.'Дано натуральное число n (n <= 999999). Заполнить массив его цифрами, расположенными в обратном порядке (первый элемент равен последней цифре, второй — предпоследней и т. д.). Незаполненные элементы массива должны быть равны нулю. Элементы массива, являющиеся цифрами числа n, вывести на экран.'.'<br/>';
	$n = mt_rand(0, 999999); 
	echo 'Число: '.$n;
	
	for ($i=0; $i < 10; $i++) { 		
		$ar4[$i] = $n%10;
		$n = intdiv($n, 10);}
	echo '<pre>';
	print_r($ar4);
	echo '<br/>';
echo '</td><td width ="50%">';

	echo '<b>'.'11.11.'.'</b>'.'Используя датчик случайных чисел, заполнить массив из двадцати элементов неповторяющимися числами.'.'<br/>';
	
	for ($count=0; $count < 20; $count++) { 		
		$ar5[$count] = mt_rand(0, 50); 
		$prev = 0;
		while ($count > $prev) {
			if ($ar5[$count] == $ar5[$prev]) {
				$ar5[$count] = mt_rand(0, 50); 
				$prev = 0;
			}else{
				$prev++;
			}
		}
	}
	echo '<pre>';
	print_r($ar5);
	echo '<br/>';
	echo '</td></tr>';
?>
		
</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="ru">
<body>
	<table border="1">
		
<?php
	echo '<b>'.'11.12.'.'</b>'.'Заполнить массив:
а) двадцатью первыми натуральными числами, делящимися нацело на 13 или на 17 и находящимися в интервале, левая граница которого равна 300;
б) тридцатью первыми простыми числами (простым называется натуральное число, большее 1, не имеющее других делителей, кроме единицы и самого себя)..'.'<br/>';
echo '<tr style="display: flex; align-items: flex-start;">';
echo '<td width ="50%">';
	$num = 300;
	$count = 0;
	$i = 1;
	while ($count < 20 ) {
		$num += $i;
		if ($num%13 == 0 || $num%17 == 0) {
			$ar6[$count] = $num;
			$count++;
		}else{
			$i++;
		}
	}
	echo '<pre>';
	echo 'а) <br/>';
	print_r($ar6);
	echo '<br/>';

echo '</td><td width ="50%">';

	$count = 0;
	$num = 2;
	while ($count < 30) {
		$num_div = 0;
		for ($divider = 1; $divider <= $num; $divider++) { 
			if ($num%$divider == 0){
				$num_div++;
			}
		}
		if ($num_div == 2) {
			$ar7[$count] = $num;
			$count++;
			//echo '$num = '.$num.'<br/>';
		}
		$num++;
	}
	echo 'count = '.$count.'<br/>';
	echo '<pre>';
	echo 'б) <br/>';
	print_r($ar7);
	echo '<br/>';	
echo '</td><td>';

echo '<b>'.'11.13.'.'</b>'.'Составить программу вывода на экран любого элемента массива по его индексу.'.'<br/>';

	?>
	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		<input type="text" name="x" required placeholder="ввод № элемента" size="5">
		<input type="submit" value="Далее">
	</form>

<?php

foreach ($ar7 as $key => $value) {
	if ($key == $_GET['x']) {
		echo 'Ключу '.$key.' соответствует значение '.$value.'<br/>';
	}
}
?>
<?php
echo '<b>'.'11.14.'.'</b>'.'Вывести элементы массива на экран в обратном порядке.'.'<br/>';
//вариант 1
/*	$rev_ar7 = array_reverse($ar7);
	echo '<pre>';
	print_r($rev_ar7);
	echo '<pre>';
	$rev_ar7 = array_reverse($ar7, true);
	print_r($rev_ar7);*/

//вариант 2
	for ($i=0; $i < $count; $i++) { 
		$rev_ar7[$i] = $ar7[($count-1) - $i];
	}
	echo '<pre>';
	print_r($rev_ar7);
	?> 
	</tr>
</table>	
</body>
</html>
<br>
<?php
echo '<b>'.'11.15.'.'</b>'.'Дан массив. Составить программу:
а) расчета квадратного корня из любого элемента массива;
б) расчета среднего арифметического двух любых элементов массива.'.'<br/>';
	echo '<pre>';

	echo 'а) <br/>';
foreach ($ar7 as $key => $value) {
	if ($key == $_GET['x']) {
		echo 'Кв. корень эл-та ('.$key.') - '.$value.' = '.sqrt($value).'<br/>';
	}
}
echo 'б)'.'<br/>';
$x = rand(0,14);
$y = rand(0,14);
echo 'среднее эл-та ('.$x.')-'.$ar7[$x].' и эл-та ('.$y.')-'.$ar7[$y].' => '.(($ar7[$x]+$ar7[$y])/2).'<br/>';	
?>

<?php
echo '<b>'.'11.16.'.'</b>'.'Дан массив целых чисел. Выяснить:
а) является ли s-й элемент массива положительным числом;
б) является ли k-й элемент массива четным числом;
в) какой элемент массива больше: k-й или s-й.'.'<br/>';
	echo '<pre>';	
	
	$s = rand(0,4);
	$k = rand(0,4);
	
for ($i=0; $i < 5; $i++) { 
	$ar8[$i] = rand(-10,10);
};
	echo print_r($ar8);
	echo '<br/>';
	if ($ar8[$s] < 0) {
		echo 'a) Эл-т №'.$s.': ('.$ar8[$s].') - отрицат.'.'<br/>';
	}else{
		if ($ar8[$s] > 0) {
			echo 'a) Эл-т №'.$s.': ('.$ar8[$s].') - положит.'.'<br/>';
		}else{
			echo 'a) Эл-т №'.$s.': ('.$ar8[$s].') - ноль'.'<br/>';
		}
	}
	if ($ar8[$k] == 0) {
		echo 'б) Эл-т №'.$k.': ('.$ar8[$k].') - ноль'.'<br/>';
	}else{
		if ($ar8[$k]%2 == 0) {
			echo 'б) Эл-т №'.$k.': ('.$ar8[$k].') - четный'.'<br/>';
		}else{
			echo 'б) Эл-т №'.$k.': ('.$ar8[$k].') - нечетный'.'<br/>';
		}
	}
	if ($ar8[$k]>$ar8[$s]) {
		echo 'в) Эл-т №'.$k.' больше эл-та №'.$s.'<br/>';
	}else{
		if ($ar8[$k]<$ar8[$s]) {
			echo 'в) Эл-т №'.$s.' больше эл-та №'.$k.'<br/>';
		}else{
			echo 'в) Выбран один элемент №'.$k.'<br/>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<table>	
<?php
echo '<b>'.'11.17.'.'</b>'.'Дан массив. Все его элементы:
а) увеличить в 2 раза;
б) уменьшить на число А;
в) разделить на первый элемент.'.'<br/>';
echo '<b>'.'11.18.'.'</b>'.'Решается аналогично'.'<br/>';
	echo '<pre>';	
	
	$A = rand(1,5);
	echo 'A = '.$A.'<br/>';
echo '<tr><td>';
for ($i=0; $i < 5; $i++) { 
	$ar8[$i] = rand(-10,10);
	$ar9[$i] = $ar8[$i]; // это копирование массива в массив?
};
	echo '<pre>';	
	echo print_r($ar8);
	echo '<br/>';
echo '</td><td>';

echo 'а)'.'<br/>';
foreach ($ar8 as &$value) {
	$value = $value*2; // если применить амперсанд с foreach, то это новый массив?
}
echo '<pre>';	
echo print_r($ar8);
echo '</td><td>';

echo 'б)'.'<br/>';
foreach ($ar9 as &$value) {
	$value = $value-$A;
}
echo '<pre>';	
echo print_r($ar9);
echo '</td><td>';
	
echo 'в)'.'<br/>';
for ($i=0; $i < 5; $i++) { 
	if ($ar9[0] != 0){
		$ar10[$i] = round(($ar9[$i] / $ar9[0]),2);
	}else{
		echo 'На ноль делить нельзя'.'<br/>';
	}
}
	echo '<pre>';	
	echo print_r($ar10);
echo '</td></tr>';

?>
</table>

<table>	
<?php
echo '<b>'.'11.19.'.'</b>'.'Определить:
а) сумму всех элементов массива;
б) произведение всех элементов массива;
в) сумму квадратов всех элементов массива;
г) сумму шести первых элементов массива;
д) сумму элементов массива с k1-го по k2-й (значения k1 и k2 вводятся
с клавиатуры; k2 > k1);
е) среднее арифметическое всех элементов массива;
ж) среднее арифметическое элементов массива с s1-го по s2-й (значения s1
и s2 вводятся с клавиатуры; s2 > s1).'.'<br/>';

	$A = rand(1,5);
	echo 'A = '.$A;
echo '<tr><td>';
for ($i=0; $i < 10; $i++) { 
	$ar11[$i] = rand(-10,10);
};
	echo '<pre>';	
	echo print_r($ar11).'<br/>';
echo '</td><td>';

echo 'а) ';// если не применять pre, то меняется шрифт
	echo ' сумма эл-тов: '.array_sum($ar11).' '.'<br/>';
echo 'б) ';
	echo ' произведение: '.array_product($ar11).' '.'<br/>';

echo 'в) ';
	foreach ($ar11 as $value) {
		$sum_sq += $value**2;
	}
	echo 'сумма квад. эл-тов: '.$sum_sq.' '.'<br/>';

echo 'г) ';
	$sum_6 = 0;
	for ($i=0; $i < 6; $i++) { 
		$sum_6 += $ar11[$i];
	}
	echo 'сумма 6-ти 1-х эл-тов: '.$sum_6.' '.'<br/>';

echo 'д) ';
	$sum_sk = 0;
	$k1 = rand(0,4);
	$k2 = rand(5,9);

	for ($i = $k1; $i <= $k2; $i++) { 
		$sum_sk += $ar11[$i];
	}
	echo 'сумма с '.$k1.'-го по '.$k2.'-й эл-т: '.$sum_sk.' '.'<br/>';

	
echo 'е) ';
	for ($i = 0; $i < 10; $i++) { 
		$sum_mean += $ar11[$i];
	}
	echo 'сред.арифм.: '.($sum_mean/10).' '.'<br/>';

//ж) среднее арифметическое элементов массива с s1-го по s2-й (значения s1

echo 'ж) ';
	for ($i = $k1; $i <= $k2; $i++) { 
		$sum_mean_kk += $ar11[$i];
	}
	echo 'сред.арифм. с '.$k1.'-го по '.$k2.'-й эл-т.: '.($sum_mean_kk/($k2-$k1+1)).'<br/>';


echo '</td></tr>';

?>
</table>

<table>	
<?php
echo '<b>'.'11.20.'.'</b>'.'Дан массив a. Определить знакопеременную сумму a1 - a2 + a3 - a4 ...
Условный оператор и операцию возведения в степень не использовать.'.'<br/>';
echo '<tr><td>';
for ($i=0; $i < 5; $i++) { 
	$ar12[$i] = rand(-10,10);
};
	echo '<pre>';	
	echo print_r($ar12).'<br/>';
echo '</td><td>';
	$sum_sign = 0;
	$sign = 1;
	for ($i=0; $i < 5; $i++) {
		$sum_sign = $sum_sign + $sign*$ar12[$i];
		$sign = -$sign;
	}
	echo 'знакопеременная сумма эл-тов: '.$sum_sign.' '.'<br/>';

echo '</td></tr>';

echo '<b>'.'11.21.'.'</b>'.'В массиве хранятся сведения о количестве осадков, выпавших за каждый день января. Определить общее количество осадков за январь.'.'<br/>';
echo '<b>'.'11.22.'.'</b>'.'В массиве хранятся сведения о стоимости 12 различных предметов. Определить общую стоимость всех предметов.'.'<br/>';
echo 'Решается аналогично 1.19 а)'.'<br/>';

?>
</table>
</body>
</html>