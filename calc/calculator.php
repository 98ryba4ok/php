<?php
require_once 'trigonometry.php';

function evaluate($expression) {
    $tokens = tokenize($expression);
    return calculate($tokens);
}

function tokenize($expression) {
    preg_match_all('/(\d+\.?\d*)|([\+\-\*\/\(\)])|(sin|cos|tan)/', $expression, $matches);
    $tokens = $matches[0];

    $combined = [];
    for ($i = 0; $i < count($tokens); $i++) {
        if (in_array($tokens[$i], ['sin', 'cos', 'tan',])  && is_numeric($tokens[$i + 1])) {
            $combined[] = $tokens[$i];
            $combined[] = $tokens[++$i];
        } else {
            $combined[] = $tokens[$i];
        }
    }

    return $combined;
}

function calculate($tokens) {
    $index = 0;
    return parseExpression($tokens, $index);
}

function parseExpression(&$tokens, &$index) {
    $result = parse($tokens, $index);

    while ($index < count($tokens) && (in_array($tokens[$index], ['+', '-']))) {
        $operator = $tokens[$index++];
        $operand = parse($tokens, $index);

        if ($operator == '+') {
            $result += $operand;
        } else {
            $result -= $operand;
        }
    }

    return $result;
}

function parse(&$tokens, &$index) {
    $result = parsesecond($tokens, $index);

    while ($index < count($tokens) && (in_array($tokens[$index], ['*', '/']))) {
        $operator = $tokens[$index++];
        $operand = parsesecond($tokens, $index);

        if ($operator == '*') {
            $result *= $operand;
        } else {
            $result /= $operand;
        }
    }

    return $result;
}

function parsesecond(&$tokens, &$index) {
    $result = null;

    if (is_numeric($tokens[$index])) {
        $result = $tokens[$index++];
    } elseif (in_array($tokens[$index], ['sin', 'cos', 'tan'])) {
        $func = $tokens[$index++];
        $arg = parseExpression($tokens, $index);
        $result = evaluateTrigonometry($func, $arg);
    } elseif ($tokens[$index] == '(') {
        $index++;
        $result = parseExpression($tokens, $index);
        $index++;
    }

    return $result;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['expression'])) {
        $expression = $_POST['expression'];
        $result = evaluate($expression);
        echo $result;
    }
}
?>
