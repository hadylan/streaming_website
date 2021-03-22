<?php

# --- Start a session ---
session_start();

if (!isset($_SESSION['user']['id'])) {
    header('Location: http://www.localhost/site_streaming/index.php');
    exit();
}

# --- Check if user is connected --- 
ini_set('display_errors', 1);

    # --- Import Database class and autoload ---
    require_once('./vendor/autoload.php');
    require_once('./classes/Database.php');
    require_once('./classes/Sanitizing.php');
    $sanitize = (object) new Sanitizing();


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


    # --- Call abstract class Database for get data in `movies` table with prepared query, dataMapperand and store it in "user" array ---
    $user = (array) array(
        
        'user' => Database::query('SELECT `id`, `email`, `username`, `picture`, `rank` FROM `users` WHERE `id` = :id ', array(
            'id' => $_SESSION['user']['id']
        ))
    );

    # --- store general informations ---
    $general = (array) array(
        'title' => 'UniStream - Profil',
    );


    if ( isset($_GET['action']) ) {
        $general['action'] = $sanitize->sanitizeString($_GET['action']);
    }

    # --- Call load method for load the template master ---
    $twig = (object) $environment->load('profil/profil.master.html.twig');
    # --- Render template with some variables defined above ---
    echo $twig->render(
        array_merge(
            $general,
            $user
        )
    );

?>