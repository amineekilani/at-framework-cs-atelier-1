<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route("/blog/article", name: "blog")]
    public function index(): Response
    {
        return $this->render("blog/index.html.twig");
    }
    #[Route("/blog/article/{id<\d+>?1}", name: "blog_article_show")]
    public function show($id): Response
    {
        return $this->render("blog/show.html.twig", ["id"=>$id]);
    }
    #[Route("/blog/article/lister", name: "blog_article_lister")]
    public function lister(): Response
    {
        return $this->render("blog/lister.html.twig");
    }
    #[Route("/blog/article/detail/{id<[0-9]{1,3}>}/{name<Belaili|Sasse>}", name: "blog_article_detail")]
    public function detail($id, $name): Response
    {
        return $this->render("blog/detail.html.twig", ["id"=>$id, "name"=>$name]);
    }
    #[Route("/blog/home", name: "blog_home")]
    public function home(): Response
    {
        //$url=$this->generateUrl("blog");
        //return $this->redirect($url);
        //return $this->redirect($this->generateUrl("blog"));
        return $this->render("blog/home.html.twig");
    }
}