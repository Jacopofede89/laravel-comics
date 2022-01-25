<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $menu = ['Characters','Comics','Movies','tv','games','collectibles','videos','fans','news','shop'];   
    public function index()
    {
        return view('pages.index', ['menu' => $this -> menu]);
    }
    public function dettaglio()
    {
        $menu = $this -> menu;
        return view('pages.dettaglio', compact('menu'));
    }
}
