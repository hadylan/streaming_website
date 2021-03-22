<?php

#ini_set('display_errors', 1);

if (
    isset($_POST['email']) && !empty($_POST['email']) && strlen($_POST['email']) <= 75 &&
    isset($_POST['password']) && !empty($_POST['password']) && strlen($_POST['password']) >= 8
) {

    # --- Sanitize email ---

    # --- Import Sanitizing class ---
    require_once('../classes/Sanitizing.php');
    # --- Instanciation of sanitize ---
    $sanitize = (object) new Sanitizing();

    if ( $sanitize->validateEmail($_POST['email']) ) {
        $email = (string) $_POST['email'];
    } else {
        header('Location: http://www.localhost/site_streaming/index.php?action=login&?status=email');
        exit();
    }


    # --- Sanitize password ---

    $password = (string) $sanitize->sanitizeString($_POST['password']);

    # --- Import database class ---
    require_once('../classes/Database.php');

    # --- Use database class for get user by email with prepared query and dataMapper ---
    $data = (array) Database::query(
        'SELECT `id`, `activate`, `password` FROM `users` WHERE `email` = (:email)',
        array(':email' => $email)
    );

    # --- check if user exist in database ---
    if ($data[0]['id']) {

        # --- import encryption class and check password ---
        require_once('../classes/Encryption.php');
        $encryption = (object) new Encryption();
        $passwordFromDatabase = (string) $data[0]['password'];
        $activate = (int) $data[0]['activate'];

        # --- check if the user account is validated ---
        if ($encryption->passwordVerify($password, $passwordFromDatabase)) {
            
            if ($activate === 1) {

                $id = $data[0]['id'];

                # --- start a session and put in session array the account id ---
                session_start();
                $_SESSION['user'] = array(
                    'id' => $id,
                    'session' => session_id()
                );
    
                header('Location: http://www.localhost/site_streaming/index.php');
                exit();

            } else {
                header('Location: http://www.localhost/site_streaming/index.php?action=login&?status=notactivated');
                exit();
            }

        } else {
            header('Location: http://www.localhost/site_streaming/index.php?action=login&?status=password');
            exit();
        }
        
    } else {
        header('Location: http://www.localhost/site_streaming/index.php?action=login&?status=user');
        exit();
    }


}

else {
    header('Location: http://www.localhost/site_streaming/index.php?action=login&?status=error');
    exit();
}

?>