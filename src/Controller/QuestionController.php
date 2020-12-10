<?php
// src/Controller/QuestionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }
     /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting purefectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe.. try saying the spell backwards?',
        ]; 

        //dd($slug, $this);
        $questionText = 'I\'ve been turned into a cat, any thoughts on how to turn back? While I\'m **adorable**, I don\'t really care for cat food.';

        return $this->render('question/show.html.twig',[
            'question'=> ucwords(str_replace('-',' ',$slug)),
            'questionText' => $questionText,
            'answers'=> $answers,
        ]);
    }

    /**
     * @Route("/questions/new)
     */
    public function new()
    {
    return new Response('ime for some Doctrine magic');
}


}

