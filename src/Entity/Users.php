<?php

namespace Entity;

use ludk\Utils\Serializer;

class Users
{
    public $id;
    public $created_at;
    public $nickname;
    public $password;
    use Serializer;
}
