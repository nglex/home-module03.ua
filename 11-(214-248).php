<!-- Задачи по учебнику Златопольского.
https://drive.google.com/file/d/0B6696ckkWj_zV1NsUHoxQzhOX1k/view?fbclid=IwAR2xqfLhiPuglwhqxZgugnO1VjqgrOqii7JK8AI-o5OYVsDWYxsGeFofxgk

11.214.- 11.248.
 -->
<!-- --------------------------------------------------- -->
<?php
echo 'ДЗ№3: Нагний А.:'.'<br/>'; 
echo 'Часть 2 из 2. Решение задач 11.214 - 11.248.'.'<br/>'; /**/
echo 'Источник: https://drive.google.com/file/d/0B6696ckkWj_zV1NsUHoxQzhOX1k/view?fbclid=IwAR2xqfLhiPuglwhqxZgugnO1VjqgrOqii7JK8AI-o5OYVsDWYxsGeFofxgk'.'<br/>'; 
echo '<br/>'; 
?>
<!-- --------------------------------------------------- -->
<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>'.'11.214.'.'</b>'.' Фирме принадлежат два магазина. Известна стоимость товаров, проданных в каждом магазине за каждый день в июле и августе, которая хранится в двух массивах. Получить общую стоимость проданных фирмой товаров за два месяца.'.'<br/>';

//Вариант 1
for ($i=0; $i < 31; $i++) { 
		$jul1[$i] = rand(1,10);
		$aug1[$i] = rand(1,10);
		$jul2[$i] = rand(1,10);
		$aug2[$i] = rand(1,10);
}
$sum = $jul1 + $aug1 + $jul2 + $aug2;
	
echo '<tr><td>'.'<pre>';
	echo 'Магазин №1'.'<br/>';
	echo 'Июль: ';
	echo print_r($jul1);
	echo 'sum1 = '.$sum1 = array_sum($jul1);

echo '</td><td>'.'<pre>';
	echo 'Магазин №1'.'<br/>';
	echo 'Август: ';
	echo print_r($aug1);
	echo 'sum2 = '.$sum2 = array_sum($aug1);

echo '</td><td>'.'<pre>';
	echo 'Магазин №2'.'<br/>';
	echo 'Июль: ';
	echo print_r($jul2);
	echo 'sum3 = '.$sum3 = array_sum($jul2);

echo '</td><td>'.'<pre>';
	echo 'Магазин №2'.'<br/>';
	echo 'Август: ';
	echo print_r($aug2);
	echo 'sum4 = '.$sum4 = array_sum($aug2);

echo '</td><td>'.'<pre>';
	echo 'total = '.$sum = $sum1 + $sum2 + $sum3 + $sum4;
echo '</td></tr>';

?>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<body>
<table border="1">
	<tr>
		
			<?php
			//Вариант 2

			$sum = 0;
			for ($j=0; $j < 4; $j++) { 
				for ($i=0; $i < 31; $i++) { 
					$month[$j][$i] = rand(1,10);
					$sum += $month[$j][$i];
				}
			}
			foreach ($month as $key => $value) {
				echo '<tr>';
				echo '<td>'.'Месяц '.$key.'</td>';	
				$sm = 0;
				foreach ($value as $key => $value1) {
					echo '<td>';	
					echo $value1;
					echo '</td>';	
					$sm += $value1;
				}
				echo '<td>'.'Сумма: '.$sm.'</td>';	
				echo '</tr>';	
			}
			echo 'sum = '.$sum;
			?>
		
	</tr>
</table>	
</body>
</html>

<?php
echo '<br/>';	
echo '<b>'.'11.215.'.'</b>'.' Известно количество мячей, забитых футбольной командой за каждую игру в двух чемпионатах, которое хранится в двух массивах. В каждом из чемпионатов команда сыграла 26 игр. Найти общее количество мячей, забитых командой в двух чемпионатах.'.'<br/>';
?>

<html lang="ru">
<body>
<table border="1">
	<tr>
		<?php
			$total = 0;
			for ($j=1; $j <= 2; $j++) { 
				for ($i=0; $i < 26; $i++) { 
					$goal[$j][$i] = rand(1,10);
					$total += $goal[$j][$i];
				}
			}
			foreach ($goal as $num => $champ) {
				echo '<tr>';
				echo '<td>'.'Чемпионат '.$num.'</td>';	
				$sub_total = 0;
				foreach ($champ as $game => $goals) {
					echo '<td>';	
					echo $goals;
					echo '</td>';	
					$sub_total += $goals;
				}
				echo '<td>'.'Сумма: '.$sub_total.'</td>';	
				echo '</tr>';	
			}
			echo 'sum = '.$total;
			?>
		
	</tr>
