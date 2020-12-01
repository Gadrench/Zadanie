<?php
  
$file=fopen("view.txt","a+"); 
flock($file,LOCK_EX); 
$count=fread($file,100); 
$count++; 
ftruncate($file,0); 
fwrite($file,$count); 
flock($file,LOCK_UN); 
fclose($file); 
echo "Изображение было показано $count раз(а). ";



?>



<!DOCTYPE>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>/</title>
</head>
<body>
    <h1>Счетчик изображения</h1>
    <form action="/" method="post">
        <img src="image.php">
    </form>
</html>