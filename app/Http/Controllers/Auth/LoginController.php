<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Admin;
use App\Manajer;
use App\Karyawan;



class LoginController extends Controller
{
    public function loginIndex() {
        return view('auth.login');
    }
}
