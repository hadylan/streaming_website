<?php 

// Desactive le suivi de la navigation
header('Referrer-Policy: no-referrer');

// Defini le MIME type d'une page
header('Content-Type: text/html; charset=utf-8');

// Empeche le chargement des ressources externes comme les .js et .css
// /!\ Altere le fonctionnement des CDNs et de certaines librairies
// header("Content-Security-Policy: default-src 'self'; script-src 'unsafe-inline'; style-src 'unsafe-inline';");

// Interdit l'ouverture automatique d'une ressource sans actions de l'utilisateur
header('X-Download-Options: noopen');

// Indique si une ressource est autorisee a etre chargee dans un cadre ou un iframe
header('X-Frame-Options: SAMEORIGIN');

// Active les mecanismes internes de protection des navigateurs contre les vulnerabilites XSS
header('X-XSS-Protection: 1; mode=block');

// Protege des changements du MIME type d'une page
header('X-Content-Type-Options: nosniff');

// Desactive l'acces au cookie de session par Javascript. Cette option evite le vol de cookie par injection Javascript.
ini_set('session.cookie_httponly', '1');

// Empeche la divulgation des cookies sur des sites externes
ini_set('session.cookie_samesite', 'None');

// Specifie que les cookies ne doivent etre emis que sur des connexions securisee
ini_set('session.cookie_secure', '1');

?>