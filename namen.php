<?php

header('Content-Type: application/json; charset=UTF-8');

$namen = [
        [
            'vorname'=>'Georgios',
            'nachname'=>'Mayer'
        ],
        [
            'vorname'=>'Maria',
            'nachname'=>'Huber'
        ],
        [
            'vorname'=>'Marina',
            'nachname'=>'Lohmann'
        ]
    ];

echo json_encode($namen);
