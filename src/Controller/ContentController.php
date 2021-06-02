<?php

namespace Controller;

use Entity\Users;
use Entity\Posts;

class ContentController
{
    function create()
    {
        global $manager;
        $errorMsgReview = NULL;
        if (isset($_POST['title']) && isset($_POST['subtitle']) && isset($_POST['content']) && isset($_SESSION["user"])) {
            if (strlen(trim($_POST['title'])) < 2) {
                $errorMsgReview = "Le titre du jeu doit au moins faire deux caractères mec";
            } elseif (strlen(trim($_POST['subtitle'])) < 2) {
                $errorMsgReview = "Le titre de la review doit au moins faire deux caractères mec";
            } elseif (strlen(trim($_POST['content'])) <= 0) {
                $errorMsgReview = "La review est vide mec come on";
            }
            if ($errorMsgReview) {
                include('../templates/createReview.php');
            } else {
                $newReview = new Posts;
                $newReview->created_at = date("Y-m-d H:i:s");
                $newReview->title = $_POST['title'];
                $newReview->subtitle = $_POST['subtitle'];
                $newReview->content = $_POST['content'];
                $newReview->user = $_SESSION['user'];
                $manager->persist($newReview);
                $manager->flush();
                header('Location: /display');
            }
        }
        include('../templates/createReview.php');
    }
}
