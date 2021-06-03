<?php

namespace Controller;

use Entity\Posts;
use ludk\Controller\AbstractController;
use ludk\Http\Response;
use ludk\Http\Request;

class HomeController extends AbstractController
{

    public function display(Request $request): Response
    {
        $postsRepo = $this->getOrm()->getRepository(Posts::class);

        if ($request->query->get('search')) {
            $items = $postsRepo->findBy(array("content" => '%' . $request->query->get('search') . '%'));
        } else {
            $items = $postsRepo->findAll();
        }

        $data = array(
            "items" => $items
        );
        return $this->render('display.php', $data);
    }
}
