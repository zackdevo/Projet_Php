<?php

namespace Controller;

use Entity\Posts;
use ludk\Controller\AbstractController;
use ludk\Http\Response;
use ludk\Http\Request;

class ContentController extends AbstractController
{
    public function create(Request $request): Response
    {
        $manager = $this->getOrm()->getManager();
        if ($request->request->has("title") && $request->request->has("subtitle") && $request->request->has("content") && $request->getSession()->has('user')) {
            if (strlen(trim($request->request->get("title"))) < 2) {
                $data = array(
                    "errorMsg" => "Le titre du jeu doit au moins faire 2 caractères !"
                );
            } elseif (strlen(trim($request->request->get("subtitle"))) < 2) {
                $data = array(
                    "errorMsg" => "Le titre de la review doit au moins faire 2 caractères !"
                );
            } elseif (strlen(trim($request->request->get("content"))) <= 0) {
                $data = array(
                    "errorMsg" => "La review est vide man"
                );
            }

            if ($data) {
                return $this->render('createReview.php', $data);
            } else {
                $newReview = new Posts;
                $newReview->created_at = date("Y-m-d H:i:s");
                $newReview->title = $request->request->get("title");
                $newReview->subtitle = $request->request->get("subtitle");
                $newReview->content = $request->request->get("content");
                $newReview->user = $request->getSession()->get('user');
                $manager->persist($newReview);
                $manager->flush();
                return $this->redirectToRoute('display');
            }
        }
        return $this->render('createReview.php');
    }
}
