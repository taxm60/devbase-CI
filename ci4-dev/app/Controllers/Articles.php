<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index()
    {
        $m = new ArticleModel();
        $rtnAry = $m->findAll();
        return view("Articles/index", ["articles" => $rtnAry]);
    }
}
