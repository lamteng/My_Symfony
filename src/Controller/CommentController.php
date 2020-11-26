<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class CommentController extends AbstractController
{

    public function commentVote($id, $directoin)
    {
        if ($direction === 'up'){
            $currentVoteCount = rand(7, 100);
        }else{
            $currentVoteCount = rand(0, 5);
        }
        return new JsonResponse(['votes' => $currentVoteController]);
    }
}