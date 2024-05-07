<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $db->query('select 1');
        return (string) $db->getLastQuery();
        //return view('welcome_message');
    }
}
