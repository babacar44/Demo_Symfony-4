<?php

namespace App\Controller;

use App\Entity\BlogPost;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/lister", name="blog_list", methods={"GET"})
     */
    public function list(Request $request)
    {
        return $this->json(
            $this->getDoctrine()->getRepository(BlogPost::class)->findAll()
        );
    }

    /**
     * @Route("/add", name="blog_add", methods={"POST"})
     */
    public function add(Request $request)
    {
        /** @var Serializer $serializer */

        $serializer = $this->get('serializer');

        $blogPost = $serializer->deserialize($request->getContent(), BlogPost::class, 'json');

        $em = $this->getDoctrine()->getManager();
        $em->persist($blogPost);
        $em->flush();
         
        return $this->json($blogPost);
    }

     /**
     * @Route("/trouver/{id}", name="blogbyid", methods={"GET"})
     * 
     */
    public function trouver(BlogPost $post)
    {
        // return $this->json(
        //     $this->getDoctrine()->getRepository(BlogPost::class)->find($id)
        // );
        return $this->json(
            $post
        );
    }

    /**
     * @Route("/trouver/{author}", name="blogbyauthor", methods={"GET"})
     * 
     */
    public function dioxma(BlogPost $post)
    {
        // return $this->json(
        //     $this->getDoctrine()->getRepository(BlogPost::class)->find($id)
        // );
        return $this->json(
            $post
        );
    }

    /**
     * @Route("/effacer/{id}", name="blogdinid", methods={"DELETE"})
     */
    public function delete(BlogPost $post)
    {
    $em = $this->getDoctrine()->getManager();
    $em->remove($post);
    $em->flush();

    return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

}

