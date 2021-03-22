<?php

# --- Start a session ---
session_start();
#ini_set('display_errors', 1);

# --- Check if user is connected --- 
if (!isset($_SESSION['user']['id'])) {
    header('Location: http://www.localhost/site_streaming/index.php');
    exit();
}

    # --- Import Database and Sanitizing, instanciation of Sanitizing ---
    require_once('../classes/Database.php');
    require_once('../classes/Sanitizing.php');
    $sanitize = (object) new Sanitizing();

    # --- Check if post datas expected exists ---
    if ( !empty($_POST['title']) and !empty($_POST['description']) and !empty($_POST['picture']) and 
    !empty($_POST['link']) and !empty($_POST['id_category']) and !empty($_POST['id_gender']) and !empty($_POST['year']) ) 
    {
        # --- Call abstract class Database for insert data in `movies` table with prepared query and dataMapper ---
        Database::query('INSERT INTO `movies` (`title`, `description`, `picture`, `link`, `id_category`, `id_gender`, `year`) VALUES (:title, :description, :picture, :link, :id_category, :id_gender, :year)',
        array(
            # --- Call sanitize class for clean POST request datas ---
            'title' => $sanitize->sanitizeString($_POST['title']),
            'description' => $sanitize->sanitizeString($_POST['description']),
            'picture' => $sanitize->sanitizeString($_POST['picture']),
            'link' => $sanitize->sanitizeString(($_POST['link'])),
            'year' => $sanitize->sanitizeInteger(intval($_POST['year'])),
            'id_gender' => $sanitize->sanitizeInteger(intval($_POST['id_gender'])),
            'id_category' => $sanitize->sanitizeInteger(intval($_POST['id_category']))
            )
        );
    }

    header('Location: http://www.localhost/site_streaming/administration.php');
    exit();

?>