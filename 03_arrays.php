<?php
    // $numbers = [1,3,5,7,9];
    // $fruits = array('apple', 'orange', 'pear');

    // print_r($fruits);


    $hex = [
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF',
    ];

    // echo $hex['green'];

    // echo '</br>';

    

    // MutliDimensinal Array

    $people = [
        [
            'name' => 'Brad',
            'email' => 'Traversy',
        ],    
        [
            'name' => 'John',
            'email' => 'Traversy',
        ],
        [
            'name' => 'Mary',
            'email' => 'Traversy',
        ],
        
    ];

    // echo $people[1]['name'];
    
    var_dump(json_encode($people));


?>