<?php
return [
    'load_balancer' => [
        'timeout' => 30,
        'retry_attempts' => 3,
        'servers' => [
            'http://server1.example.com',
            'http://server2.example.com',
            'http://server3.example.com'
        ],
    ],
];
?>
