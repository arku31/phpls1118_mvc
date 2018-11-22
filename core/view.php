<?php

namespace App;

class View
{
    public function render(String $filename, array $data)
    {
        extract($data); //users => $users = ['user1']
        require_once __DIR__."/../views/".$filename.".php";
    }
}

