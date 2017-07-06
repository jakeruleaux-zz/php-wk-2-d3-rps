<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('game.html.twig');
});

    $app->get('/view_winner', function() use($app) {
    $winner = new RockPaperScissors;
    $bigWinner = $winner->playGame($_GET['first_input'], $_GET['second_input']);
        return $app['twig']->render('game.html.twig', 'result' => $bigWinner);

  });      

        return $app;
?>
