<?php 

#ini_set('display_errors', '1');

# check token for activation
if (
    isset($_GET['active']) and !empty($_GET['active']) and strlen($_GET['active']) <= 320
) {

    # --- Import & instanciation of Sanitizing class ---
    require_once('../classes/Sanitizing.php');
    $sanitizing = (object) new Sanitizing();

    # --- decode token ---
    $active = (string) ($sanitizing->validateEmail(base64_decode($_GET['active']))) ? strtolower(base64_decode($_GET['active'])) : die('is not a valid email');

    # --- Import & instanciation of Database class ---
    require_once('../classes/Database.php');

    # --- Call abstract class Database and get data in `users` table with prepared query and dataMapper ---
    $data = (array) Database::query(
        'SELECT `id`, `activate` FROM `users` WHERE `email` = (:email)', 
        array(':email' => $active)
    );

    # set status equal to data of `activate` column from sql query
    $status = (int) $data[0]['activate'];

    # --- Call abstract class Database and insert data in `users` table with prepared query and dataMapper ---
    if ($status === 0) {
        $id = (int) $data[0]['id'];
        Database::query(
            'UPDATE `users` SET `activate` = 1 WHERE `id` = (:id)', 
            array(':id' => $id)
        );

        header('Location: http://www.localhost/site_streaming/index.php?status=validated');
        exit();


    } else {
        header('Location: http://www.localhost/site_streaming/index.php?status=alreadyValidated');
        exit();
    }

}

?>