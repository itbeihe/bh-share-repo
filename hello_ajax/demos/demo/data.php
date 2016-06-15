<?php
    $city = $_GET['city'];
    $str =file_get_contents("http://v.juhe.cn/weather/index?cityname=".$city."&dtype=&format=&key=eb220d0001781be2639b7ee9c787e974");
    echo $str;
?>