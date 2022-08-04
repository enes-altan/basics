<?php
$person = [
    'id' => 1,
    'firstName' => 'ENES',
    'lastName' => 'ALTAN',
    'appoinment' => [
        'dr' => [
            'fullName' => 'Esma KARAPINAR',
            'branch' => 'Orthopedic and Traumatology Specialist'
        ],
    ]
];

function findDrInfo($array,$searchKey){
    foreach ($array as $key => $value){
        if ($key == $searchKey){
            return $value;
        }
        if (is_array($value)){ // or gettype($value) == 'array'
            $result = findDrInfo($value,$searchKey);
            return  $result;
        }
    }
}

echo findDrInfo($person,'lastName');
echo findDrInfo($person,'dr');
