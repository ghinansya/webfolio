<?php

namespace App\Controllers;
use App\Models\BioModels;

class Main extends BaseController{

    function index(){
        $models = new BioModels;
        $getBio = $models->getBio();
        foreach ($getBio as $my) {}
        $data['name'] = $my['name'];

        return view('index', $data);
    }

    function about(){
        $models = new BioModels;
        $getBio = $models->getBio();
        foreach ($getBio as $my) {}
        $data['name'] = $my['name'];
        $data['position'] = $my['position'];
        $data['phone'] = $my['phone'];
        $data['city'] = $my['city'];
        $data['age'] = $my['age'];
        $data['interest'] = $my['interest'];
        $data['mail'] = $my['mail'];
        $data['about'] = $my['about'];

        return view('about', $data);
    }

    function portfolio(){
        return view('portfolio');
    }

    function contact(){
        $models = new BioModels;
        $getBio = $models->getBio();
        foreach ($getBio as $my) {}
        $data['address'] = $my['address'];
        $data['city'] = $my['city'];
        $data['mail'] = $my['mail'];
        $data['phone'] = $my['phone'];

        return view('contact', $data);
    }
}
