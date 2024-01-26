<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'breadcrumbs' => [
                [
                    'title' => 'Beranda',
                    'is_active' => true
                ],
                // [
                //     'title' => 'Manajemen Pengguna',
                //     'url' => 'route('apps.dashboard')'
                // ],
                // [
                //     'title' => 'Pengguna',
                //     'is_active' => true
                // ]
            ],
        ];

        return view('home.index', $data);
    }
}
