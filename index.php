<!-- Написать программу, которая в зависимости от времени суток будет показывать
пользователю определённое изображение:
 0-5 часов – ночь
 6-11 часов – утро
 12-17 часов – день
 18 – 23 часа – вечер
Изображения берутся произвольные и называются 0.jpg, 1.jpg, 2.jpg, 3.jpg.
Внимание! Запрещается использовать ветвления! Только математика, только % или другие
подобные операции!  -->

<?php
    $h = date('H');
    $n = (($h - ($h%6))/6)%4;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background: url(img/<?php echo $n ?>.jpg);
    	background-size: cover;
    	color: red;
    }	
    </style>
</head>
<body>

    <h1><?php echo $h ?></h1>

</body>