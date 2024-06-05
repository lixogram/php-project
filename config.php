<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'One Piece Project',
        'nav_menu' => [
            '' => 'Characters',
            'content/Arcs.php' => 'Arcs',
            'content/Fights.php' => 'Fights',
            'content/Lore.php' => 'Lore',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
