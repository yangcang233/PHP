<?php
/*
date_default_timezone_set('PRC');
$a=date("D");
if ($a=="Mon"){
    echo "今天是星期一";
}elseif($a=="Tue"){
    echo "今天是星期二";
}
elseif($a=="Wed"){
    echo "今天是星期三";
}
elseif($a=="Thu"){
    echo "今天是星期四";
}
elseif($a=="Fri"){
    echo "今天是星期五";
}else{
    echo "今天是周末";
}
*/
/*
 $score=85;
 $num=intval($score);
 switch($num){
 case $num>=90 && $num<=100:
 echo "你的成绩等级为A";
 break;
 case $num>=80 && $num<90:
 echo "你的成绩等级为B";
 break;
 case $num>=60 && $num<80:
 echo "你的成绩等级为C";
 break;
 case $num>=0 && $num<60:
 echo "你的成绩等级为D";
 break;
 default:
 echo "你输入的成绩有误，请重新输入.";
 break;
 }
 */
 
/*
 //for循环
 $sum = 0;
 for($i=1;$i<=100;$i++){
 $sum += $i;
 }
 echo $sum."<br>";
 
 //while循环
 $sum = 0;
 $i=1;
 while ( $i<= 100) {
 $sum +=$i;
 $i++;
 }
 echo $sum."<br>";
 
 //do while
 $sum = 0;
 $i=1;
 do{
 $sum +=$i;
 $i++;
 }while($i<= 100);
 
 echo $sum."<br>";
 */
/*
for($c=1,$sum=0;$c<=100;$c++){
    if($c%2==1){
        $sum+=$c;
    }
    else{
        continue;
    }
}
echo $sum;
*/
echo "<table width='600' border='1'>";
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($td=1;$td<=9-$i;$td++){
        echo "<td>"."</td>";
    } 
    for($j=1;$j<=$i;$j++){
        
        echo "<td>".$i.'x'.$j.'='.$i*$j. "</td>";
    }
    echo "</tr>";
}
echo "</table>";