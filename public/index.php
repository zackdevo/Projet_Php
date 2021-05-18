<?php
require("../vendor/autoload.php");

use Entity\Posts;
use Entity\Users;
use ludk\Persistence\ORM;

require __DIR__ . '/../vendor/autoload.php';
session_start();
$orm = new ORM(__DIR__ . '/../Resources');
$usersRepo = $orm->getRepository(Users::class);
$postsRepo = $orm->getRepository(Posts::class);
$manager = $orm->getManager();

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password2'])) {
            $response = $usersRepo->findBy(["nickname" => $_POST["pseudo"]]);
            if (count($response) > 0) {
                $errorMsg = "Pseudo déjà pris bg unlucky";
            }
            if ($_POST['password'] != $_POST['password2']) {
                $errorMsg = "Le second mot de passe doit être le même que le premier";
            }
            if ($errorMsg) {
                include('../templates/register.php');
            } else {
                $newUser = new Users;
                $newUser->created_at = date("Y-m-d H:i:s");
                $newUser->nickname = $_POST['pseudo'];
                $newUser->password = $_POST['password'];
                $manager->persist($newUser);
                $manager->flush();
                $_SESSION["user"] = $newUser;
                header('Location: ?action=display');
            }
        }
        include('../templates/register.php');

        break;
    case 'logout':
        session_destroy();
        header('Location: ?/action=display');
        break;
    case 'login':
        if (isset($_POST["pseudo"])  && isset($_POST["password"])) {
            $criteriaWithloginAndPawword = [
                "nickname" => $_POST['pseudo'],
                "password" => $_POST['password']
            ];
            $usersWithThisNicknameAndPassword = $usersRepo->findBy($criteriaWithloginAndPawword);
            if (count($usersWithThisNicknameAndPassword) == 1) {
                $_SESSION['user'] = $usersWithThisNicknameAndPassword[0];
                header('Location: ?action=display');
            } else {
                $errorMsgLog = "Mauvais mot de passe ou pseudo";
            }
        }
        include('../templates/login.php');
        break;
    case 'new':
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
                header('Location: ?action=display');
            }
        }
        include('../templates/createReview.php');
        break;
    case 'display':
        if (isset($_GET['search'])) {
            $items = $postsRepo->findBy(array("content" => '%' . $_GET['search'] . '%'));
        } else {
            $items = $postsRepo->findAll();
        }
        include('../templates/display.php');
    default:
        break;
}