</table>	
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<body>

<?php
echo '<br/>';	
echo '<b>'.'11.216.'.'</b>'.' В области 20 районов. Площади, засеянные пшеницей (в гектарах), и урожай, собранный в каждом районе (в центнерах), хранятся в двух массивах. Определить среднюю урожайность пшеницы по каждому району и по области в целом.
Задачу решить двумя способами:
1) без использования дополнительного (третьего) массива;
2) с использованием дополнительного массива.'.'<br/>';

?>
<table border="1" width="85%">
	
		<?php
		echo '1) <br/>';	
			for ($j=1; $j <= 20; $j++) { 
				$k = rand(1,10); // количество площадей в районе
				for ($i=0; $i < $k; $i++) {
					$area[$i] = rand(1, 10); // i-я площ. j-го р-на, га
					$crop[$i] = rand(1, 10); // урож. с га i-й площ. j-го р-на
					$ar_cr[$j][$i] = $area[$i]*$crop[$i]; // урож. i-й площ.j-го р-на.
				}
			}
			$crop = 0;
			foreach ($ar_cr as $num => $dist) {
				echo '<tr >';
				echo '<td style="background: lightyellow; width: 12%;">'.'Район: '.$num.'</td>';	
				$sub_crop = 0;
					echo '<td >';	
				foreach ($dist as $plot_N => $ar) {
					echo $ar.', ';
					$sub_crop += $ar;
				}
				echo '</td>';	
				$mean = round($sub_crop / ($plot_N+1),2);
				echo '<td style="background: lightgreen; width: 25%;">'.'Ср. по р-ну: '.$mean.'</td>';	
				echo '</tr>';	
				$crop += $mean;
			}
			$mean_reg = round($crop / ($num+1),2);
			echo '<tr style="background: lightpink;"><td>'.'Ср. по обл.: '.$mean_reg.'</td></tr>';	
		?>
	
</table>	
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<body>
<table border="1" width="100%">
<?php
		echo '2) <br/>';	
		for ($i=1; $i <= 20; $i++) {
			$d = rand(1,10); // количество площадей в районе
			$sub_total = 0;
			for ($m=1; $m <= $d; $m++) { 
				$a[$m] = rand(1, 10); // i-я площ. 
				$c[$m] = rand(1, 10); // урож. с га i-й площ.
				$sub_total += $a[$m]*$c[$m];
			}
			echo '<tr><td style="background: lightyellow;">';
				echo '<br/>'.'район №: '.$i.'<br/>';	
				echo 'Кол-во площадей ='.$d;
			echo '</td><td>';
			echo '<pre>';
				var_dump($a);
			echo '</td><td>';
			echo '<pre>';
				var_dump($c);
			$mean_sub[$i] = round($sub_total/$d, 2);
			echo '</td><td style="background: lightgreen;">';
			echo $i.') Всего по р-ну = '.$sub_total.' га'.'<br/>';
			echo  'Ср. с га по р-ну = '.$mean_sub[$i].' га'.'<br/>';
			echo '</td></tr>';
			$total += $mean_sub[$i];
		}

?>
</table>	
<table border="1" width="20%">
	<?php
		foreach ($mean_sub as $key => $value) {
		echo '<tr>';
			echo '<td>'.$key.'</td><td>'.$value.'</td>';
		echo '</tr>';
		}
		/*echo '<pre>';
		print_r($mean_sub);*/
		$mean_total = round($total/20, 2);
		echo '<tr style="background: lightpink;"><td>'.'Ср. по обл. = '.'</td><td>'.$mean_total.'</td></tr>';
	?>
</table>	
</body>
</html>

<?php
echo '<br/>';	
echo '<b>'.'11.217.'.'</b>'.' Решается аналогично задаче 11.216'.'<br/>';

?>

<!DOCTYPE html>
<html lang="ru">
<body>
<?php
echo '<br/>';	
echo '<b>'.'11.218.'.'</b>'.' Размеры 12 параллелепипедов (длина, ширина, высота) хранятся в трех массивах. Вывести на экран объемы каждой фигуры.
Задачу решить двумя способами:
1) без использования дополнительного (третьего) массива;
2) с использованием дополнительного массива'.'<br/>';

