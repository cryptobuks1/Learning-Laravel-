<?php

$json = '[
    {
        "company_id":1
    },
    {
        "company_id":2
    }
]';
$mang = json_decode($json);
$dem = count($mang);
$fl = false;

for ($i=0; $i < ($dem); $i++) { 
    if(($mang[$i]->company_id) == 1){
        $fl = true;
    }
}
if ($fl == true) {
    echo 'k dc thuc1 hien';
}
else {
    echo 'dc thuc1 hien';
}