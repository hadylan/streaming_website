<?php

# --- Start a session --- 
session_start();
#ini_set('display_errors', 1);

# --- Check if user is connected --- 
if (!isset($_SESSION['user']['id'])) {
    header('Location: http://www.localhost/site_streaming/index.php');
    exit();
}
    # --- import Database and Sanitize, instancition of Sanitize --- 
    require_once('../classes/Database.php');
    require_once('../classes/Sanitizing.php');
    $sanitize = (object) new Sanitizing();

    # --- Check if a data was sended ---
    if ( !empty($_POST['genre']) ) 
    {

        # --- Call abstract class Database for insert data in `genders` table with prepared query and dataMapper ---
        Database::query('INSERT INTO `genders` (`gender`) VALUES (:genre)',
        array(
            # --- Call sanitize class for clean POST request datas ---
            'genre' => $sanitize->sanitizeString($_POST['genre'])
            )
        );
    }

    header('Location: http://www.localhost/site_streaming/administration.php');
    exit();

?>