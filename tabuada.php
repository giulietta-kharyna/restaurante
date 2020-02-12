<?php
 
// Проверим, была ли форма отправлена
if(
    isset($_POST['num1']) && is_numeric($_POST['num1']) &&
    isset($_POST['num2']) && is_numeric($_POST['num2']) &&
    isset($_POST['operator']) && !empty($_POST['operator'])
){
    // Отфильтруем полученные значения
    $num1 = $_POST['num1'] * 1;
    $num2 = $_POST['num2'] * 1;
    $operator = $_POST['operator'];
    
    // Создадим переменную для хранения результата вычисления
    $output = "$num1 $operator $num2 = ";
    
    // В зависимости от оператора будем выполнять разные математические действия
    switch ($operator){
        case '+':
            $output .= $num1 + $num2; break;
        case '-':
            $output .= $num1 - $num2; break;
        case '*':
            $output .= $num1 * $num2; break;
        case '/':
            // В случае деления не забываем проверить,
            // чтобы делитель не был равен нулю
            if($num2 == 0){
                $output = 'Деление на ноль запрещено!';
            }else{
                $output .= $num1 / $num2;
            }
            break;
        default:
            $output = "Неизвестный оператор '$operator'";
    }
    
}
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <title>Калькулятор</title>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
 
<h1>Калькулятор</h1>
 
<?php
// Если результат существует, выводим его
if(isset($output)){
    print "<p>Результат: $output</p><hr />";
}
?>
<!-- http://www.softtime.ru/info/articlephp.php?id_article=69 -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
Число 1:<br />
<input type="text" name="num1" /><br /><br />
 
Оператор:<br />
<input type="text" name="operator" /><br /><br />
 
Число 2:<br />
<input type="text" name="num2" /><br /><br />
 
<input type="submit" value="Считать!" />
 
</form>
 
</body>
</html>