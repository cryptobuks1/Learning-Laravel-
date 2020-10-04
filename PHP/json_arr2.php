<?php

$json1 = '[
    {
        "company_id":1
    }
]';
$json2 = '[
    {
        "company_id":2
    }
]';
$json3 = '[
    {
        "company_id":3
    }
]';
$arr = [json_decode($json1),json_decode($json2),json_decode($json3)];
$dem = count($arr);
$fl = false;
for ($i=0; $i < $dem; $i++) { 
    if (($arr[$i][0]->company_id) == 1) {
        $fl = true;
    }
}
if($fl == true){
    echo 'k dc';
}
else{
    echo 'dc';
}