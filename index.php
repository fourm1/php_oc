<?php

$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Vous aurez besoin de flageolets...',
    'author' => 'johndoe@example.com',
    'enable' => true,
];

foreach ($recipe as $value)
{
    echo $value;
}

?>