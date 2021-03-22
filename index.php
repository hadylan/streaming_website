<?php

session_start();
//ini_set('display_errors', 1);

# --- Check if user is connected --- 
if ( isset($_SESSION['user']['id']) ) {
    header('Location: http://www.localhost/site_streaming/accueil.php');
}

else {

    # --- Import Database class and autoload---
    require_once('./vendor/autoload.php');

    # --- define template location ---
    $fileSystemLoader = (object) new \Twig\Loader\FilesystemLoader('./themes/classic/templates/front-office/');
    
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
        'action' => $_GET['action'],
        'status' => $_GET['status'],
        'title' => "UniStream - Identification"
    );

    # --- Call load method for load the template master ---
    $twig = (object) $environment->load('index/index.master.html.twig');
    # --- Render template with some variables defined above ---
    echo $twig->render(
        array_merge(
            $general
        )
    );
}

?>