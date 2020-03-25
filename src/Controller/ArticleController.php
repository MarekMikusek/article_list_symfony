<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    /**
     * @Route("/", name="article_list")
     * @Method({"GET"})
     */
    public function index()
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
        return $this->render('articles/index.html.twig', compact('articles'));
    }

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        return $this->render('articles/show.html.twig', compact('article'));
    }



    // /**
    //  * @Route("/article/save")
    //  */
    // public function save()
    // {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $article = new Article();
    //     $article->setTitle('Article tow');
    //     $article->setBody('Article two long text body');
    //     $article->setAuthor('Marek');

    //     $entityManager->persist($article);

    //     $entityManager->flush();

    //     return new Response('Saved an article with the id of '.$article->getId());
    // }
}