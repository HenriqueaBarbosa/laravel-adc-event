<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller {
    public function index() {

        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
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

