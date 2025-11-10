<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Publication, User};

class DashboardController extends Controller
{
    public function index()
    {
        $publications = Publication::count();
        $users = User::count();
        return view('admin.index', compact('publications', 'users'));
    }
}
