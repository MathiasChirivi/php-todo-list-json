<?php 
    $students = [
        [
            'name' => 'Lavare',
            'description' => 'Lavare i vesiti'
        ],
        [
            'name' => 'Cucinare',
            'description' => 'cucinare per il pranzo'
        ],
        [
            'name' => 'Giocare',
            'description' => 'Giocare alla playstation'
        ],
        [
            'name' => 'Programmare',
            'description' => 'Programmare in php + vue'
        ],
        [
            'name' => 'Mangiare',
            'description' => 'mangiare il pranzo cucinato precedentemente'
        ],
        [
            'name' => 'Studiare',
            'description' => 'studiare il resto della programmazione'
        ],
    ];

    header('Content-Type: application/json');
    $stringaConDati = json_encode($students);
    echo $stringaConDati;
 ?>