echo '1) <br/>';	
	for ($i=1; $i <= 12; $i++) { 
		$ArrH[$i] = rand(1,10);
		$ArrW[$i] = rand(1,10);
		$ArrL[$i] = rand(1,10);
		$volume[$i] = $ArrH[$i]*$ArrW[$i]*$ArrL[$i];
	}
		echo '<table border="1" width="100%"><tr><td width="20%">';
		echo '<pre>';
		print_r($volume);
		echo '</tr></table>';
	echo '<table border="1" width="100%"><tr><td width="33.3%">';
	echo '<pre>';
	echo 'Высота'.'<br/>';
		print_r($ArrH);
	echo '</td><td width="33.3%">';
	echo '<pre>';
	echo 'Ширина'.'<br/>';
		print_r($ArrW);
	echo '</td><td width="33.3%">';
	echo '<pre>';
	echo 'Длина'.'<br/>';
		print_r($ArrL);
	echo '</td></tr></table>';

echo '2) <br/>';
	
	for ($j=1; $j <= 12; $j++) { 
		$ArH[$j] = rand(1,10);
		$ArW[$j] = rand(1,10);
		$ArL[$j] = rand(1,10);
		$vol = $ArH[$j]*$ArW[$j]*$ArL[$j];
		
		echo '<sup>'.$j.')'.'</sup>'.$vol.',  ';
		
	}
	

	echo '<table border="1" width="100%"><tr><td width="33.3%">';
	echo '<pre>';
	echo 'Высота'.'<br/>';
		print_r($ArH);
	echo '</td><td width="33.3%">';
	echo '<pre>';
	echo 'Ширина'.'<br/>';
		print_r($ArW);
	echo '</td><td width="33.3%">';
	echo '<pre>';
	echo 'Длина'.'<br/>';
		print_r($ArL);
	echo '</td></tr></table>';
?>
</body>
</html>

<?php
echo '<br/>';	
echo '<b>'.'11.219.'.'</b>'.' Известны данные о мощности двигателя (в лошадиных силах — л. с.) и стоимости 30-ти марок легковых автомобилей. Напечатать стоимость каждого из автомобилей, у которых мощность двигателя не превышает 80 л. с.'.'<br/>';

	$HP = range(55,200,5);		
	$price = range(11000,40000,1000);


	echo '<table border="1" width="100%"><tr><td width="50%">';
	
	echo '<pre>';
	echo 'Мощность двигателя'.'<br/>';
		print_r($HP);
	echo '</pre>';

	echo '</td><td width="50%">';
	
	echo '<pre>';
	echo 'Стоимость'.'<br/>';
		print_r($price);
	echo '</pre>';
	
	echo '</td></tr></table>';


	for ($i=0; $i < 30; $i++) { 
		if ($HP[$i] <= 80) {
			$price_cheap[$i] = $price[$i];
		}
	}
	echo '<pre>';
	print_r($price_cheap);
	echo '</pre>';

echo '<br/>';	
echo '<b>'.'11.220.'.'</b>'.'<br/>';
echo 'Решается аналогично 11.219'.'<br/>';

?>

<!DOCTYPE html>
<html lang="ru">
<body>
<table border="1">
<?php
echo '<br/>';	
echo '<b>'.'11.221.'.'</b>'.' В одном массиве записано количество мячей, заброшенных баскетбольной командой в каждом из 15-ти матчей, в другом — количество пропущенных мячей. Для каждой игры определить словесный результат игры (выигрыш или проигрыш).
Задачу решить двумя способами:
1) без использования дополнительного (третьего) массива;
2) с использованием дополнительного массива.'.'<br/>';
echo '1) <br/>';	
	$wo = 0;
	$lo = 0;
	$ti = 0;
	$diff = 0;
	$score = 0;
	for ($i=1; $i <= 15; $i++) { 
		$lost[$i] = rand(1,5);
		$won[$i] = rand(1,5);
		if (($won[$i] - $lost[$i]) >= 3){
				$diff++;
			}
		}
	for ($i=1; $i <= 15; $i++) { 
		if ($won[$i] > $lost[$i]) {
			$result[$i] = 'won';
			$wo++;
			$score+=3;
		}else{
			if ($won[$i] < $lost[$i]) {
				$result[$i] = 'lost';
				$lo++;
			}else{
				$result[$i] = 'tie';
				$ti++;
				$score++;
			}
		}
	}
	echo '<tr><td>';

	echo 'забитые: '.'<br/>';
	echo '<pre>';
		print_r($won);
	echo '</pre>';

	echo '</td><td>';

	echo 'пропущенные: '.'<br/>';
	echo '<pre>';
		print_r($lost);
	echo '</pre>';

	echo '</td><td>';

	echo 'результат: '.'<br/>';
	echo '<pre>';
		print_r($result);
		echo 'выигрыши: '.$wo.', проигрыши: '.$lo.', ничьи: '.$ti.'<br/>';
		echo 'В '.$diff.' играх разность мячей больше или равна 3.'.'<br/>';
		echo 'команда набрала '.$score.' очков.'.'<br/>';
	echo '</pre>';
	echo '</td>';

	echo '<td>';
