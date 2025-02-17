<?php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;

class TestController
{
    #[Route("afficher/fr", name: "test_fr")]
    function afficher()
    {
        dd("Bonjour tout le monde");
    }
    #[Route("afficher/en", name: "test_en")]
    function show()
    {
        dd("Hello World");
    }
    #[Route("afficher/ar", name: "test_ar")]
    function tfarrej()
    {
        dd("3asslema");
    }
}