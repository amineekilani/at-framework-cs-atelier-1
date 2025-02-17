<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route("afficher/fr/{name}", name: "test_fr")]
    function afficher($name)
    {
        dd("<h1>Bonjour $name</h1>");
    }
    #[Route("afficher/en", name: "test_en")]
    function show()
    {
        return new Response("<h1>Hello</h1>");
    }
    #[Route("afficher/ar/{nom}", name: "test_ar")]
    function tfarrej($nom)
    {
        return $this->render("Test/tfarrej.html.twig", ["nom"=>$nom]);
    }
}