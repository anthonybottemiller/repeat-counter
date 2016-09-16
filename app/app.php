<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
      ));

    $app->get("/", function () use ($app) {
      return $app['twig']->render('home.html.twig');
    });

    $app->post("/count", function () use ($app) {
      $repeatCounter = new RepeatCounter($_POST['input-string'],$_POST['comparison-string']);
      $wordCount = $repeatCounter->CountRepeats();
      return $app['twig']->render('result.html.twig',array ('timesFound' => $wordCount, 'inputString' => $_POST['input-string'], 'comparisonString' => $_POST['comparison-string']));
    });

    return $app;
?>