<?php

$students = array(
    array(
        'name'=>'Илья',
        'scores'=>array(),
    ),
    array(
        'name'=>'Петр',
        'scores'=>array(),
    ),
    array(
        'name'=>'Семен',
        'scores'=>array(),
    ),
);
foreach ($students as $student){
    for($i=0;$i<rand(1, 10);$i ++) {
        $student['scores'][] = rand(1, 5);
    }
    $scores = implode(', ', $student['scores']);
    $middle = array_sum($student['scores']) / sizeof($student['scores']);
    $sum = count($student['scores']);

    $int = round($middle) - $middle;
    if($int > 0){
        $middle = ceil($middle).'-';
    }else if($int <0){
        $middle = floor($middle). '+';
    }

    $endscores = substr($sum, -1); // Беру "последнюю цифру числа, т.к. в дальнейшем числа могут быть двух- и более значными
    if($endscores == 1){
        $sum = $sum.' оценка';
    }elseif ($endscores >= 2 and $sum <=4){
        $sum = $sum.' оценки';
    }elseif ($endscores >=5){
        $sum = $sum.' оценок';
    }
    echo "<div>Студент {$student['name']} имеет следующие оценки: {$scores}. Всего {$sum}, на основании чего, средний балл учащегося составляет: {$middle}</div>";
}