echo '2) <br/>';	
echo 'результат: '.'<br/>';
	for ($i=1; $i <= 15; $i++) { 
		if ($won[$i] > $lost[$i]) {
			echo 'won'.'<br/>';
		}else{
			if ($won[$i] < $lost[$i]) {
				echo 'lost'.'<br/>';
			}else{
				echo 'tie'.'<br/>';
			}
		}
	}
	echo '</td>';
	echo '</tr>';
?>
</table>	
</body>
</html>

<?php
echo '<b>'.'11.222-223.'.'</b>'.'<br/><br/>';
echo 'Решение в задаче 11.221'.'<br/><br/>';
?>

<!DOCTYPE html>
<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>'.'11.224.'.'</b>'.' Решить задачу 11.223 для случая, когда вместо двух массивов однозначных чисел задан один массив однозначных или двузначных чисел, запись которых образована цифрами, означающими количество забитых и пропущенных мячей в одной игре. Например, 32 — 3 забитых, 2 пропущенных; 22 — 2 забитых, 2 пропущенных; 0 — 0 забитых, 0 пропущенных.'.'<br/><br/>';
	for ($j=0; $j <= 3; $j++) { 
		if ($j == 0) {
			echo '<tr><td>'.'Игра'.'</td>';
			for ($i=1; $i <= 20; $i++) { 
				echo '<td>'.$i.'</td>';
			}
			echo '</tr>';
		}
		if ($j == 1) {
			echo '<tr><td>'.'забитые: '.'</td>';
			for ($i=1; $i <= 20; $i++) { 
				echo '<td>';
				echo $sc[$j][$i] = rand(1,5);
				echo '</td>';
			}
		}
		if ($j == 2) {
			echo '<tr>'.'<td>'.'пропущенные: '.'</td>';
			for ($i=1; $i <= 20; $i++) { 
				echo '<td>';
				echo $sc[$j][$i] = rand(1,5);
				echo '</td>';
			}
			echo '</tr>';
		}
		if ($j == 3) {
			echo '<tr>'.'<td>'.'результат: '.'</td>';
			for ($i=1; $i <= 20; $i++) { 
				if ($sc[1][$i] > $sc[2][$i]){
					echo '<td style="background: lightgreen;">'.'won';
				}else{
					if ($sc[1][$i] < $sc[2][$i]){
						echo '<td style="background: pink;">'.'lost';	
					}else{
						echo '<td style="background: lightgrey;">'.'tie';	
					}
				}
				echo '</td>';
			}
			echo '</tr>';
		}
	}
		//echo '<pre>';
		//print_r($score);
?>

</table>	
</body>
</html>

<br/>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.225.'.'</b>'.' Известны данные о численности населения (в миллионах жителей) и пло-щади (в миллионах квадратных километров) 28 государств. Определить об-щую численность государств, чья площадь превышает 5 млн кв. км..'.'<br/>';
echo 'В задаче решено условие 11.228'.'<br/><br/>';	
	for ($j=0; $j <= 3; $j++) { 
		if ($j == 0) {
			echo '<tr><td>'.'state'.'</td>';
			for ($i=1; $i <= 28; $i++) { 
				echo '<td style="background: lightblue;">'.$i.'</td>';
			}
			echo '</tr>';
		}
		if ($j == 1) {
			echo '<tr><td>'.'area, mil.sq.km: '.'</td>';
			for ($i=1; $i <= 28; $i++) { 
				echo '<td style="background: lightgreen;">';
				echo $state[$j][$i] = rand(1,10);
				echo '</td>';
			}
		}
		if ($j == 2) {
			$sum = 0;
			$sum1 = 0;
			$sum2 = 0;
			echo '<tr>'.'<td>'.'population, mil.: '.'</td>';
			for ($i=1; $i <= 28; $i++) { 
				if ($state[1][$i] > 5) {
					echo '<td style="background: pink;">';
					echo $state[$j][$i] = rand(5,200);
					echo '</td>';
					$sum1 += $state[2][$i];
					echo $state[2][$i].', ';
				}else{
					echo '<td style="background: #F2F5A9;">';
					echo $state[$j][$i] = rand(5,200);
					echo '</td>';
					$sum2 += $state[2][$i];
				}
				$sum += $state[2][$i];
			}
			echo '</tr>';
		}
	}
	echo '<br/>'.'Общ. числ. насел. гос-в, площ. свыше 5 млн.км, сост.: '.$sum1;
	echo '<br/>'.'Общ. числ. насел. гос-в, площ. менее 5 млн.км, сост.: '.$sum2;
	echo '<br/>'.'Общ. числ. насел. гос-в сост.: '.$sum.'<br/>';
