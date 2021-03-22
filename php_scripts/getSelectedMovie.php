<?php

# --- Start a session ---
session_start();
#ini_set('display_errors', 1);

# --- Check if user is connected --- 
if (!isset($_SESSION['user']['id'])) {
    header('Location: http://www.localhost/site_streaming/index.php');
    exit();
}

    # --- Import Database class ---
    require_once('../classes/Database.php');
    require_once('../classes/Sanitizing.php');
    $sanitize = (object) new Sanitizing();

    # --- Call abstract class Database for get data in `movies` table with prepared query and dataMapper in json format---
    echo json_encode( Database::query('SELECT * FROM `movies` WHERE `id` = :id', array(
        'id' => $sanitize->sanitizeString($_GET['movie']))
        ));

    exit();

?>