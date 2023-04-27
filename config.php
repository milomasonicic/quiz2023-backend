<?php
return [
    'database'=>[
        'servername'=>'localhost',
        'user'=>'root',
        'pass'=>'',
        'dbname'=>'quiz',
        "options"=>[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]
    ]
];