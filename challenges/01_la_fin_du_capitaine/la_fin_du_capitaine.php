<?php
    $captain = [
        'age' => 23,
        'name' => 'Jacques Spareau',
        'is_dead' => true,
        'famous_last_words' => '"AAaaargh...".',
    ];

    if($captain['is_dead'] === true)
    {
    print 'Le capitaine ' . $captain['name'];
    print ' est mort à l\'âge de ' . $captain['age'] . ' ans.' . "\n";
    print 'Ses derniers mots étaient ' . $captain['famous_last_words'] . "\n";
    }
