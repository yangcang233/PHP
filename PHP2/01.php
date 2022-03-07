<?php
$a="杨苍大中小学如何开展劳动教育？教育部12问答详解";
if (strlen($a) > 30){
    echo substr($a,0,30) . "......";
} else {
    echo $a;
}

