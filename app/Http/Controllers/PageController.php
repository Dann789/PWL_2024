<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2241760086 - Muhammad Wildan Ramadhana';
    }

    public function isiNama($nama, $nim) {
        return $nama . ' - ' . $nim;
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ke-' . $id;
    }
}
