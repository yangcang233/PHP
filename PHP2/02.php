<?php
$a=["Id"=>"20201020",               //学号
    "Name"=>"yangcang",             //姓名
    "Age"=>20,                      //年龄
    "Email"=>"yangcang233@163.com"  //邮件
];
$a["Tel"]="15994257255";            //添加手机号
$a["Age"]=19;                       //覆盖年龄


echo "学号：".$a["Id"]."<br>";
echo "姓名：".$a["Name"]."<br>";
echo "年龄：".$a["Age"]."<br>";
echo "邮件：".$a["Email"]."<br>";
echo "手机号：".$a["Tel"]."<br><br>";

$b=array("20201020","yangcang",20,"yangcang233@163.com","15994257255");
echo "学号：".$b[0]."<br>";
echo "姓名：".$b[1]."<br>";
echo "年龄：".$b[2]."<br>";
echo "邮件：".$b[3]."<br>";
echo "手机号：".$b[4]."<br>";