?>
</table>	
</body>
</html>

<br/>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.226-229.'.'</b>'.'<br/>';
	echo 'Решаются аналогично 11.225'.'<br/><br/>';	
?>

</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.230.'.'</b>'.' Фирма имеет два магазина. Известен доход каждого магазина за каждый день февраля. Определить, в каком из магазинов общий доход за месяц меньше.'.'<br/><br/>';
	for ($j=1; $j <= 2; $j++) { 
		if ($j == 1) {
			echo '<tr><td>'.'day'.'</td>';
			for ($i=1; $i <= 28; $i++) { 
				echo '<td style="background: #CEF6F5;">'.$i.'</td>';
			}
			echo '<td style="background: #F2F5A9;">'.'proceeds'.'</td></tr>';
		}
		echo '<tr><td>'.'shop '.$j.'</td>';

		for ($i=1; $i <= 28; $i++) { 
			echo '<td style="background: #CEF6CE;">';
			echo $state[$j][$i] = rand(1,10);
			echo '</td>';
			$su[$j] += $state[$j][$i];
		}
		echo '<td style="background: #F2F5A9;">'.$su[$j].'</td></tr>';
	}
	if ($su[2] > $su[1]) {
		echo 'Proceeds '.$su[2].' > '.$su[1].'</td></tr>';
	}else{
		if ($su[2] < $su[1]) {
			echo 'Proceeds '.$su[2].' < '.$su[1].'</td></tr>';
		}else{
			echo 'Proceeds '.$su[2].' = '.$su[1].'</td></tr>';
		}
	}
?>
</table>	
</body>
</html>

<?php
echo '<br/>';	
echo '<b>'.'11.231-233.'.'</b>'.' Решается аналогично задачам 11.216, 11.218, 11.221'.'<br/>';

?>
<br>
<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.235.'.'</b>'.' Дан массив. Скопировать все его элементы в другой массив такого же размера:
а) в том же порядке расположения элементов;
б) в обратном порядке расположения элементов.'.'<br/>';

	echo '<tr><td>';
	for ($i=0; $i < 10; $i++) { 
		$orig[$i] = rand(1, 10);
	}
	echo '<pre>';
	echo 'Исходный: ';
	print_r($orig);
	echo '</td><td>';

	foreach ($orig as &$value) {
		$copy[] = $value;
	}
	foreach ($orig as $key => &$value) {
		$copy3[] = $value;
	}

	echo '<pre>';
	echo 'а) Копия: ';
	print_r($copy);
	echo 'б) Копия наоборот: ';
	$copy2 = array_reverse($copy);
	print_r($copy2);
	echo '</td><td>';

	foreach ($orig as &$value) {
		$orig_mod[] = $value - 1;
	}
	echo '<pre>';
	echo 'Проверка оригинала: '.'<br/>';
	echo 'Исходный - 1: '.'<br/>';
	print_r($orig_mod);
	echo '</td><td>';

	foreach ($copy as &$value) {
		$copy_mod[] = $value + 1;
	}
	echo '<pre>';
	echo 'Проверка копии: '.'<br/>';
	echo 'Исходный + 1: '.'<br/>';
	print_r($copy_mod);
	echo '</td></tr>';
?>
</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.236.'.'</b>'.' Из элементов массива a сформировать массив b того же размера по правилу: если номер i элемента массива a четный, то b'.'<sub>i</sub> = '.' a'.'<sup>2</sup>'.'<sub>i</sub>'.', в противном случае b'.'<sub>i</sub> = 2a<sub>i</sub>'.'<br/>';
echo '<b>'.'11.237-240.'.'</b>'.' Решается аналогично задаче 11.236'.'<br/><br/>';

	echo '<tr><td>';
	for ($i=0; $i < 10; $i++) { 
		$a[$i] = rand(1, 10);
	}
	echo '<pre>';
	echo 'Массив a: ';
	print_r($a);
	echo '</td><td>';

	foreach ($a as $key => &$value) {
		if ($key%2 == 0) {
			$value = pow($value,2);
		}else{
			$value = 2*$value;
		}		
		$b[] = $value;
	}
	echo '<pre>';
	echo 'Массив b: ';
	print_r($b);
	echo '</td></tr>';
