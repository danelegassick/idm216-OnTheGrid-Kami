<?php
$str = $item['items_ordered'];
if ($str != null)
{
$meals = array();
$quantities = array();
$prices = array();



foreach (explode(',', $str) as $item) {
    preg_match('/(.*) \((\d+)\) - (\$\d+\.\d+)/', $item, $matches);
    $meals[] = (string) $matches[1];
    $quantities[] = (string) $matches[2];
    $prices[] = (string) $matches[3];
}

// print_r($meals);
// print_r($quantities);
// print_r($prices);



$i = 0;
while($i < count($meals)) {
    echo "
        <div class='orders-page-line-item'>
            <h4>{$quantities[$i]} {$meals[$i]}</h4>
            <h4>{$prices[$i]}</h4>
        </div>
    ";
    $i++;
}
}

    ?>