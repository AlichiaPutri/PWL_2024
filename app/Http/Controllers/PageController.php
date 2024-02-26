<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index() {
    return'Selamat Datang';
}

public function about() {
    return 'Alichia Putri 2341728009';
}

public function articles($id) {
    return 'Halaman Artikel dengan Id '.$id;
}
}
