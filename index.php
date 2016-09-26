<?php
$students =


    [
        "Emmanuel"  => 42,
        "Thierry"   => 51,
        "Pascal"    => 45,
        "Eric"      => 48,
        "Nicolas"   => 19
    ];


foreach ($students as $nom => $age) {
    echo '<table><tr><td>' . $nom . '</td>';
    echo '<td>' . $age . '</td></tr></table>';
}
$resultat = array_sum($students )/ count($students);
echo "La moyenne d'âge du groupe est de :  " . $resultat. ' ans';
?>