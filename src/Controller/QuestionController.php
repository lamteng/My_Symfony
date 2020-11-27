<?php
// src/Controller/QuestionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('this is the main page message');
    }
     /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purefectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe.. try saying the spell backwards?',
        ]; 
        return $this->render('question/show.html.twig',[
            'question'=> ucwords(str_replace('-',' ',$slug)),
            'answer'=> $answers,
        ]);
    }
}