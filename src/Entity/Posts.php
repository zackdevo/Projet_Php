<?php

namespace Entity;

use ludk\Utils\Serializer;

class Posts
{
    public $id;
    public $created_at;
    public $user_id;
    public $title;
    public $subtitle;
    public $content;
    public Users $user;
    use Serializer;
}
