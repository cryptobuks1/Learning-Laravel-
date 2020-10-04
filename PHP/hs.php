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
    if(($mang[$i]->company_id) == 3){
        $fl == true;
    }
}

if ($fl) {
    echo 'k dc thuc hien';
}
else {
    echo 'dc thuc hien';
}