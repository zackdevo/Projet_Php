<?php

namespace Controller;

class HomeController
{

    public  function display()
    {

        global $postsRepo;

        if (isset($_GET['search'])) {
            $items = $postsRepo->findBy(array("content" => '%' . $_GET['search'] . '%'));
        } else {
            $items = $postsRepo->findAll();
        }
        include('../templates/display.php');
    }
}
