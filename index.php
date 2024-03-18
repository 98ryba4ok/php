<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo preg_replace('/a{3}(?=b)/','!', 'aaab aaa aaab aaaaab'). '<br>';
    $matches = []; preg_match_all('/ab{4,}a/', 'aa aba abba abbba abbbba abbbbba', $matches); 
    echo implode(', ', $matches[0]) . '<br>';
    $matches = []; preg_match_all('/a(?!dca)(b{2}a|bea)/', 'aba aca aea abba adca abea', $matches); 
    echo implode(', ', $matches[0]) . '<br>';
    echo preg_replace('/(.)\1/', '!', 'aae xxz 33a') . '<br>';

   
    ?>
</body>
</html>
