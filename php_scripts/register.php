<?php

#ini_set('display_errors', '1');

if (

    isset($_POST['email']) && !empty($_POST['email']) && strlen($_POST['email']) <= 320 &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])

) {


    # --- Import & instanciation of Sanitizing class ---
    require_once('../classes/Sanitizing.php');
    $sanitizing = (object) new Sanitizing();

    # --- Use sanitize and conditionnal for validate email and password ---
    $email = strtolower($_POST['email']);
    $password = (string) ($sanitizing->sanitizeString($_POST['password']));
    
    if ( !$sanitizing->validateEmail($email) ) {
        header('Location: http://www.localhost/site_streaming/index.php?status=email');
        exit();
    } else if ( $_POST['confirm_password'] !== $_POST['password'] || strlen($password) < 8 ) {
        header('Location: http://www.localhost/site_streaming/index.php?status=password');
        exit();
    }


    # --- Import & instanciation of Encryption class ---
    require_once('../classes/Encryption.php');
    $encryption = (object) new Encryption();
    # --- password encryption ---
    $hashedPassword = (string) $encryption->passwordHash($_POST['password']);


    # --- Import Database class ---
    require_once('../classes/Database.php');
    # --- Call abstract class Database and insert data in `users` table with prepared query and dataMapper ---
    Database::query(
        'INSERT INTO `users` (`email`, `password`, `activate`) VALUES (:email, :password, :activate)', 
        array(
            ':email' => $email,
            ':password' => $hashedPassword,
            ':activate' => 0
        )
    );


    # --- Import PHPMailer components ---
    require_once('/usr/share/php/libphp-phpmailer/src/PHPMailer.php');
    require_once('/usr/share/php/libphp-phpmailer/autoload.php');
    # --- Import configuration file for get phpMailer datas ---
    require('../configuration.php');
    


    try {

        $phpmailer = (object) new PHPMailer\PHPMailer\PHPMailer(true); # create PHPMailer instance
        $phpmailer->Timeout = 30;

        /* 0 = off (for production use)
           1 = client messages
           2 = client and server messages*/
           
        $phpmailer->SMTPDebug = 3; # Enable SMTP debugging

        $phpmailer->isSMTP(); # Tell PHPMailer to use SMTP

        $phpmailer->Host = $mailer['host']; # SMTP server
        $phpmailer->Port = $mailer['port']; # SMTP port
        $phpmailer->SMTPSecure = 'tls'; # Set encryption system to tls

        $phpmailer->SMTPAuth = true; # Enable SMTP authentification
        $phpmailer->Username = $mailer['username']; # SMTP account username
        $phpmailer->Password = $mailer['password']; # SMTP account password
        
        $phpmailer->setFrom($mailer['username'], $general['sender']); # Set who send the mail
        $phpmailer->addAddress($email, ''); # Set who will send the email to

        $phpmailer->isHTML(true); # Send email in HTML
        $phpmailer->Subject = "Confirmation de votre compte"; # Subject of the mail

        $domain = $general['domain']; # Set the domain of the website

        $encode = base64_encode($email); # Encode the email adress in base64

        # Edit the mail body content
        $phpmailer->Body = <<<EOF
            <p>Veuillez suivre le lien suivant afin de confirmer votre inscription :</p>
            <a href="http://$domain/site_streaming/php_scripts/activate.php?active=$encode">Confirmez votre inscription</a>
        EOF;

    } catch (Exception $exception) {

        var_dump($exception); # Display errors

    } finally {

        $phpmailer->send(); # Send the mail

        header('Location: http://www.localhost/site_streaming/index.php?status=confirmation');
        exit();

    }

}


else {

    header('Location: http://www.localhost/site_streaming/index.php?status=failed');
    exit();

}

?>