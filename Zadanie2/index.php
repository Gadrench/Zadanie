<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
</head>
<body>
    <h1>Калькулятор</h1>
    <form action='' method='post' >
        <p><input type="text" name="first"></p>
        <select class="operations" name="operation">
            <option value='plus'>сложить</option>
            <option value='minus'>вычитание</option>
            <option value="umnozh">умножение</option>
            <option value="del">деление</option>
        </select>
        <p><input type="text" name="second"></p>
        <p><input type="submit" name="submit" value="Получить ответ"></p> 
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $first = $_POST['first'];
    $second = $_POST['second'];
    $operation = $_POST['operation'];
    
    if(!$operation || (!$first && $first != '0') || (!$second && $second != '0')) {
        $error_result = 'Не все поля заполнены';

    }
    else {
        
        if(!is_numeric($first) || !is_numeric($second)){
            $error_result = "Операнды должны быть числами";
        }
        else 
        switch($operation){
            case 'plus':
                $result = $first + $second;
                break;
            case 'minus':
                $result = $first - $second;
                break;
            case 'umnozh':
                $result = $first * $second;
                break;
            case 'del':
                if( $second == '0')
                    $error_result = "На ноль делить нельзя!";
                else
                   $result = $first / $second;
                break;    
        }
        
    }
    if(isset($error_result)){
        echo "Ошибка: $error_result";
    }   
    else {
        echo "Ответ: $result";
    }
}
?>


