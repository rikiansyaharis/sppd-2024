<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DataTables;
use Carbon\Carbon;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Pengguna',
            'breadcrumbs' => [
                [
                    'title' => 'Beranda',
                    'url' => 'route("apps.dashboard")'
                ],
                [
                    'title' => 'Pengguna',
                    'is_active' => true,
                ],

            ],
        ];

        return view('user.index', $data);
    }

    public function getData()
    {
        $users = User::with(['roles'])->whereHas('roles', function($q) {
            $q->whereNotIn('name', ['Developer']);
        })->get();

        $users->transform(function ($user) {
            $user->email_verified_at_display = $user->email_verified_at ? Carbon::parse($user->email_verified_at)->locale('id')->isoFormat('dddd, D MMMM YYYY')  : 'Belum Aktif';
            return $user;
        });

        return DataTables::of($users)->make(true);

    }
}
