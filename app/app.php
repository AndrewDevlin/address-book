<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/address_book.php";

    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app['debug'] = true;

    // when localhost:8000 is searched send to homepage
    $$app->get('/', function() use ($app) {
        return $app['twig']->render('homepage.html.twig');
    });

    // instantiate new object and send to confirmation page
    $app->post('/add_contact', function() use ($app) {
        $new_contact = new Contact($_POST["set_first_name"], $_POST["set_last_name"], $_POST["set_phone_number"], $_POST["set_street"], $_POST["set_city"], $_POST["set_state"], $_POST["set_zip"]);
        $new_contact->save();
        return $app['twig']->render('create_contact.html.twig', array('new_contact' => $new_contact));
    });

    // delete all objects and show confirmation page
    $app->post('/delete_all', function() use ($app) {
        return $app['twig']->render('delete_contacts.html.twig', array('delete' => Contact::deleteAll()));
    });




     return $app;
?>
