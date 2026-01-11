<?php

return [
    'required' => 'Laukas :attribute yra privalomas.',
    'string' => 'Laukas :attribute turi būti tekstas.',
    'max' => [
        'string' => 'Laukas :attribute negali būti ilgesnis nei :max simbolių.',
    ],
    'min' => [
        'numeric' => 'Laukas :attribute turi būti bent :min.',
    ],
    'date' => 'Laukas :attribute nėra galiojanti data.',
    'email' => 'Laukas :attribute turi būti galiojantis el. pašto adresas.',
    'integer' => 'Laukas :attribute turi būti sveikasis skaičius.',

    'attributes' => [
        'title' => 'antraštė',
        'description' => 'aprašymas',
        'date' => 'data',
        'address' => 'adresas',
        'participant_count' => 'dalyvių skaičius',
        'city' => 'miestas',
        'email' => 'el. paštas',
        'password' => 'slaptažodis',
    ],
];
