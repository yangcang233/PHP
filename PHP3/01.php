<?php
/*
$a=["Id"=>"20201020",   
    "Name"=>"yangcang",        
    "Age"=>20, 
    "Email"=>"yangcang233@163.com" 
];
print_r($a);
echo '<br>';
asort($a);//����
print_r($a);
echo '<br>';
arsort($a);//����
print_r($a);
echo '<br>';
sort($a);
print_r($a);
*/
/*
$a='8.72yc';
echo $a.'<br>';
$b=(int)$a;
echo $b.'<br>';
settype($a, "float");
$c=$a;
echo $c.'<br>';
*/

date_default_timezone_set("PRC");
$a=date("H:i:s");

if ($a>6&&$a < 11) {
    echo  "现在是北京时间：".$a." 早上好！";
} else if ($a>11&&$a<13) {
    echo  "现在是北京时间：".$a." 中午好！";
} else if ($a>13&&$a<18) {
    echo  "现在是北京时间：".$a." 下午好！";
} else if ($a>18&&$a<6) {
    echo  "现在是北京时间：".$a." 晚上好！";
}
else {
    echo  "获取时间失败";
}

