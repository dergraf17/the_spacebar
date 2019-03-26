<?php
/**
 * Created by PhpStorm.
 * User: Dieter
 * Date: 26.03.2019
 * Time: 15:09
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AricleController
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function homepage() {

        return new Response('Hallo Symfony');
    }

    /**
     * Matches /news/*
     *
     * @Route("/news/{slug}", name="news_show")
     */
    public function show($slug) {

        return new Response(sprintf('Future page to show one space article: %s', $slug));

    }
}