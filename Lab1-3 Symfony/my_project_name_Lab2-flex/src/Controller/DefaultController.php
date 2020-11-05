<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController  extends AbstractController
{
/**
* @Route("/Привет/{name}")
*/
    public function index($name)
    {
       return $this->render('default/index.html.twig', [
           'name' => $name,
        ]);
       // return new Response("Hello!, $name");
    }
	
/**
 * @Route("/simplicity")
 */
public function simple()
{
    return new Response('Просто! Легко! Прекрасно!');
}

/**
 * @Route("/api/hello/{name}")
 */
public function apiExample($name)
{
    return $this->json([
        'name' => $name,
        'symfony' => 'rocks',
    ]);
}
}