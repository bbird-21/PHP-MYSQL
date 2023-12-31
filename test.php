<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

function    isValidRecipe( array $recipes ) : bool {

    if ( array_key_exists('is_enabled', $recipes) ) {
        return ($recipes['is_enabled']);
    }
    return (false);
}

function    correspondingMail( array $recipe ) : string
{
    global  $users;
    foreach ( $users as $user ) {
        if ( $user['email'] == $recipe['author'] )
            return $user['full_name'];
    }
}


foreach ($recipes as $recipe ) {
    if ( isValidRecipe($recipe) ) {
        $name = correspondingMail($recipe);
        echo $recipe['title'];
        echo $name;
    }
}


?>
