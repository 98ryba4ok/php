<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body{
    background-color:#f0f0f0 ;
    font-family: Gilroy;
}
@font-face {
    font-family: Gilroy ;
    font-weight: normal;
    src: url(fonts/Gilroy-Light.otf);
}
@font-face {
    font-family: Gilroy;
    font-weight: bold;
    src: url(fonts/Gilroy-ExtraBold.otf);
}
.text{

    text-align: center;
    font-size: 28px;
}
.a{
    display: block;
            text-align: center;
            margin-top: 20px;
            color: #bfc2c2;
            text-decoration: none;
            }
</style>
<body>
    <header>
        <img src="logo.png" alt="logo" height= 130px>
    </header>
    <div class="text">
    <?php
    $result = get_headers("http://localhost/");
    foreach ($result as $elements) {

        echo $elements. "<br>";
    }
    ?>
    <a href="./index.html">Обратно</a>

    </div>
</body>

</html>