?>
</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.238.</b> Из элементов массива <i>p</i> сформировать массив <i>q</i> того же размера по правилу: элементы с номером <i>i</i> от 3-го по 10-й находятся по формуле <i>q</i><sub>i</sub> = -<i>p</i><sub>p</sub>, все остальные — по формуле <i>q</i><sub>i</sub> = <i>p</i><sub>i</sub> х <i>i</i>.'.'<br/>';

	
	echo '<tr><td>';
	for ($i=0; $i < 20; $i++) { 
		$p[$i] = rand(1, 10);
	}
	echo '<pre>';
	echo 'Массив <i>p</i>: ';
	print_r($p);
	echo '</td><td>';

	for ($i=0; $i < 20; $i++) { 
		if ($i >= 3 && $i <= 10){
			$q[$i] = -$p[$i];
		}else{
			$q[$i] = $p[$i]*$i;
		}
	}

	echo '<pre>';
	echo 'Массив <i>q</i>: ';
	print_r($q);
	echo '</td></tr>';
?>
</table>	
</body>
</html>

<br> 

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.241.</b> Дан массив. Переписать его второй, четвертый и т. д. элементы в другой массив такого же размера:
а) расположив элементы на тех же местах, что и в исходном массиве;
б) расположив элементы подряд с начала массива.'.'<br/>';
echo '<b>'.'11.242.'.'</b>'.' Решается аналогично задаче 11.241'.'<br/><br/>';

	
	echo '<tr><td>';
	for ($i=0; $i < 10; $i++) { 
		$first[$i] = rand(1, 10);
	}
	echo '<pre>';
	echo 'Исходный массив: ';
	print_r($first);
	echo '</td><td>';

	$k = 0;
	for ($i=0; $i < 10; $i++) { 
		$second[$i] = $k;
		$k++;
	}
	echo '<pre>';
	echo 'Второй массив:';
	print_r($second);
	echo '</td><td>';

	for ($i=0; $i < 10; $i++) { 
		if ($i != 0 && $i%2 == 0) {
			$second1[$i] = $first[$i];//сохр. поз. элементов в новом массиве
		}else{
			$second1[$i] = $second[$i];//сохр. поз. элементов в новом массиве
		}
	}
	echo '<pre>';
	echo 'Второй массив: а)';
	print_r($second1);
	echo '</td><td>';


			$j = 0;
	for ($i=0; $i < 10; $i++) { // этот вариант - мой, мне необходимо объяснение.
		
		if ($i != 0 && $i%2 == 0) {
			$temp = $i/2-1;
			$second2[$temp] = $second1[$i];
			//$second1 = array((10-$i) => $second1[(10-$i)]) + $second1;
			// этот вариант - это переделанная логика примера из сети.			
		}else{
			if ($i != 0 && $i%2 != 0){
				$temp = $i + 4 -$j;
				$second2[$temp] = $second1[$i];
		$j++;
			}else{
				$temp = 4;
				$second2[$temp] = $second1[$i];
			}
		}
	}
	ksort($second2);
	echo '<pre>';
	echo 'Второй массив: б)';
	print_r($second2);
	echo '</td></tr>';	
?>
</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.243.</b> Дан массив из 20 элементов. Сформировать два массива размером 10, включив в первый из них элементы заданного массива с четными индексами, а во второй — с нечетными..'.'<br/>';

	
	echo '<tr><td>';
	for ($i=0; $i < 20; $i++) { 
		$ein[$i] = rand(1, 10);
	}
	echo '<pre>';
	echo 'Исходный массив <i>p</i>: ';
	print_r($ein);
	echo '</td><td>';

		$j = 0;
	for ($i=0; $i < 20; $i++) { 
		if ( $i%2 == 0){
			$zwei[$i/2] = $ein[$i]; // допущение: ноль тоже четное, чтобы было одинаковое количество элементов в каждом массиве.
		}else{
			$zwei2[($j-1)/2] = $ein[$i];
		}
		$j++;
	}
	echo '<pre>';
	echo 'Второй массив: а)';
	print_r($zwei);
	echo '</td><td>';

for ($i=0; $i < 10; $i++) { 
	}
	echo '<pre>';
	echo 'Второй массив: б)';
	print_r($zwei2);
	echo '</td></tr>';	
?>
</table>	
</body>
</html>

