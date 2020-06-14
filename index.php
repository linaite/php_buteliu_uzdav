<?php
// Kitamieji
$month_usage = 0;
$box_max = 24;

// Savaites ciklai ir menesio rezultatas
for ($week = 0; $week <= 4; $week++) {
    $pirm = rand(0, 3);
    $antr = rand(2, 5);
    $trec = rand(2, 5);
    $ketv = rand(2, 8);
    $penk = rand(5, 15);
    $sest = rand(1, 5);
    $sekm = rand(0, 1);
    $week_usage= $pirm + $antr + $trec + $ketv + $penk + $sest + $sekm;
    $month_usage += $week_usage;
}
print '<br>';

// skaiciu apdorojimas
$box_count = floor($month_usage / $box_max);
print $box_count;
$likutis = $month_usage - ($box_count * $box_max);

// atvaizdavimas skaiciu
for ($i = 1; $i <= $box_count; $i++) {
    echo "<img src='image/1.png'>";
}

echo '<br>';
echo '<br>';

for ($i = 0; $i <= $likutis; $i++) {
    "<img src='image/3.png'>";
}

?>