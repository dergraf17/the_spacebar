<?php
/**
 * Created by PhpStorm.
 * User: Dieter
 * Date: 26.03.2019
 * Time: 15:09
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AricleController extends AbstractController
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

        $comments = [
            'Hallo, das ist wieder einmal ein besonderer Tag!',
            'Autofahren macht Spaß.',
            'Niemmand will der Schnellste sein'
        ];

        return $this->render('article/show.html.twig', [
            "title" => ucwords(str_replace('-', ' ', $slug)),
            "comments" => $comments,
        ]);



    }
}