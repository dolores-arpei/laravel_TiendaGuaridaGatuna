<?php

return [
    1 => [
        'id' => 1,
        'name' => 'Pack Hogar Gatuno',
        'description' => 'Incluye cama básica, comedero y juguete de plumas para gatos recién llegados al hogar.',
        'price' => 49.90,
        'category_id' => 3,  // Rascadores y descanso (incluye cama/descanso)
        'offer_id' => null, // (sin oferta de momento)
    ],
    2 => [
        'id' => 2,
        'name' => 'Pienso Premium Gato Adulto',
        'description' => 'Receta rica en pollo y arroz, con apoyo para el pelo y el sistema urinario de tu gato.',
        'price' => 24.90,
        'category_id' => 1, // Alimentación
        'offer_id' => 1, 
    ],
    3 => [
        'id' => 3,
        'name' => 'Rascador Torre Deluxe',
        'description' => 'Rascador de varias alturas con cuevas, postes de sisal y zona de descanso elevada.',
        'price' => 89.00,
        'category_id' => 3, // Rascadores y descanso
        'offer_id' => null, 
    ],
];
