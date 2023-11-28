<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $Title = 'CafeCityGuide';
        $Team = User::getAdmin();;
        return view('index', compact('Title', 'Team'));
    }
}
