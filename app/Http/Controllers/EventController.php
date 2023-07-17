<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index() {
        return view('welcome');
    }

    public function create() {
        return view('event.create');
    }

    public function contact() {
        return view('contact');
    }

    public function products() {
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function product($id) {
        return view('product', ['id' => $id]);
    }
}

