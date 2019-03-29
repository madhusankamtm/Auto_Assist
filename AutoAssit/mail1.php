<?php
$headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .         
            'MIME-Version: 1.0'. "\r\n".  
            'Content-Type:text/html;charset=utf-8';
$result= mail("madhusankamtm@gmail.com", "hello world", "Check asuto assist system",$headers);
var_dump($result);
?>