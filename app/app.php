<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Cd.php";

    session_start();
    /**CDs Array**/
    if(empty($_SESSION['list_of_cds'])) {
        $_SESSION['list_of_cds'] = array();
    }
    /**Matching CDs Array**/
    if(empty($_SESSION['matching_cds'])) {
        $_SESSION['matching_cds'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array( 'twig.path' => __DIR__.'/../views'));
    /**Home**/
    $app->get("/", function() use($app) {
        return $app['twig']->render('cds.html.twig', array('cds' => Cd::getAll()));
    });
    /**Enter CD webpage**/
    $app->get("/enter_music", function() use($app) {
        return $app['twig']->render('enter_music.twig.html');
    });
    /**Add New CD**/
    $app->post("/add", function() use($app) {
        $cd = new Cd($_POST['artist'], $_POST['album_name'], $_POST['year'], $_POST['cover_art']);
        $cd->save();
        return $app['twig']->render('review_cd.html.twig', array('newcd' => $cd));
    });
    /**View Search**/
    $app->get("/results", function() use($app) {
        $user_artist = ($_GET['user_artist']);
        return;
    });
    /**Delete CDs**/
    $app->post("/delete_cds", function() use($app) {
        Cd::deleteAll();
        return $app['twig']->render('delete_cds.html.twig');
    });

    return $app;
 ?>
