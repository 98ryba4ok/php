<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = 'aaab aaa aaab aaaaab';
    $pattern = '/a{3}(?=b)/'; 
    $replacement = '!'; 
    $result = preg_replace($pattern, $replacement, $str);
    echo $result . '<br>'; 

    $str = 'aa aba abba abbba abbbba abbbbba';
    $pattern = '/ab{4,}a/'; 
    preg_match_all($pattern, $str, $matches);
    echo implode(', ', $matches[0]) . '<br>'; 

    $str = 'aba aca aea abba adca abea';
    $pattern = '/a(?!dca)(b{2}a|bea)/'; 
    preg_match_all($pattern, $str, $matches);
    echo implode(', ', $matches[0]) . '<br>'; 

    $str = 'aae xxz 33a';
    $pattern = '/(?<=(.))\1(?=\1)/'; 
    $replacement = '!'; 
    $result = preg_replace($pattern, $replacement, $str);
    echo $result . '<br>';
    ?>
</body>
</html>
