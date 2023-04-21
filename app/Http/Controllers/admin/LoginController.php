<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }


}
