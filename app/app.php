<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/tamagotchi.php";
    // require_once __DIR__."/../css/styles.css";
    session_start();
    if (empty($_SESSION['tama'])) {
     $_SESSION['tama'] = array();
    }
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
     'twig.path' => __DIR__.'/../views'
    ));




     return $app;
?>