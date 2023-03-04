<?php
const N = 4;

function printPermutations($numbers, $used, $result) {

    if (count($result) === N) {
        echo '<ul>';
        echo '<li>' . implode(' ', $result) . '</li>';
        echo '</ul>';

        return;
    }

    foreach ($numbers as $number) {
        if ($used[$number]) {
            continue;
        }

        $used[$number] = true;
        $result[] = $number;

        printPermutations($numbers, $used, $result);

        array_pop($result);
        $used[$number] = false;
    }
}

$numbers = range(1, N);
$used = array_fill(1, N, false);
$result = array();
printPermutations($numbers, $used, $result);
?>
