<?php

namespace App\controller;

use App\core\Controller;
use App\models\post;

class SiteController extends Controller
{
    public function home()
    {
        $post = new post();

        return $this->render('home', [
            'model' => $post,
        ]);
    }

    public function auth()
    {
        return $this->render('auth/auth', [
            'home' => 'myhome',
        ]);
    }

    public function profile()
    {
        return $this->render('profile/profile', [
            'home' => 'myhome',
        ]);
    }
}
