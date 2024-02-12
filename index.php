<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URA URAVNENIE</title>
    
</head>

<body>
    <?php
// Сделал для решения всех типов уравнений
   $uravnenie = "2 / x = 10";
   $parts = explode('=', $uravnenie);
   $leftPart = trim($parts[0]); 
   $rightPart = trim($parts[1]); 
   
   
   echo $uravnenie. "<br>" ; 

        if (strpos($uravnenie, '+') !== false) {
            $operator = '+';
        } 
        elseif (strpos($uravnenie, '-') !== false) {
            $operator = '-';
        } 
        elseif (strpos($uravnenie, '*') !== false) {
            $operator = '*';
        } 
        elseif (strpos($uravnenie, '/') !== false) {
            $operator = '/';
        } 
        else {
            echo "Оператор не найден в уравнении."; 
            exit; 
        }
  
    
    $parts = explode($operator, $leftPart);
    $firstPart = trim($parts[0]);
    $secondPart = trim($parts[1]);


if ($secondPart === "X" or $secondPart === "x"){
    switch ($operator) {
        case '+':
            $result = $rightPart - $firstPart;
            break;
        case '-':
            $result =  $firstPart - $rightPart;
            break;
        case '*':
            $result = $rightPart / $firstPart;
            break;
        case '/':
            $result = $firstPart / $rightPart;
            break;
                
        default:
            echo "Eror";
            break; 
    }
}
else if($firstPart === "X" or $firstPart === "x"){
    switch ($operator) {
        case '+':
            $result = $rightPart - $secondPart;
            break;
        case '-':
            $result =  $secondPart + $rightPart  ;
            break;
        case '*':
            $result = $rightPart / $secondPart;
            break;
        case '/':

            $result = $rightPart * $secondPart;
            break;
                
        default:
            echo "Eror";
            break; 
    }

}

        
    echo "Значение переменной X: $result";

    ?>


    
    



</body>
</html>
