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

    # --- Call abstract class Database for get data in `categories` table with prepared query in json format---
    echo json_encode( Database::query('SELECT * FROM `categories`', array()) );

    exit();
?>