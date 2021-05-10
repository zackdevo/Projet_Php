<?php

namespace Entity;

class Posts
{
    public $id;
    public $created_at;
    public $user_id;
    public $title;
    public $subtitle;
    public $content;
    public Users $user;
}
