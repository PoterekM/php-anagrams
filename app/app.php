<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    // $app->get("/view_anagram", function() use($app) {
    //     $new_AnagramGenerator = new AnagramGenerator;
    //     // return $app['twig']->render('anagram_result.html.twig', array('result' => $));
    // });

    return $app;
?>
