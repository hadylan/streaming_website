<?php

# --- Start a session ---
session_start();
#ini_set('display_errors', 1);

# --- Check if user is connected --- 
if (!isset($_SESSION['user']['id'])) {
    #header('Location: http://www.localhost/site_streaming/index.php');
    exit();
}

    # --- Import Database, sanitizing and an instanciation "sanitize" ---
    require_once('./classes/Database.php');
    require_once('./classes/Sanitizing.php');
    $sanitize = (object) new Sanitizing();


    # --- Call abstract class Database for update data in `users` table with prepared query, dataMapper and conditionnal ---
    if ( !empty($_POST['username']) ) {
        if ( !empty($_POST['picture']) ) {
            Database::query('UPDATE `users` SET `username`= :username, `picture`= :picture WHERE `id` = :id', array(
                'username' => $sanitize->sanitizeString($_POST['username']),
                'picture' => $sanitize->sanitizeString($_POST['picture']),
                'id' => intval($_SESSION['user']['id'])
            ) );
        }
        else {
            Database::query('UPDATE `users` SET `username`= :username WHERE `id` = :id', array(
                'username' => $sanitize->sanitizeString($_POST['username']),
                'id' => intval($_SESSION['user']['id'])  
            ) );
        }
    }
    else if ( !empty($_POST['picture']) ) {
        Database::query('UPDATE `users` SET `picture`= :picture WHERE `id` = :id', array(
            'picture' => $sanitize->sanitizeString($_POST['picture']),
            'id' => intval($_SESSION['user']['id'])
        ) );
    }

    header('Location: http://www.localhost/site_streaming/profil.php');
    exit();

?>