<br> 

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.244.</b> Дан массив. Переписать его положительные элементы во второй массив, а остальные — в третий. Во втором и третьем массивах значения элементов первого массива должны быть записаны:
а) на тех же местах, что и в исходном массиве;
б) подряд с начала массива..'.'<br/>';
	
	echo '<tr><td>';
	
		$pos_key = 0;
		$rest_key = 0;
	for ($i=0; $i < 10; $i++) { 
		$uno[$i] = rand(-5, 5);
		if ($uno[$i] > 0) {
			$pos1[$pos_key] = $uno[$i];// а) в начале нового массива pos
			$pos_key++;
			$ballast1[$pos_key] = 0;//дописываем в конец для массива rest

			$pos2[$i] = $uno[$i];// б)сохраняем позиции элементов в новом массиве
			$rest2[$i] = 0;// б)сохраняем позиции элементов в новом массиве
			
		}else{
			//$pos[$pos_key] = 0;

			$rest1[$rest_key] = $uno[$i];// а) в начале нового массива rest
			$rest_key++;
			$ballast2[$rest_key] = 0;//дописываем в конец для массива pos

			$pos2[$i] = 0;//сохраняем позиции элементов в новом массиве
			$rest2[$i] = $uno[$i];//сохраняем позиции элементов в новом массиве
		}
		$pos[$i] = 0;//дописываем значения, если выборка в начале массива
		$rest[$i] = 0;//дописываем значения, если выборка в начале массива
	}

	echo '<pre>';
	echo 'Исходный массив <i>p</i>: ';
	print_r($uno);
	echo '</td><td>';

	echo '<pre>';
	echo 'положительные pos: а) '.'<br/>';
	echo 'в начале. ';
	$pos = array_merge($pos1, $ballast2);
	print_r($pos);
	echo '<pre>';
	echo 'положительные pos2: а) '.'<br/>';
	echo 'сохр. поз. ';
	print_r($pos2);
	echo '</td><td>';
	
	echo '<pre>';
	echo 'остальные rest: б) '.'<br/>';
	echo 'в начале. ';
	$rest = array_merge($rest1, $ballast1);
	print_r($rest);
	echo '<pre>';
	echo 'остальные rest2: б) '.'<br/>';
	echo 'сохр. поз. ';
	print_r($rest2);
	echo '</td></tr>';	
?>
</table>	
</body>
</html>

<br> 

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.245.</b> Дан массив. Переписать его элементы в другой массив такого же размера следующим образом: сначала должны идти все отрицательные элементы,
а затем все остальные. Использовать только один проход по исходному массиву.'.'<br/>';
	
	echo '<tr><td>';
	
	$key = 0;
	$key2 = 0;
	for ($i=0; $i < 10; $i++) { 
		$quattro[$i] = rand(-5, 5);
		if ($quattro[$i] < 0) {
			$one[$key] = $quattro[$i];
			$key++;
		}else{
			$two[$key2] = $quattro[$i];
			$key2++;
		}
	}
	$new = array_merge($one, $two);

	echo '<pre>';
	echo 'Исходный массив: ';
	print_r($quattro);
	echo '</td><td>';

	echo '<pre>';
	echo 'отрицательные: ';
	print_r($one);
	echo '</td><td>';
	
	echo '<pre>';
	echo 'остальные: ';
	print_r($two);
	echo '</td><td>';
	
	echo '<pre>';
	echo 'новый массив: ';
	print_r($new);
	echo '</td></tr>';	
?>
</table>	
</body>
</html>

<br> 


<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.246.</b> Даны два массива одного размера. Получить третий массив, каждый элемент которого равен:
а) сумме элементов с тем же номером в заданных массивах;
б) произведению элементов с тем же номером в заданных массивах;
в) максимальному из элементов с тем же номером в заданных массивах.'.'<br/>';
	
	echo '<tr><td>';
	
	for ($i=0; $i < 10; $i++) { 
		$five[$i] = rand(1, 10);
		$six[$i] = rand(1, 10);
		$summ[$i] = $five[$i] + $six[$i];
		$prod[$i] = $five[$i] * $six[$i];
		if ($five[$i] >= $six[$i]) {
			$max[$i] = $five[$i];
		}else{
			$max[$i] = $six[$i];
		}
	}

	echo '<pre>';
	echo 'массив 1 ';
	print_r($five);
	echo '</td><td>';

	echo '<pre>';
	echo 'массив 2 ';
	print_r($six);
	echo '</td><td>';

	echo '<pre>';
	echo 'а) массив sum ';
	print_r($summ);
	echo '</td><td>';

	echo '<pre>';
	echo 'б) массив prod ';
	print_r($prod);
	echo '</td><td>';

	echo '<pre>';
	echo 'в) массив max ';
	print_r($max);

	echo '</td></tr>';	
