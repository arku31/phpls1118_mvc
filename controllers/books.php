<?php
namespace App;

class Books extends MainController
{
    //view - доступен
    public function php()
    {
        $userModel = new User();
        $allUsers = $userModel->all();
        $allUsers = array_map(function ($item) {
            return strtoupper($item);
        }, $allUsers);
        $this->view->render('course_users', ['users' => $allUsers]);
    }
}