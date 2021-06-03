<?php

namespace Controller;

use Entity\Users;
use ludk\Controller\AbstractController;
use ludk\Http\Response;
use ludk\Http\Request;

class AuthController extends AbstractController
{

    // LOGIN
    public function login(Request $request): Response
    {
        $usersRepo = $this->getOrm()->getRepository(Users::class);
        $data = [];
        if ($request->request->has("pseudo") && $request->request->has("password")) {
            $criteriaWithloginAndPawword = [
                "nickname" => $request->request->get("pseudo"),
                "password" => $request->request->get("password"),
            ];
            $usersWithThisNicknameAndPassword = $usersRepo->findBy($criteriaWithloginAndPawword);
            if (count($usersWithThisNicknameAndPassword) == 1) {
                $request->getSession()->set('user', $usersWithThisNicknameAndPassword[0]);
                return $this->redirectToRoute('display');
            } else {
                $data = array(
                    "errorMsg" => "Mauvais mot de passe ou pseudo !"
                );
            }
        }
        return $this->render('login.php', $data);
    }


    // LOGOUT 
    public function logout(Request $request): Response
    {
        $request->getSession()->remove('user');
        return $this->redirectToRoute('display');
    }


    // REGISTER
    public function register(Request $request): Response
    {
        $usersRepo = $this->getOrm()->getRepository(Users::class);
        $manager = $this->getOrm()->getManager();
        if ($request->request->has("pseudo") && $request->request->has("password") && $request->request->has("password2")) {
            $response = $usersRepo->findBy(["nickname" => $request->request->get("pseudo")]);
            if (count($response) > 0) {
                $data = array(
                    "errorMsg" => "Ce pseudo est déjà pris !"
                );
            }
            if ($request->request->get("password") != $request->request->get("password2")) {
                $data = array(
                    "errorMsg" => "Le second mot de passe doit être le même que le premier !"
                );
            }
            if ($data) {
                return $this->render('register.php', $data);
            } else {
                $newUser = new Users;
                $newUser->created_at = date("Y-m-d H:i:s");
                $newUser->nickname = $request->request->get("pseudo");
                $newUser->password = $request->request->get("password");
                $manager->persist($newUser);
                $manager->flush();
                $request->getSession()->set('user', $newUser);
                return $this->redirectToRoute('display');
            }
        }
        return $this->render('register.php');
    }
}