?>
</table>	
</body>
</html>

<br>


<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.247.</b> Даны два массива одного размера, в которых нет нулевых элементов. Получить третий массив, каждый элемент которого равен 1, если элементы заданных массивов с тем же номером имеют одинаковый знак, и равен нулю в противном случае.'.'<br/>';
	
	echo '<tr><td>';
	
	for ($i=0; $i < 5; $i++) { 
		$orig1_1[$i] = rand(1, 5);
		$orig1_2[$i] = rand(-1, -5);
		$orig2_1[$i] = rand(1, 5);
		$orig2_2[$i] = rand(-1, -5);
	}

		$orig1 = array_merge($orig1_1, $orig1_2);
		$orig2 = array_merge($orig2_1, $orig2_2);

		shuffle($orig1);
		shuffle($orig2);

	for ($i=0; $i < 10 ; $i++) { 
		if (($orig1[$i]>0 && $orig2[$i]>0) || ($orig1[$i]<0 && $orig2[$i]<0)){
			$rslt[$i] = 1;
		}else{
			$rslt[$i] = 0;
		}
	}
		
	echo '<pre>';
	echo '1_1 ';
	print_r($orig1_1);
	echo '</td><td>';

	echo '<pre>';
	echo '1_2 ';
	print_r($orig1_2);
	echo '</td><td>';

	echo '<pre>';
	echo '2_1 ';
	print_r($orig2_1);
	echo '</td><td>';

	echo '<pre>';
	echo '2_2 ';
	print_r($orig2_2);
	echo '</td></tr>';	
	
	echo '<tr><td>';

	echo '<pre>';
	echo 'orig 1 ';
	print_r($orig1);
	echo '</td><td>';

	echo '<pre>';
	echo 'orig 2 ';
	print_r($orig2);
	echo '</td><td>';

	echo '<pre>';
	echo 'result ';
	print_r($rslt);
	echo '</td><td>';

	echo '</td></tr>';	

?>
</table>	
</body>
</html>

<br>

<!DOCTYPE html>
<html lang="en">
<body>
<table border="1">
<?php
echo '<b>'.'11.248.</b> Регистрация направления ветра на горном плато проводится один раз в день по очереди двумя исследователями. Каждый из них ведет отдельную таблицу. В конце месяца все результаты сводятся в одну таблицу. Составить программу, выполняющую эту операцию для июня. Направление ветра кодируется следующим образом: 1 — северный, 2 — южный, 3 — восточный, 4 — западный, 5 — северо-западный, 6 — северо-восточный, 7 — юго-западный, 8 — юго-восточный.'.'<br/>';
	
	
	for ($i=1; $i <= 29; $i+=2) { 
		$researcher1[$i] = rand(1, 8);
	}
	for ($i=2; $i <= 30; $i+=2) { 
		$researcher2[$i] = rand(1, 8);
	}
	for ($i=1; $i <= 30; $i++) {
		if ($i%2 == 0) {
			$res[$i] = $researcher2[$i];
			switch ($res[$i]) {
				case 1:	$res[$i] = 'северный';	break;	
				case 2:	$res[$i] = 'южный';		break;
				case 3:	$res[$i] = 'восточный';	break;
				case 4:	$res[$i] = 'западный';	break;
				case 5:	$res[$i] = 'северо-западный';	break;
				case 6:	$res[$i] = 'северо-восточный';	break;
				case 7:	$res[$i] = 'юго-западный';		break;
				case 8:	$res[$i] = 'юго-восточный';		break;
			}
		}else{
			$res[$i] = $researcher1[$i];
			switch ($res[$i]) {
				case 1:	$res[$i] = 'северный';	break;
				case 2:	$res[$i] = 'южный';		break;
				case 3:	$res[$i] = 'восточный';	break;
				case 4:	$res[$i] = 'западный';	break;
				case 5:	$res[$i] = 'северо-западный';	break;
				case 6:	$res[$i] = 'северо-восточный';	break;
				case 7:	$res[$i] = 'юго-западный';		break;
				case 8:	$res[$i] = 'юго-восточный';		break;
			}
		}
	}

	echo '<tr><td>';

	echo '<pre>';
	echo 'исследователь 1 ';
	print_r($researcher1);
	echo '</td><td>';

	echo '<pre>';
	echo 'исследователь 2 ';
	print_r($researcher2);
	echo '</td><td>';

	echo '<pre>';
	echo 'result ';
	print_r($res);
	
	echo '</td></tr>';	

?>
</table>	
</body>
</html>