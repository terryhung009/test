<?php



function sum($listA)
{
    $listB = [];
    $sum = 0;

    echo '<pre>';
    var_dump($listA);
    echo '</pre>';
    foreach ($listA as $key => $value) {
        $sum = $sum + $listA[$key];
        // array_push($listB, $sum);
        $listB[] = $sum;
    }
    echo '<pre>';
    var_dump($listB);
    echo '</pre>';
}

$listA = [
    1,
    3,
    5,
    8,
    10,
    5,
    1
];

sum($listA);



