<?php

    $phone = $_GET['phone'];

    $content =file_get_contents("https://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=".$phone);

    $str = iconv("gbk","utf-8",$content);

    $str = str_replace("__GetZoneResult_ = ","",$str);

    if(isset($_GET['callback'])){
        $callback = $_GET['callback'];
        echo $callback . '(' . $str . ')';
    }else{
        echo $str;

    }
?>