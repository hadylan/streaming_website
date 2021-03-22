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

    # --- Check if expected POST datas exist
    if ( !empty($_POST['movie']) ) 
    {
        # --- Call abstract class Database for delete selected movie by id from POST request with prepared query and dataMapper ---
        Database::query('DELETE FROM `movies` WHERE `id` = :id',array(
            'id' => intval($_POST['movie'])
        )
        );
    }

    header('Location: http://www.localhost/site_streaming/administration.php');
    exit();

?>