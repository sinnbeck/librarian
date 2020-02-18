<?php

namespace App\Command\Web;

use Miniweb\Provider\TwigServiceProvider;
use Miniweb\Response;
use Miniweb\WebController;

class IndexController extends WebController
{
    public function handle()
    {
        /** @var TwigServiceProvider $twig */
        $twig = $this->getApp()->twig;
        $output = $twig->render('content/index.html.twig', []);

        $response = new Response($output);

        $response->output();
    }
}