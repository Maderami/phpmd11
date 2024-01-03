<?php
$GLOBALS['resultA'] = [];
$GLOBALS['resultorAB'] = [];
$GLOBALS['resultandAB'] = [];
$GLOBALS['resultxorAB'] = [];
$GLOBALS['A'] = [0, 0, 1, 1];
$GLOBALS['B'] = [0, 1, 0, 1];
$GLOBALS['countArray'] = count($GLOBALS['A']);
noA($GLOBALS['A']);
orAB($GLOBALS['A'], $GLOBALS['B']);
andAB($GLOBALS['A'], $GLOBALS['B']);
xorAB($GLOBALS['A'], $GLOBALS['B']);
function noA($A)
{
    for ($increm = 0; $increm < $GLOBALS['countArray']; $increm++) {
        if ($A[$increm] == 0) {
            $GLOBALS['resultA'][$increm] = 1;
        } else {
            $GLOBALS['resultA'][$increm] = 0;
        }
    }
    return $GLOBALS['resultA'];
}

function orAB($A, $B)
{
    for ($increm = 0; $increm < $GLOBALS['countArray']; $increm++) {
        if (($A[$increm] == 1 || $B[$increm] == 1) || ($A[$increm] == 1 && $B[$increm] == 1)) {
            $GLOBALS['resultorAB'][$increm] = 1;
        } else {
            $GLOBALS['resultorAB'][$increm] = 0;
        }
    }
    return $GLOBALS['resultorAB'];
}

function andAB($A, $B)
{
    for ($increm = 0; $increm < $GLOBALS['countArray']; $increm++) {
        if ($A[$increm] == 1 && $B[$increm] == 1) {
            $GLOBALS['resultandAB'][$increm] = 1;
        } else {
            $GLOBALS['resultandAB'][$increm] = 0;
        }
    }
    return $GLOBALS['resultandAB'];
}

function xorAB($A, $B)
{
    for ($increm = 0; $increm < $GLOBALS['countArray']; $increm++) {
        if ($A[$increm] == 1 xor $B[$increm] == 1) {
            $GLOBALS['resultxorAB'][$increm] = 1;
        } else {
            $GLOBALS['resultxorAB'][$increm] = 0;
        }
    }
    return $GLOBALS['resultandAB'];
}

#Task2
$GLOBALS['valueCell'] = ['true', 'false', 1, 0, -1, "1", 'null', "\"php\""];
$GLOBALS['valueRow'] = ['true', 'false', 1, 0, -1, "1", 'null', "\"php\""];
$GLOBALS['countArrayCell'] = count($GLOBALS['valueCell']);
$GLOBALS['resArrayIF'] = [[]];
defValue($GLOBALS['valueRow'], $GLOBALS['valueCell']);

function defValue($arr1, $arr2)
{
    for ($inx = 0; $inx < count($arr1); $inx++) {
        for ($inx1 = 0; $inx1 < count($arr2); $inx1++) {
            if ($arr1[$inx] === $arr2[$inx1]) {
                $GLOBALS['resArrayIF'][$inx][$inx1] = 'true';
            } else {
                $GLOBALS['resArrayIF'][$inx][$inx1] = 'false';
            }
        }
    }
    return $GLOBALS['resArrayIF'];
}

?>

<html lang="ru">
<header>
    <meta charset="UTF-8">
    <title>Таблица истинности</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
</header>
<body>
<h1>Task1</h1>
<table class="table">
    <thead>
    <tr>
        <td>A</td>
        <td>B</td>
        <td>!A</td>
        <td>A||B</td>
        <td>A&&B</td>
        <td>AxorB</td>
    </tr>
    </thead>
    <tbody>
    <?php for ($index = 0; $index < $GLOBALS['countArray']; $index++) { ?>

        <tr>
            <td><?= $GLOBALS['A'][$index]; ?></td>
            <td><?= $GLOBALS['B'][$index]; ?></td>
            <td><?= $GLOBALS['resultA'][$index]; ?></td>
            <td><?= $GLOBALS['resultorAB'][$index]; ?></td>
            <td><?= $GLOBALS['resultandAB'][$index]; ?></td>
            <td><?= $GLOBALS['resultxorAB'][$index]; ?></td>
        </tr>

    <?php } ?>
    </tbody>
</table>
<h1>Task2</h1>
<table class="table">
    <thead>
    <tr>
        <td></td>
        <?php for ($index = 0; $index < $GLOBALS['countArrayCell']; $index++) { ?>
            <td><?= $GLOBALS['valueCell'][$index] ?></td>
        <?php } ?>
    </tr>
    </thead>

    <tbody>
    <?php for ($index = 0; $index < $GLOBALS['countArrayCell']; $index++) { ?>
        <tr>
            <td><?= $GLOBALS['valueRow'][$index] ?></td>
            <?php for ($index1 = 0; $index1 < $GLOBALS['countArrayCell']; $index1++) {
            ?>
            <td><?= $GLOBALS['resArrayIF'][$index][$index1] ?></td>

    <?php } ?>
        </tr>
    <?php } ?>
    </tbody>

</table>
</body>
</html>

