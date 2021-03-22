<?php

# --- Start a session ---
session_start();
#ini_set('display_errors', 1);

# --- Check if user is connected --- 
if (!isset($_SESSION['user']['id'])) {
    header('Location: http://www.localhost/site_streaming/index.php');
    exit();
}

    # --- Import Database class and autoload ---
    require_once('./vendor/autoload.php');
    require_once('./classes/Database.php');

    
    # --- define template location ---
    $fileSystemLoader = (object) new \Twig\Loader\FilesystemLoader('./themes/classic/templates/front-office');
    # --- define loader settings ---
    $optionsLoader = (array) array(
        'debug' => true,    # activate debug mode
        'autoescape' => false, # disable automatic echapment
        'auto_reload' => true, # automatic templates compilation
        'cache' => './cache/' # cache folder location
    );
    
    # --- Load environment with parameters ---
    $environment = (object) new \Twig\Environment($fileSystemLoader, $optionsLoader);
    # Add Debug Extension (required for use debug mode)
    $environment->addExtension(new \Twig\Extension\DebugExtension());


    # --- store general informations ---
    $general = (array) array(
        'title' => "UniStream - Films"
    );

    # --- Call abstract class Database for get data in `users` table with prepared query, dataMapperand and store it in "user" array ---
    $user = (array) array(
        'user' => Database::query('SELECT `picture`, `rank` FROM `users` WHERE `id` = :id', array(
            'id' => $_SESSION['user']['id']
        ))
    );

    # --- Call abstract class Database for get data in `movies` table with prepared query and store it in "movies" array ---
    $movies = (array) array(
        'movies' => Database::query('SELECT * FROM `movies` WHERE `id_category` = 1', array())
    );
    

    # --- Call load method for load the template master ---
    $twig = (object) $environment->load('videos/films.master.html.twig');
    # --- Render template with some variables defined above ---
    echo $twig->render(
        array_merge(
            $general,
            $movies,
            $user
        )
    );

?>